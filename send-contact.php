<?php
session_start();
header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

/* ── Verify captcha (single use) ─────────────────────────── */
$submitted_captcha = trim($_POST['captcha'] ?? '');
$expected_captcha   = $_SESSION['captcha_code'] ?? null;
unset($_SESSION['captcha_code']);

if (!$expected_captcha || strcasecmp($submitted_captcha, $expected_captcha) !== 0) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Incorrect captcha code. Please try again.']);
    exit;
}


require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* ── DB connection ───────────────────────────────────────── */
$db_host = '127.0.0.1';
$db_port = '3306';
$db_name = 'tamil_pasanga_admin';
$db_user = 'root';
$db_pass = 'Franklin@123';

try {
    $pdo = new PDO(
        "mysql:host={$db_host};port={$db_port};dbname={$db_name};charset=utf8mb4",
        $db_user,
        $db_pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_TIMEOUT => 3]
    );

    // SMTP settings from general_settings
    $cfg = $pdo->query(
        "SELECT set_key, set_value FROM general_settings
         WHERE set_key IN (
             'smtp_enabled','smtp_host','smtp_port','smtp_encryption',
             'smtp_username','smtp_password','smtp_from_address','smtp_from_name',
             'support_email'
         ) AND status = 1"
    )->fetchAll(PDO::FETCH_KEY_PAIR);

    // Email template from email_templates
    $tpl = $pdo->prepare(
        "SELECT subject, body FROM email_templates
         WHERE name = 'contact_form_inquiry' AND status = 1 LIMIT 1"
    );
    $tpl->execute();
    $template = $tpl->fetch(PDO::FETCH_ASSOC);

} catch (Throwable $e) {
    $cfg      = [];
    $template = false;
}

$smtp_enabled = ($cfg['smtp_enabled']      ?? '0') === '1';
$smtp_host    = $cfg['smtp_host']           ?? '';
$smtp_port    = (int) ($cfg['smtp_port']    ?? 587);
$smtp_enc     = $cfg['smtp_encryption']     ?? 'tls';
$smtp_user    = $cfg['smtp_username']       ?? '';
$smtp_pass    = $cfg['smtp_password']       ?? '';
$from_address = $cfg['smtp_from_address']   ?? '';
$from_name    = $cfg['smtp_from_name']      ?? 'Tamil Pasanga';
$admin_email  = $cfg['support_email']       ?? 'support@tamilpasanga.in';

/* ── Collect & sanitise inputs ───────────────────────────── */
function clean(string $val): string {
    return htmlspecialchars(strip_tags(trim($val)), ENT_QUOTES, 'UTF-8');
}

$name         = clean($_POST['name']         ?? '');
$email        = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$phone        = clean($_POST['phone']        ?? '');
$inquiry_type = clean($_POST['inquiry_type'] ?? '');
$subject      = clean($_POST['subject']      ?? '');
$message      = clean($_POST['message']      ?? '');

/* ── Validate required fields ────────────────────────────── */
$errors = [];
if ($name === '')         $errors[] = 'Name is required.';
if (!$email)              $errors[] = 'A valid email address is required.';
if ($inquiry_type === '') $errors[] = 'Enquiry type is required.';
if ($subject === '')      $errors[] = 'Subject is required.';
if ($message === '')      $errors[] = 'Message is required.';

if ($errors) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

/* ── Resolve inquiry label ───────────────────────────────── */
$inquiry_labels = [
    'general'     => 'General Enquiry',
    'support'     => 'Technical Support',
    'account'     => 'Account Issues',
    'advertising' => 'Advertising / Partnership',
    'business'    => 'Business Proposal',
    'feedback'    => 'App Feedback',
    'legal'       => 'Legal / Privacy',
    'other'       => 'Other',
];
$inquiry_label = $inquiry_labels[$inquiry_type] ?? ucfirst($inquiry_type);
$date          = date('d M Y, H:i') . ' IST';

/* ── Replace ##placeholder## in template ─────────────────── */
$placeholders = [
    '##name##'         => $name,
    '##email##'        => $email,
    '##phone##'        => $phone !== '' ? $phone : '—',
    '##inquiry_type##' => $inquiry_label,
    '##subject##'      => $subject,
    '##message##'      => $message,
    '##date##'         => $date,
];

if ($template) {
    $email_subject = str_replace(array_keys($placeholders), array_values($placeholders), $template['subject']);
    $email_body    = str_replace(array_keys($placeholders), array_values($placeholders), $template['body']);
    $is_html       = true;
} else {
    // Fallback if template not found in DB
    $email_subject = "[Contact Form] [{$inquiry_label}] {$subject}";
    $email_body    = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nType: {$inquiry_label}\nDate: {$date}\n\nSubject: {$subject}\n\nMessage:\n{$message}";
    $is_html       = false;
}

/* ── Send via PHPMailer ──────────────────────────────────── */
$mail = new PHPMailer(true);

try {
    if ($smtp_enabled && $smtp_host !== '') {
        $mail->isSMTP();
        $mail->Host       = $smtp_host;
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtp_user;
        $mail->Password   = $smtp_pass;
        $mail->Port       = $smtp_port;
        $mail->SMTPSecure = $smtp_enc === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
    } else {
        $mail->isMail();
    }

    $mail->CharSet  = 'UTF-8';
    $mail->setFrom($from_address ?: $admin_email, $from_name);
    $mail->addAddress($admin_email);
    $mail->addReplyTo($email, $name);

    $mail->Subject = $email_subject;
    $mail->isHTML($is_html);
    $mail->Body    = $email_body;
    if ($is_html) {
        $mail->AltBody = strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $email_body));
    }

    $mail->send();

    echo json_encode(['success' => true, 'message' => "Your message has been sent! We'll get back to you within 24–48 hours."]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Sorry, the email could not be sent right now. Please email us directly at ' . $admin_email]);
}

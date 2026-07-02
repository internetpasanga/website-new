<?php
session_start();
header('Content-Type: image/png');
header('Cache-Control: no-store, no-cache, must-revalidate');

$chars   = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
$length  = 5;
$code    = '';
for ($i = 0; $i < $length; $i++) {
    $code .= $chars[random_int(0, strlen($chars) - 1)];
}
$_SESSION['captcha_code'] = $code;

$width  = 150;
$height = 50;
$image  = imagecreatetruecolor($width, $height);

$bg = imagecolorallocate($image, 245, 245, 248);
imagefilledrectangle($image, 0, 0, $width, $height, $bg);

// Noise lines
for ($i = 0; $i < 6; $i++) {
    $line_color = imagecolorallocate($image, random_int(180, 220), random_int(180, 220), random_int(180, 220));
    imageline($image, random_int(0, $width), random_int(0, $height), random_int(0, $width), random_int(0, $height), $line_color);
}

// Noise dots
for ($i = 0; $i < 80; $i++) {
    $dot_color = imagecolorallocate($image, random_int(190, 230), random_int(190, 230), random_int(190, 230));
    imagesetpixel($image, random_int(0, $width), random_int(0, $height), $dot_color);
}

// Draw each character with slight rotation/offset
$text_colors = [
    imagecolorallocate($image, 107, 33, 168),
    imagecolorallocate($image, 30, 64, 175),
    imagecolorallocate($image, 190, 24, 93),
    imagecolorallocate($image, 21, 128, 61),
];

$x = 15;
for ($i = 0; $i < $length; $i++) {
    $color = $text_colors[array_rand($text_colors)];
    $y     = random_int(10, 18);
    imagestring($image, 5, $x, $y, $code[$i], $color);
    $x += 24;
}

imagepng($image);

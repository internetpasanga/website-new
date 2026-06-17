<!DOCTYPE html>
<html lang="ta">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
  <?php if (!empty($page_keywords)): ?>
  <meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
  <?php endif; ?>
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?= htmlspecialchars($page_canonical) ?>">
  <!-- hreflang: Tamil default, English via ?lang=en -->
  <link rel="alternate" hreflang="ta" href="<?= htmlspecialchars($page_canonical) ?>">
  <link rel="alternate" hreflang="en" href="<?= htmlspecialchars($page_canonical) ?>?lang=en">
  <link rel="alternate" hreflang="x-default" href="<?= htmlspecialchars($page_canonical) ?>">
  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Tamil Pasanga">
  <meta property="og:title" content="<?= htmlspecialchars($page_og_title ?? $page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_og_description ?? $page_description) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($page_canonical) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($page_og_image ?? 'https://tamilpasanga.in/assets/images/og-image.png') ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:locale" content="ta_IN">
  <meta property="og:locale:alternate" content="en_IN">
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($page_og_title ?? $page_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_og_description ?? $page_description) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($page_og_image ?? 'https://tamilpasanga.in/assets/images/og-image.png') ?>">
  <!-- Global structured data: Organization + WebSite -->
  <script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","name":"Tamil Pasanga","url":"https://tamilpasanga.in","logo":{"@type":"ImageObject","url":"https://tamilpasanga.in/assets/images/logo.png"},"contactPoint":{"@type":"ContactPoint","email":"support@tamilpasanga.in","contactType":"customer support","areaServed":"IN","availableLanguage":["Tamil","English"]}},{"@type":"WebSite","name":"Tamil Pasanga","url":"https://tamilpasanga.in","inLanguage":["ta","en-IN"]}]}</script>
  <?php if (!empty($page_schema)): ?>
  <script type="application/ld+json"><?= $page_schema ?></script>
  <?php endif; ?>
  <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
  <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/style.css">
  <?php if (!empty($page_extra_head)) echo $page_extra_head; ?>
</head>
<body>

<?php
$_policies = ['guidelines','safety','advertising','terms','privacy'];
$_about    = ['about'];
$_is_policies = in_array($active_page, $_policies);
$_is_about    = in_array($active_page, $_about);
function _nav_a($page, $active) { return $page === $active ? ' class="active"' : ''; }
?>
<nav class="navbar" role="navigation" aria-label="Main navigation">
  <div class="container">
    <div class="nav-inner">
      <a href="index.php" class="nav-brand" aria-label="Tamil Pasanga Home">
        <div class="nav-brand-icon">
          <img src="./assets/images/logo.png" width="60">
        </div>
          <img src="./assets/images/header-logo.png" width="150">

        <!-- <span class="lang-en">Tamil<span>Pasanga</span></span><span class="lang-ta">தமிழ்<span>பசங்க</span></span> -->
      </a>
      <ul class="nav-links">
        <li><a href="index.php"<?= _nav_a('home',$active_page) ?>><span class="lang-en">Home</span><span class="lang-ta">முகப்பு</span></a></li>
        <li class="has-dropdown">
          <a href="about.php"<?= $_is_about ? ' class="active"' : '' ?>><span class="lang-en">About ▾</span><span class="lang-ta">பற்றி ▾</span></a>
          <ul class="nav-dropdown">
            <li><a href="about.php"><span class="lang-en">About Us</span><span class="lang-ta">எங்களை பற்றி</span></a></li>
            <li><a href="about.php#vision"><span class="lang-en">Our Vision</span><span class="lang-ta">எங்கள் நோக்கம்</span></a></li>
            <li><a href="about.php#why-us"><span class="lang-en">Why <span class="tp-name">Tamil Pasanga</span></span><span class="lang-ta">ஏன் <span class="tp-name">தமிழ் பசங்க</span></span></a></li>
          </ul>
        </li>
        <li><a href="platform.php"<?= _nav_a('platform',$active_page) ?>><span class="lang-en">Platform</span><span class="lang-ta">தளம்</span></a></li>
        <li class="has-dropdown">
          <a href="guidelines.php"<?= $_is_policies ? ' class="active"' : '' ?>><span class="lang-en">Policies ▾</span><span class="lang-ta">கொள்கைகள் ▾</span></a>
          <ul class="nav-dropdown">
            <li><a href="guidelines.php"<?= _nav_a('guidelines',$active_page) ?>><span class="lang-en">What We Allow</span><span class="lang-ta">அனுமதிக்கப்படுவது</span></a></li>
            <li><a href="safety.php"<?= _nav_a('safety',$active_page) ?>><span class="lang-en">Safety &amp; Security</span><span class="lang-ta">பாதுகாப்பு &amp; காப்பு</span></a></li>
            <li><a href="advertising.php"<?= _nav_a('advertising',$active_page) ?>><span class="lang-en">Advertising Rules</span><span class="lang-ta">விளம்பர விதிகள்</span></a></li>
            <li><a href="terms.php"<?= _nav_a('terms',$active_page) ?>><span class="lang-en">Terms &amp; Conditions</span><span class="lang-ta">விதிமுறைகள்</span></a></li>
            <li><a href="privacy.php"<?= _nav_a('privacy',$active_page) ?>><span class="lang-en">Privacy Policy</span><span class="lang-ta">தனியுரிமைக் கொள்கை</span></a></li>
          </ul>
        </li>
        <li><a href="contact.php"<?= _nav_a('contact',$active_page) ?>><span class="lang-en">Contact</span><span class="lang-ta">தொடர்பு</span></a></li>
      </ul>
      <div class="nav-actions">
        <button class="btn lang-toggle" aria-label="Switch language"><span class="lang-toggle-label">தமிழ்</span></button>
        <a href="https://play.google.com/store/apps/details?id=in.tamilpasanga.app" class="btn btn-primary btn-sm" target="_blank" rel="noopener">
          <i class="bi bi-download"></i> <span class="lang-en">Download App</span><span class="lang-ta">ஆப் பதிவிறக்கம்</span>
        </a>
      </div>
      <button class="hamburger" id="hamburger" aria-label="Toggle menu"><span></span><span></span><span></span></button>
    </div>
  </div>
  <div class="mobile-menu" id="mobileMenu">
    <a href="index.php"><span class="lang-en">Home</span><span class="lang-ta">முகப்பு</span></a>
    <a href="about.php"><span class="lang-en">About Us</span><span class="lang-ta">எங்களை பற்றி</span></a>
    <a href="about.php#vision"><span class="lang-en">Our Vision</span><span class="lang-ta">எங்கள் நோக்கம்</span></a>
    <a href="about.php#why-us"><span class="lang-en">Why <span class="tp-name">Tamil Pasanga</span></span><span class="lang-ta">ஏன் <span class="tp-name">தமிழ் பசங்க</span></span></a>
    <a href="platform.php"><span class="lang-en">Platform</span><span class="lang-ta">தளம்</span></a>
    <a href="guidelines.php"><span class="lang-en">What We Allow / Don't Allow</span><span class="lang-ta">அனுமதி / தடை</span></a>
    <a href="safety.php"><span class="lang-en">Safety &amp; Security</span><span class="lang-ta">பாதுகாப்பு &amp; காப்பு</span></a>
    <a href="advertising.php"><span class="lang-en">Advertising Rules</span><span class="lang-ta">விளம்பர விதிகள்</span></a>
    <a href="terms.php"><span class="lang-en">Terms &amp; Conditions</span><span class="lang-ta">விதிமுறைகள்</span></a>
    <a href="privacy.php"><span class="lang-en">Privacy Policy</span><span class="lang-ta">தனியுரிமைக் கொள்கை</span></a>
    <a href="contact.php"><span class="lang-en">Contact Us</span><span class="lang-ta">தொடர்பு கொள்ளுங்கள்</span></a>
    <button class="lang-toggle" style="margin:0 20px 10px;width:calc(100% - 40px);justify-content:center;"><span class="lang-toggle-label">தமிழ்</span></button>
    <a href="https://play.google.com/store/apps/details?id=in.tamilpasanga.app" target="_blank" rel="noopener" class="btn btn-primary" style="text-align:center;justify-content:center;">
      <i class="bi bi-download"></i> <span class="lang-en">Download Free App</span><span class="lang-ta">இலவச ஆப் பதிவிறக்கம்</span>
    </a>
  </div>
</nav>

<?php
$page_title          = 'About Us — Tamil Pasanga | Tamil Community Awareness App';
$page_description    = 'Learn about Tamil Pasanga — our story, mission, vision, and why we\'re different from other social platforms. A Tamil community awareness app built to spread meaningful content.';
$page_keywords       = 'about Tamil Pasanga, Tamil Pasanga story, Tamil community app mission, Tamil awareness platform, Tamil social app vision';
$page_canonical      = 'https://tamilpasanga.in/about.php';
$page_og_title       = 'About Tamil Pasanga — Our Story, Mission & Vision';
$page_og_description = 'Discover the story behind Tamil Pasanga — a purpose-built awareness platform for the Tamil community. Our mission, values, and what makes us different.';
$page_schema         = json_encode(['@context'=>'https://schema.org','@graph'=>[['@type'=>'BreadcrumbList','itemListElement'=>[['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://tamilpasanga.in/'],['@type'=>'ListItem','position'=>2,'name'=>'About Us','item'=>'https://tamilpasanga.in/about.php']]],['@type'=>'AboutPage','name'=>'About Tamil Pasanga','url'=>'https://tamilpasanga.in/about.php','description'=>'Learn about Tamil Pasanga — our story, mission, vision, and why we\'re different from other social platforms.','inLanguage'=>['ta','en-IN'],'publisher'=>['@type'=>'Organization','name'=>'Tamil Pasanga','url'=>'https://tamilpasanga.in']]]]);
$active_page         = 'about';
include 'includes/head.php';
include 'includes/nav.php';
?>

<header class="page-header" role="banner">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb"><a href="index.php"><span class="lang-en">Home</span><span class="lang-ta">முகப்பு</span></a><span>›</span><span class="current"><span class="lang-en">About Us</span><span class="lang-ta">எங்களைப் பற்றி</span></span></nav>
    <h1><span class="lang-en">About Tamil Pasanga</span><span class="lang-ta">தமிழ் பசங்காவைப் பற்றி</span></h1>
    <p><span class="lang-en">We're building a Tamil community where awareness meets action. Here's our story, vision, and what makes us different.</span><span class="lang-ta">விழிப்புணர்வு செயலாக மாறும் ஒரு தமிழ் சமூகத்தை நாங்கள் உருவாக்குகிறோம். இங்கே எங்கள் கதை, நோக்கம் மற்றும் நாங்கள் வேறுபட்டதன் காரணம்.</span></p>
  </div>
</header>

<!-- Our Story -->
<section class="section" aria-labelledby="story-h">
  <div class="container">
    <div class="grid-2">
      <div>
        <div class="badge" data-aos><span class="lang-en">Our Story</span><span class="lang-ta">எங்கள் பயணம்</span></div>
        <h2 class="section-title" id="story-h" data-aos data-aos-delay="100">
          <span class="lang-en">Why We Built<br><span class="highlight">Tamil Pasanga</span></span>
          <span class="lang-ta">Tamil Pasanga ஏன் உருவாக்கப்பட்டது</span>
        </h2>
        <p style="font-size:16px;color:var(--gray-500);line-height:1.85;margin-bottom:16px;" data-aos data-aos-delay="200">
          <span class="lang-en">Tamil Pasanga was born from a simple observation — the Tamil community needed a dedicated digital space that truly understood its values, language, and the kind of content that actually benefits people.</span>
          <span class="lang-ta">Tamil Pasanga ஒரு எளிய கவனிப்பில் இருந்து உருவானது — தமிழர் சமூகத்திற்கு அதன் மதிப்புகள், மொழி மற்றும் மக்களுக்கு உண்மையில் பயனளிக்கும் உள்ளடக்கங்களை புரிந்துகொள்ளும் ஒரு தனித்துவமான டிஜிட்டல் இடம் தேவைப்பட்டது.</span>
        </p>
        <p style="font-size:16px;color:var(--gray-500);line-height:1.85;margin-bottom:16px;" data-aos data-aos-delay="300">
          <span class="lang-en">We saw people sharing valuable health tips, cultural insights, and farming knowledge on generic platforms that didn't reward their contributions or filter out the noise. Entertainment overshadowed awareness. Algorithms pushed engagement over impact.</span>
          <span class="lang-ta">பலர் ஆரோக்கிய ஆலோசனைகள், பாரம்பரிய அறிவு, விவசாய தகவல்கள் போன்ற பயனுள்ள விஷயங்களை பொதுவான சமூக ஊடக தளங்களில் பகிர்ந்து வந்தனர். ஆனால் அந்த பங்களிப்புகளுக்கு உரிய மதிப்பு கிடைக்கவில்லை. அதே நேரத்தில், தேவையற்ற பொழுதுபோக்கு உள்ளடக்கங்கள் முக்கியமான தகவல்களை மறைத்துவிட்டன. அல்காரிதங்கள் தாக்கத்தை விட ஈடுபாட்டையே முன்னிறுத்தின.</span>
        </p>
        <p style="font-size:16px;color:var(--gray-500);line-height:1.85;margin-bottom:28px;" data-aos data-aos-delay="300">
          <span class="lang-en">So we built something different — a platform where meaningful content is the only goal, where every contribution earns value, and where the Tamil community can truly connect around what matters.</span>
          <span class="lang-ta">அதனால்தான் நாங்கள் வேறுபட்ட ஒன்றை உருவாக்கினோம் — அர்த்தமுள்ள உள்ளடக்கமே ஒரே நோக்கமாக இருக்கும் ஒரு தளம். ஒவ்வொரு பங்களிப்புக்கும் மதிப்பு கிடைக்கும் இடம். தமிழர் சமூகம் உண்மையில் முக்கியமான விஷயங்களை மையமாகக் கொண்டு ஒன்றிணையக்கூடிய ஒரு புதிய டிஜிட்டல் இடம்.</span>
        </p>
        <div style="display:flex;gap:14px;flex-wrap:wrap;" data-aos data-aos-delay="400">
          <a href="platform.php" class="btn btn-primary"><span class="lang-en">See Our Platform</span><span class="lang-ta">எங்கள் தளத்தை பாருங்கள்</span></a>
          <a href="contact.php" class="btn btn-secondary"><span class="lang-en">Get in Touch</span><span class="lang-ta">தொடர்பு கொள்ளுங்கள்</span></a>
        </div>
      </div>
      <div class="about-visual" data-aos="fade-left">
        <div class="about-visual-emoji"><i class="bi bi-leaf"></i></div>
      </div>
    </div>
  </div>
</section>

<!-- Mission & Values -->
<section class="section bg-gray" aria-labelledby="mission-h">
  <div class="container">
    <div class="text-center">
      <div class="badge" data-aos><span class="lang-en">Mission &amp; Values</span><span class="lang-ta">எங்கள் நோக்கம் மற்றும் மதிப்புகள்</span></div>
      <h2 class="section-title" id="mission-h" data-aos data-aos-delay="100"><span class="lang-en">What We Stand For</span><span class="lang-ta">நாங்கள் நம்புவது என்ன</span></h2>
      <p class="section-sub" data-aos data-aos-delay="200"><span class="lang-en">Our values guide everything we build, every decision we make, and every feature we ship.</span><span class="lang-ta">நாங்கள் உருவாக்கும் ஒவ்வொரு அம்சமும், எடுக்கும் ஒவ்வொரு முடிவும், வெளியிடும் ஒவ்வொரு வசதியும் ஒரு தெளிவான மதிப்புகளால் வழிநடத்தப்படுகிறது.</span></p>
    </div>
    <div class="grid-3">
      <article class="card" data-aos data-aos-delay="100">
        <div class="card-icon" style="background:#f5f3ff;"><i class="bi bi-bullseye"></i></div>
        <h3><span class="lang-en">Purpose-Driven</span><span class="lang-ta">நோக்கத்துடன் உருவாக்கப்பட்டது</span></h3>
        <p><span class="lang-en">Every feature we build serves a real purpose. We focus on awareness and community value — not entertainment noise or viral outrage.</span><span class="lang-ta">நாங்கள் உருவாக்கும் ஒவ்வொரு அம்சமும் ஒரு உண்மையான நோக்கத்திற்காகவே. பொழுதுபோக்கு சத்தம் அல்லது வைரல் கலாச்சாரம் அல்ல — விழிப்புணர்வு மற்றும் சமூக மதிப்பை முன்னிலைப்படுத்துகிறோம்.</span></p>
      </article>
      <article class="card" data-aos data-aos-delay="200">
        <div class="card-icon" style="background:#fffbeb;"><i class="bi bi-handshake"></i></div>
        <h3><span class="lang-en">Community First</span><span class="lang-ta">சமூகமே முதன்மை</span></h3>
        <p><span class="lang-en">Tamil Pasanga belongs to its community. Every decision we make is guided by what benefits our users and the Tamil community as a whole.</span><span class="lang-ta">Tamil Pasanga அதன் சமூகத்திற்கே சொந்தமானது. எடுக்கும் ஒவ்வொரு முடிவும் பயனர்களுக்கும் தமிழர் சமூகத்திற்கும் எது நன்மை தரும் என்பதையே அடிப்படையாகக் கொண்டது.</span></p>
      </article>
      <article class="card" data-aos data-aos-delay="300">
        <div class="card-icon" style="background:#ecfdf5;"><i class="bi bi-lock-fill"></i></div>
        <h3><span class="lang-en">Trust &amp; Transparency</span><span class="lang-ta">நம்பிக்கை மற்றும் வெளிப்படைத்தன்மை</span></h3>
        <p><span class="lang-en">We are transparent about how the platform works, how your data is protected, and how you earn. No hidden fees. No surprises.</span><span class="lang-ta">தளம் எவ்வாறு செயல்படுகிறது, உங்கள் தரவு எவ்வாறு பாதுகாக்கப்படுகிறது, நீங்கள் எவ்வாறு வருமானம் பெறுகிறீர்கள் என்பதனை நாங்கள் தெளிவாக விளக்குகிறோம். மறைமுக கட்டணங்கள் இல்லை. எதிர்பாராத மாற்றங்கள் இல்லை.</span></p>
      </article>
      <article class="card" data-aos data-aos-delay="100">
        <div class="card-icon" style="background:#eff6ff;"><i class="bi bi-lightbulb"></i></div>
        <h3><span class="lang-en">Awareness Over Noise</span><span class="lang-ta">சத்தத்தை விட விழிப்புணர்வு</span></h3>
        <p><span class="lang-en">We promote content that educates, informs, and uplifts — social issues, health, environment, education, and farming awareness.</span><span class="lang-ta">கல்வி அளிக்கும், தகவல் தரும், சமூகத்தை உயர்த்தும் உள்ளடக்கங்களுக்கு முன்னுரிமை அளிக்கிறோம் — சமூகப் பிரச்சினைகள், ஆரோக்கியம், சுற்றுச்சூழல், கல்வி மற்றும் விவசாய விழிப்புணர்வு.</span></p>
      </article>
      <article class="card" data-aos data-aos-delay="200">
        <div class="card-icon" style="background:#fff1f2;"><i class="bi bi-heart-fill"></i></div>
        <h3><span class="lang-en">Cultural Pride</span><span class="lang-ta">தமிழர் பண்பாட்டு பெருமை</span></h3>
        <p><span class="lang-en">We celebrate Tamil culture, language, food, and traditions. Tamil Pasanga honours who we are and where we come from.</span><span class="lang-ta">தமிழ் கலாச்சாரம், மொழி, உணவு மற்றும் பாரம்பரியங்களை நாங்கள் கொண்டாடுகிறோம். Tamil Pasanga நாம் யார் என்பதையும், எங்கிருந்து வந்தோம் என்பதையும் மதிக்கிறது.</span></p>
      </article>
      <article class="card" data-aos data-aos-delay="300">
        <div class="card-icon" style="background:#f0fdf4;"><i class="bi bi-graph-up-arrow"></i></div>
        <h3><span class="lang-en">Growth for All</span><span class="lang-ta">அனைவருக்கும் வளர்ச்சி</span></h3>
        <p><span class="lang-en">When content creators succeed, the platform grows. When the platform grows, users earn more. Our model is designed for shared growth.</span><span class="lang-ta">உள்ளடக்க உருவாக்குநர்கள் வளரும்போது தளமும் வளர்கிறது. தளம் வளரும்போது பயனர்களின் வருமானமும் அதிகரிக்கிறது. எங்கள் அமைப்பு பகிர்ந்த வளர்ச்சிக்காக வடிவமைக்கப்பட்டுள்ளது.</span></p>
      </article>
    </div>
  </div>
</section>

<!-- Vision -->
<section class="bg-purple section-lg" id="vision" aria-labelledby="vision-h">
  <div class="container text-center">
    <div class="badge badge-white" data-aos><span class="lang-en">Our Vision</span><span class="lang-ta">எங்கள் நோக்கம்</span></div>
    <h2 class="vision-quote" id="vision-h" data-aos data-aos-delay="100">
      <span class="lang-en">"A Tamil community where every voice is heard, every action is rewarded, and every connection drives real awareness."</span>
      <span class="lang-ta">"ஒவ்வொரு குரலும் கேட்கப்படும், ஒவ்வொரு செயலும் மதிக்கப்படும், ஒவ்வொரு இணைப்பும் விழிப்புணர்வை உருவாக்கும் ஒரு தமிழர் சமூகம்."</span>
    </h2>
    <p class="section-sub section-sub-white" data-aos data-aos-delay="200">
      <span class="lang-en">We envision a future where the Tamil community is empowered through technology — informed, connected, and financially rewarded for their time and meaningful contributions.</span>
      <span class="lang-ta">தமிழர் சமூகத்தை தொழில்நுட்பத்தின் மூலம் அதிகாரமளித்து உயர்த்தும் ஒரு எதிர்காலத்தை நாங்கள் கனவு காண்கிறோம் — அறிவுடன், இணைப்புடன், மற்றும் அவர்களின் நேரம் மற்றும் பங்களிப்புக்கு நியாயமான பொருளாதார மதிப்புடன் இருக்கும் ஒரு சமூகமாக.</span>
    </p>
    <div class="vision-cards">
      <div class="vision-card" data-aos data-aos-delay="100">
        <div class="vision-card-icon"><i class="bi bi-megaphone"></i></div>
        <h3><span class="lang-en">Spread Awareness</span><span class="lang-ta">விழிப்புணர்வை பரப்புங்கள்</span></h3>
        <p><span class="lang-en">Creating a platform dedicated to meaningful knowledge-sharing about health, social issues, culture, farming, and the environment — through community-driven content.</span><span class="lang-ta">ஆரோக்கியம், சமூகப் பிரச்சினைகள், கலாச்சாரம், விவசாயம் மற்றும் சுற்றுச்சூழல் போன்ற முக்கிய தலைப்புகளில் சமூகத்தின் பங்களிப்புடன் உருவாகும் அர்த்தமுள்ள அறிவுப் பகிர்வு தளத்தை உருவாக்குகிறோம்.</span></p>
      </div>
      <div class="vision-card" data-aos data-aos-delay="200">
        <div class="vision-card-icon"><i class="bi bi-globe2"></i></div>
        <h3><span class="lang-en">Build Connection</span><span class="lang-ta">இணைப்புகளை உருவாக்குங்கள்</span></h3>
        <p><span class="lang-en">Fostering authentic connections between people, local healthy businesses, and communities across Tamil Nadu — without follower or subscriber pressure.</span><span class="lang-ta">பின்தொடர்பவர் அல்லது subscriber அழுத்தம் இல்லாமல், தமிழ்நாடு முழுவதும் உள்ள மக்களையும், உள்ளூர் ஆரோக்கியமான வணிகங்களையும், சமூகங்களையும் உண்மையான முறையில் இணைக்கும் ஒரு தளத்தை உருவாக்குகிறோம்.</span></p>
      </div>
      <div class="vision-card" data-aos data-aos-delay="300">
        <div class="vision-card-icon"><i class="bi bi-graph-up-arrow"></i></div>
        <h3><span class="lang-en">Enable Empowerment</span><span class="lang-ta">வலுவூட்டலை செயல்படுத்துங்கள்</span></h3>
        <p><span class="lang-en">Giving every user the ability to earn real money from watching ads and creating valuable content — turning engagement into real economic value.</span><span class="lang-ta">ஒவ்வொரு பயனரும் விளம்பரங்களைப் பார்த்தும், மதிப்புமிக்க உள்ளடக்கங்களை உருவாக்கியும் உண்மையான வருமானம் ஈட்டும் வாய்ப்பைப் பெறுகிறார்கள். ஈடுபாட்டை நேரடி பொருளாதார மதிப்பாக மாற்றும் ஒரு அமைப்பு இது.</span></p>
      </div>
    </div>
    <div style="margin-top:36px;" data-aos data-aos-delay="400">
      <a href="https://play.google.com/store/apps/details?id=in.tamilpasanga.app" class="btn btn-white btn-lg" target="_blank" rel="noopener"><span class="lang-en">Join the Movement</span><span class="lang-ta">இயக்கத்தில் இணையுங்கள்</span></a>
    </div>
  </div>
</section>

<!-- Why Tamil Pasanga -->
<section class="section" id="why-us" aria-labelledby="why-h">
  <div class="container">
    <div class="text-center">
      <div class="badge" data-aos><span class="lang-en">Why Tamil Pasanga</span><span class="lang-ta">ஏன் தமிழ் பசங்க</span></div>
      <h2 class="section-title" id="why-h" data-aos data-aos-delay="100"><span class="lang-en">Not just another social app</span><span class="lang-ta">சாதாரண சமூக ஊடகம் அல்ல</span></h2>
      <p class="section-sub" data-aos data-aos-delay="200"><span class="lang-en">We've deliberately built features that existing platforms don't offer — designed specifically for what the Tamil community actually needs.</span><span class="lang-ta">நாங்கள் குறிப்பாக வடிவமைத்துள்ள அம்சங்கள், தற்போதைய தளங்களில் இல்லாத தேவைகளை பூர்த்தி செய்ய உருவாக்கப்பட்டவை — தமிழர் சமூகத்திற்கு உண்மையில் தேவைப்படும் விஷயங்களை மையமாகக் கொண்டு.</span></p>
    </div>
    <div style="max-width:860px;margin:0 auto;">
      <div class="grid-2-eq" data-aos>
        <div style="background:var(--gray-50);border-radius:var(--radius-lg);padding:28px;border:1px solid var(--gray-200);">
          <div style="font-size:28px;margin-bottom:12px;"><i class="bi bi-megaphone"></i></div>
          <h3 style="font-size:16px;font-weight:700;margin-bottom:8px;color:var(--gray-900);"><span class="lang-en">Awareness-Only Content</span><span class="lang-ta">விழிப்புணர்வுக்கே முழுமையான முன்னுரிமை</span></h3>
          <p style="font-size:14px;color:var(--gray-500);line-height:1.75;"><span class="lang-en">Unlike other platforms, Tamil Pasanga only allows awareness content — social issues, health, farming, education, and environment. No entertainment clutter.</span><span class="lang-ta">மற்ற தளங்களைப் போல அல்லாமல், Tamil Pasanga-வில் விழிப்புணர்வு உள்ளடக்கங்களுக்கு மட்டுமே அனுமதி வழங்கப்படுகிறது — சமூகப் பிரச்சினைகள், ஆரோக்கியம், விவசாயம், கல்வி மற்றும் சுற்றுச்சூழல் போன்ற தலைப்புகள் மட்டுமே. தேவையற்ற பொழுதுபோக்கு குழப்பம் இங்கு இல்லை.</span></p>
        </div>
        <div style="background:var(--gray-50);border-radius:var(--radius-lg);padding:28px;border:1px solid var(--gray-200);">
          <div style="font-size:28px;margin-bottom:12px;"><i class="bi bi-cash-stack"></i></div>
          <h3 style="font-size:16px;font-weight:700;margin-bottom:8px;color:var(--gray-900);"><span class="lang-en">You Earn From Your Attention</span><span class="lang-ta">உங்கள் கவனத்திற்கே உண்மையான வருமானம்</span></h3>
          <p style="font-size:14px;color:var(--gray-500);line-height:1.75;"><span class="lang-en">Other apps profit entirely from your time. On Tamil Pasanga, watching ads earns you real money directly to your e-wallet. No algorithm tax.</span><span class="lang-ta">மற்ற செயலிகள் உங்கள் நேரத்திலேயே லாபம் ஈட்டுகின்றன. Tamil Pasanga-வில், விளம்பரங்களைப் பார்ப்பதன் மூலம் நீங்கள் நேரடியாக உங்கள் e-Wallet-க்கு வருமானம் பெறுகிறீர்கள். மறைமுக algorithm, tax எதுவும் இல்லை.</span></p>
        </div>
        <div style="background:var(--gray-50);border-radius:var(--radius-lg);padding:28px;border:1px solid var(--gray-200);">
          <div style="font-size:28px;margin-bottom:12px;"><i class="bi bi-slash-circle"></i></div>
          <h3 style="font-size:16px;font-weight:700;margin-bottom:8px;color:var(--gray-900);"><span class="lang-en">No Feed Ads or Algorithms</span><span class="lang-ta">அல்காரிதம் இல்லாத, விளம்பர குழப்பமில்லாத அனுபவம்</span></h3>
          <p style="font-size:14px;color:var(--gray-500);line-height:1.75;"><span class="lang-en">Ads never appear in your post feed. No follower counts, no algorithms deciding what you see. You choose your content by category — full control.</span><span class="lang-ta">விளம்பரங்கள் உங்கள் feed-ல் தோன்றாது. Follower எண்ணிக்கை அழுத்தம் இல்லை. நீங்கள் என்ன பார்க்க வேண்டும் என்பதை அல்காரிதம் தீர்மானிக்காது. தலைப்புகளின் அடிப்படையில் நீங்கள் தேர்வு செய்கிறீர்கள் — முழு கட்டுப்பாடு உங்களிடம்.</span></p>
        </div>
        <div style="background:var(--gray-50);border-radius:var(--radius-lg);padding:28px;border:1px solid var(--gray-200);">
          <div style="font-size:28px;margin-bottom:12px;"><i class="bi bi-leaf"></i></div>
          <h3 style="font-size:16px;font-weight:700;margin-bottom:8px;color:var(--gray-900);"><span class="lang-en">Tamil-Specific Features</span><span class="lang-ta">தமிழுக்கே உரிய சிறப்பம்சங்கள்</span></h3>
          <p style="font-size:14px;color:var(--gray-500);line-height:1.75;"><span class="lang-en">Health categories, food ingredients, and community tags are all tailored for Tamil culture, language, and lifestyle — in both Tamil and English.</span><span class="lang-ta">ஆரோக்கிய பிரிவுகள், உணவுப் பொருள் தகவல்கள், மற்றும் சமூக tag அமைப்புகள் அனைத்தும் தமிழர் கலாச்சாரம், மொழி மற்றும் வாழ்க்கை முறைக்கு ஏற்ப வடிவமைக்கப்பட்டுள்ளன — தமிழ் மற்றும் ஆங்கிலத்தில்.</span></p>
        </div>
        <div style="background:var(--gray-50);border-radius:var(--radius-lg);padding:28px;border:1px solid var(--gray-200);">
          <div style="font-size:28px;margin-bottom:12px;"><i class="bi bi-shop"></i></div>
          <h3 style="font-size:16px;font-weight:700;margin-bottom:8px;color:var(--gray-900);"><span class="lang-en">Healthy Local Business Discovery</span><span class="lang-ta">ஆரோக்கியமான உள்ளூர் வணிகங்களை கண்டறிதல்</span></h3>
          <p style="font-size:14px;color:var(--gray-500);line-height:1.75;"><span class="lang-en">A curated directory of natural food shops, healthy hotels, and community businesses — built by the community, for the community.</span><span class="lang-ta">இயற்கை உணவு கடைகள், ஆரோக்கியமான ஹோட்டல்கள் மற்றும் சமூக வணிகங்களை கொண்ட ஒரு தேர்ந்தெடுக்கப்பட்ட directory — சமூகத்தால் உருவாக்கப்பட்டு, சமூகத்துக்காகவே வடிவமைக்கப்பட்டது.</span></p>
        </div>
        <div style="background:var(--gray-50);border-radius:var(--radius-lg);padding:28px;border:1px solid var(--gray-200);">
          <div style="font-size:28px;margin-bottom:12px;"><i class="bi bi-shield-check"></i></div>
          <h3 style="font-size:16px;font-weight:700;margin-bottom:8px;color:var(--gray-900);"><span class="lang-en">Accountability &amp; Safety</span><span class="lang-ta">பொறுப்புணர்வு மற்றும் பாதுகாப்பு</span></h3>
          <p style="font-size:14px;color:var(--gray-500);line-height:1.75;"><span class="lang-en">Supercoin-based accountability, active admin monitoring, and a community reporting system keep the platform clean and trustworthy for everyone.</span><span class="lang-ta">Supercoin அடிப்படையிலான பொறுப்புணர்வு அமைப்பு, செயலில் இருக்கும் நிர்வாக கண்காணிப்பு மற்றும் சமூக புகாரளிப்பு முறை ஆகியவை தளத்தை அனைவருக்கும் பாதுகாப்பானதும் நம்பகமானதுமான இடமாக மாற்றுகின்றன.</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-label="Download CTA">
  <div class="container">
    <div class="badge badge-white" data-aos><span class="lang-en">Join Us</span><span class="lang-ta">எங்களுடன் இணையுங்கள்</span></div>
    <h2 class="section-title section-title-white" data-aos data-aos-delay="100"><span class="lang-en">Be part of the movement</span><span class="lang-ta">இந்த இயக்கத்தின் ஒரு பகுதியாகுங்கள்</span></h2>
    <p class="section-sub section-sub-white" data-aos data-aos-delay="200" style="margin-bottom:0;"><span class="lang-en">Download Tamil Pasanga and join the Tamil community who are sharing awareness, connecting locally, and earning real money.</span><span class="lang-ta">Tamil Pasanga-வை இன்றே பதிவிறக்கி, விழிப்புணர்வை பகிரும், உள்ளூராக இணையும், மற்றும் உண்மையான வருமானம் ஈட்டும் தமிழர் சமூகத்தில் சேருங்கள்.</span></p>
    <div class="store-btns" data-aos data-aos-delay="300">
      <a href="https://play.google.com/store/apps/details?id=in.tamilpasanga.app" class="store-btn" target="_blank" rel="noopener"><span class="store-btn-icon"><i class="bi bi-google-play"></i></span><div><span class="store-btn-sub"><span class="lang-en">Get it on</span><span class="lang-ta">பெறுங்கள்</span></span><span class="store-btn-name">Google Play</span></div></a>
      <a href="https://apps.apple.com/app/id000000000" class="store-btn" target="_blank" rel="noopener"><span class="store-btn-icon"><i class="bi bi-apple"></i></span><div><span class="store-btn-sub"><span class="lang-en">Download on the</span><span class="lang-ta">பதிவிறக்கம்</span></span><span class="store-btn-name">App Store</span></div></a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
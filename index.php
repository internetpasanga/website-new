<?php
$page_title       = 'Tamil Pasanga — Share Awareness. Live Naturally.';
$page_description = 'Tamil Pasanga is a Tamil community awareness app — share meaningful content about health, social issues, environment and farming, and discover natural, traditional, healthy food.';
$page_keywords    = 'Tamil Pasanga, Tamil community app, share Tamil content, Tamil awareness app, natural farming, traditional food, healthy food shops, Tamil social platform';
$page_canonical   = 'https://tamilpasanga.in/';
$page_og_title    = 'Tamil Pasanga — Share Awareness. Live Naturally.';
$page_og_description = 'Tamil Pasanga is a community platform where awareness meets action.';
$page_schema      = '{"@context":"https://schema.org","@type":"MobileApplication","name":"Tamil Pasanga","operatingSystem":"ANDROID, IOS","applicationCategory":"SocialNetworkingApplication","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"}}';
$page_extra_head  = '<style>
    .hero-banner-wrap { position:relative; overflow:hidden; display:grid; }
    .banner-slide { grid-area:1/1; opacity:0; transition:opacity .8s ease; pointer-events:none; visibility:hidden; }
    .banner-slide.active { opacity:1; pointer-events:all; visibility:visible; }
    .banner-dots { position:absolute; bottom:28px; left:50%; transform:translateX(-50%); display:flex; gap:8px; z-index:10; }
    .banner-dot { width:8px; height:8px; border-radius:999px; background:rgba(255,255,255,.35); cursor:pointer; transition:all .3s; border:none; }
    .banner-dot.active { background:#fff; width:24px; }
    .banner-nav { position:absolute; top:50%; transform:translateY(-50%); z-index:10; background:rgba(255,255,255,.1); border:1.5px solid rgba(255,255,255,.25); color:#fff; width:44px; height:44px; border-radius:999px; font-size:18px; display:flex; align-items:center; justify-content:center; cursor:pointer; transition:all .2s; }
    .banner-nav:hover { background:rgba(255,255,255,.2); }
    .banner-prev { left:24px; } .banner-next { right:24px; }
    .slide-1 { background:linear-gradient(135deg,#2e1065 0%,#4c1d95 30%,#6b21a8 65%,#7c3aed 100%); }
    .slide-2 { background:linear-gradient(135deg,#14532d 0%,#15803d 40%,#16a34a 100%); }
    .slide-3 { background:linear-gradient(135deg,#0c4a6e 0%,#0369a1 40%,#0284c7 100%); }
    .about-teaser { display:grid; grid-template-columns:0fr 1fr; gap:64px; align-items:center; }
    @media(max-width:768px){ .about-teaser { grid-template-columns:1fr; } .about-teaser-visual { display:none; } }
    .about-teaser-visual { border-radius:28px; background:linear-gradient(145deg,#f5f3ff,#ede9fe,#c4b5fd); aspect-ratio:1/1; display:flex; align-items:center; justify-content:center; font-size:96px; position:relative; overflow:hidden; }
    .about-teaser-visual::before { content:\'\'; position:absolute; width:200px; height:200px; border-radius:999px; background:rgba(107,33,168,.12); top:-40px; right:-40px; }
  </style>';
$active_page      = 'home';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Hero Banner Slider -->
<div class="hero-banner-wrap" role="banner">

  <!-- Slide 1 -->
  <section class="hero banner-slide slide-1 active" aria-label="Hero banner 1">
    <div class="hero-bg-pattern"></div>
    <div class="hero-dots"></div>
    <div class="container">
      <div class="hero-inner">
        <div>
          <div class="hero-eyebrow">
            <span class="dot"></span>
            <span class="lang-en">Social Awareness Platform</span>
            <span class="lang-ta">சமூக விழிப்புணர்வு தளம்</span>
          </div>
          <h1>
            <span class="lang-en"><em>Share</em> Awareness</span>
            <span class="lang-ta"><em>விழிப்புணர்வை</em> பகிருங்கள்</span>
          </h1>
          <p class="hero-desc">
            <span class="lang-en"><span class="tp-name">Tamil Pasanga</span> was created with one mission — to spread meaningful awareness across the Tamil community. We share valuable content on social issues, healthy living, environmental safety, education, and farming to inspire knowledge, growth, and positive change.</span>
            <span class="lang-ta"><span class="tp-name">தமிழ் பசங்க</span> ஒரு ஒரே நோக்கத்துடன் உருவாக்கப்பட்டது — தமிழர் சமூகத்தில் அர்த்தமுள்ள விழிப்புணர்வை பரப்புவது. சமூகப் பிரச்சினைகள், ஆரோக்கியமான வாழ்க்கை முறை, சுற்றுச்சூழல் பாதுகாப்பு, கல்வி மற்றும் விவசாயம் போன்ற தலைப்புகளில் மதிப்புமிக்க உள்ளடக்கங்களை பகிர்ந்து, அறிவு, முன்னேற்றம் மற்றும் நேர்மறை மாற்றத்தை ஊக்குவிக்கிறோம்.</span>
          </p>
          <div class="hero-actions">
            <a href="https://play.google.com/store/apps/details?id=in.tamilpasanga.app" class="btn btn-white btn-lg" target="_blank" rel="noopener"><i class="bi bi-google-play"></i> Google Play</a>
            <a href="#" class="btn btn-outline-white btn-lg" target="_blank" rel="noopener"><i class="bi bi-apple"></i> App Store</a>
          </div>
          <!-- <div class="hero-stats">
            <div>
              <div class="hero-stat-num">5</div>
              <div class="hero-stat-lbl"><span class="lang-en">Awareness Topics</span><span class="lang-ta">விழிப்புணர்வு தலைப்புகள்</span></div>
            </div>
            <div>
              <div class="hero-stat-num">18+</div>
              <div class="hero-stat-lbl"><span class="lang-en">Responsible Community</span><span class="lang-ta">பொறுப்பான சமூகம்</span></div>
            </div>
            <div>
              <div class="hero-stat-num">Free</div>
              <div class="hero-stat-lbl"><span class="lang-en">Always Free to Join</span><span class="lang-ta">எப்போதும் இலவசம்</span></div>
            </div>
          </div> -->
        </div>
        <div class="phone-wrap" aria-hidden="true">
          <div class="float-chip float-chip-1"><i class="bi bi-megaphone"></i> 2.4K supported this post!</div>
          <div class="phone">
            <div class="phone-status"><span class="phone-time">9:41</span>
              <div class="phone-icons"><span></span><span></span><span></span></div>
            </div>
            <div class="phone-pill"></div>
            <div class="p-card">
              <div class="p-card-row">
                <div class="p-avatar" style="background:rgba(16,185,129,.4);"></div>
                <div style="flex:1">
                  <div class="p-line" style="width:60%"></div>
                  <div class="p-line" style="width:35%"></div>
                </div>
              </div>
              <div style="display:flex;gap:6px;flex-wrap:wrap;margin:10px 0;">
                <span style="font-size:10px;background:rgba(16,185,129,.2);color:#34d399;padding:3px 8px;border-radius:99px;font-weight:600;"><i class="bi bi-leaf"></i> Tending</span>
                <span style="font-size:10px;background:rgba(245,158,11,.2);color:#fbbf24;padding:3px 8px;border-radius:99px;font-weight:600;"><i class="bi bi-flower2"></i> Most Supported</span>
                <span style="font-size:10px;background:rgba(99,102,241,.2);color:#a78bfa;padding:3px 8px;border-radius:99px;font-weight:600;"><i class="bi bi-book-fill"></i> New</span>
              </div>
              <div class="p-line" style="width:90%"></div>
              <div class="p-line" style="width:70%"></div>
              <div class="p-actions" style="margin-top:10px;">
                <div class="p-btn"></div>
                <div class="p-btn"></div>
                <div class="p-btn"></div>
              </div>
            </div>
            <div class="p-earn-badge">
              <div class="p-earn-icon"><i class="bi bi-coin"></i></div>
              <div>
                <div class="p-earn-text"><span class="lang-en">Post reached 500 likes!</span><span class="lang-ta">பதிவு 500 லைக்கு பெற்றது!</span></div>
                <div class="p-earn-amount"><span class="lang-en">Supercoins Refunded <i class="bi bi-check-lg"></i></span><span class="lang-ta">சூப்பர்காயின்கள் திரும்பப் பெறப்பட்டது <i class="bi bi-check-lg"></i></span></div>
              </div>
            </div>
          </div>
          <div class="float-chip float-chip-2"><i class="bi bi-globe2"></i> Environment post trending</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Slide 2 -->
  <section class="hero banner-slide slide-2" aria-label="Hero banner 2">
    <div class="hero-bg-pattern"></div>
    <div class="container">
      <div class="hero-inner">
        <div>
          <div class="hero-eyebrow" style="background:rgba(255,255,255,.1);border-color:rgba(255,255,255,.2);color:#bbf7d0;">
            <span class="dot" style="background:#34d399;"></span>
            <span class="lang-en">Healthy Eating</span>
            <span class="lang-ta">ஆரோக்கிய உணவு</span>
          </div>
          <h1 style="color:#fff;">
            <span class="lang-en">Eat <em style="color:#fbbf24;">Natural &amp;<br> Traditional</em> Food.</span>
            <span class="lang-ta"><em style="color:#fbbf24;">இயற்கை மற்றும் பாரம்பரிய </em> உணவை உண்ணுங்கள்.</span>
          </h1>
          <p class="hero-desc">
            <span class="lang-en">Looking for shops, farms, or local places that support healthy food, organic products, and natural farming? Explore and share useful locations with <span class="tp-name">Tamil Pasanga</span> to help others discover healthier choices and sustainable farming practices within the Tamil community.</span>
            <span class="lang-ta">ஆரோக்கியமான உணவு, இயற்கை விவசாயம் மற்றும் இயற்கை தயாரிப்புகளை ஆதரிக்கும் கடைகள், பண்ணைகள் அல்லது உள்ளூர் இடங்களைத் தேடுகிறீர்களா? <span class="tp-name">தமிழ் பசங்க</span>வில் அவற்றை கண்டறிந்து, பகிர்ந்து கொள்ளுங்கள். இதன் மூலம் தமிழர் சமூகத்தில் ஆரோக்கியமான தேர்வுகளும் நிலையான விவசாய நடைமுறைகளும் வளர உதவுங்கள்.</span>
          </p>
          <div class="hero-actions">
            <a href="https://play.google.com/store/apps/details?id=in.tamilpasanga.app" class="btn btn-white btn-lg" target="_blank" rel="noopener"><i class="bi bi-google-play"></i> <span class="lang-en">Get the App</span><span class="lang-ta">ஆப்பை பெறுங்கள்</span></a>
            <a href="platform.php" class="btn btn-outline-white btn-lg"><span class="lang-en">How It Works</span><span class="lang-ta">எப்படி செயல்படுகிறது</span></a>
          </div>
          <!-- <div class="hero-stats">
            <div>
              <div class="hero-stat-num"><i class="bi bi-coin"></i></div>
              <div class="hero-stat-lbl"><span class="lang-en">Use Supercoins to Post</span><span class="lang-ta">பதிவிட சூப்பர்காயின் பயன்படுத்துங்கள்</span></div>
            </div>
            <div>
              <div class="hero-stat-num"><i class="bi bi-arrow-repeat"></i></div>
              <div class="hero-stat-lbl"><span class="lang-en">Get Refunded on Likes</span><span class="lang-ta">லைக்குகளில் திரும்பப் பெறுங்கள்</span></div>
            </div>
            <div>
              <div class="hero-stat-num">∞</div>
              <div class="hero-stat-lbl"><span class="lang-en">Unlimited Awareness Posts</span><span class="lang-ta">வரம்பற்ற விழிப்புணர்வு பதிவுகள்</span></div>
            </div>
          </div> -->
        </div>
        <div class="phone-wrap" aria-hidden="true">
          <div class="float-chip float-chip-1" style="background:#fff;"><i class="bi bi-pin-map-fill"></i> 120+ shops nearby</div>
          <div class="phone">
            <div class="phone-status"><span class="phone-time">9:41</span>
              <div class="phone-icons"><span></span><span></span><span></span></div>
            </div>
            <div class="phone-pill"></div>
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;">
              <span style="font-size:13px;font-weight:700;color:#fff;">Nearby Shops</span>
              <span style="font-size:11px;color:rgba(255,255,255,.5);"><i class="bi bi-geo-alt-fill"></i> 2.5 km</span>
            </div>
            <div class="p-card" style="display:flex;align-items:center;gap:10px;">
              <div class="p-avatar" style="background:rgba(16,185,129,.4);display:flex;align-items:center;justify-content:center;font-size:14px;color:#fff;"><i class="bi bi-flower2"></i></div>
              <div style="flex:1;min-width:0;">
                <div class="p-line" style="width:70%"></div>
                <div style="display:flex;align-items:center;gap:6px;margin-top:4px;">
                  <span style="font-size:10px;background:rgba(16,185,129,.2);color:#34d399;padding:2px 7px;border-radius:99px;font-weight:600;">Organic</span>
                  <span style="font-size:10px;color:#fbbf24;font-weight:700;"><i class="bi bi-star-fill"></i> 4.8</span>
                </div>
              </div>
            </div>
            <div class="p-card" style="display:flex;align-items:center;gap:10px;">
              <div class="p-avatar" style="background:rgba(245,158,11,.4);display:flex;align-items:center;justify-content:center;font-size:14px;color:#fff;"><i class="bi bi-shop"></i></div>
              <div style="flex:1;min-width:0;">
                <div class="p-line" style="width:60%"></div>
                <div style="display:flex;align-items:center;gap:6px;margin-top:4px;">
                  <span style="font-size:10px;background:rgba(245,158,11,.2);color:#fbbf24;padding:2px 7px;border-radius:99px;font-weight:600;">Farm Store</span>
                  <span style="font-size:10px;color:#fbbf24;font-weight:700;"><i class="bi bi-star-fill"></i> 4.6</span>
                </div>
              </div>
            </div>
            <div class="p-card" style="display:flex;align-items:center;gap:10px;margin-bottom:14px;">
              <div class="p-avatar" style="background:rgba(99,102,241,.4);display:flex;align-items:center;justify-content:center;font-size:14px;color:#fff;"><i class="bi bi-cup-hot-fill"></i></div>
              <div style="flex:1;min-width:0;">
                <div class="p-line" style="width:65%"></div>
                <div style="display:flex;align-items:center;gap:6px;margin-top:4px;">
                  <span style="font-size:10px;background:rgba(99,102,241,.2);color:#a78bfa;padding:2px 7px;border-radius:99px;font-weight:600;">Healthy Cafe</span>
                  <span style="font-size:10px;color:#fbbf24;font-weight:700;"><i class="bi bi-star-fill"></i> 4.9</span>
                </div>
              </div>
            </div>
            <div class="p-earn-badge">
              <div class="p-earn-icon"><i class="bi bi-star-half"></i></div>
              <div>
                <div class="p-earn-text"><span class="lang-en">Reviews system</span><span class="lang-ta">விமர்சன அமைப்பு</span></div>
                <div class="p-earn-amount"><span class="lang-en">Find Good Shops Based on Reviews <i class="bi bi-check-lg"></i></span><span class="lang-ta">மதிப்புரைகளின் அடிப்படையில் நல்ல கடைகளைக் கண்டறியுங்கள். <i class="bi bi-check-lg"></i></span></div>
              </div>
            </div>
          </div>
          <div class="float-chip float-chip-2" style="background:#fff;"><i class="bi bi-globe-asia-australia"></i> Natural farming!</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Slide 3 -->
  <section class="hero banner-slide slide-3" aria-label="Hero banner 3">
    <div class="hero-bg-pattern"></div>
    <div class="container">
      <div class="hero-inner">
        <div>
          <div class="hero-eyebrow" style="background:rgba(255,255,255,.1);border-color:rgba(255,255,255,.2);color:#bae6fd;">
            <span class="dot" style="background:#38bdf8;"></span>
            <span class="lang-en">Natural Farming</span>
            <span class="lang-ta">இயற்கை விவசாயம்</span>
          </div>
          <h1 style="color:#fff;">
            <span class="lang-en">Support <em style="color:#fbbf24;">Natural Farming</em> &amp; Healthy Products.</span>
            <span class="lang-ta"><em style="color:#fbbf24;">இயற்கை விவசாயம்</em> மற்றும் ஆரோக்கியமான பொருட்களை ஆதரியுங்கள்.</span>
          </h1>
          <p class="hero-desc">
            <span class="lang-en">Discover and support farmers, shops, and producers who grow and make traditional, healthy food the natural way. Every listing on <span class="tp-name">Tamil Pasanga</span> helps genuine natural farming and honest, chemical-free products reach the Tamil community.</span>
            <span class="lang-ta">பாரம்பரிய, ஆரோக்கியமான உணவை இயற்கை முறையில் விளைவிக்கும் மற்றும் தயாரிக்கும் விவசாயிகள், கடைகள் மற்றும் உற்பத்தியாளர்களை <span class="tp-name">தமிழ் பசங்க</span>வில் கண்டறிந்து ஆதரியுங்கள். ஒவ்வொரு பட்டியலும் உண்மையான இயற்கை விவசாயம் மற்றும் இரசாயனமற்ற பொருட்கள் தமிழர் சமூகத்தை சென்றடைய உதவுகிறது.</span>
          </p>
          <div class="hero-actions">
            <a href="https://play.google.com/store/apps/details?id=in.tamilpasanga.app" class="btn btn-white btn-lg" target="_blank" rel="noopener"><i class="bi bi-google-play"></i> <span class="lang-en">Get the App</span><span class="lang-ta">ஆப்பை பெறுங்கள்</span></a>
            <a href="guidelines.php" class="btn btn-outline-white btn-lg"><span class="lang-en">What We Support</span><span class="lang-ta">நாங்கள் ஆதரிப்பவை</span></a>
          </div>
          <!-- <div class="hero-stats">
            <div>
              <div class="hero-stat-num"><i class="bi bi-flower2"></i></div>
              <div class="hero-stat-lbl"><span class="lang-en">Natural Farming Produce</span><span class="lang-ta">இயற்கை விவசாய விளைபொருட்கள்</span></div>
            </div>
            <div>
              <div class="hero-stat-num"><i class="bi bi-egg-fried"></i></div>
              <div class="hero-stat-lbl"><span class="lang-en">Traditional Recipes &amp; Foods</span><span class="lang-ta">பாரம்பரிய சமையல் மற்றும் உணவுகள்</span></div>
            </div>
            <div>
              <div class="hero-stat-num"><i class="bi bi-heart-fill"></i></div>
              <div class="hero-stat-lbl"><span class="lang-en">Community Supported</span><span class="lang-ta">சமூக ஆதரவு</span></div>
            </div>
          </div> -->
        </div>
        <div class="phone-wrap" aria-hidden="true">
          <div class="float-chip float-chip-1" style="background:#fff;"><i class="bi bi-flower2"></i> Natural farms nearby</div>
          <div class="phone">
            <div class="phone-status"><span class="phone-time">9:41</span>
              <div class="phone-icons"><span></span><span></span><span></span></div>
            </div>
            <div class="phone-pill"></div>
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;">
              <span style="font-size:13px;font-weight:700;color:#fff;">Traditional &amp; Healthy</span>
              <span style="font-size:11px;color:rgba(255,255,255,.5);"><i class="bi bi-leaf"></i> 100% Natural</span>
            </div>
            <div class="p-card" style="display:flex;align-items:center;gap:10px;">
              <div class="p-avatar" style="background:rgba(16,185,129,.4);display:flex;align-items:center;justify-content:center;font-size:14px;color:#fff;"><i class="bi bi-flower2"></i></div>
              <div style="flex:1;min-width:0;">
                <div class="p-line" style="width:70%"></div>
                <div style="display:flex;align-items:center;gap:6px;margin-top:4px;">
                  <span style="font-size:10px;background:rgba(16,185,129,.2);color:#34d399;padding:2px 7px;border-radius:99px;font-weight:600;">Natural Farm</span>
                </div>
              </div>
            </div>
            <div class="p-card" style="display:flex;align-items:center;gap:10px;">
              <div class="p-avatar" style="background:rgba(245,158,11,.4);display:flex;align-items:center;justify-content:center;font-size:14px;color:#fff;"><i class="bi bi-egg-fried"></i></div>
              <div style="flex:1;min-width:0;">
                <div class="p-line" style="width:60%"></div>
                <div style="display:flex;align-items:center;gap:6px;margin-top:4px;">
                  <span style="font-size:10px;background:rgba(245,158,11,.2);color:#fbbf24;padding:2px 7px;border-radius:99px;font-weight:600;">Traditional Recipe</span>
                </div>
              </div>
            </div>
            <div class="p-card" style="display:flex;align-items:center;gap:10px;margin-bottom:14px;">
              <div class="p-avatar" style="background:rgba(99,102,241,.4);display:flex;align-items:center;justify-content:center;font-size:14px;color:#fff;"><i class="bi bi-cup-hot-fill"></i></div>
              <div style="flex:1;min-width:0;">
                <div class="p-line" style="width:65%"></div>
                <div style="display:flex;align-items:center;gap:6px;margin-top:4px;">
                  <span style="font-size:10px;background:rgba(99,102,241,.2);color:#a78bfa;padding:2px 7px;border-radius:99px;font-weight:600;">Healthy Hotel</span>
                </div>
              </div>
            </div>
            <div class="p-earn-badge">
              <div class="p-earn-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
              <div>
                <div class="p-earn-text"><span class="lang-en">Community Supported</span><span class="lang-ta">சமூக ஆதரவு</span></div>
                <div class="p-earn-amount"><span class="lang-en">Helping natural farmers grow <i class="bi bi-check-lg"></i></span><span class="lang-ta">இயற்கை விவசாயிகளை வளர உதவுகிறோம் <i class="bi bi-check-lg"></i></span></div>
              </div>
            </div>
          </div>
          <div class="float-chip float-chip-2" style="background:#fff;"><i class="bi bi-leaf"></i> Chemical-free produce</div>
        </div>
      </div>
    </div>
  </section>

  <button class="banner-nav banner-prev" aria-label="Previous slide"><i class="bi bi-chevron-left"></i></button>
  <button class="banner-nav banner-next" aria-label="Next slide"><i class="bi bi-chevron-right"></i></button>
  <div class="banner-dots" role="tablist" aria-label="Banner slides">
    <button class="banner-dot active" role="tab" aria-label="Slide 1" aria-selected="true"></button>
    <button class="banner-dot" role="tab" aria-label="Slide 2" aria-selected="false"></button>
    <button class="banner-dot" role="tab" aria-label="Slide 3" aria-selected="false"></button>
  </div>
</div>

<!-- Feature Strip -->
<div class="strip" aria-label="Key features">
  <div class="container">
    <div class="strip-grid">
      <div class="strip-item"><span class="strip-emoji"><i class="bi bi-heart-pulse"></i></span><span class="strip-text"><span class="lang-en">Health &amp; Wellness Awareness</span><span class="lang-ta">ஆரோக்கியம் மற்றும் நலவாழ்வு குறித்த விழிப்புணர்வு</span></span></div>
      <div class="strip-item"><span class="strip-emoji"><i class="bi bi-globe2"></i></span><span class="strip-text"><span class="lang-en">Social &amp; Environment Issues</span><span class="lang-ta">சமூக மற்றும் சுற்றுச்சூழல் சார்ந்த பிரச்சினைகள்</span></span></div>
      <div class="strip-item"><span class="strip-emoji"><i class="bi bi-book-fill"></i></span><span class="strip-text"><span class="lang-en">Education &amp; Farming Content</span><span class="lang-ta">கல்வி மற்றும் விவசாயம் சார்ந்த தகவல்கள்</span></span></div>
      <div class="strip-item"><span class="strip-emoji"><i class="bi bi-flower2"></i></span><span class="strip-text"><span class="lang-en">Natural Farming &amp; Traditional Food</span><span class="lang-ta">இயற்கை விவசாயம் மற்றும் பாரம்பரிய உணவு</span></span></div>
    </div>
  </div>
</div>

<!-- About Teaser -->
<section class="section" id="about" aria-labelledby="about-h">
  <div class="container">
    <div class="about-teaser">
      <div class="about-teaser-visual" aria-hidden="true"><i class="bi bi-leaf"></i></div>
      <div>
        <div class="badge" data-aos><span class="lang-en">Our Purpose</span><span class="lang-ta">எங்கள் நோக்கம்</span></div>
        <h2 class="section-title" id="about-h" data-aos data-aos-delay="100">
          <span class="lang-en">Not for Entertainment.<br><span class="highlight">Pure Awareness.</span></span>
          <span class="lang-ta">பொழுதுபோக்கிற்காக அல்ல.<br><span class="highlight">விழிப்புணர்விற்காக மட்டுமே.</span></span>
        </h2>
        <p style="font-size:17px;color:var(--gray-500);line-height:1.8;margin-bottom:16px;" data-aos data-aos-delay="200">
          <span class="lang-en"><span class="tp-name">Tamil Pasanga</span> is not a general social media app. It is a dedicated awareness platform for the Tamil community — focused only on content that informs, educates, and uplifts.</span>
          <span class="lang-ta"><span class="tp-name">தமிழ் பசங்க</span> என்பது ஒரு சாதாரண சமூக ஊடக செயலி அல்ல. தமிழர் சமூகத்திற்காக உருவாக்கப்பட்ட ஒரு தனித்துவமான விழிப்புணர்வு தளம். மக்களுக்கு பயனுள்ள தகவல்களை வழங்கி, கல்வி கற்பித்து, சமூக முன்னேற்றத்தை ஊக்குவிக்கும் உள்ளடக்கங்களுக்கு மட்டுமே இங்கு இடம் உண்டு.</span>
        </p>
        <p style="font-size:16px;color:var(--gray-500);line-height:1.8;margin-bottom:28px;" data-aos data-aos-delay="300">
          <span class="lang-en">No entertainment posts. No viral noise. No algorithm deciding what you see. You choose the topics that matter to you, and every Supercoin you spend creating good content can be earned right back.</span>
          <span class="lang-ta">இங்கே பொழுதுபோக்கு பதிவுகள் இல்லை. வைரல் சத்தங்கள் இல்லை. நீங்கள் என்ன பார்க்க வேண்டும் என்பதை தீர்மானிக்கும் அல்காரிதம் இல்லை. உங்களுக்கு முக்கியமான தலைப்புகளை நீங்கள் தேர்வு செய்கிறீர்கள். நல்ல விழிப்புணர்வு உள்ளடக்கத்தை உருவாக்க செலவிட்ட Supercoin, மக்கள் ஆதரவு கிடைக்கும் போது அதை மீண்டும் சம்பாதிக்கவும் முடியும்.</span>
        </p>
        <ul class="about-check-list" data-aos data-aos-delay="400">
          <li><span class="check-icon"><i class="bi bi-check-lg"></i></span> <span class="lang-en">Social issues, health, environment, education &amp; farming awareness</span><span class="lang-ta">சமூகப் பிரச்சினைகள், ஆரோக்கியம், சுற்றுச்சூழல், கல்வி மற்றும் விவசாயம் குறித்த விழிப்புணர்வு உள்ளடக்கங்கள்.</span></li>
          <li><span class="check-icon"><i class="bi bi-check-lg"></i></span> <span class="lang-en">Supercoin rewards — post awareness, get refunded on likes</span><span class="lang-ta">Supercoin வெகுமதிகள் – விழிப்புணர்வு பதிவுகளைப் பகிர்ந்து, லைக்குகள் மூலம் செலவிட்டதை மீட்டெடுங்கள்</span></li>
          <li><span class="check-icon"><i class="bi bi-check-lg"></i></span> <span class="lang-en">No algorithm feed — you choose your content by topic</span><span class="lang-ta">அல்காரிதம் சார்ந்த ஊட்டு (Feed) இல்லை – உங்களுக்கு தேவையான தலைப்புகளை நீங்களே தேர்வு செய்யுங்கள்.</span></li>
          <li><span class="check-icon"><i class="bi bi-check-lg"></i></span> <span class="lang-en">Natural healthy shops &amp; Tamil wellness knowledge</span><span class="lang-ta">இயற்கை ஆரோக்கியப் பொருட்கள், பாரம்பரிய நலவாழ்வு அறிவு மற்றும் தமிழர் ஆரோக்கிய வழிகாட்டுதல்கள்</span></li>
          <li><span class="check-icon"><i class="bi bi-check-lg"></i></span> <span class="lang-en">Discover and support natural farming and traditional healthy food</span><span class="lang-ta">இயற்கை விவசாயம் மற்றும் பாரம்பரிய ஆரோக்கியமான உணவை கண்டறிந்து ஆதரிக்கும் வாய்ப்பு.</span></li>
        </ul>
        <div style="margin-top:32px;display:flex;gap:14px;flex-wrap:wrap;" data-aos data-aos-delay="400">
          <a href="about.php" class="btn btn-primary"><span class="lang-en">Our Story</span><span class="lang-ta">எங்கள் பயணம்</span></a>
          <a href="guidelines.php" class="btn btn-secondary"><span class="lang-en">What We Allow</span><span class="lang-ta">அனுமதிக்கப்படும் உள்ளடக்கங்கள்</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats -->
<div class="section-sm bg-gray">
  <div class="container">
    <div class="stats-row" data-aos>
      <div class="stat-item">
        <div class="stat-num">5</div>
        <div class="stat-lbl"><span class="lang-en">Awareness topics — Health, Social, Environment, Education, Farming</span><span class="lang-ta">விழிப்புணர்வு தலைப்புகள் — ஆரோக்கியம், சமூகம், சுற்றுச்சூழல், கல்வி, விவசாயம்</span></div>
      </div>
      <div class="stat-item">
        <div class="stat-num">18+</div>
        <div class="stat-lbl"><span class="lang-en">Responsible 18+ community platform</span><span class="lang-ta">பொறுப்பான 18+ சமூக தளம்</span></div>
      </div>
      <div class="stat-item">
        <div class="stat-num"><i class="bi bi-flower2"></i></div>
        <div class="stat-lbl"><span class="lang-en">Natural farming &amp; healthy food shops to discover</span><span class="lang-ta">இயற்கை விவசாயம் மற்றும் ஆரோக்கியமான உணவு கடைகளைக் கண்டறியுங்கள்</span></div>
      </div>
      <div class="stat-item">
        <div class="stat-num">0</div>
        <div class="stat-lbl"><span class="lang-en">Entertainment or algorithm feed — ever</span><span class="lang-ta">பொழுதுபோக்கு அல்லது அல்காரிதம் ஊட்டம் — ஒருபோதும் இல்லை</span></div>
      </div>
    </div>
  </div>
</div>

<!-- Vision -->
<section class="bg-purple section-lg" id="vision" aria-labelledby="vision-h">
  <div class="container text-center">
    <div class="badge badge-white" data-aos><span class="lang-en">Our Vision</span><span class="lang-ta">எங்கள் நோக்கம்</span></div>
    <h2 class="vision-quote" id="vision-h" data-aos data-aos-delay="100">
      <span class="lang-en">"A Tamil community where awareness drives action, every useful post is rewarded, and real change begins with shared knowledge."</span>
      <span class="lang-ta">"தமிழர் சமூகத்தில் விழிப்புணர்வே மாற்றத்திற்கான சக்தி என்று நாங்கள் நம்புகிறோம். பயனுள்ள தகவல்களைப் பகிரும் ஒவ்வொருவரும் பாராட்டப்பட வேண்டும்; அறிவைப் பகிர்வதன் மூலம் சமூக முன்னேற்றம் உருவாக வேண்டும் என்பதே எங்கள் நோக்கம்."</span>
    </h2>
    <p class="section-sub section-sub-white" data-aos data-aos-delay="200">
      <span class="lang-en">We envision a Tamil Nadu where people are informed about health, environment, social issues, and farming — and where sharing that knowledge is valued, rewarded, and never buried under entertainment noise.</span>
      <span class="lang-ta">ஆரோக்கியம், சுற்றுச்சூழல், சமூகப் பிரச்சினைகள் மற்றும் விவசாயம் குறித்த விழிப்புணர்வு ஒவ்வொரு தமிழரையும் சென்றடைய வேண்டும். சமூக நலனுக்காக பகிரப்படும் அறிவு வெகுமதிக்குரியது; அது பொழுதுபோக்கு உள்ளடக்கங்களின் நடுவே மறைந்து போகக் கூடாது.</span>
    </p>
    <div class="vision-cards">
      <div class="vision-card" data-aos data-aos-delay="100">
        <div class="vision-card-icon"><i class="bi bi-megaphone"></i></div>
        <h3><span class="lang-en">Awareness Over Entertainment</span><span class="lang-ta">பொழுதுபோக்கை விட விழிப்புணர்வுக்கு முன்னுரிமை</span></h3>
        <p><span class="lang-en">Every post on <span class="tp-name">Tamil Pasanga</span> must serve a purpose — social issues, health foods, environment safety, education, or farming. No entertainment. Only content that matters.</span><span class="lang-ta"><span class="tp-name">தமிழ் பசங்க</span>வில் பகிரப்படும் ஒவ்வொரு பதிவும் சமூகத்திற்கு பயனுள்ளதாக இருக்க வேண்டும். சமூகப் பிரச்சினைகள், ஆரோக்கியமான உணவுகள், சுற்றுச்சூழல் பாதுகாப்பு, கல்வி மற்றும் விவசாயம் போன்ற தலைப்புகளுக்கே இங்கு இடம் உண்டு. பொழுதுபோக்கிற்காக அல்ல, விழிப்புணர்வை உருவாக்குவதற்காக மட்டுமே இந்த தளம் செயல்படுகிறது.</span></p>
      </div>
      <div class="vision-card" data-aos data-aos-delay="200">
        <div class="vision-card-icon"><i class="bi bi-coin"></i></div>
        <h3><span class="lang-en">Reward Quality Content</span><span class="lang-ta">தரமான உள்ளடக்கத்திற்கு வெகுமதி</span></h3>
        <p><span class="lang-en">Good awareness content earns its Supercoins back. The more your post is supported by the community, the more you earn — creating a sustainable cycle of quality sharing.</span><span class="lang-ta">பயனுள்ள விழிப்புணர்வு உள்ளடக்கங்கள் வெகுமதிக்குரியவை. நீங்கள் பகிரும் தரமான பதிவுகளுக்கு சமூகத்தின் ஆதரவு கிடைக்கும் போது, செலவிட்ட Supercoins-ஐ மீண்டும் சம்பாதிக்கலாம். இதன் மூலம் நல்ல தகவல்களை தொடர்ந்து பகிர ஊக்கமளிக்கும் ஒரு நிலையான அமைப்பு உருவாகிறது.</span></p>
      </div>
      <div class="vision-card" data-aos data-aos-delay="300">
        <div class="vision-card-icon"><i class="bi bi-shield-check"></i></div>
        <h3><span class="lang-en">Safe, Accountable Community</span><span class="lang-ta">பாதுகாப்பான மற்றும் பொறுப்பான சமூக தளம்</span></h3>
        <p><span class="lang-en">Admin-monitored content, Supercoin accountability, age verification, and community reporting keep <span class="tp-name">Tamil Pasanga</span> a trustworthy space for every family.</span><span class="lang-ta">நிர்வாகக் கண்காணிப்பு, Supercoin பொறுப்புணர்வு முறை, வயது சரிபார்ப்பு மற்றும் சமூக உறுப்பினர்களின் புகாரளிப்பு வசதி ஆகியவை <span class="tp-name">தமிழ் பசங்க</span>வை அனைவரும் நம்பிக்கையுடன் பயன்படுத்தக்கூடிய பாதுகாப்பான தளமாக மாற்றுகின்றன. குடும்பத்தினர் அனைவருக்கும் ஏற்ற, நம்பகமான சமூகத்தை உருவாக்குவதே எங்கள் நோக்கம்.</span></p>
      </div>
    </div>
  </div>
</section>

<!-- Why Tamil Pasanga -->
<section class="section" id="why-us" aria-labelledby="why-h">
  <div class="container">
    <div class="text-center">
      <div class="badge" data-aos><span class="lang-en">Why <span class="tp-name">Tamil Pasanga</span></span><span class="lang-ta">ஏன் <span class="tp-name">தமிழ் பசங்க</span></span></div>
      <h2 class="section-title" id="why-h" data-aos data-aos-delay="100">
        <span class="lang-en">Built differently,<br>for a real purpose</span>
        <span class="lang-ta">வித்தியாசமாக உருவாவித்தியாசமான அணுகுமுறைக்கப்பட்டது,<br>உண்மையான நோக்கத்திற்காக</span>
      </h2>
      <p class="section-sub" data-aos data-aos-delay="200">
        <span class="lang-en"><span class="tp-name">Tamil Pasanga</span> is not like other social media. Every design decision is driven by a single goal — spreading meaningful awareness for the Tamil community.</span>
        <span class="lang-ta"><span class="tp-name">தமிழ் பசங்க</span> ஒரு சாதாரண சமூக ஊடக தளம் அல்ல. தமிழர் சமூகத்திற்கு பயனுள்ள விழிப்புணர்வை பரப்புவதே இதன் ஒரே நோக்கம். அதனால் இங்குள்ள ஒவ்வொரு அம்சமும் அறிவைப் பகிர்வதையும் சமூக நலனை மேம்படுத்துவதையும் மையமாகக் கொண்டு வடிவமைக்கப்பட்டுள்ளது.</span>
      </p>
    </div>
    <div class="grid-4">
      <article class="card" data-aos data-aos-delay="100">
        <div class="card-icon" style="background:#f5f3ff;"><i class="bi bi-megaphone"></i></div>
        <h3><span class="lang-en">Awareness Only</span><span class="lang-ta">விழிப்புணர்வுக்கே முன்னுரிமை</span></h3>
        <p><span class="lang-en">We only allow content about social issues, health, environment, education, and farming. Entertainment posts are removed. Every post must add value to the community.</span><span class="lang-ta">சமூகப் பிரச்சினைகள், ஆரோக்கியம், சுற்றுச்சூழல், கல்வி மற்றும் விவசாயம் தொடர்பான உள்ளடக்கங்களுக்கு மட்டுமே <span class="tp-name">தமிழ் பசங்க</span>வில் அனுமதி உள்ளது. பொழுதுபோக்கு பதிவுகள் அகற்றப்படும். ஒவ்வொரு பதிவும் சமூகத்திற்கு பயனுள்ள மதிப்பை வழங்க வேண்டும்.</span></p>
      </article>
      <article class="card" data-aos data-aos-delay="200">
        <div class="card-icon" style="background:#d1fae5;"><i class="bi bi-coin"></i></div>
        <h3><span class="lang-en">Supercoin Reward Loop</span><span class="lang-ta">சூப்பர்காயின் வெகுமதி சுழற்சி</span></h3>
        <p><span class="lang-en">Post awareness content using Supercoins. Earn them back when your post gets enough community support. Report bad content and earn bonus Supercoins too.</span><span class="lang-ta">Supercoins பயன்படுத்தி விழிப்புணர்வு பதிவுகளை உருவாக்குங்கள். உங்கள் பதிவுகளுக்கு சமூகத்தின் ஆதரவு கிடைத்தால், செலவிட்ட Supercoins-ஐ மீண்டும் சம்பாதிக்கலாம். தரமற்ற அல்லது விதிமுறைகளை மீறும் உள்ளடக்கங்களைப் புகாரளித்து கூடுதல் Supercoin வெகுமதிகளையும் பெறலாம்.</span></p>
      </article>
      <article class="card" data-aos data-aos-delay="300">
        <div class="card-icon" style="background:#fffbeb;"><i class="bi bi-flower2"></i></div>
        <h3><span class="lang-en">Support Natural Farming</span><span class="lang-ta">இயற்கை விவசாயத்தை ஆதரியுங்கள்</span></h3>
        <p><span class="lang-en">Discover and support shops selling natural, traditional, and healthy foods — grown and made without shortcuts. Every listing helps local farmers and producers.</span><span class="lang-ta">குறுக்குவழிகள் இல்லாமல் விளைவிக்கப்பட்டு தயாரிக்கப்படும் இயற்கை, பாரம்பரிய மற்றும் ஆரோக்கியமான உணவுகளை விற்கும் கடைகளை கண்டறிந்து ஆதரியுங்கள். ஒவ்வொரு பட்டியலும் உள்ளூர் விவசாயிகள் மற்றும் உற்பத்தியாளர்களுக்கு உதவுகிறது.</span></p>
      </article>
      <article class="card" data-aos data-aos-delay="400">
        <div class="card-icon" style="background:#eff6ff;"><i class="bi bi-slash-circle"></i></div>
        <h3><span class="lang-en">No Algorithm, No Followers</span><span class="lang-ta">அல்காரிதம் இல்லை, பின்தொடர்பவர்கள் இல்லை</span></h3>
        <p><span class="lang-en">No algorithmic feed. No follower counts. No subscriber pressure. You choose the topics you care about — the platform never decides what you see.</span><span class="lang-ta">உங்களுக்கு என்ன காட்ட வேண்டும் என்பதை தீர்மானிக்கும் அல்காரிதம் இல்லை. Follower எண்ணிக்கைகள் இல்லை. Subscriber அழுத்தங்கள் இல்லை. உங்களுக்கு முக்கியமான தலைப்புகளை நீங்களே தேர்வு செய்கிறீர்கள். நீங்கள் என்ன பார்க்க வேண்டும் என்பதை தளம் அல்ல, நீங்கள்தான் முடிவு செய்கிறீர்கள்.</span></p>
      </article>
    </div>
  </div>
</section>

<!-- Community Policies -->
<section class="section bg-gray" id="policies" aria-labelledby="policies-h">
  <div class="container">
    <div class="text-center">
      <div class="badge" data-aos><span class="lang-en">Transparency &amp; Trust</span><span class="lang-ta">வெளிப்படைத்தன்மை &amp; நம்பிக்கை</span></div>
      <h2 class="section-title" id="policies-h" data-aos data-aos-delay="100"><span class="lang-en">Our Community Policies</span><span class="lang-ta">எங்கள் சமூகக் கொள்கைகள்</span></h2>
      <p class="section-sub" data-aos data-aos-delay="200">
        <span class="lang-en"><span class="tp-name">Tamil Pasanga</span> is built on clear, transparent rules. We are open about what we allow and how we protect you.</span>
        <span class="lang-ta"><span class="tp-name">தமிழ் பசங்க</span> தெளிவான மற்றும் வெளிப்படையான விதிமுறைகளின் அடிப்படையில் உருவாக்கப்பட்டுள்ளது. எதை அனுமதிக்கிறோம், பயனர்களை எவ்வாறு பாதுகாக்கிறோம் என்பதனை வெளிப்படையாக பகிர்கிறோம்.</span>
      </p>
    </div>
    <div class="grid-3" style="margin-top:0;">
      <a href="guidelines.php" class="card" style="text-decoration:none;display:block;" data-aos data-aos-delay="100">
        <div class="card-icon" style="background:#d1fae5;"><i class="bi bi-check-circle-fill"></i></div>
        <h3><span class="lang-en">What We Allow / Don't Allow</span><span class="lang-ta">அனுமதிக்கப்படுபவை / அனுமதிக்கப்படாதவை</span></h3>
        <p><span class="lang-en">எந்த வகையான உள்ளடக்கங்கள், கடைகள் மற்றும் செயல்பாடுகள் தளத்தில் அனுமதிக்கப்படுகின்றன, எவை தடைசெய்யப்பட்டவை என்பதற்கான தெளிவான வழிகாட்டுதல்கள். பதிவிடுவதற்கு முன் அவற்றை கவனமாகப் படிக்கவும்.</span><span class="lang-ta">என்ன உள்ளடக்கம், கடைகள் மற்றும் செயல்பாடுகள் ஆதரிக்கப்படுகின்றன என்பதற்கான தெளிவான வழிகாட்டுதல்கள். பதிவிடுவதற்கு முன் படிக்கவும்.</span></p>
      </a>
      <a href="safety.php" class="card" style="text-decoration:none;display:block;" data-aos data-aos-delay="200">
        <div class="card-icon" style="background:#eff6ff;"><i class="bi bi-shield-fill"></i></div>
        <h3><span class="lang-en">Safety &amp; Security</span><span class="lang-ta">பாதுகாப்பு மற்றும் பாதுகாப்புத் தரநிலைகள்</span></h3>
        <p><span class="lang-en">How we protect users — age enforcement, content monitoring, account accountability, and government cooperation.</span><span class="lang-ta">வயது சரிபார்ப்பு, உள்ளடக்கக் கண்காணிப்பு, கணக்கு பொறுப்புணர்வு மற்றும் தேவையானபோது அரசு அமைப்புகளுடன் ஒத்துழைப்பு உள்ளிட்ட நடவடிக்கைகள் மூலம் பயனர்களை எவ்வாறு பாதுகாக்கிறோம் என்பதை அறிந்துகொள்ளுங்கள்.</span></p>
      </a>
      <a href="terms.php" class="card" style="text-decoration:none;display:block;" data-aos data-aos-delay="300">
        <div class="card-icon" style="background:#f5f3ff;"><i class="bi bi-file-text-fill"></i></div>
        <h3><span class="lang-en">Terms &amp; Conditions</span><span class="lang-ta">விதிமுறைகள் மற்றும் நிபந்தனைகள்</span></h3>
        <p><span class="lang-en">Full terms covering all user rights, responsibilities, Supercoin rules, content policies, and legal obligations.</span><span class="lang-ta">பயனர்களின் உரிமைகள், பொறுப்புகள், Supercoin பயன்பாட்டு விதிகள், உள்ளடக்கக் கொள்கைகள் மற்றும் சட்டப்பூர்வ கடமைகள் உள்ளிட்ட முழுமையான நிபந்தனைகள்.</span></p>
      </a>
      <a href="privacy.php" class="card" style="text-decoration:none;display:block;" data-aos data-aos-delay="200">
        <div class="card-icon" style="background:#ecfdf5;"><i class="bi bi-lock-fill"></i></div>
        <h3><span class="lang-en">Privacy Policy</span><span class="lang-ta">தனியுரிமைக் கொள்கை</span></h3>
        <p><span class="lang-en">How your personal data is collected, used, and protected. We never sell your data to third parties.</span><span class="lang-ta">உங்களின் தனிப்பட்ட தகவல்கள் எவ்வாறு சேகரிக்கப்படுகின்றன, பயன்படுத்தப்படுகின்றன மற்றும் பாதுகாக்கப்படுகின்றன என்பதற்கான விவரங்கள். உங்கள் தரவுகளை மூன்றாம் தரப்பினருக்கு நாங்கள் விற்பனை செய்ய மாட்டோம்.</span></p>
      </a>
    </div>
  </div>
</section>

<!-- Download CTA -->
<section class="cta-section" id="download" aria-labelledby="cta-h">
  <div class="container">
    <div class="badge badge-white" data-aos><span class="lang-en">Download Free</span><span class="lang-ta">இலவசமாக பதிவிறக்குங்கள்</span></div>
    <h2 class="section-title section-title-white" id="cta-h" data-aos data-aos-delay="100">
      <span class="lang-en">Ready to join the community?</span>
      <span class="lang-ta">தமிழர் சமூகத்தின் ஒரு பகுதியாக தயாரா?</span>
    </h2>
    <p class="section-sub section-sub-white" data-aos data-aos-delay="200" style="margin-bottom:0;">
      <span class="lang-en">Download <span class="tp-name">Tamil Pasanga</span> today — it's completely free. Start sharing, discovering, and earning right from your phone.</span>
      <span class="lang-ta"><span class="tp-name">தமிழ் பசங்க</span>வை இன்றே இலவசமாக பதிவிறக்குங்கள். பயனுள்ள தகவல்களைப் பகிருங்கள், புதிய விழிப்புணர்வு உள்ளடக்கங்களைக் கண்டறியுங்கள், மேலும் உங்கள் மொபைல் மூலமாகவே வெகுமதிகளையும் வருமான வாய்ப்புகளையும் பெறத் தொடங்குங்கள்.</span>
    </p>
    <div class="store-btns" data-aos data-aos-delay="300">
      <a href="https://play.google.com/store/apps/details?id=in.tamilpasanga.app" class="store-btn" target="_blank" rel="noopener">
        <span class="store-btn-icon"><i class="bi bi-google-play"></i></span>
        <div><span class="store-btn-sub"><span class="lang-en">Get it on</span><span class="lang-ta">பெறுங்கள்</span></span><span class="store-btn-name">Google Play</span></div>
      </a>
      <a href="#" class="store-btn" data-store="ios">
        <span class="store-btn-icon"><i class="bi bi-apple"></i></span>
        <div><span class="store-btn-sub"><span class="lang-en">Download on the</span><span class="lang-ta">பதிவிறக்கம்</span></span><span class="store-btn-name">App Store</span></div>
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
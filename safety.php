<?php
$page_title          = 'Safety & Security Policy — Tamil Pasanga';
$page_description    = 'Learn how Tamil Pasanga protects its users — age enforcement, content monitoring, account accountability, and government cooperation to maintain a safe platform.';
$page_keywords       = 'Tamil Pasanga safety, Tamil app security, user protection Tamil Pasanga, platform safety policy, age verification Tamil app';
$page_canonical      = 'https://tamilpasanga.in/safety.php';
$page_og_title       = 'Safety & Security Policy — Tamil Pasanga';
$page_og_description = 'How Tamil Pasanga protects users through age enforcement, content monitoring, and community accountability. A safe platform for the Tamil community.';
$page_schema         = json_encode(['@context'=>'https://schema.org','@graph'=>[['@type'=>'BreadcrumbList','itemListElement'=>[['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://tamilpasanga.in/'],['@type'=>'ListItem','position'=>2,'name'=>'Safety & Security','item'=>'https://tamilpasanga.in/safety.php']]],['@type'=>'WebPage','name'=>'Tamil Pasanga Safety & Security Policy','url'=>'https://tamilpasanga.in/safety.php','description'=>'How Tamil Pasanga protects users through age enforcement, content monitoring, and accountability.','inLanguage'=>['ta','en-IN']]]]);
$active_page         = 'safety';
include 'includes/head.php';
include 'includes/nav.php';
?>

<header class="page-header" role="banner">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="index.php"><span class="lang-en">Home</span><span class="lang-ta">முகப்பு</span></a><span>›</span>
      <span class="current"><span class="lang-en">Safety &amp; Security</span><span class="lang-ta">பாதுகாப்பு & பாதுகாப்புத் தரநிலைகள்</span></span>
    </nav>
    <h1><span class="lang-en">Safety &amp; Security</span><span class="lang-ta">பாதுகாப்பு & பாதுகாப்புத் தரநிலைகள்</span></h1>
    <p>
      <span class="lang-en">Your safety is our top priority. Here is how Tamil Pasanga protects users, enforces platform rules, and cooperates with authorities.</span>
      <span class="lang-ta">உங்கள் பாதுகாப்பே எங்களின் மிக உயர்ந்த முன்னுரிமை. பயனர்களை எவ்வாறு பாதுகாக்கிறோம், தள விதிமுறைகளை எவ்வாறு அமல்படுத்துகிறோம், மற்றும் தேவையானபோது சம்பந்தப்பட்ட அதிகாரிகளுடன் எவ்வாறு ஒத்துழைக்கிறோம் என்பதை இங்கே அறிந்துகொள்ளலாம்.</span>
    </p>
  </div>
</header>

<!-- Safety cards -->
<section class="section" aria-labelledby="safety-h">
  <div class="container">
    <div class="text-center">
      <div class="badge" data-aos><span class="lang-en">Platform Safety</span><span class="lang-ta">தளப் பாதுகாப்பு</span></div>
      <h2 class="section-title" id="safety-h" data-aos data-aos-delay="100">
        <span class="lang-en">How We Keep You Safe</span>
        <span class="lang-ta">உங்களை எவ்வாறு பாதுகாக்கிறோம்</span>
      </h2>
      <p class="section-sub" data-aos data-aos-delay="200">
        <span class="lang-en">Multiple layers of protection ensure a trustworthy experience for every Tamil Pasanga user.</span>
        <span class="lang-ta">Tamil Pasanga-வின் ஒவ்வொரு பயனருக்கும் பாதுகாப்பான மற்றும் நம்பகமான அனுபவத்தை வழங்க பல அடுக்குகளைக் கொண்ட பாதுகாப்பு அமைப்புகள் செயல்படுத்தப்பட்டுள்ளன.</span>
      </p>
    </div>

    <div style="display:flex;flex-direction:column;gap:16px;margin-top:0;" data-aos>

      <div class="safety-card">
        <div class="safety-icon" style="background:#fef3c7;"><i class="bi bi-person-check"></i></div>
        <div>
          <h3 style="font-size:17px;font-weight:700;color:var(--gray-900);margin-bottom:6px;">
            <span class="lang-en">Age Restriction — 18+ Only</span>
            <span class="lang-ta">வயது வரம்பு — 18+ பயனர்களுக்கு மட்டும்</span>
          </h3>
          <p style="font-size:15px;color:var(--gray-600);line-height:1.75;">
            <span class="lang-en">Tamil Pasanga is strictly for users aged 18 and above. Age is verified using the date of birth provided during registration. If a user registers with a false date of birth and causes any harm, Tamil Pasanga bears no responsibility. The user is fully liable for providing false registration information.</span>
            <span class="lang-ta">Tamil Pasanga 18 வயது மற்றும் அதற்கு மேற்பட்டவர்களுக்காக மட்டுமே உருவாக்கப்பட்டுள்ளது. பதிவு செய்யும் போது வழங்கப்படும் பிறந்த தேதியின் அடிப்படையில் வயது சரிபார்க்கப்படுகிறது. தவறான பிறந்த தேதியை வழங்கி கணக்கு உருவாக்கும் பயனர் அதன் முழுப் பொறுப்பையும் ஏற்க வேண்டும். அத்தகைய தவறான தகவலால் ஏற்படும் எந்தவொரு பாதிப்பிற்கும் Tamil Pasanga பொறுப்பேற்காது.</span>
          </p>
        </div>
      </div>

      <div class="safety-card">
        <div class="safety-icon" style="background:#ede9fe;"><i class="bi bi-eye-fill"></i></div>
        <div>
          <h3 style="font-size:17px;font-weight:700;color:var(--gray-900);margin-bottom:6px;">
            <span class="lang-en">Active Content Monitoring</span>
            <span class="lang-ta">செயலில் உள்ள உள்ளடக்கக் கண்காணிப்பு</span>
          </h3>
          <p style="font-size:15px;color:var(--gray-600);line-height:1.75;">
            <span class="lang-en">All posts, comments, shops, and messages are actively monitored by our admin team. Content that violates our community guidelines is removed without prior notice. Users are encouraged to report violations using the in-app report feature.</span>
            <span class="lang-ta">அனைத்து பதிவுகள், கருத்துகள், கடை பட்டியல்கள் மற்றும் தொடர்புடைய உள்ளடக்கங்கள் எங்கள் நிர்வாகக் குழுவால் தொடர்ந்து கண்காணிக்கப்படுகின்றன. சமூக வழிகாட்டுதல்களை மீறும் உள்ளடக்கங்கள் முன் அறிவிப்பு இன்றி அகற்றப்படலாம். பயனர்கள், செயலியில் உள்ள Report வசதியைப் பயன்படுத்தி விதிமுறை மீறல்களை புகாரளிக்க ஊக்குவிக்கப்படுகிறார்கள்.</span>
          </p>
        </div>
      </div>

      <div class="safety-card">
        <div class="safety-icon" style="background:#d1fae5;"><i class="bi bi-coin"></i></div>
        <div>
          <h3 style="font-size:17px;font-weight:700;color:var(--gray-900);margin-bottom:6px;">
            <span class="lang-en">Supercoin-Based Accountability</span>
            <span class="lang-ta">சூப்பர்காயின் அடிப்படையிலான பொறுப்புணர்வு</span>
          </h3>
          <p style="font-size:15px;color:var(--gray-600);line-height:1.75;">
            <span class="lang-en">All user activities — posting, commenting, messaging, creating shops — require Supercoins. Users who create unwanted or violating content will have extra Supercoins deducted from their account. This creates a cost-barrier against misuse and ensures accountability. Users who continuously violate rules will be permanently deactivated by admin.</span>
            <span class="lang-ta">பதிவிடுதல், கருத்திடுதல், செய்தி அனுப்புதல் மற்றும் கடை உருவாக்குதல் உள்ளிட்ட அனைத்து முக்கிய செயல்பாடுகளுக்கும் Supercoins தேவைப்படும். விதிமுறைகளை மீறும் அல்லது தேவையற்ற உள்ளடக்கங்களை உருவாக்கும் பயனர்களிடமிருந்து கூடுதல் Supercoins கழிக்கப்படலாம். இது தளத்தின் தவறான பயன்பாட்டைத் தடுக்கவும், ஒவ்வொரு பயனரின் பொறுப்புணர்வை உறுதிப்படுத்தவும் உதவுகிறது. தொடர்ச்சியாக விதிமுறைகளை மீறும் கணக்குகள் நிரந்தரமாக செயலிழக்கச் செய்யப்படலாம்.</span>
          </p>
        </div>
      </div>

      <div class="safety-card">
        <div class="safety-icon" style="background:#fee2e2;"><i class="bi bi-lock-fill"></i></div>
        <div>
          <h3 style="font-size:17px;font-weight:700;color:var(--gray-900);margin-bottom:6px;">
            <span class="lang-en">Account Deactivation &amp; Balance Freeze</span>
            <span class="lang-ta">கணக்கு செயலிழப்பு மற்றும் இருப்புத் தொகை முடக்கம்</span>
          </h3>
          <p style="font-size:15px;color:var(--gray-600);line-height:1.75;">
            <span class="lang-en">If an account is deactivated by admin for illegal, violent, or repeatedly harmful activity, the user permanently loses access to the app. All e-wallet balance and campaign balance associated with the deactivated account will also be frozen and inaccessible.</span>
            <span class="lang-ta">சட்டவிரோத, வன்முறை அல்லது சமூகத்திற்கு தீங்கு விளைவிக்கும் செயல்பாடுகளுக்காக ஒரு கணக்கு நிர்வாகத்தால் செயலிழக்கச் செய்யப்பட்டால், அந்த பயனர் தளத்தை மீண்டும் பயன்படுத்த முடியாது. மேலும், அந்தக் கணக்குடன் தொடர்புடைய e-Wallet இருப்பு மற்றும் Campaign இருப்புகள் அனைத்தும் முடக்கப்படலாம் மற்றும் அணுக முடியாததாக மாற்றப்படலாம்.</span>
          </p>
        </div>
      </div>

      <div class="safety-card">
        <div class="safety-icon" style="background:#eff6ff;"><i class="bi bi-bank"></i></div>
        <div>
          <h3 style="font-size:17px;font-weight:700;color:var(--gray-900);margin-bottom:6px;">
            <span class="lang-en">Government &amp; Legal Cooperation</span>
            <span class="lang-ta">அரசு மற்றும் சட்ட அமலாக்க அமைப்புகளுடன் ஒத்துழைப்பு</span>
          </h3>
          <p style="font-size:15px;color:var(--gray-600);line-height:1.75;">
            <span class="lang-en">If a government authority makes a lawful request with proper legal evidence regarding illegal or violent content created by a user, Tamil Pasanga will fully cooperate and disclose the relevant user's contact information and activity records. We take our legal obligations seriously.</span>
            <span class="lang-ta">சட்டபூர்வமான ஆதாரங்களுடன் கூடிய அரசு அல்லது சட்ட அமலாக்க அமைப்புகளின் கோரிக்கை கிடைத்தால், குறிப்பாக சட்டவிரோத அல்லது வன்முறை சார்ந்த உள்ளடக்கங்கள் தொடர்பான விசாரணைகளில், Tamil Pasanga தேவையான அளவில் ஒத்துழைக்கும். சட்டப்படி அவசியமான சூழ்நிலைகளில், சம்பந்தப்பட்ட பயனரின் தொடர்பு தகவல்கள் மற்றும் தளப் பயன்பாட்டு பதிவுகள் அதிகாரிகளுக்கு வழங்கப்படலாம்.</span>
          </p>
        </div>
      </div>

      <div class="safety-card">
        <div class="safety-icon" style="background:#fefce8;"><i class="bi bi-phone-slash"></i></div>
        <div>
          <h3 style="font-size:17px;font-weight:700;color:var(--gray-900);margin-bottom:6px;">
            <span class="lang-en">No Personal Contact Details in Posts</span>
            <span class="lang-ta">பதிவுகளில் தனிப்பட்ட தொடர்பு விவரங்களுக்கு தடை</span>
          </h3>
          <p style="font-size:15px;color:var(--gray-600);line-height:1.75;">
            <span class="lang-en">To protect users from fraud, personal phone numbers, UPI IDs, QR codes, and bank information are strictly prohibited in posts and comments. If a user donates money to someone based on unverified financial information shared on the platform, Tamil Pasanga is not responsible for any fraud or loss.</span>
            <span class="lang-ta">பயனர்களை மோசடிகளில் இருந்து பாதுகாக்கும் நோக்கில், தனிப்பட்ட தொலைபேசி எண்கள், UPI ID-கள், QR குறியீடுகள், வங்கிக் கணக்கு விவரங்கள் மற்றும் பிற நிதி தகவல்களை பதிவுகள் அல்லது கருத்துகளில் பகிர்வது முற்றிலும் தடைசெய்யப்பட்டுள்ளது. சரிபார்க்கப்படாத தகவல்களின் அடிப்படையில் யாரேனும் பண பரிவர்த்தனை செய்தால் அல்லது நன்கொடை வழங்கினால், அதனால் ஏற்படும் இழப்புகள் அல்லது மோசடிகளுக்கு Tamil Pasanga பொறுப்பாகாது.</span>
          </p>
        </div>
      </div>

      <div class="safety-card">
        <div class="safety-icon" style="background:#f0fdf4;"><i class="bi bi-check-circle-fill"></i></div>
        <div>
          <h3 style="font-size:17px;font-weight:700;color:var(--gray-900);margin-bottom:6px;">
            <span class="lang-en">Ad Earnings Verification (Captcha)</span>
            <span class="lang-ta">விளம்பர வருமான சரிபார்ப்பு (Captcha)</span>
          </h3>
          <p style="font-size:15px;color:var(--gray-600);line-height:1.75;">
            <span class="lang-en">To prevent fraudulent ad earnings, every ad watch session must be completed in full. After completing the ad, users must successfully submit a number-calculation captcha for the earnings to be credited to their e-wallet. Incomplete ad views or failed captcha submissions will not earn any balance.</span>
            <span class="lang-ta">விளம்பர வருமான முறையின் நம்பகத்தன்மையை உறுதிப்படுத்த, ஒவ்வொரு விளம்பரத்தையும் முழுமையாகப் பார்க்க வேண்டும்.
            விளம்பரம் முடிந்த பிறகு, பயனர் ஒரு எளிய எண்-கணக்கீட்டு Captcha-வை சரியாக நிறைவு செய்ய வேண்டும். அதன் பிறகே வருமானம் e-Wallet-க்கு சேர்க்கப்படும்.
            முழுமையற்ற விளம்பர பார்வைகள் அல்லது Captcha சரிபார்ப்பில் தோல்வியடைந்த அமர்வுகளுக்கு எந்த வருமானமும் வழங்கப்படாது..</span>
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Disclaimer section -->
<section class="section bg-gray" aria-labelledby="disclaimer-h">
  <div class="container">
    <div class="text-center">
      <div class="badge" data-aos><span class="lang-en">Important Disclaimers</span><span class="lang-ta">முக்கிய பொறுப்புத்துறப்புகள்</span></div>
      <h2 class="section-title" id="disclaimer-h" data-aos data-aos-delay="100">
        <span class="lang-en">What Tamil Pasanga Cannot Guarantee</span>
        <span class="lang-ta">Tamil Pasanga உறுதி செய்ய முடியாத விஷயங்கள்</span>
      </h2>
      <p class="section-sub" data-aos data-aos-delay="200">
        <span class="lang-en">We take every step to maintain platform safety, but certain areas are outside our direct control.</span>
        <span class="lang-ta">தளத்தின் பாதுகாப்பையும் நம்பகத்தன்மையையும் உறுதிப்படுத்த எங்களால் முடிந்த அனைத்து முயற்சிகளையும் மேற்கொள்கிறோம். இருப்பினும், சில விஷயங்கள் எங்கள் நேரடி கட்டுப்பாட்டிற்கு வெளியே உள்ளன என்பதை பயனர்கள் அறிந்திருக்க வேண்டும்.</span>
      </p>
    </div>
    <div class="grid-2-eq" style="max-width:900px;margin:0 auto;">
      <div style="background:#fff;border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;" data-aos>
        <div style="font-size:30px;margin-bottom:12px;"><i class="bi bi-globe2"></i></div>
        <h3 style="font-size:16px;font-weight:700;color:var(--gray-900);margin-bottom:8px;">
          <span class="lang-en">External Websites &amp; URLs</span>
          <span class="lang-ta">வெளிப்புற இணையதளங்கள் மற்றும் URL-கள்</span>
        </h3>
        <p style="font-size:14px;color:var(--gray-500);line-height:1.75;">
          <span class="lang-en">Users can add a website URL to their profile. These URLs are not verified by Tamil Pasanga. We are not responsible for any misleading or harmful content on external websites linked from user profiles.</span>
          <span class="lang-ta">பயனர்கள் தங்களின் Profile-இல் இணையதள முகவரிகளை (URL) சேர்க்கலாம். இந்த இணையதளங்கள் Tamil Pasanga-வால் சரிபார்க்கப்படுவதில்லை.
            பயனர் Profile-களில் இணைக்கப்பட்டுள்ள வெளிப்புற இணையதளங்களில் உள்ள தவறான, வழிதவறச் செய்யும் அல்லது தீங்கு விளைவிக்கும் உள்ளடக்கங்களுக்கு Tamil Pasanga எந்தவித பொறுப்பும் ஏற்காது.</span>
        </p>
      </div>
      <div style="background:#fff;border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;" data-aos data-aos-delay="100">
        <div style="font-size:30px;margin-bottom:12px;"><i class="bi bi-shop"></i></div>
        <h3 style="font-size:16px;font-weight:700;color:var(--gray-900);margin-bottom:8px;">
          <span class="lang-en">Shop Addresses &amp; Contact Info</span>
          <span class="lang-ta">கடை முகவரிகள் மற்றும் தொடர்பு தகவல்கள்</span>
        </h3>
        <p style="font-size:14px;color:var(--gray-500);line-height:1.75;">
          <span class="lang-en">Shop listings, addresses, and contact details are user-submitted. We do not verify the accuracy of this information. We strongly advise users to visit shops in person and verify details before making any purchase.</span>
          <span class="lang-ta">கடை பட்டியல்கள், முகவரிகள் மற்றும் தொடர்பு விவரங்கள் பயனர்களால் வழங்கப்படும் தகவல்களின் அடிப்படையில் வெளியிடப்படுகின்றன. அவற்றின் துல்லியத்தன்மையை நாங்கள் சரிபார்க்கவில்லை.
            எந்தவொரு பொருளையும் வாங்குவதற்கு முன், கடைக்கு நேரில் சென்று தகவல்களை உறுதிப்படுத்திக் கொள்ளுமாறு பயனர்களுக்கு வலியுறுத்துகிறோம்.</span>
        </p>
      </div>
      <div style="background:#fff;border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;" data-aos>
        <div style="font-size:30px;margin-bottom:12px;"><i class="bi bi-house"></i></div>
        <h3 style="font-size:16px;font-weight:700;color:var(--gray-900);margin-bottom:8px;">
          <span class="lang-en">Charity &amp; Orphanage Listings</span>
          <span class="lang-ta">கருணை இல்லங்கள் மற்றும் ஆதரவற்றோர் இல்ல பட்டியல்கள்</span>
        </h3>
        <p style="font-size:14px;color:var(--gray-500);line-height:1.75;">
          <span class="lang-en">House of Mercy, orphanage, and voluntary team listings are community-submitted and not verified by us. If you wish to donate or support, we advise a direct in-person visit to confirm the organisation before giving any contributions.</span>
          <span class="lang-ta">கருணை இல்லங்கள், ஆதரவற்றோர் இல்லங்கள் மற்றும் தன்னார்வ சேவை அமைப்புகளின் பட்டியல்கள் சமூக உறுப்பினர்களால் சமர்ப்பிக்கப்படுகின்றன. இவை Tamil Pasanga-வால் தனித்தனியாக சரிபார்க்கப்படுவதில்லை.
            நன்கொடை வழங்கவோ அல்லது உதவிகளைச் செய்யவோ விரும்பும் பயனர்கள், அந்த அமைப்புகளை நேரில் சென்று உறுதிப்படுத்திய பிறகே எந்தவொரு பங்களிப்பையும் வழங்குமாறு பரிந்துரைக்கப்படுகிறது.</span>
        </p>
      </div>
      <div style="background:#fff;border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;" data-aos data-aos-delay="100">
        <div style="font-size:30px;margin-bottom:12px;"><i class="bi bi-heart-pulse"></i></div>
        <h3 style="font-size:16px;font-weight:700;color:var(--gray-900);margin-bottom:8px;">
          <span class="lang-en">Health &amp; Wellness Information</span>
          <span class="lang-ta">ஆரோக்கியம் மற்றும் நலவாழ்வு தகவல்கள்</span>
        </h3>
        <p style="font-size:14px;color:var(--gray-500);line-height:1.75;">
          <span class="lang-en">Health tips, natural remedies, and traditional medicine posts are for awareness purposes only. If you are already suffering from a disease or medical condition, you must consult a qualified doctor. Do not use platform content as a substitute for professional medical advice.</span>
          <span class="lang-ta">ஆரோக்கிய குறிப்புகள், இயற்கை மருத்துவம் மற்றும் பாரம்பரிய சிகிச்சை தொடர்பான பதிவுகள் விழிப்புணர்வு நோக்கத்திற்காக மட்டுமே பகிரப்படுகின்றன.
            நீங்கள் ஏற்கனவே ஏதேனும் நோய் அல்லது மருத்துவ நிலைமையால் பாதிக்கப்பட்டிருந்தால், தகுதியான மருத்துவரின் ஆலோசனையை கட்டாயம் பெற வேண்டும். தளத்தில் பகிரப்படும் தகவல்களை தொழில்முறை மருத்துவ ஆலோசனைக்கு மாற்றாக பயன்படுத்தக் கூடாது.
            உங்கள் உடல்நலம் தொடர்பான முடிவுகளை எடுக்கும் முன் எப்போதும் மருத்துவரை அணுகுவது அவசியம்.</span>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Report section -->
<section class="section" aria-labelledby="report-h">
  <div class="container">
    <div class="grid-2">
      <div>
        <div class="badge" data-aos><span class="lang-en">Community Reporting</span><span class="lang-ta">சமூக புகாரளிப்பு முறை</span></div>
        <h2 class="section-title" id="report-h" data-aos data-aos-delay="100">
          <span class="lang-en">See Something? <span class="highlight">Report It.</span></span>
          <span class="lang-ta">ஏதாவது தவறாகத் தெரிகிறதா? <span class="highlight">புகாரளியுங்கள்.</span></span>
        </h2>
        <p style="font-size:16px;color:var(--gray-500);line-height:1.85;margin-bottom:16px;" data-aos data-aos-delay="200">
          <span class="lang-en">Tamil Pasanga's safety system depends on every community member playing their part. If you see harmful, fake, or violating content, use the in-app report button.</span>
          <span class="lang-ta">Tamil Pasanga-வின் பாதுகாப்பு அமைப்பு, சமூகத்தின் ஒவ்வொரு உறுப்பினரும் பொறுப்புடன் செயல்படுவதையே அடிப்படையாகக் கொண்டுள்ளது. தீங்கு விளைவிக்கும், போலியான அல்லது விதிமுறைகளை மீறும் உள்ளடக்கங்களை நீங்கள் கண்டால், செயலியில் உள்ள Report வசதியை பயன்படுத்தி புகாரளிக்கலாம்.</span>
        </p>
        <p style="font-size:16px;color:var(--gray-500);line-height:1.85;margin-bottom:28px;" data-aos data-aos-delay="300">
          <span class="lang-en">Valid reports are reviewed by our admin team. When your report is confirmed as a genuine violation, the Supercoins you spent to report are refunded with bonus credits as a thank-you for keeping the community safe.</span>
          <span class="lang-ta">சமர்ப்பிக்கப்படும் அனைத்து புகார்களும் எங்கள் நிர்வாகக் குழுவால் பரிசீலிக்கப்படும். உங்கள் புகார் உண்மையான விதிமுறை மீறலாக உறுதிப்படுத்தப்பட்டால், புகாரளிக்க பயன்படுத்திய Supercoins உங்களுக்கு திருப்பி வழங்கப்படும். மேலும், சமூகத்தை பாதுகாப்பாக வைத்திருக்க உதவியதற்காக கூடுதல் Supercoin வெகுமதியும் வழங்கப்படலாம்.</span>
        </p>
        <ul class="about-check-list" data-aos data-aos-delay="400">
          <li><span class="check-icon"><i class="bi bi-check-lg"></i></span> <span class="lang-en">Report posts, shops, comments, or profiles</span><span class="lang-ta">இடுகைகள், கடைகள், கருத்துகள் அல்லது சுயவிவரங்களை புகாரளிக்கவும்</span></li>
          <li><span class="check-icon"><i class="bi bi-check-lg"></i></span> <span class="lang-en">Reports are reviewed by our admin team</span><span class="lang-ta">புகார்கள் எங்கள் நிர்வாக குழுவால் மதிப்பாய்வு செய்யப்படும்</span></li>
          <li><span class="check-icon"><i class="bi bi-check-lg"></i></span> <span class="lang-en">Valid reporters earn Supercoin refund + bonus</span><span class="lang-ta">சரியான புகாரளிப்பவர்கள் சூப்பர்காயின் திரும்பப் பெறுதல் + போனஸ் பெறுவார்கள்</span></li>
          <li><span class="check-icon"><i class="bi bi-check-lg"></i></span> <span class="lang-en">Anonymous reporting available in-app</span><span class="lang-ta">பயனர்களின் தனியுரிமையை பாதுகாக்க, செயலியில் பெயர் வெளிப்படாமல் (Anonymous) புகாரளிக்கும் வசதி வழங்கப்பட்டுள்ளது</span></li>
        </ul>
      </div>
      <div class="about-visual" data-aos="fade-left">
        <div class="about-visual-emoji"><i class="bi bi-shield-check"></i></div>
      </div>
    </div>
  </div>
</section>

<section class="cta-section" aria-label="Download CTA">
  <div class="container">
    <div class="badge badge-white" data-aos><span class="lang-en">Safe Platform</span><span class="lang-ta">பாதுகாப்பான தளம்</span></div>
    <h2 class="section-title section-title-white" data-aos data-aos-delay="100">
      <span class="lang-en">Join a responsible community</span>
      <span class="lang-ta">பொறுப்பான சமூகத்தில் இணையுங்கள்</span>
    </h2>
    <p class="section-sub section-sub-white" data-aos data-aos-delay="200" style="margin-bottom:0;">
      <span class="lang-en">Tamil Pasanga is built on trust, awareness, and accountability. Download the app and be part of something meaningful.</span>
      <span class="lang-ta">நம்பிக்கை, விழிப்புணர்வு மற்றும் பொறுப்புணர்வு ஆகியவற்றின் அடிப்படையில் உருவாக்கப்பட்ட தளமே Tamil Pasanga. அர்த்தமுள்ள ஒரு மாற்றத்தின் பகுதியாக இன்று நீங்கள் இணையலாம்.</span>
    </p>
    <div class="store-btns" data-aos data-aos-delay="300">
      <a href="https://play.google.com/store/apps/details?id=in.tamilpasanga.app" class="store-btn" target="_blank" rel="noopener"><i class="bi bi-google-play"></i><div><span class="store-btn-sub"><span class="lang-en">Get it on</span><span class="lang-ta">பெறுங்கள்</span></span><span class="store-btn-name">Google Play</span></div></a>
      <a href="https://apps.apple.com/app/id000000000" class="store-btn" target="_blank" rel="noopener"><i class="bi bi-apple"></i><div><span class="store-btn-sub"><span class="lang-en">Download on the</span><span class="lang-ta">பதிவிறக்கவும்</span></span><span class="store-btn-name">App Store</span></div></a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
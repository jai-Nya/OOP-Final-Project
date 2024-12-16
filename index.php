<?php
// Read the content from the text file into an array
$content = file('includes/content.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Initialize an empty array to store key-value pairs
$content_data = array();

foreach ($content as $line) {
    // Split the line by the first equal sign (=) to get key and value
    list($key, $value) = explode('=', $line, 2);
    $content_data[$key] = $value; // Store it in the associative array
}

// Text file -> PHP Variable
$homepage_text = $content_data['homepage_text'];
$about_me_text = $content_data['about_me_text'];
$projects_text = $content_data['projects_text'];
$skills_text = $content_data['skills_text'];
$contact_text = $content_data['contact_text'];
$aka_text = $content_data['aka_text'];
$homepage_title = $content_data['homepage_title'];
$homepage_description = $content_data['homepage_description'];
$about_me_paragraph = $content_data['about_me_paragraph'];
$contact_title = $content_data['contact_title'];
$contact_email = $content_data['contact_email'];
$contact_phone = $content_data['contact_phone'];
$skills_list = explode('*', $content_data['skills_list']);
?>

<!DOCTYPE html>
<html data-wf-page="675996d20b9c25907e53a520" data-wf-site="675996d20b9c25907e53a512" data-wf-status="1">
<head>
  <meta charset="utf-8" />
  <title>another OOP r[e</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Webflow" name="generator" />
  <link href="assets/css/webflow-style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar">
    <div class="nav">
      <header class="section">
        <a href="index.php" class="button headerbuttsel w-button"><span class="text-span headtextsel"><?php echo $homepage_text; ?></span></a>
        <a href="about-me.php" class="button headerbuttunsel w-button"><span class="text-span headtextunsel"><?php echo $about_me_text; ?></span></a>
        <a href="projects.php" class="button headerbuttunsel w-button"><span class="text-span headtextunsel"><?php echo $projects_text; ?></span></a>
        <a href="skills.php" class="button headerbuttunsel w-button"><span class="text-span headtextunsel"><?php echo $skills_text; ?></span></a>
        <a href="index.php#contact-section" class="contactbutton contact w-button" id="contact-button"><span class="contact"><?php echo $contact_text; ?></span></a>
      </header>
    </div>
    <img src="assets/images/jainyalogo.png" loading="lazy" width="180" sizes="180px" alt="Logo" class="image-3 logo" />
  </div>

  <img src="assets/images/fill-bg.c5ecc5f.png" loading="lazy" sizes="100vw" srcset="assets/images/fill-bg.c5ecc5f-p-500.png 500w, assets/images/fill-bg.c5ecc5f-p-800.png 800w, assets/images/fill-bg.c5ecc5f-p-1080.png 1080w, assets/images/fill-bg.c5ecc5f.png 1442w" alt="" class="image-10" />

  <section class="homepage">
    <div class="div-block-2">
      <div class="w-layout-grid grid">
        <h1 class="heading-5"><?php echo $homepage_title; ?></h1>
        <p class="paragraph-2"><?php echo $homepage_description; ?></p>
      </div>
      <p class="paragraph"><?php echo $aka_text; ?></p>
    </div>
  </section>

  <section class="aboutme">
    <div class="div-block-5">
      <div>
        <img class="image-6" src="assets/images/chara-panel.20d68d6.png" alt="" style="opacity:0" sizes="(max-width: 2681px) 77vw, 2065px" data-w-id="ea14306d-e176-9e83-94d1-ba936d5193c7" loading="lazy" srcset="assets/images/chara-panel.20d68d6-p-500.png 500w, assets/images/chara-panel.20d68d6-p-800.png 800w, assets/images/chara-panel.20d68d6-p-1080.png 1080w, assets/images/chara-panel.20d68d6-p-1600.png 1600w, assets/images/chara-panel.20d68d6-p-2000.png 2000w, assets/images/chara-panel.20d68d6.png 2065w" />
        <img src="assets/images/chara-panel-bg.86c2c99.png" loading="lazy" sizes="(max-width: 2681px) 77vw, 2065px" srcset="assets/images/chara-panel-bg.86c2c99-p-500.png 500w, assets/images/chara-panel-bg.86c2c99-p-800.png 800w, assets/images/chara-panel-bg.86c2c99-p-1080.png 1080w, assets/images/chara-panel-bg.86c2c99-p-1600.png 1600w, assets/images/chara-panel-bg.86c2c99-p-2000.png 2000w, assets/images/chara-panel-bg.86c2c99.png 2065w" alt="" class="image-8" />
        <img src="assets/images/inner-title.3d621d1.png" loading="lazy" sizes="(max-width: 991px) 100vw, 991px" srcset="assets/images/inner-title.3d621d1-p-500.png 500w, assets/images/inner-title.3d621d1-p-800.png 800w, assets/images/inner-title.3d621d1.png 991w" alt="" class="image-4" />
        <img src="assets/images/fill-black-short.9c5f6aa.png" loading="lazy" sizes="(max-width: 2562px) 100vw, 2562px" srcset="assets/images/fill-black-short.9c5f6aa-p-500.png 500w, assets/images/fill-black-short.9c5f6aa.png 2562w" alt="" class="image-5" />
        <div class="w-clearfix">
          <h1 class="heading-6">About Me</h1>
          <p class="paragraph-3"><?php echo $about_me_paragraph; ?></p>
          <a href="about-me.php" class="button-2 w-button">More About Me &gt;</a>
        </div>
      </div>
    </div>
  </section>

  <section class="projects">
    <div class="div-block-6 w-clearfix">
      <h1 class="heading-7">Projects</h1>
      <div data-delay="4000" data-animation="slide" class="slider w-slider" data-autoplay="true" data-easing="ease" data-hide-arrows="true" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="20" data-duration="500" data-infinite="true">
        <div class="mask w-slider-mask">
          <div class="slide w-slide">
            <img src="assets/images/chatbot.PNG" loading="lazy" sizes="(max-width: 767px) 100vw, 900px" srcset="assets/images/chatbot.PNG 500w, assets/images/chatbot-p-800.PNG 800w, assets/images/chatbot.PNG 1000w" alt="" class="image-9" />
          </div>
          <div class="w-slide">
            <img src="assets/images/12-12-24.png" loading="lazy" sizes="(max-width: 767px) 100vw, 900px" srcset="assets/images/12-12-24-p-500.png 500w, assets/images/12-12-24-p-800.png 800w, assets/images/12-12-24-p-1080.png 1080w, assets/images/12-12-24-p-1600.png 1600w, assets/images/12-12-24.png 1920w" alt="" />
          </div>
          <div class="w-slide"></div>
        </div>
        <div class="w-slider-arrow-left">
          <div class="w-icon-slider-left"></div>
        </div>
        <div class="w-slider-arrow-right">
          <div class="w-icon-slider-right"></div>
        </div>
        <div class="slide-nav w-slider-nav w-slider-nav-invert w-shadow w-round"></div>
        <a href="projects.php" class="learnmore w-button">Learn More &gt;</a>
      </div>
    </div>
  </section>

  <section class="skills">
    <div class="div-block-6">
      <div class=>
        <img class="image-6" src="assets/images/chara-panel.20d68d6.png" alt="" style="opacity:0" sizes="(max-width: 2681px) 77vw, 2065px" data-w-id="e4f8df23-4ce6-0190-78bf-b8459cd56c1e" loading="lazy" srcset="assets/images/chara-panel.20d68d6-p-500.png 500w, assets/images/chara-panel.20d68d6-p-800.png 800w, assets/images/chara-panel.20d68d6-p-1080.png 1080w, assets/images/chara-panel.20d68d6-p-1600.png 1600w, assets/images/chara-panel.20d68d6-p-2000.png 2000w, assets/images/chara-panel.20d68d6.png 2065w" />
        <img src="assets/images/chara-panel-bg.86c2c99.png" loading="lazy" sizes="(max-width: 2681px) 77vw, 2065px" srcset="assets/images/chara-panel-bg.86c2c99-p-500.png 500w, assets/images/chara-panel-bg.86c2c99-p-800.png 800w, assets/images/chara-panel-bg.86c2c99-p-1080.png 1080w, assets/images/chara-panel-bg.86c2c99-p-1600.png 1600w, assets/images/chara-panel-bg.86c2c99-p-2000.png 2000w, assets/images/chara-panel-bg.86c2c99.png 2065w" alt="" class="image-8" />
        <img src="assets/images/inner-title.3d621d1.png" loading="lazy" sizes="(max-width: 991px) 100vw, 991px" srcset="assets/images/inner-title.3d621d1-p-500.png 500w, assets/images/inner-title.3d621d1-p-800.png 800w, assets/images/inner-title.3d621d1.png 991w" alt="" class="image-4" />
        <img src="assets/images/fill-black-short.9c5f6aa.png" loading="lazy" sizes="(max-width: 2562px) 100vw, 2562px" srcset="assets/images/fill-black-short.9c5f6aa-p-500.png 500w, assets/images/fill-black-short.9c5f6aa.png 2562w" alt="" class="image-5" />
        <div class="w-clearfix">
          <h1 class="heading-6"><?php echo $skills_text; ?></h1>
          <ul class="list">
            <?php foreach ($skills_list as $skill) { echo "<li class='list-item'>$skill</li>"; } ?>
          </ul>
          <a href="skills.php" class="button-2 w-button">More Skills &gt;</a>
        </div>
      </div>
    </div>
  </section>


  <section id="contact-section" class="contact">
    <div class="div-block-">
        <h1 class="heading-9"><?php echo $contact_title; ?></h1>
        <div class="form-block w-form">
        <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form" data-wf-page-id="675996d20b9c25907e53a520" data-wf-element-id="6c1c4605-2631-5b0b-10be-7ba278b24998" data-turnstile-sitekey="0x4AAAAAAAQTptj2So4dx43e">
          <label for="name" class="field-label">Name</label>
          <input class="text-field-2 w-input" maxlength="256" name="name" data-name="Name" placeholder="" type="text" id="name" />
          <label for="email" class="field-label-2">Email Address</label>
          <input class="text-field-3 w-input" maxlength="256" name="email" data-name="Email" placeholder="" type="email" id="email" required="" />
          <label for="email-2" class="field-label-3">Message</label>
          <input class="text-field w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" type="email" id="email-2" required="" />
          <input type="submit" data-wait="Please wait..." class="submit-button w-button" value="Submit" />
        </form>
        <div class="w-form-done">
        <div class="contact-details">
          <p><strong>Email:</strong> <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></p>
          <p><strong>Phone:</strong> <a href="tel:<?php echo $contact_phone; ?>"><?php echo $contact_phone; ?></a></p>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const logo = document.querySelector(".logo");
      const scrollThreshold = 200; // The scroll distance to trigger the change
      let isLogo2 = false; // Track which logo is currently displayed
  
      window.addEventListener("scroll", function () {
        const scrolled = window.scrollY > scrollThreshold;
  
        if (scrolled && !isLogo2) {
          isLogo2 = true;
          logo.classList.add("hidden"); // Fade out current logo
          setTimeout(() => {
            logo.src = "assets/images/jainyalogo2.png"; // Change to new logo
            logo.classList.remove("hidden"); // Fade in new logo
          }, 300); // Match the transition duration
        } else if (!scrolled && isLogo2) {
          isLogo2 = false;
          logo.classList.add("hidden"); // Fade out current logo
          setTimeout(() => {
            logo.src = "assets/images/jainyalogo.png"; // Change back to original logo
            logo.classList.remove("hidden"); // Fade in original logo
          }, 300); // Match the transition duration
        }
      });
    });
  </script> 

</body>
</html>


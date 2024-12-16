<?php
// Read the content of the text file
$skills_content = file('includes/skills.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Initialize arrays for the skill categories
$soft_skills = [];
$technical_skills = [];
$other_skills = [];

// Loop through each line in the file and parse it
foreach ($skills_content as $line) {
    list($category, $skills) = explode('=', $line, 2);
    $skills_array = explode(',', $skills);

    // Store the skills in the corresponding arrays based on category
    switch ($category) {
        case 'soft_skills':
            $soft_skills = $skills_array;
            break;
        case 'technical_skills':
            $technical_skills = $skills_array;
            break;
        case 'other_skills':
            $other_skills = $skills_array;
            break;
    }
}
?>


<!DOCTYPE html>
<html data-wf-page="6759b59f66a6fee7b250e15e" data-wf-site="675996d20b9c25907e53a512" data-wf-status="1">

<head>
    <meta charset="utf-8" />
    <title>About Me</title>
    <meta content="About Me" property="og:title" />
    <meta content="About Me" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="assets/css/webflow-style.css" rel="stylesheet" type="text/css" />
    </script>
    <script type="text/javascript">
        !function (o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="assets/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="assets/images/app-icon.png" rel="apple-touch-icon" />
</head>

<body>
    <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="navbar">
        <div class="nav">
            <header class="section">
                <a href="index.php" class="button headerbuttunsel w-button"><span
                        class="text-span headtextunsel">Homepage</span></a>
                <a href="about-me.php" class="button headerbuttunsel w-button"><span
                        class="text-span headtextunsel">About Me</span></a>
                <a href="projects.php" class="button headerbuttunsel w-button"><span
                        class="text-span headtextunsel">Projects</span></a>
                <a href="#" class="button headerbuttsel w-button"><span class="text-span headtextsel">Skills</span></a>
                <a href="index.php#contact-section" class="contactbutton contact w-button" id="contact-button"><span
                        class="contact">Contact</span></a>
            </header>
        </div>
        <img src="assets/images/jainyalogo2.png" loading="lazy" width="180" sizes="180px" alt="" class="image-3small" />
    </div>

    <section>
        <div>
            <img src="assets/images/inner-top.224793e.png" loading="lazy" sizes="(max-width: 1003px) 100vw, 1003px"
                srcset="assets/images/inner-top.224793e-p-500.png 500w, assets/images/inner-top.224793e-p-800.png 800w, assets/images/inner-top.224793e.png 1003w"
                alt="" class="image-11" />
            <img src="assets/images/bg-nav.daea1f6.png" loading="lazy" sizes="100vw"
                srcset="assets/images/bg-nav.daea1f6-p-500.png 500w, assets/images/bg-nav.daea1f6-p-800.png 800w, assets/images/bg-nav.daea1f6-p-1080.png 1080w, assets/images/bg-nav.daea1f6.png 1690w"
                alt="" class="image-12" />
            <div>
                <ul class="skills-list">
                    <li><strong>Soft Skills:</strong>
                        <ul>
                            <?php foreach ($soft_skills as $skill): ?>
                                <li><?php echo $skill; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><strong>Technical Skills:</strong>
                        <ul>
                            <?php foreach ($technical_skills as $skill): ?>
                                <li><?php echo $skill; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><strong>Other Skills:</strong>
                        <ul>
                            <?php foreach ($other_skills as $skill): ?>
                                <li><?php echo $skill; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <style>
        html {
            scroll-behavior: smooth;
            /* Smooth scrolling for all anchor links */
        }
    </style>

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/webflow-script.js" type="text/javascript"></script>
</body>

</html>
<?php include('content.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header>
    <img src="<?php echo $logoPath; ?>" alt="Logo" class="logo">
    <nav>
      <a href="index.php">Homepage</a>
      <a href="about.php">About Me</a>
      <a href="projects.php">Projects</a>
      <a href="skills.php">Skills</a>
      <a href="index.php#contact-section">Contact</a>
    </nav>
  </header>

  <section class="homepage">
    <h1><?php echo $title; ?></h1>
    <p><?php echo $bio; ?></p>
  </section>

  <section class="projects">
    <h2><?php echo $projectsTitle; ?></h2>
    <p><?php echo $projectsDescription; ?></p>
    <!-- Display your project details here -->
  </section>

  <section id="contact-section" class="contactme">
    <h1><?php echo $contactSectionTitle; ?></h1>
    <p><?php echo $contactSectionDescription; ?></p>
    <form action="processForm.php" method="POST">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      <label for="message">Message</label>
      <textarea id="message" name="message" required></textarea>
      <button type="submit">Submit</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2024 Jair Dave Molavizar</p>
  </footer>

  <script src="assets/js/script.js"></script>
</body>
</html>

<script>
  document.addEventListener("scroll", function () {
    const logo = document.querySelector(".image-3"); // Select the logo element
    const scrollThreshold = 200; // Change the threshold as per your requirement

    if (window.scrollY > scrollThreshold) {
      // Change to the second logo if scrolled past the threshold
      logo.src = "images/jainyalogo2.png";
    } else {
      // Revert back to the original logo if above the threshold
      logo.src = "images/jainyalogo.png";
    }
  });
</script>

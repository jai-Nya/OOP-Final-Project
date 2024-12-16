<style>
    html {
      scroll-behavior: smooth; /* Smooth scrolling for all anchor links */
    }
  </style>

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

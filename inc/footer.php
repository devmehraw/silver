
      <!-- Footer -->

      <footer id="footer" class="footer">
        <div class="container">
          <div class="row-base row">
            <div class="col-base text-left-md col-md-4">
              <a href="#" class="brand">
                <img class="brand-logo" style="border-radius: 20px;" src="assets/img/logo-bg.png" />
              </a>
            </div>
            <div class="text-center col-base col-md-4">
              Experience the beauty of nature at SilverLining — where every moment is a memory waiting to be made!
              <br>
              <br>
              © SilverLining 2024. All Rights Reserved.
            </div>
          </div>
        </div>
      </footer>

      <!-- Lines -->

      <div class="page-lines">
        <div class="container">
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPTS -->
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
    
            $.ajax({
                type: 'POST',
                url: 'email.php',
                data: $(this).serialize(),
                success: function(response) {
                    if (response === "success") {
                        $('.success-message').show();
                        $('.error-message').hide();
                        $('#contactForm')[0].reset(); // Reset the form
                    } else {
                        $('.error-message').show();
                        $('.success-message').hide();
                    }
                },
                error: function() {
                    $('.error-message').show();
                    $('.success-message').hide();
                }
            });
        });
    });
    </script>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/smoothscroll.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <!-- SLIDER REVOLUTION -->
  <script src="assets/js/rev-slider/jquery.themepunch.tools.min.js"></script>
  <script src="assets/js/rev-slider/jquery.themepunch.revolution.min.js"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS   -->
  <script src="assets/js/rev-slider/revolution.extension.actions.min.js"></script>
  <script src="assets/js/rev-slider/revolution.extension.carousel.min.js"></script>
  <script src="assets/js/rev-slider/revolution.extension.kenburn.min.js"></script>
  <script src="assets/js/rev-slider/revolution.extension.layeranimation.min.js"></script>
  <script src="assets/js/rev-slider/revolution.extension.migration.min.js"></script>
  <script src="assets/js/rev-slider/revolution.extension.navigation.min.js"></script>
  <script src="assets/js/rev-slider/revolution.extension.parallax.min.js"></script>
  <script src="assets/js/rev-slider/revolution.extension.slideanims.min.js"></script>
  <script src="assets/js/rev-slider/revolution.extension.video.min.js"></script>
  <script src="assets/js/interface.js"></script>
</body>

</html>
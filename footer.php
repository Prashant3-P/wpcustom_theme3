<footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><?php bloginfo('name'); ?></h2>
              <p><?php bloginfo( 'description'); ?></p>
              <ul class="ftco-footer-social list-unstyled float-lft mt-3">
                <li class="ftco-animate"><a href="https://twitter.com/"><span class="icon-twitter"><i class="fab fa-facebook-f"></i>
</span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"><i class="fab fa-twitter"></i></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"><i class="fab fa-instagram"></i></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
          	<div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Recent Posts</h2>
            <div class="row">
               <!-- Get Recent Posts template file -->
               <?php get_template_part('templates/recent','post');  ?>
            </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                    <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>  
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><i class="fas fa-map-marker-alt mr-3"></i><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><i class="fas fa-phone mr-3"></i><span class="text">+2 392 3929 210</span></li>
                  <li><i class="fas fa-envelope mr-3"></i><span class="text">info@yourdomain.com</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p class="mb-0">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());

              </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="www.Quilava.com" target="_blank">BBootstrapp 4</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>


<?php wp_footer(); ?>

</body>
</html>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CNTT
 */

?>

<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <strong><span><a href="<?php echo get_home_url()?>"><?php echo get_field('copyright','option'); ?></a></span></strong>
            <?php echo get_field('content_left','option');?>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <?php
              $sp = get_field('sp', 'option');
              $tt = get_field('tt', 'option');
              $link_1 = get_field('link_1', 'option');
              $link_2 = get_field('link_2', 'option');
              $link_3 = get_field('link_3', 'option');
              $link_4 = get_field('link_4', 'option');
              $link_5 = get_field('link_5', 'option');
            ?>
            <h4><?php echo $sp ?></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $link_1['url'] ?>"><?php echo $link_1['title'] ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $link_2['url'] ?>"><?php echo $link_2['title'] ?></a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4><?php echo $tt ?></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $link_3['url'] ?>"><?php echo $link_3['title'] ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $link_4['url'] ?>"><?php echo $link_4['title'] ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $link_5['url'] ?>"><?php echo $link_5['title'] ?></a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <strong><span><?php echo get_field('r_label','option'); ?></span></strong>
            <?php echo get_field('content_right','option'); ?>
            <?php echo do_shortcode(get_field('form_3', 'option')); ?>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span><?php echo get_field('copyright','option'); ?></span></strong>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="<?php echo get_field('twit','option'); ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="<?php echo get_field('fb','option'); ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="<?php echo get_field('insta','option'); ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo get_template_directory_uri()?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo get_template_directory_uri()?>/assets/js/main.js"></script>
  <?php wp_footer(); ?>
</body>

</html>
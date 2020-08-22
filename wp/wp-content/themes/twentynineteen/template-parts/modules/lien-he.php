<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <?php 
          $l_title = get_field('l_title');
          $l_content = get_field('l_content');
          $google_map = get_field('google_map');
        ?>
        <div class="section-title">
          <h2><?php echo $l_title ?></h2>
          <p><?php echo $l_content ?></p>
        </div>
      </div>

      <div>
        <?php echo $google_map ?>
      </div>

      <div class="container">
        <div class="row mt-5">
          <?php 
            $location = get_field('location');
            $mail = get_field('mail');
            $phone = get_field('phone');
          ?>
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <p><?php echo $location ?></p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <p><?php echo $mail ?></p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <p><?php echo $phone ?></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <?php 
              echo do_shortcode(get_field('form_2'));
            ?>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
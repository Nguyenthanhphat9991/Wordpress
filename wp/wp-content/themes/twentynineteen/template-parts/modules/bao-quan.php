<!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <?php 
          $b_image_1 = get_field('b_image_1');
          $b_title_1 = get_field('b_title_1');
          $b_content_1 = get_field('b_content_1');
          $b_image_2 = get_field('b_image_2');
          $b_title_2 = get_field('b_title_2');
          $b_content_2 = get_field('b_content_2');
          $b_image_3 = get_field('b_image_3');
          $b_title_3 = get_field('b_title_3');
          $b_content_3 = get_field('b_content_3');
        ?>
        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <div class="testimonial-img"><img src="<?php echo $b_image_1['url'] ?>"></div>  
              <h3><?php echo $b_title_1 ?></h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php echo $b_content_1 ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <div class="testimonial-img"><img src="<?php echo $b_image_2['url'] ?>"></div>
              <h3><?php echo $b_title_2 ?></h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php echo $b_content_2 ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <div class="testimonial-img"><img src="<?php echo $b_image_3['url'] ?>"></div>
              <h3><?php echo $b_title_3 ?></h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php echo $b_content_3 ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
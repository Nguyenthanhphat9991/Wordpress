<!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">
        <?php
          $a_title = get_field('a_title');
          $a_content = get_field('a_content');
        ?>

        <div class="section-title">
          <h2><?php echo $a_title ?></h2>
          <p><?php echo $a_content ?></p>
        </div>
        <?php 
        echo do_shortcode(get_field('form_1'));
        ?>

      </div>
    </section><!-- End Appointment Section -->

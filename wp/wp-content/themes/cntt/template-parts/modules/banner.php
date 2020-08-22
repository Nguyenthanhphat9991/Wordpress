
  <?php
  $image = get_field('image');
  $intro = get_field('intro');
  $button = get_field('button');
  ?>
  <section id="hero" class="d-flex align-items-top" style="background: url(<?php echo $image['url']?>) top center; "> 
    <div class="container">
      <?php echo $intro?>
      <a href="<?php echo $button['url'] ?>" class="appointment-btn scrollto"><?php echo $button['title'] ?></a>   
    </div>
  </section>
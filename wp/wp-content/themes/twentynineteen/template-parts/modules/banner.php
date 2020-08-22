
  <?php
  $image = get_field('image');
  $intro = get_field('intro');
  $button = get_field('button');
  ?>
  <section id="hero" class="d-flex align-items-center" style="background: url(<?php echo $image['url']?>) top center;"> 
    <div class="container">
      <?php echo $intro?>
      <a href="<?php echo $button['url'];?>" class="btn-get-started scrollto"><?php echo $button['title'];?></a>
    </div>
  </section>
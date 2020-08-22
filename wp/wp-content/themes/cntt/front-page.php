<!DOCTYPE html>
<html lang="en">
<?php
get_header();
get_template_part( 'template-parts/modules/banner');
?>

<main id="main">
    <?php 
    get_template_part( 'template-parts/modules/content-box');
    ?>

    <?php 
    get_template_part( 'template-parts/modules/gioi-thieu');
    ?>

    <?php 
    get_template_part( 'template-parts/modules/counts');
    ?>
    
    <?php 
    get_template_part( 'template-parts/modules/vang');
    ?>

    <?php 
    get_template_part( 'template-parts/modules/appointment');
    ?>

    <?php 
    get_template_part( 'template-parts/modules/gia-tri');
    ?>

    <?php 
    get_template_part( 'template-parts/modules/da-quy');
    ?>

    <?php 
    get_template_part( 'template-parts/modules/questions');
    ?>

    <?php 
    get_template_part( 'template-parts/modules/bao-quan');
    ?>

    <?php 
    get_template_part( 'template-parts/modules/gallery');
    ?>

    <?php 
    get_template_part( 'template-parts/modules/lien-he');
    ?>

  </main><!-- End #main -->

 <?php
get_footer(); ?> 


</body>

</html>
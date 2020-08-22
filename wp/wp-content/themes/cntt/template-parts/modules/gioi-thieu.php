<?php 
$video = get_field('video');
$v_image = get_field('v_image');
$topic = get_field('topic');
$content_1 = get_field('content_1');
$content_2 = get_field('content_2');
$content_3 = get_field('content_3');
?>
<section id="gioi-thieu" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch "   
          style="background: url(<?php echo $v_image['url']?>) top center;" >
            <a href="<?php echo $video['url'] ?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <?php echo $topic ?>

            <div class="icon-box">
              <div style="margin-right: 10px;" class="icon"><i class="bx bx-fingerprint"></i></div>
              <div ><?php echo $content_1 ?></div>
            </div> 

            <div class="icon-box">
              <div style="margin-right: 10px;" class="icon"><i class="bx bx-gift"></i></div>
              <div><?php echo $content_2?></div>
            </div>

            <div class="icon-box">
              <div  style="margin-right: 10px;" class="icon"><i class="bx bx-atom"></i></div>
              <div><?php echo $content_3 ?></div>
            </div>

          </div>
        </div>

      </div>
    </section>
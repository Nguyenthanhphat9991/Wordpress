<?php 
$content_box_1 = get_field('content_box_1');
$button_box_1 = get_field('button_box_1');
$content_box_2 = get_field('content_box_2');
$content_box_3 = get_field('content_box_3');
$content_box_4 = get_field('content_box_4');
?>
<section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <?php echo $content_box_1 ?>
              <div class="text-center">
                <a href="#" class="more-btn"><?php echo $button_box_1['title'] ?><i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <?php echo $content_box_2 ?>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <?php echo $content_box_3 ?>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <?php echo $content_box_4 ?>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
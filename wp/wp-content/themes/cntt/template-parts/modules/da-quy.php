<section id="da-quy" class="doctors">
      <div class="container">
        <?php 
          $d_title = get_field('d_title');
          $d_content = get_field('d_content');
          $d_image_1 = get_field('d_image_1');
          $d_title_1 = get_field('d_title_1');
          $d_content_1 = get_field('d_content_1');
          $d_image_2 = get_field('d_image_2');
          $d_title_2 = get_field('d_title_2');
          $d_content_2 = get_field('d_content_2');
          $d_image_3 = get_field('d_image_3');
          $d_title_3 = get_field('d_title_3');
          $d_content_3 = get_field('d_content_3');
          $d_image_4 = get_field('d_image_4');
          $d_title_4 = get_field('d_title_4');
          $d_content_4 = get_field('d_content_4');
         ?>
        <div class="section-title">
          <h2><?php echo $d_title ?></h2>
          <p><?php echo $d_content ?></p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?php echo $d_image_1['url'] ?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $d_title_1 ?></h4>
                <p><?php echo $d_content_1 ?></p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?php echo $d_image_2['url'] ?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $d_title_2 ?></h4>
                <p><?php echo $d_content_2 ?></p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?php echo $d_image_3['url'] ?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $d_title_3 ?></h4>
                <p><?php echo $d_content_3 ?></p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?php echo $d_image_4['url'] ?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $d_title_4 ?></h4>
                <p><?php echo $d_content_4 ?></p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

   
<section id="departments" class="departments">
      <div class="container">
        <?php
          $g_title = get_field('g_title'); 
          $g_content = get_field('g_content'); 
          $tab_1 = get_field('tab_1');
          $tab_1_content = get_field('tab_1_content');
          $tab_1_image = get_field('tab_1_image'); 
          $tab_2 = get_field('tab_2');
          $tab_2_content = get_field('tab_2_content');
          $tab_2_image = get_field('tab_2_image');
          $tab_3 = get_field('tab_3');
          $tab_3_content = get_field('tab_3_content');
          $tab_3_image = get_field('tab_3_image');
          $tab_4 = get_field('tab_4');
          $tab_4_content = get_field('tab_4_content');
          $tab_4_image = get_field('tab_4_image'); 
          $tab_5 = get_field('tab_5');
          $tab_5_content = get_field('tab_5_content');
          $tab_5_image = get_field('tab_5_image');   
        ?>
        <div class="section-title">
          <h2><?php echo $g_title ?></h2>
          <p><?php echo $g_content ?></p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1"><?php echo $tab_1 ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2"><?php echo $tab_2 ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3"><?php echo $tab_3 ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4"><?php echo $tab_4 ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5"><?php echo $tab_5 ?></a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <p><?php echo $tab_1_content ?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo $tab_1_image['url'] ?>">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <p><?php echo $tab_2_content ?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo $tab_2_image['url'] ?>">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <p><?php echo $tab_3_content ?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo $tab_3_image['url'] ?>">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <p><?php echo $tab_4_content ?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo $tab_4_image['url'] ?>">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <p><?php echo $tab_5_content ?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo $tab_5_image['url'] ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
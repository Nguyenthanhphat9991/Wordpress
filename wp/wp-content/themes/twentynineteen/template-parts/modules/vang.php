<!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <?php 
          $v_title = get_field('v_title');
          $v_content = get_field('v_content');
          $v_items = get_field('v_items');
        ?>
        <div class="section-title">
          <h2><?php echo $v_title?></h2>
          <p><?php echo $v_content?></p>
        </div>

        <div class="row">
          <?php foreach ($v_items as $key => $item) { ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="icofont-<?php echo $item['icon']?>"></i></div>
              <?php echo $item['content']?>
            </div>
          </div>
          <?php }?>
          
        </div>

          </div>
        </section>
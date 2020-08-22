<!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <?php
          $items = get_field('items');
          ?>
          <?php foreach ($items as $key => $item) {?>
              <div class="col-lg-3 col-md-6">
                <div class="count-box">
                  <i class="icofont-<?php echo $item['icon']?>"></i>
                  <span data-toggle="counter-up"><?php echo $item['number']?></span>
                  <p><?php echo $item['title']?></p>
                </div>
              </div>
          <?php }?>

        </div>

      </div>
    </section><!-- End Counts Section -->
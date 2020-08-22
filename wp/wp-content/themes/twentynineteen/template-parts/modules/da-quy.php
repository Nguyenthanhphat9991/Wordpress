
    <section id="doctors" class="doctors">
      <div class="container">
        <?php 
          $d_title = get_field('d_title');
          $d_content = get_field('d_content');
          $d_items = get_field('d_items');
        ?>
        <div class="section-title">
          <h2><?php echo $d_title ?></h2>
          <p><?php echo $d_content ?></p>
        </div>

        <div class="row">
          <?php foreach ($d_items as $key => $d_item) {?>
              <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start">
                  <div class="pic"><img src="<?php echo $d_item['image'] ?>" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4><?php echo $d_item['title'] ?></h4>
                    <p><?php echo $d_item['content'] ?></p>
                  </div>
                </div>
              </div>
          <?php }?>
        </div>
      </div>
    </section>

   

<section id="gallery" class="gallery">
      <div class="container">
        <?php 
          $ga_title = get_field('ga_title');
          $ga_content = get_field('ga_content');
          $ga_album = get_field('ga_album');
        ?>
        <div class="section-title">
          <h2><?php echo $ga_title ?></h2>
          <?php echo $gallery_content ?>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">
          <?php foreach ($ga_album as $key => $item) { ?>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
               <a href="<?php echo $item['url']?>" class="venobox" data-gall="gallery-item">
                <img src="<?php echo $item['url']?>" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </section>

    

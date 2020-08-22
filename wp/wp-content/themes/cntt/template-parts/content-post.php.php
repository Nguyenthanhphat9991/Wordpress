<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CNTT
 */

?>
<div class="col-md-4">
  <div class="card mb-4 shadow-sm">
    <img src="<?php echo get_the_post_thumbnail_url();?>">
    <div class="card-body">
      <h3><?php echo get_the_title()?></h3>
      <?php the_excerpt();?>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
             <a href="<?php echo get_permalink()?>" class="btn btn-primary">Read more</a>
        </div>
        <small class="text-muted"><?php echo get_the_date()?></small>
      </div>
    </div>
  </div>
</div>
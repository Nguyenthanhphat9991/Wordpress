<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CNTT
 */

get_header();
?>

    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
          <div class="container">

            <div class="d-flex justify-content-between align-items-center">
              <h1><?php the_archive_title()?></h1>
              <ol>
                <li><a href="<?php echo get_home_url()?>">Home</a></li>
                <li><?php the_archive_title()?></li>
              </ol>
            </div>

          </div>
        </section><!-- End Breadcrumbs Section -->


        <section class="nhan">
          <div class="container">
            <?php if ( have_posts() ) : ?>
                <div class="row">
                <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
                endwhile;
                ?>
                </div>
            <?php
                the_posts_navigation();
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>
          </div>
        </section>


    </main><!-- #main -->

<?php
get_footer();
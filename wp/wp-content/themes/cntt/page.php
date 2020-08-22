<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
	          <h1><?php the_title()?></h1>
	        </div>

	      </div>
	    </section><!-- End Breadcrumbs Section -->

	    <section class="nhan">
	      <div class="container">
	        <?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
	      </div>
	    </section>

	  </main><!-- End #main -->

<?php
get_footer();

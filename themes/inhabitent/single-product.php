<?php

/**
 * The template for displaying all product posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="single-product">
		<?php while (have_posts()) : the_post(); ?>
			<div class="product">
				<?php get_template_part('template-parts/content', 'single-product'); ?>

			</div>
			<?php endwhile; // End of the loop. 
		?>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
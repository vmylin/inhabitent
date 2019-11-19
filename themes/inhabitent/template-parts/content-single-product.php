<?php

/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('large'); ?>
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		<p>Price: $<?php the_field('price') ?></p>
		<?php the_content(); ?>
		<?php
		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html('Pages:'),
			'after'  => '</div>',
		));
		?>
		<button><i class="fab fa-facebook-f"></i>like</button>
		<button><i class="fab fa-twitter"></i>tweet</button>
		<button><i class="fab fa-pinterest"></i>pin</button>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
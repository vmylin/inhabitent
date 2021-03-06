<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="shop-container">
			<?php $terms = get_terms(array(
				'taxonomy' => 'product_type',
				'hide_empty' => 0,
			));
			if (!empty($terms) && !is_wp_error($terms)) : //not empty and not error
				?>
				<div class="shop-page">
					<h1>SHOP STUFF</h1>
					<div class="shop-type">
						<div class="shop-stuff">
							<ul class="product-cat">
								<!-- meow :3 -->

								<?php foreach ($terms as $term) : ?>
									<li><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<?php $arg = array(
				'order' => 'ASC',
				'posts_per_page' => '16',
				'post_type' => 'product'
			);
			$shop = new WP_Query($arg); ?>
			<?php if ($shop->have_posts()) : ?>

				<div class="products-grid">
					<?php while ($shop->have_posts()) : $shop->the_post(); ?>
						<div class="products">
							<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>

							<p><?php the_title(); ?> $<?php the_field('price') ?></p>
						</div>
					<?php endwhile; ?>
				</div>

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<h2>Nothing found!</h2>
			<?php endif; ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<?php if (is_home() && !is_front_page()) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>
		<div class="hero-img">
			<?php
			if (has_post_thumbnail()) {
				the_post_thumbnail();
			}
			the_content();
			?>
			<img class="hero-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/project-04/images/logos/inhabitent-logo-full.svg" alt="inhabitent hero logo">
		</div>
		<div class="front-page-wrapper">

			<section class="product-info">
				<h2>Shop Stuff</h2>
				<?php
				$terms = get_terms(array(
					'taxonomy' => 'product_type',
					'hide_empty' => 0,
				));
				if (!empty($terms) && !is_wp_error($terms)) : //not empty and not error
					?>
					<div class="product-type">
						<?php foreach ($terms as $term) : ?>
							<div class="product-icon">
								<img class="<?php echo $term->name; ?>" src="<?php echo get_template_directory_uri() . '/project-04/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
								<p><?php echo $term->description; ?></p>
								<p><a href="<?php echo get_term_link($term); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</section>

			<?php $postarg = array(
				'order' => 'DSC',
				'posts_per_page' => '3',
				'post_type' => 'post',
			);
			$journal = new WP_Query($postarg); ?>
			<h2>inhabitent journal</h2>
			<div class="journals">
				<?php if ($journal->have_posts()) : ?>

					<?php while ($journal->have_posts()) : $journal->the_post(); ?>
						<div class="single-journal">
							<div class="journal-img">
								<?php the_post_thumbnail() //set_post_thumbnail_size(800,800,array( 'center', 'center')));
										?>
							</div>
							<div class="journal-detail">
								<?php $comment_number = get_comments_number(); ?>

								<p><?php the_date(); ?> / <?php comments_number('0 Comments', '1 Comment', $comment_number . ' Comments'); ?></p>

								<h3><?php the_title(); ?></h3>
							</div>
						</div>
					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

					<?php wp_reset_postdata(); ?>

				<?php else : ?>

					<h2>Nothing found!</h2>

				<?php endif; ?>
			</div>
			<section class="page-adv">
				<h2>Latest Adventures</h2>
				<div class="adventure">
					<div class="canoe">
						<p>Getting Back to Nature in a Canoe</p>
						<a href="#">Read more</a>
					</div>
					<div class="beach">
						<p>A Night with Friends at the Beach</p>
						<a href="#">Read more</a>
					</div>
					<div class="view">
						<p>Taking in the View at Big Mountain</p>
						<a href="#">Read more</a>
					</div>
					<div class="gaze">
						<p>Star-Gazing at the Night Sky</p>
						<a href="#">Read more</a>
					</div>
					<a href="#" class='adv-btn'>More Adventures</a>
				</div>
			</section>
		</div><!-- end of front page wrapper -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
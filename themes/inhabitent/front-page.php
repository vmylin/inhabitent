<?php get_header();?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>
        <div class="hero-img">
        <?php 
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } 
            the_content();
        ?>
        <img class="hero-logo" src="<?php echo get_stylesheet_directory_uri();?>/project-04/images/logos/inhabitent-logo-full.svg" alt="inhabitent hero logo">
        </div>
		<?php $arg = array(
			'order' => 'DSC', 
			'posts_per_page' => '3',
			'post_type' => 'post',
		);
		$journal = new WP_Query($arg);?>
		<div class="front-page-wrapper">
		<?php if ( $journal->have_posts() ) : ?>

		<?php while ( $journal->have_posts() ) : $journal->the_post(); ?>
			<div class="single-journal">
				<div class="journal-img">
					<?php the_post_thumbnail('medium');//set_post_thumbnail_size(100,100,array( 'center', 'center')));?>
				</div>
				<?php $comment_number = get_comments_number(); ?>

				<p><?php the_date();?> / <?php comments_number('0 Comments', '1 Comment', $comment_number . ' Comments');?></p>

					<h2><?php the_title(); ?></h2>
			</div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

			<?php wp_reset_postdata(); ?>

			<?php else : ?>
			
				<h2>Nothing found!</h2>

			<?php endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
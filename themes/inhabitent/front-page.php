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
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
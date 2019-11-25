<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="hero-about">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }
            ?>
            <?php the_title('<h1 class="entry-title about-title">', '</h1>'); ?>
        </div>
        <div class="about-desc">
            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content', 'page'); ?>

            <?php endwhile; // End of the loop. 
            ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
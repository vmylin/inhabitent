<?php get_header();?>
<div class="journal-page">
    <div class="journal-posts">
    <?php 
        while ( have_posts() ) : the_post(); 
        get_template_part( 'template-parts/content', 'home' ); 
        endwhile; // End of the loop. 
        ?>
        </div>
        <div class="side-bar">
    <?php get_sidebar();?>
    </div>
</div>
<?php get_footer();
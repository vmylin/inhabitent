<?php get_header();?>
<div class="journal-posts">
<?php 
    while ( have_posts() ) : the_post(); 
     get_template_part( 'template-parts/content', 'home' ); 
    endwhile; // End of the loop. 
    ?>
    </div>
<?php get_sidebar();?>
<?php get_footer();
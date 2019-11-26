<?php

/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>

        <?php the_title(sprintf('<p class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></p>'); ?>

    </header><!-- .entry-header -->

</article><!-- #post-## -->
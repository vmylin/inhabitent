<?php

/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes($classes)
{
	// Adds a class of group-blog to blogs with more than 1 published author.
	if (is_multi_author()) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter('body_class', 'red_starter_body_classes');

function inhabitent_logo()
{
	?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/project-04/images/logos/inhabitent-logo-tent.svg");
		}
	</style>
<?php
}
add_action('login_enqueue_scripts', 'inhabitent_logo');

function custom_login_url($url)
{
	return get_option('home');
}
add_filter('login_headerurl', 'custom_login_url');

function inhabitent_archive_title($title)
{
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	} elseif (is_tax()) {
		$title = single_term_title('', false);
	}

	return $title;
}

add_filter('get_the_archive_title', 'inhabitent_archive_title');

function target_main_query_order($query)
{
	if (!is_admin() && $query->is_main_query()) {
		// Not a query for an admin page.
		// It's the main query for a front end page of your site.

		if (is_category()) {
			// It's the main query for a category archive.

			// Let's change the query for category archives.
			$query->set('order', 'ASC');
		}
	}
}
add_action('pre_get_posts', 'target_main_query_order');
add_theme_support('post-thumbnails');

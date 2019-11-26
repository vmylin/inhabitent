<?php

/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php

		if (is_front_page() || is_page('about')) :

			?> class="home-about" <?php else : ?> <?php body_class(); ?> <?php endif; ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header <?php if (!is_front_page() && !is_page('about')) echo 'border'; ?>" role="banner">
			<div class="site-branding">
			</div><!-- .site-branding -->
			<div class="nav-container">
				<div class="logo">
					<a href="<?php bloginfo('url') ?>">
						<img <?php
								if (is_front_page() || is_page('about')) : ?> src="<?php echo get_stylesheet_directory_uri(); ?>/project-04/images/logos/inhabitent-logo-tent-white.svg?>" alt="inhabitent header logo">
					<?php else : ?>
						src="<?php echo get_stylesheet_directory_uri(); ?>/project-04/images/logos/inhabitent-logo-tent.svg?>" alt="inhabitent header logo">

					<?php endif; ?>
					</a>
				</div>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>

					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
					<div class="search-form"><?php echo get_search_form(); ?></div>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
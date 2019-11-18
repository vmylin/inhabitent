<?php

/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer class="site-footer">
	<div class="footer-container">
		<div class="contact">
			<h3>contact info</h3>
			<p><i class="fas fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
			<p><i class="fas fa-phone-alt"></i><a href="tel:778-456-7891">778-456-7891</a></p>
			<p>
				<span><i class="fab fa-facebook-square"></i></span>
				<span><i class="fab fa-twitter-square"></i></span>
				<span><i class="fab fa-google-plus-square"></i></span>
			</p>
		</div>
		<div class="hours">
			<h3>business hours</h3>
			<p>monday-friday: 9am to 5pm</p>
			<p>saturday: 10am to 2pm</p>
			<p>sunday: closed</p>
		</div>
		<img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/project-04/images/logos/inhabitent-logo-text.svg?>" alt="inhabitent footer logo">
	</div>
	<p class="copyright">copyright &copy; 2019 inhabitent</p>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
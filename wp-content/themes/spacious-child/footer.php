<?php
/**
 * Theme Footer Section for our theme.
 *
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

		</div><!-- .inner-wrap -->
	</div><!-- #main -->
	<?php do_action( 'spacious_before_footer' ); ?>
		<footer id="colophon">
			<div class="container">
				<div class="footer-brand">Prana Chiropratique</div>
				<div class="footer-contact">
		      <?php if ( is_active_sidebar( 'prana-footer' )) {
		        dynamic_sidebar( 'prana-footer' );
		      } ?>
		    </div>
			</div>
		</footer>
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>

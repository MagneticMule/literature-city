<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Literature_City
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
	<div class="wrap">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'literature-city' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Built on %s', 'literature-city' ), 'WordPress' );
			?></a>

			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'using the %1$s theme by %2$s.', 'Literature City' ), 'Literature City', '<a href="http://magneticmule.com">Thomas Sweeney</a>' );
			?>
		</div><!-- .site-info -->
		</div><!--wrap-->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

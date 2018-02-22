<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Literature_City
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses literature_city_header_style()
 */
function literature_city_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'literature_city_custom_header_args', array(
		'default-image'          => get_template_directory_uri() . '/images/literature-city-header.jpg',
		'default-text-color'     => '1121212',
		'default-background-color' => 'ffcc00',
		'width'                  => 1200,
		'height'                 => 600,
		'flex-height'            => true,
		'wp-head-callback'       => 'literature_city_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'literature_city_custom_header_setup' );

if ( ! function_exists( 'literature_city_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see literature_city_custom_header_setup().
	 */
	function literature_city_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		/* <img alt="" src="<?php header_image(); ?>" 
		// width="<?php echo absint( get_custom_header()->width ); ?>" 
		// height="<?php echo absint( get_custom_header()->height ); ?>">
		// If we get this far, we have custom styles. Let's do this.
		*/
		?>
		<style type="text/css">
		<?php
		if ( has_header_image() ) :
		?>
			.site-header {
				background-image: url("<?php header_image(); ?>");
			}
		<?php endif; ?>
		
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
		?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
			// If the user has set a custom color for the text use that.
			else :
		?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;

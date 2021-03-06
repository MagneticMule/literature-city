<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Literature_City
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:100,200,400,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,700' rel='stylesheet' type='text/css'>
	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<div id="page" class="site">
		<div id="top-menu" class="navigation-top">
		<div class="wrap">
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'literature-city');?></button>
			<?php
				wp_nav_menu(array(
				'theme_location' => 'menu-1',
				'menu_id' => 'primary-menu',
				));
			?>
		</nav><!-- #site-navigation -->
		</div><!-- wrap -->
		</div><!-- navigation-top -->
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'literature-city');?></a>

	<header id="masthead" class="site-header">
	<div class="wrap">
		<div class="site-branding">
			<?php
the_custom_logo();?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></h1>
			<?php
$description = get_bloginfo('description', 'display');
if ($description || is_customize_preview()): ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
endif;?>
		</div><!-- .site-branding -->
		</div><!-- .wrap -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

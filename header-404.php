<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php $ga = get_field("google_analytics", "option");
if($ga) echo $ga;?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>
	
	<header id="masthead" class="site-header" role="banner">
		<?php get_template_part("template-parts/content","top-bar");
		$header_background = get_field("header_background",53);?>
		<div class="row-2">
			<div class="background-image"<?php if($header_background):
				echo 'style="background-image: url('.$header_background['url'].');"';
			endif;?>></div><!--.background-image-->
			<div class="wrapper cap">
				<div class="wrapper">
					<div class="row-1">
						<div class="logo">
							<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png";?>" alt="<?php bloginfo('name'); ?>"></a>
						</div>
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'acstarter' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div><!--.row-1-->
					<header class="row-2">
						<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'acstarter' ); ?></h1>
					</header><!--.row-2-->
				</div><!--.wrapper-->
			</div><!--.wrapper .cap-->
		</div><!-- row-2 -->
		<?php get_template_part("template-parts/content","bottom-bar");?>
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">

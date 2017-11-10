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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>
	<?php $post = get_post(35);
	if($post):
		setup_postdata($post);
	endif;?>
	<header id="masthead" class="site-header" role="banner">
		<?php get_template_part("template-parts/content","top-bar");
		$header_background = get_field("header_background");?>
		<div class="row-2" <?php if($header_background):
			echo 'style="background-image: url('.$header_background['url'].');"';
		endif;?>>	
			<div class="wrapper cap">
				<div class="row-1">
					<h1 class="logo">
						<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png";?>" alt="<?php bloginfo('name'); ?>"></a>
					</h1>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'acstarter' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div><!--.row-1-->
				<div class="row-2">
					<?php $telephone_number = get_field("telephone_number","option");
					$quote_text = get_field("quote_text","option");
					$quote_link = get_field("quote_link","option");
					$header_copy = get_field("header_copy");
					$call_copy = get_field("call_copy");?>
					<?php if($header_copy):?>
						<div class="copy">
							<?php echo $header_copy;?>
						</div><!--.copy-->
					<?php endif;?>
					<?php if($quote_link&&$quote_text):?>
						<a class="quote" href="<?php echo $quote_link;?>"><?php echo $quote_text;?></a>
					<?php endif;
					if($call_copy):?>
						<div class="call copy">
							<?php echo $call_copy;?>
						</div><!--.call .copy-->
					<?php endif;
					if($telephone_number):?>
						<a class="telephone" href="<?php echo preg_replace("[^0-9]","",$telephone_number);?>"><?php echo $telephone_number;?></a>
					<?php endif;?>
				</div><!--.row-2-->
			</div><!--.wrapper .cap-->
		</div><!-- row-2 -->
		<?php get_template_part("template-parts/content","bottom-bar");?>
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">

<?php
/**
 * Template Name: Services
 * 
 */

global $template;
$template = 'services';
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="wrapper cap">
				<?php get_template_part( 'template-parts/content', 'page' );?>
			</div><!--.wrapper .cap-->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();

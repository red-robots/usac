<?php
/**
 * Template Name: Top Level
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="wrapper cap">
				<?php get_template_part( 'template-parts/content', 'top-level' );?>
			</div><!--.wrapper .cap-->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();

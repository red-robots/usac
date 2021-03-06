<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ACStarter
 */

get_header("404"); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="wrapper cap">
				<article class="error-404 not-found">
					<header class="row-1 clear-bottom">
						<div class="col-1 js-blocks">
						</div><!--.col-1-->
						<div class="col-2 js-blocks">
							<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'acstarter' ); ?></h1>
						</div><!--.col-2-->
					</header>
					<div class="row-2 clear-bottom">
						<aside class="col-1" id="secondary" role="complementary">
							<div class="widget">
								<?php get_sidebar();?>
							</div><!--.widget-->
						</aside><!--.col-1-->
						<section class="col-2">
							<div class="copy">
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'acstarter' ); ?></p>
								<?php wp_nav_menu( array( 'theme_location' => 'sitemap' ) ); ?>
							</div><!--.copy-->
						</section><!--.col-2-->			
				    </div><!--.row-2-->		
				</article><!-- .error-404 -->
			</div><!--.wrapper .cap-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

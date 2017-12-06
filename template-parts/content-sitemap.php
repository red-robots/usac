<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-sitemap"); ?>>
    <header class="row-1 clear-bottom">
        <div class="col-1 js-blocks">
        </div><!--.col-1-->
        <div class="col-2 js-blocks">
            <h1><?php the_title();?></h1>
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
                <?php the_content();?>
                <?php wp_nav_menu( array( 'theme_location' => 'sitemap' ) ); ?>
            </div><!--.copy-->
        </section><!--.col-2-->
    </div><!--.row-2-->
</article><!-- #post-## -->

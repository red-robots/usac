<?php
/**
 * Template part for displaying page content in page-sitemap.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-sitemap"); ?>>
    <?php get_sidebar();?>
    <section class="col-2">
        <div class="copy">
            <?php the_content();?>
            <?php wp_nav_menu( array( 'theme_location' => 'sitemap' ) ); ?>
        </div><!--.copy-->
    </section><!--.col-2-->
</article><!-- #post-## -->

<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */
global $template;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-page"); ?>>
    <?php $content_title = get_field("content_title");
    if($content_title):?>
        <header class="row-1">
            <div class="col-1 js-blocks">
            </div><!--.col-1-->
            <div class="col-2 js-blocks">
                <h1><?php echo $content_title;?></h1>
            </div><!--.col-2-->
        </header>
    <?php endif;?>
    <div class="row-2">
        <aside class="col-1" id="secondary" role="complementary">
            <?php if($template):?>
                <div class="menu">
                    <?php switch($template):
                        case "track":
                            wp_nav_menu( array( 'theme_location' => 'track'));
                        break;
                        case "tools":
                            wp_nav_menu( array( 'theme_location' => 'tools'));
                        break;
                        case "ship":
                            wp_nav_menu( array( 'theme_location' => 'ship'));
                        break;
                        case "services":
                            wp_nav_menu( array( 'theme_location' => 'services'));
                        break;
                    endswitch;?>
                </div><!--.menu-->
            <?php endif;?>
            <div class="widget">
                <?php get_sidebar();?>
            </div><!--.widget-->
        </aside><!--.col-1-->
        <section class="col-2">
            <div class="copy">
                <?php the_content();?>
            </div><!--.copy-->
            <?php $services_col_1_title = get_field("services_col_1_title");
            $services_col_2_title = get_field("services_col_2_title");
            $services = get_field("services");
            if($services):?>
                <div class="services">
                    <div class="row-1 row">
                        <div class="col-1">
                            <?php if($services_col_1_title):
                                echo $services_col_1_title;
                            endif;?>
                        </div><!--.col-1-->
                        <div class="col-2">
                            <?php if($services_col_2_title):
                                echo $services_col_2_title;
                            endif;?>
                        </div><!--.col-2-->
                        <?php foreach($services as $row):
                            if($row['col_1']&&$row['col_2']):?>
                                <div class="row">
                                    <div class="col-1">
                                        <?php echo $row['col_1'];?>
                                    </div><!--.col-1-->
                                    <div class="col-2">
                                        <?php echo $row['col_2'];?>
                                    </div><!--.col-2-->
                                </div><!--.row-->
                            <?php endif;
                        endforeach;?>
                    </div><!--.row-1-->
                </div><!--.services-->
            <?php endif;?>
        </section><!--.col-2-->
    </div><!--.row-2-->
</article><!-- #post-## -->

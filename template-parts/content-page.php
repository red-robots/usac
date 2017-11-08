<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-page"); ?>>
    <?php get_sidebar();?>
    <section class="col-2">
        <div class="copy">
            <?php the_content();?>
        </div><!--.copy-->
        <?php $services_col_1_title = get_field("services_col_1_title");
        $services_col_2_title = get_field("services_col_2_title");
        $services = get_field("services");?>
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
    </section><!--.col-2-->
</article><!-- #post-## -->

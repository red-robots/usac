<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?>>
    <?php $video = get_field("row_1_video");
    $copy = get_field("row_1_copy");
    if($video||$copy):?>
        <section class="row-1 clear-bottom">
            <?php if($video):?>
                <div class="col-1">
                    <?php echo $video;?>
                </div><!--.col-1-->
            <?php endif;
            if($copy):?>
                <div class="col-2 copy">
                    <?php echo $copy;?>
                </div><!--.col-2-->
            <?php endif;?>
        </section><!--.row-1-->
    <?php endif;
    $quote_text = get_field("quote_text","option");
    $quote_link = get_field("quote_link","option");
    if($quote_link&& $quote_text):?>
        <div class="row-2">
            <a href="<?php echo $quote_link;?>"><?php echo $quote_text;?></a>
        </div><!--.row-2-->
    <?php endif;
    $copy = get_field("row_3_copy");
    if($copy):?>
        <section class="row-3 copy">
            <?php echo $copy;?>
        </section><!--.row-3-->
    <?php endif;
    $services = get_field("services");
    if($services):?>
        <section class="row-4">
            <?php foreach($services as $row):
                if($row['image']||$row['copy']):?>
                    <div class="service">
                        <?php if($row['image']):?>
                            <div class="col-1">
                                <img src="<?php echo $row['image']['sizes']['thumbnail'];?>" alt="<?php echo $image['alt'];?>">
                            </div><!--.col-1-->
                        <?php endif;
                        if($row['copy']):?>
                            <div class="col-2 copy">
                                <?php echo $copy;?>
                            </div><!--.col-2-->
                        <?php endif;?>    
                    </div><!--.service-->        
                <?php endif;
            endforeach;?>
        </section><!--.row-4-->
    <?php endif;?>
</article><!-- #post-## -->

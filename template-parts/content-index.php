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
                    <div class="wrapper">
                        <div class="iframe-wrapper">
                            <?php echo $video;?>
                        </div><!--.iframe-wrapper-->
                    </div><!--.wrapper-->
                </div><!--.col-1-->
            <?php endif;
            if($copy):?>
                <div class="col-2">
                    <div class="wrapper copy">
                        <?php echo $copy;?>
                    </div><!--.wrapper.copy-->
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
    <?php endif;?>
    <?php $delivery_methods = get_field("delivery_methods",35);
    $delivery_methods_title = get_field("delivery_methods_title",35);
    if($delivery_methods):?>
        <section class="delivery-methods">
            <div class="wrapper">
                <?php if($delivery_methods_title):?>
                    <header><h2><?php echo $delivery_methods_title;?></h2></header>
                <?php endif;?>
                <div class="wrapper clear-bottom">
                    <?php foreach($delivery_methods as $row):?>
                        <?php if($row['image']&&$row['title']&&$row['link']):?>
                            <div class="method js-blocks" 
                            <?php echo 'style="background-image: url('.$row['image']['sizes']['large'].');"';?>>
                                <a href="<?php echo $row['link'];?>">
                                    <h3><?php echo $row['title'];?></h3>
                                </a>
                            </div><!--.method-->
                        <?php endif;?>
                    <?php endforeach;?>
                </div><!--.wrapper-->
            </div><!--.wrapper-->
        </section><!--.delivery-methods-->
    <?php endif;?>
    <?php $copy = get_field("row_3_copy");
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
                    <div class="service clear-bottom">
                        <?php if($row['image']):?>
                            <div class="col-1">
                                <?php if($row['link']):?>
                                    <a href="<?php echo $row['link'];?>">
                                <?php endif;?>
                                    <img src="<?php echo $row['image']['sizes']['thumbnail'];?>" alt="<?php echo $image['alt'];?>">    
                                <?php if($row['link']):?>
                                    </a>
                                <?php endif;?>
                            </div><!--.col-1-->
                        <?php endif;
                        if($row['copy']):?>
                            <div class="col-2 copy">
                                <?php echo $row['copy'];?>
                            </div><!--.col-2-->
                        <?php endif;?>    
                    </div><!--.service-->        
                <?php endif;
            endforeach;?>
        </section><!--.row-4-->
    <?php endif;?>
</article><!-- #post-## -->

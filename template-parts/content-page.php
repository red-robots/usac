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
    <?php $content_title = get_field("content_title");
    if($content_title):?>
        <header class="row-1 clear-bottom">
            <div class="col-1 js-blocks">
            </div><!--.col-1-->
            <div class="col-2 js-blocks">
                <h1><?php echo $content_title;?></h1>
            </div><!--.col-2-->
        </header>
    <?php endif;?>
    <div class="row-2 clear-bottom">
        <aside class="col-1" id="secondary" role="complementary">
            <?php $this_id = get_the_ID();
            $parent = wp_get_post_parent_id($this_id);
            if($parent):?>
                    <?php $args = array(
                        'post_type'=>'page',
                        'posts_per_page'=>-1,
                        'post_parent'=>$parent,
                        'order'=>'ASC',
                        'orderby'=>'title',
                        'post__not_in'=>array($this_id)
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()):?>    
                        <div class="menu">
                            <ul>
                                <?php while($query->have_posts()):$query->the_post();?>
                                    <li>
                                        <a href="<?php echo get_the_permalink();?>">
                                            <?php the_title();?>
                                        </a>
                                    </li>
                                <?php endwhile;?>
                            </ul>
                        </div><!--.menu-->
                        <?php wp_reset_postdata();
                    endif;?>
            <?php endif;?>
            <?php $testimonials = get_field("testimonials","option");
            $testimonials_header = get_field("testimonials_header","option");
            if($testimonials):
                $max = count($testimonials);
                $i = rand(0,$max-1);
                if($testimonials[$i]['testimonial']):?>
                    <div class="testimonial">
                        <?php if($testimonials_header):?>
                            <header><h2><?php echo $testimonials_header;?></h2></header>
                        <?php endif;?>
                        <div class="text">
                            <?php if($testimonials[$i]['header']):?>
                                <div class="header">
                                    <?php echo $testimonials[$i]['header'];?>
                                </div><!--.header-->
                            <?php endif;?>
                            <div class="copy">
                                <sup><i class="fa-quote-left fa"></i></sup>
                                <?php echo $testimonials[$i]['testimonial'];?>
                                <sup><i class="fa-quote-right fa"></i></sup>
                            </div><!--.testimonial-->
                            <?php if($testimonials[$i]['author']):?>
                                <div class="author">
                                    <?php echo $testimonials[$i]['author'];?>
                                </div><!--.author-->
                            <?php endif;?>
                        </div><!--.copy-->
                    </div><!--.testimonials-->
                <?php endif;
            endif;?>
            <?php $image = get_field("sidebar_image");
            if($image):?>
                <div class="image">
                    <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                </div><!--.image-->
            <?php endif;?>
            <div class="widget">
                <?php get_sidebar();?>
            </div><!--.widget-->
        </aside><!--.col-1-->
        <section class="col-2">
            <div class="copy">
                <?php the_content();?>
            </div><!--.copy-->
            <?php $services_title = get_field("services_title");
            $services_sub_title = get_field("services_sub_title");
            $services_copy = get_field("services_copy");?>
            <?php if($services_title||$services_sub_title):?>
                <header>
                    <?php if($services_title):?>
                        <h2><?php echo $services_title;?></h2>
                    <?php endif;
                    if($services_sub_title):?>
                        <h3><?php echo $services_sub_title;?></h3>
                    <?php endif;?>
                </header>
            <?php endif;
            if($services_copy):?>
                <div class="copy services">
                    <?php echo $services_copy;?>
                </div><!--.copy-->
            <?php endif;
            $services_col_1_title = get_field("services_col_1_title");
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
                    </div><!--.row-1-->
                    <?php foreach($services as $row):
                        if($row['col_1']&&$row['col_2']):?>
                            <div class="row">
                                <div class="col-1">
                                    <?php echo $row['col_1'];?>
                                </div><!--.col-1-->
                                <div class="col-2 copy">
                                    <?php echo $row['col_2'];?>
                                </div><!--.col-2-->
                            </div><!--.row-->
                        <?php endif;
                    endforeach;?>
                </div><!--.services-->
            <?php endif;?>
        </section><!--.col-2-->
    </div><!--.row-2-->
</article><!-- #post-## -->

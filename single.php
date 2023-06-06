<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>
      <?php
      $author_id = get_post_field( 'post_author', get_the_ID() );
      $authorDisplayName = get_the_author_meta( 'display_name', $author_id ); 
      $authorFirstName = get_the_author_meta( 'first_name', $author_id ); 
      $authorName = ($authorDisplayName) ? $authorDisplayName : $authorFirstName;
      ?>
      <?php if( has_post_thumbnail() ) { ?>
        <figure class="post-featured-image">
        <?php the_post_thumbnail(); ?>
        </figure>
      <?php } ?>
      <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="post-meta">
          Posted on: <?php echo get_the_date('F j, Y'); ?> | By: <?php echo ucwords($authorName) ?>
        </div>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
    
    <!-- SIDEBAR -->
    <?php
    if( get_post_type()=='post' ) {
      /* SIDE BAR */
      $current_id = get_the_ID();
      $post_type = 'post';
      $posts_per_page = 10;
      $paged = ( get_query_var( 'pg' ) ) ? absint( get_query_var( 'pg' ) ) : 1;
      $args = array(
        'posts_per_page'=> $posts_per_page,
        'post_type'   => $post_type,
        'paged'     => $paged,
        'post__not_in'  => array($current_id),
        'post_status' => 'publish',
        'orderby'       => 'date',       
        'order'         => 'DESC'
      );
      $recentposts = new WP_Query($args);
      if ( $recentposts->have_posts() ) { ?>
      <aside id="sidebar" class="more-posts-widget">
        <div class="inside">
          <h3 class="wtitle"><span>More Articles</span></h3>
          <div id="recentPosts">
            <ul class="recent-posts">
            <?php while ( $recentposts->have_posts() ) : $recentposts->the_post(); 
              $pid = get_the_ID(); 
              $title = get_the_title();
              $link = get_permalink($pid);
              ?>
              <li class="item animated fadeIn">
                <div class="postdate"><?php echo get_the_date('m/d/Y',$pid); ?></div>
                <p class="post-title"><a href="<?php echo $link ?>"><?php echo $title ?></a></p>
              </li>
            <?php endwhile; wp_reset_postdata(); ?>
            </ul>
          </div>
        </div>
        
        <?php
        $count = $recentposts->found_posts;                
        $total_pages = $recentposts->max_num_pages;               
        if( $count > $posts_per_page ) { ?>
        <div class="morediv">
          <a href="javascript:void(0)" data-baseurl="<?php echo get_permalink() ?>" data-perpage="<?php echo $posts_per_page ?>" data-total-pages="<?php echo $total_pages ?>" data-nextpage="<?php echo $paged + 1 ?>" class="button loadmore-button">Load More</a>
        </div>
        <?php } ?>
      </aside>
      <?php } ?>
    <?php } ?>
    
  </div><!-- #primary -->
    
  <div class="hidden-container" style="display:none;"></div>
  <div class="footer-icons-widget">
    <?php get_template_part("template-parts/content","bottom-bar");?>
  </div>
    
<script>
jQuery(document).ready(function($){
  /* Load More */
  $(document).on('click','.loadmore-button', function(e){
    e.preventDefault();
    var baseURL = $(this).data('baseurl');
    var totalPages = $(this).data('total-pages');
    var nextpage = $(this).data('nextpage');
    var nextPageUrl = baseURL + '?pg=' + nextpage;
    if(nextpage==totalPages) {
      $('.morediv').remove();
    }
    $('.hidden-container').load(nextPageUrl + ' #sidebar ul.recent-posts', function(){
      if( $('.hidden-container li').length ) {
        $('.hidden-container li').each(function(){
          $(this).appendTo('#sidebar ul.recent-posts');
        });
      }
    });
  });
});
</script>
<?php
get_footer();

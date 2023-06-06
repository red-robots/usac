<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php $ga = get_field("google_analytics", "option");
if($ga) echo $ga;?>
<?php wp_head(); ?> 
<?php
global $post;
$pageTitle = ( isset($post->post_title) && $post->post_title ) ? $post->post_title : '';
$postType = ( isset($post->post_type) && $post->post_type ) ? $post->post_type : '';

/* Style for Single Post */ 
if($postType=='post') { 
  $global_headerBG = get_field("header_background",35); ?>
  <style>
    body.single a {
      transition: all ease .3s;
    }
    body.single #masthead {
      border-bottom: none;
      background-color: #646aa8;
      background-position: top center;
      background-size: cover;
      background-repeat: no-repeat;
      <?php if($global_headerBG) { ?>
      background-image: url('<?php echo $global_headerBG['url'] ?>');
      <?php } ?>
    }
    body.single #masthead .cap .wrapper {
      padding: 0 0;
    }
    body.single #colophon.site-footer {
      padding-top: 0;
    }
    body.single #colophon.site-footer .row-1 .wrapper {
      padding-top: 50px;
      padding-bottom: 50px;
    }
    body.single #primary.content-area {
      max-width: 1200px;
      width: 100%;
      margin: 0 auto;
      padding: 50px 20px 40px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      flex-direction: row-reverse;
    }
    body.single #main {
      width: 70%;
      padding-left: 30px;
    }
    body.single #sidebar {
      width: 28%;
    }
    body.single #main .entry-title {
      color: #e74c3c;
      font-family: Times;
      font-size: 3rem;
      line-height: 1.2;
      margin: 0 0;
    }
    body.single #main .post-meta {
      font-size: 14px;
      line-height: 1.2;
      color: #666;
    }
    body.single #sidebar .wtitle {
      font-size: 15px;
      font-weight: normal;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: #494949;
      margin: 5px 0 15px;
    }
    body.single #sidebar ul {
      margin: 0 0;
      padding: 0 0;
      list-style: none; 
    }
    body.single #sidebar ul p {
      margin: 0 0;
    }
    body.single #sidebar .postdate {
      font-size: 0.7em;
      line-height: 1.2;
      letter-spacing: 0.05em;
      color: #979797;
    }
    body.single #sidebar ul a {
      color: #0c5a8f;
      text-decoration: none;
      transition: all ease .3s;
    }
    body.single #sidebar ul a:hover {
      color: #2e9eea;
    }
    body.single #sidebar ul li {
      margin: 0 0;
      padding-top: 12px;
      padding-bottom: 6px;
      border-bottom: 1px dashed #CCC;
    }
    body.single .post-featured-image {
      margin: 0 0;
    }
    body.single .post-featured-image img {
      border-radius: 15px;
    }
    .morediv {
      margin-top: 20px;
    }
    .loadmore-button {
      display: inline-block;
      text-decoration: none!important;
      background: #0c5a8f;
      color: #FFF;
      font-size: 13px;
      line-height: 1.2;
      padding: 5px 13px 6px;
      border-radius: 4px;
    }
    .loadmore-button:hover {
      background: #2297e7;
      color: #FFF;
    }
    .footer-icons-widget .wrapper.clear-bottom {
      display: flex;
      flex-wrap: wrap;
      align-items: flex-start;
      justify-content: center;
    }

    .footer-icons-widget .wrapper.clear-bottom .icon {
      text-align: center;
      width: 11%;
    }
    .footer-icons-widget .wrapper.clear-bottom .icon a {
      color: #000;
      text-decoration: none;
      font-size: 15px;
      font-weight: bold;
      line-height: 1.2;
      text-align: center;
    }
    .footer-icons-widget .wrapper.clear-bottom .icon a img {
      transition: all ease .3s;
    }
    .footer-icons-widget .wrapper.clear-bottom .icon a:hover img {
      transform: scale(1.1);
    }
    .footer-icons-widget .wrapper.cap {
      padding-top: 40px;
      padding-bottom: 40px;
    }
    
    @media screen and (max-width: 820px) {
      body.single #primary.content-area {
        flex-direction: row;
      }
      body.single #main,
      body.single #sidebar {
        width: 100%;
      }
      body.single #main {
        margin-bottom: 40px;
        padding-left: 0;
        padding-right: 0;
      }
    }
  </style>
<?php } ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

  <?php
  //if(have_posts()): the_post();
  //endif;
  ?>
  <header id="masthead" class="site-header" role="banner">
    <?php get_template_part("template-parts/content","top-bar");
    $header_background = get_field("header_background");
    $header_bg_style = ($header_background) ? ' style="background-image:url('.$header_background['url'].')"':'';
    ?>
    <div class="row-2">
      
      <?php if($postType!="post") { ?>
      <div class="background-image"<?php echo $header_bg_style; ?>></div><!--.background-image-->
      <?php } ?>
      
      <div class="wrapper cap">
        <div class="wrapper">
          <div class="row-1">
            <div class="logo">
              <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png";?>" alt="<?php bloginfo('name'); ?>"></a>
            </div>
            <nav id="site-navigation" class="main-navigation" role="navigation">
              <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'acstarter' ); ?></button>
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </nav><!-- #site-navigation -->
          </div><!--.row-1-->
          
          <?php if($postType!="post") { ?>
            <?php if( $pageTitle ) { ?>
            <header class="row-2">
              <h1><?php the_title();?></h1>
            </header><!--.row-2-->
            <?php } ?>
          <?php } ?>
          
        </div><!--.wrapper -->
      </div><!--.wrapper .cap-->
    </div><!-- row-2 -->
    
    <?php if($postType!="post") { ?>
    <?php get_template_part("template-parts/content","bottom-bar");?>
    <?php } ?>
  </header><!-- #masthead -->

  <div id="content" class="site-content wrapper">

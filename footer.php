<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->
	<?php $footer_background = get_field("footer_background");?>
	<footer id="colophon" class="site-footer" role="contentinfo" <?php if($footer_background):
		echo 'style="background-image: url('.$footer_background['url'].');"';	
	endif;?>>
		<div class="row-1">
		<?php $footer_row_1_copy = get_field("footer_row_1_copy","option");
		$footer_row_1_link = get_field("footer_row_1_link","option");
		$footer_row_1_link_text = get_field("footer_row_1_text","option");?>
			<?php if($footer_row_1_copy):?>
				<div class="col-1">
					<?php echo $footer_row_1_copy;?>
				</div><!--.col-1-->
			<?php endif;?>
			<?php if($footer_row_1_link&&$footer_row_1_link_text):?>
				<div class="col-2">
					<a href="<?php echo $footer_row_1_link;?>">
						<?php echo $footer_row_1_link_text;?>
					</a>
				</div><!--.col-2-->
			<?php endif;?>
		</div><!--.row-1-->
		<div class="row-2">
			<?php $footer_row_2_company_title = get_field("footer_row_2_company_title","option");
			$footer_row_2_quick_links_title = get_field("footer_row_2_quick_links_title","option");
			$footer_row_2_resources_title = get_field("footer_row_2_resources_title","option");
			$facebook_link = get_field("facebook_link","option");
			$instagram_link = get_field("instagram_link","option");?>
			<div class="logo col-1">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png";?>" alt="<?php bloginfo('name'); ?>"></a>
			</div><!--.logo-->
			<div class="col-2">
				<header><h2><?php echo $footer_row_2_quick_links_title;?></h2></header>
				<?php wp_nav_menu( array( 'theme_location' => 'quick-links' ) ); ?>
			</div><!--.col-2-->
			<div class="col-3">
				<header><h2><?php echo $footer_row_2_company_title;?></h2></header>
				<?php wp_nav_menu( array( 'theme_location' => 'company' ) ); ?>
			</div><!--.col-3-->
			<div class="col-4">
				<header><h2><?php echo $footer_row_2_resources_title;?></h2></header>
				<?php wp_nav_menu( array( 'theme_location' => 'resources' ) ); ?>
			</div><!--.col-4-->
			<div class="col-5">
				<div class="row-1">
					<img src="<?php echo get_template_directory_uri()."/images/ariba.png";?>" alt="ariba logo">
					<img src="<?php echo get_template_directory_uri()."/images/wbenc.png";?>" alt="wbenc logo">
				</div><!--.row-1-->
				<?php if($facebook_link||$instagram_link):?>
					<div class="row-2">
						<?php if($facebook_link):?>
							<a class="facebook" href="<?php echo $facebook_link;?>">
								<i class="fa fa-facebook"></i>
							</a>
						<?php endif;
						if($instagram_link):?>
							<a class="instagram" href="<?php echo $instagram_link;?>">
								<i class="fa fa-instagram"></i>
							</a>
						<?php endif;?>
					</div><!--.row-2-->
				<?php endif;?>
			</div><!--.col-5-->
		</div><!--.row-2-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

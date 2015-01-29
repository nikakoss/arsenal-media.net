<?php 
/*
Template Name: WooCommerce
*/ 
?>
<?php 
global $woocommerce;
$id = get_option('woocommerce_shop_page_id');
$shop= get_page($id);
$sidebar = get_post_meta($id, "qode_show-sidebar", true);  

if(get_post_meta($id, "qode_responsive-title-image", true) != ""){
 $responsive_title_image = get_post_meta($id, "qode_responsive-title-image", true);
}else{
	$responsive_title_image = $qode_options_subway['responsive_title_image'];
}

if(get_post_meta($id, "qode_fixed-title-image", true) != ""){
 $fixed_title_image = get_post_meta($id, "qode_fixed-title-image", true);
}else{
	$fixed_title_image = $qode_options_subway['fixed_title_image'];
}

if(get_post_meta($id, "qode_title-image", true) != ""){
 $title_image = get_post_meta($id, "qode_title-image", true);
}else{
	$title_image = $qode_options_subway['title_image'];
}

if(get_post_meta($id, "qode_title-height", true) != ""){
 $title_height = get_post_meta($id, "qode_title-height", true);
}else{
	$title_height = $qode_options_subway['title_height'];
}

if(get_post_meta($id, "qode_fixed-title-image", true) != ""){
 $fixed_title_image = get_post_meta($id, "qode_fixed-title-image", true);
}else{
	$fixed_title_image = $qode_options_subway['fixed_title_image'];
}

$title_background_color = '';
if(get_post_meta($id, "qode_page-title-background-color", true) != ""){
 $title_background_color = get_post_meta($id, "qode_page-title-background-color", true);
}else{
	$title_background_color = $qode_options_subway['title_background_color'];
}

$show_title_image = true;
if(get_post_meta($id, "qode_show-page-title-image", true)) {
	$show_title_image = false;
}

?>

	<?php 
		get_header(); 
		$id = get_option('woocommerce_shop_page_id');
	?>

		<?php if(!get_post_meta($id, "qode_show-page-title", true)) { ?>
			<div class="title <?php if($responsive_title_image == 'no' && $title_image != "" && $fixed_title_image == "yes" && $show_title_image == true){ echo 'has_fixed_background '; } if($responsive_title_image == 'no' && $title_image != "" && $fixed_title_image == "no" && $show_title_image == true){ echo 'has_background'; } if($responsive_title_image == 'yes' && $show_title_image == true){ echo 'with_image'; } ?>" style="<?php if($responsive_title_image == 'no' && $title_image != "" && $show_title_image == true){ echo 'background-image:url('.$title_image.');';  } if($title_height != ''){ echo 'height:'.$title_height.'px;'; } if($title_background_color != ''){ echo 'background-color:'.$title_background_color.';'; } ?>">
				<?php if($responsive_title_image == 'yes' && $title_image != "" && $show_title_image == true){ echo '<img src="'.$title_image.'" alt="title" />'; } ?>
				<?php if(!get_post_meta($id, "qode_show-page-title-text", true)) { ?>
					<?php if($show_title_image){ ?>
					<div class="title_holder fix_title_holder">
						<div class="container">
							<div class="container_inner clearfix">
							<?php if (function_exists('qode_custom_breadcrumbs')) { ?> <div class="breadcrumb"<?php if(get_post_meta($id, "qode_page-breadcrumb-color", true)) { ?> style="color:<?php echo get_post_meta($id, "qode_page-breadcrumb-color", true) ?>" <?php } ?>> <?php qode_custom_breadcrumbs(); ?></div><?php } ?>
								<h1<?php if(get_post_meta($id, "qode_page-title-color", true)) { ?> style="color:<?php echo get_post_meta($id, "qode_page-title-color", true) ?>" <?php } ?>><?php the_title(); ?></h1>
								
							</div>
						</div>
					</div>
					<?php }else{?>
					<div class="title_holder">
						<div class="container">
							<div class="container_inner clearfix">
								<h1<?php if(get_post_meta($id, "qode_page-title-color", true)) { ?> style="color:<?php echo get_post_meta($id, "qode_page-title-color", true) ?>" <?php } ?>><?php the_title(); ?></h1>
								<?php if (function_exists('qode_custom_breadcrumbs')) { ?> <div class="breadcrumb"<?php if(get_post_meta($id, "qode_page-breadcrumb-color", true)) { ?> style="color:<?php echo get_post_meta($id, "qode_page-breadcrumb-color", true) ?>" <?php } ?>> <?php qode_custom_breadcrumbs(); ?></div><?php } ?>
							</div>
						</div>
					</div>
					<?php }?>
				<?php } ?>
			</div>
		<?php } ?>
		
		<?php if($qode_options_subway['show_back_button'] == "yes") { ?>
			<a id='back_to_top' href='#'>
				<span class="icon-stack">
					<i class="icon-chevron-up " style=""></i>
				</span>
			</a>
		<?php } ?>
		
		<?php
		$revslider = get_post_meta($id, "qode_revolution-slider", true);
		if (!empty($revslider)){ ?>
			<div class="slider"><div class="slider_inner">
			<?php echo do_shortcode($revslider); ?>
			</div></div>
		<?php
		}
		?>
		<div class="container">
			<div class="container_inner clearfix">
                            <?php if(!is_singular('product')) { ?>
				<?php if(($sidebar == "default")||($sidebar == "")) : ?>
					<?php woocommerce_content(); ?>
				<?php elseif($sidebar == "1" || $sidebar == "2"): ?>		
					<?php global $woocommerce_loop;
			        	$woocommerce_loop['columns'] = 3;
			        ?>
					<?php if($sidebar == "1") : ?>
						<div class="two_columns_66_33 background_color_sidebar grid2 clearfix">
							<div class="column1">
					<?php elseif($sidebar == "2") : ?>
						<div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
							<div class="column1">
					<?php endif; ?>
								<div class="column_inner">
									<?php woocommerce_content(); ?>
								</div>
							</div>
							<div class="column2"><?php get_sidebar();?></div>
						</div>
					<?php elseif($sidebar == "3" || $sidebar == "4"): ?>
						<?php global $woocommerce_loop;
				        	$woocommerce_loop['columns'] = 3;
				        ?>
						<?php if($sidebar == "3") : ?>
							<div class="two_columns_33_66 background_color_sidebar grid2 clearfix">
								<div class="column1"><?php get_sidebar();?></div>
								<div class="column2">
						<?php elseif($sidebar == "4") : ?>
							<div class="two_columns_25_75 background_color_sidebar grid2 clearfix">
								<div class="column1"><?php get_sidebar();?></div>
								<div class="column2">
						<?php endif; ?>
									<div class="column_inner">
										<?php woocommerce_content(); ?>
									</div>
								</div>
							</div>
					<?php endif; ?>
                            <?php } else { 
                                  woocommerce_content();                                  
                            } ?>                                        
		</div>
	</div>
                                                            
	<?php get_footer(); ?>			
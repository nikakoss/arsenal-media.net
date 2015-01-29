<?php 
global $qode_options_subway; 

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

<?php get_header(); ?>
			<div class="title <?php if($responsive_title_image == 'no' && $title_image != "" && $fixed_title_image == "yes" && $show_title_image == true){ echo 'has_fixed_background '; } if($responsive_title_image == 'no' && $title_image != "" && $fixed_title_image == "no" && $show_title_image == true){ echo 'has_background'; } if($responsive_title_image == 'yes' && $show_title_image == true){ echo 'with_image'; } ?>" style="<?php if($responsive_title_image == 'no' && $title_image != "" && $show_title_image == true){ echo 'background-image:url('.$title_image.');';  } if($title_height != ''){ echo 'height:'.$title_height.'px;'; } if($title_background_color != ''){ echo 'background-color:'.$title_background_color.';'; } ?>">
				<?php if($responsive_title_image == 'yes' && $title_image != "" && $show_title_image == true){ echo '<img src="'.$title_image.'" alt="title" />'; } ?>
				<?php if($show_title_image){ ?>
				<div class="title_holder fix_title_holder">
					<div class="container">
						<div class="container_inner clearfix">
						<div class="breadcrumb"><?php if(isset($qode_options_subway['404_subtitle']) && $qode_options_subway['404_title'] != "") { ?> <?php echo $qode_options_subway['404_subtitle']; ?><?php } else { ?><?php _e('Page not found', 'qode'); ?><?php } ?></div>
							<h1><?php if($qode_options_subway['404_title'] != ""): echo $qode_options_subway['404_title']; else: ?> <?php _e('404', 'qode'); ?> <?php endif;?></h1>
							
						</div>
					</div>
				</div>
				<?php }else{ ?>
				<div class="title_holder">
					<div class="container">
						<div class="container_inner clearfix">
							<h1><?php if($qode_options_subway['404_title'] != ""): echo $qode_options_subway['404_title']; else: ?> <?php _e('404', 'qode'); ?> <?php endif;?></h1>
							<div class="breadcrumb"><?php if(isset($qode_options_subway['404_subtitle']) && $qode_options_subway['404_title'] != "") { ?> <?php echo $qode_options_subway['404_subtitle']; ?><?php } else { ?><?php _e('Page not found', 'qode'); ?><?php } ?></div>
						</div>
					</div>
				</div>
				<?php }?>
				
			</div>
			<div class="container">
				<div class="container_inner">
					<div class="page_not_found">
						<h2><?php if($qode_options_subway['404_text'] != ""): echo $qode_options_subway['404_text']; else: ?> <?php _e('The page you requested does not exist', 'qode'); ?> <?php endif;?></h2>
						<p><a class="qbutton with-shadow" href="<?php echo home_url(); ?>/"><?php if($qode_options_subway['404_backlabel'] != ""): echo $qode_options_subway['404_backlabel']; else: ?> <?php _e('Back to homepage', 'qode'); ?> <?php endif;?></a></p>
					</div>
				</div>
			</div>
			
<?php get_footer(); ?>	
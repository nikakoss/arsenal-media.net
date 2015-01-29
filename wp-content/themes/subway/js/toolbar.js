$j(window).load(function(){
	setTimeout(function(){
		$j("#panel").animate({marginLeft: "0px"});
		$j("a.open").addClass('opened');
		$j("#panel").addClass('opened-panel');
	},1000);
});

$j(document).ready(function() {
	
	$j('#panel select').sSelect();
	
	$j("#panel a.open").click(function(e){
		e.preventDefault();
		var margin_left = $j("#panel").css("margin-left");
		if (margin_left == "-208px"){
			$j("#panel").animate({marginLeft: "0px"});
			$j("#panel").addClass('opened-panel');
			$j(this).addClass('opened');
		}
		else{
			$j("#panel").animate({marginLeft: "-208px"});
			$j(this).removeClass('opened');
			$j("#panel").removeClass('opened-panel');
		}
		return false;
	});
	
	$j('#tootlbar_header_top').change(function(){
		if($j(this).val() != ""){
			
    	$j.post(root+'updatesession.php', {header_top : $j(this).val()}, function(data){
					location.reload();
			});
		}
	});
	
	$j('#tootlbar_smooth_scroll').change(function(){
		if($j(this).val() != ""){
			
    	$j.post(root+'updatesession.php', {smooth : $j(this).val()}, function(data){
					location.reload();
			});
		}
	});
	
	$j('#tootlbar_pattern').change(function(){
		jQuery('#tootlbar_pattern_css').remove();
		
		if($j(this).val() != "no"){
			$j('#tootlbar_boxed').getSetSSValue('boxed');
			$j('#tootlbar_background').getSetSSValue('no');
			$j('body').addClass('boxed');
			newSkin ="body.boxed .wrapper { \
									background-image: url('http://demo.qodeinteractive.com/subway/demo_images/"+$j(this).val()+".png'); \
									background-position: 0px 0px; \
									background-repeat: repeat; \
								} \
							";
			jQuery('body').append('<style id="tootlbar_pattern_css" type="text/css">'+newSkin+'</style>'); 
			
		}else{
			newSkin ="body { \
									background-image: none; \
								} \
							";
			jQuery('body').append('<style id="tootlbar_pattern_css" type="text/css">'+newSkin+'</style>'); 
		}
	});
	
	$j('#tootlbar_background').change(function(){
	
	jQuery('#tootlbar_background_css').remove();
		if($j(this).val() != "no"){
			$j('#tootlbar_boxed').getSetSSValue('boxed');
			$j('#tootlbar_pattern').getSetSSValue('no');
			$j('body').addClass('boxed');
			newSkin ="body.boxed .wrapper { \
									background-image: url('http://demo.qodeinteractive.com/subway/demo_images/"+$j(this).val()+".jpg'); \
									background-position: 0px 0px; \
									background-repeat: repeat; \
									background-attachment: fixed; \
								} \
							";
			jQuery('body').append('<style id="tootlbar_background_css" type="text/css">'+newSkin+'</style>'); 
			
		}else{
			newSkin ="body { \
									background-image: none; \
								} \
							";
			jQuery('body').append('<style id="tootlbar_background_css" type="text/css">'+newSkin+'</style>'); 
		}
	});
	
	$j('#tootlbar_boxed').change(function(){
	
		$j('body').removeClass('boxed');
		$j('body').addClass($j(this).val());
		
		if($j(this).val() != "boxed"){
			$j('#tootlbar_pattern').getSetSSValue('no');
			$j('#tootlbar_background').getSetSSValue('no');
		}
	});	
	
	$j('#tootlbar_colors .color').each(function(){
		$j(this).on('click',function(){
			$j('#tootlbar_colors .color').removeClass('active');
			$j(this).addClass('active');
			var color = $j(this).data('color');
			
			if($j(this).hasClass('color1')){
				var logo_image = "logo_green";
				var share_image = "share_image_green";
			}else if($j(this).hasClass('color2')){
				var logo_image = "logo_orange";
				var share_image = "share_image_red";
			}else if($j(this).hasClass('color3')){
				var logo_image = "logo_blue";
				var share_image = "share_image_blue";
			}else if($j(this).hasClass('color4')){
				var logo_image = "logo_yellow";
				var share_image = "share_image_ocher";
			}else if($j(this).hasClass('color5')){
				var logo_image = "logo_magenta";
				var share_image = "share_image_light_blue";
			}else if($j(this).hasClass('color6')){
				var logo_image = "logo_gray";
				var share_image = "share_image_grey";
			}else{
				var logo_image = "logo_green";
				var share_image = "share_image_green";
			}
			
			if ($j("#toolbar_colors_css").length > 0){
				$j("#toolbar_colors_css").remove();
			}
			
			$j('.logo img').attr('src', 'http://demo.qodeinteractive.com/subway/demo_images/'+logo_image+'.png');
			
			newSkin ="table th, \
					table tr:nth-child(odd) td, \
					nav.main_menu > ul > li:hover > a span, \
					.drop_down .narrow .second .inner ul li a span, \
					.icon_list i, \
					.progress_bar .progress_content, \
					.box_holder_icon_inner.square .icon-stack, \
					.qbutton, \
					.load_more a, \
					#submit_comment, \
					.call_to_action.elegant .cta_button, \
					.portfolio_gallery a .gallery_text_holder, \
					.tabs .tabs-nav li.active a, \
					.highlight, \
					.gallery_holder ul li .gallery_hover, \
					.active_best_price, \
					.price_table_inner .price_button, \
					.icon_with_title.boxed .icon_holder .icon-stack, \
					.progress_bars_icons_inner.square .bar.active .bar_noactive, \
					.progress_bars_icons_inner.square .bar.active .bar_active, \
					.latest_post_text span.latest_date, \
					.blog_holder article.format-link .post_text:hover .post_text_holder, \
					.blog_holder article.format-quote .post_text:hover .post_text_holder, \
					.widget.widget_search form input[type='submit'], \
					.widget .tagcloud a:hover, \
					.mejs-controls .mejs-time-rail .mejs-time-current, \
					.mejs-controls .mejs-time-rail .mejs-time-handle, \
					.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current, \
					.pie_graf_legend ul li .color_holder, \
					.line_graf_legend ul li .color_holder, \
					.projects_holder article span.text_holder, \
					.header_top #lang_sel_list ul li a:hover, \
					.header_top #lang_sel_list ul li a.lang_sel_other:hover, \
					.header_top #lang_sel_list ul li a.lang_sel_sel, \
					.blog_holder article.format-link .post_text:hover .post_text_holder .social_share_holder .social_share_icon, \
					.blog_holder article.format-quote .post_text:hover .post_text_holder .social_share_holder .social_share_icon, \
					#panel .open, \
					.woocommerce div.message, \
					.woocommerce .woocommerce-message, \
					.woocommerce .woocommerce-error, \
					.woocommerce .woocommerce-info, \
					.woocommerce .button, \
					.woocommerce-page .button, \
					.woocommerce-page input[type='submit'], \
					.woocommerce input[type='submit'], \
					.woocommerce ul.products li.product .added_to_cart, \
					.woocommerce ul.products li.product a.qbutton:hover, \
					.woocommerce-page ul.products li.product a.qbutton:hover, \
					.woocommerce .product .onsale, \
					.woocommerce .product .single-onsale, \
					.woocommerce .quantity input[type='button']:hover, \
					.woocommerce #content .quantity input[type='button']:hover, \
					.woocommerce-page .quantity input[type='button']:hover, \
					.woocommerce-page #content .quantity input[type='button']:hover, \
					.woocommerce .quantity input[type='button']:active, \
					.woocommerce #content .quantity input[type='button']:active, \
					.woocommerce-page .quantity input[type='button']:active, \
					.woocommerce-page #content .quantity input[type='button']:active, \
					.widget #searchform input[type='submit'], \
					.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content, \
					.woocommerce-page .widget_price_filter .price_slider_wrapper .ui-widget-content, \
					.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, \
					.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle, \
					.shopping_cart_header .header_cart span{ \
					background-color: "+color+"; \
					} \
					.projects_holder article span.text_holder{\
						background-color: rgba("+hexToRgb(color).r+","+hexToRgb(color).g+","+hexToRgb(color).b+", 0.85); \
					}\
					.woocommerce-page .button.single_add_to_cart_button{ \
						background-color: transparent; \
					} \
					a:hover, \
					p a:hover, \
					nav.main_menu > ul > li.active > a, \
					.drop_down .second .inner ul li:hover a, \
					.drop_down .second .inner ul li.sub ul li:hover a, \
					.drop_down .wide .second ul li a:hover, \
					.drop_down .wide .second .inner ul li.sub ul li a:hover, \
					.drop_down .wide.icons  .second i, \
					nav.mobile_menu ul li a:hover, \
					nav.mobile_menu ul li.active > a, \
					.title .breadcrumb .delimiter, \
					.title .breadcrumb .current, \
					.title .breadcrumb a:hover, \
					.counter_holder span.counter, \
					.box_holder_icon i, \
					.box_holder_icon .icon-stack i.icon-circle, \
					.qbutton.no_fill, \
					.qbutton.no_fill:hover, \
					.percentage, \
					.portfolio_navigation .portfolio_prev a:hover, \
					.portfolio_navigation .portfolio_next a:hover, \
					.portfolio_like a i, \
					.portfolio_single .portfolio_like a i, \
					.portfolio_like span, \
					.portfolio_single .portfolio_like span, \
					.filter_holder ul li span, \
					.accordion_holder.accordion.with_icon h5 i, \
					.testimonial_text_inner i, \
					blockquote i.pull-left, \
					.dropcap, \
					.message.with_icon > i, \
					.price_table_inner ul li.table_title, \
					.icon_with_title .icon_holder i, \
					.icon_with_title.circle .icon_holder .icon-stack i.icon-circle, \
					.font_awsome_icon i, \
					.drop_down .wide .second .inner ul li.sub .flexslider ul li a:hover, \
					.drop_down .wide .second ul li .flexslider ul li  a:hover, \
					.flexslider.widget_flexslider h5, \
					.flexslider.widget_flexslider ul li  h5 a, \
					.flexslider.widget_flexslider ul li  h5 a, \
					.progress_bars_icons_inner.normal .bar.active i, \
					.progress_bars_icons_inner .bar.active i.icon-circle, \
					.list.number ul>li:before, \
					.blog_holder article .post_infos a:hover, \
					.blog_holder article .post_infos .post_author:hover, \
					.blog_holder article .post_infos .post_comments:hover, \
					.blog_like a i, \
					.social_share_dropdown ul li i, \
					.social_share_dropdown ul li:hover .share_text, \
					.single_links_pages span, \
					.single_links_pages a:hover span, \
					.pagination ul li span, \
					.pagination ul li a:hover, \
					.pagination ul li.next a:hover i, \
					.pagination ul li.prev a:hover i, \
					.pagination ul li.last a:hover i, \
					.pagination ul li.first a:hover i, \
					.filter_holder ul li.label i, \
					#back_to_top:hover, \
					.header_top #lang_sel ul > li:hover > a, \
					.header_top #lang_sel_click ul > li:hover > a, \
					.header_top #lang_sel ul li ul li a:hover, \
					.header_top #lang_sel_click ul li ul li a:hover, \
					.header_top #lang_sel_list ul li a, \
					.header_top #lang_sel_list ul li a:visited, \
					footer #lang_sel ul ul a:hover, \
					footer #lang_sel_click ul ul a:hover, \
					aside .widget #lang_sel_list li a:hover, \
					section.side_menu #lang_sel_list li a:hover, \
					footer #lang_sel_list li a:hover, \
					aside .widget #lang_sel_list.lang_sel_list_vertical a.lang_sel_sel, \
					section.side_menu #lang_sel_list.lang_sel_list_vertical a.lang_sel_sel, \
					aside .widget #lang_sel_list.lang_sel_list_horizontal a.lang_sel_sel, \
					section.side_menu #lang_sel_list.lang_sel_list_horizontal a.lang_sel_sel, \
					.steps_holder .icon-circle, \
					.vc_text_separator.full div, \
					#panel-admin h4 span, \
					.woocommerce del, \
					.woocommerce-page del, \
					.woocommerce del .amount, \
					.woocommerce-page del .amount, \
					.woocommerce .select2-results li.select2-highlighted, \
					.woocommerce-page .select2-results li.select2-highlighted, \
					.woocommerce-checkout .chzn-container .chzn-results li.active-result.highlighted, \
					.woocommerce ul.products li.product h3:hover, \
					.woocommerce-page ul.products li.product h3:hover, \
					.woocommerce ul.products li.product a.button, \
					.woocommerce .single_add_to_cart_button, \
					.woocommerce-page .single_add_to_cart_button, \
					.woocommerce-pagination ul.page-numbers li span.current, \
					.woocommerce div.product p[itemprop='price'] span.amount, \
					.woocommerce ul.tabs li.active a, \
					.woocommerce div.cart-collaterals div.cart_totals table tr.total strong span.amount, \
					.woocommerce-page div.cart-collaterals div.cart_totals table tr.total strong span.amount, \
					.woocommerce div.cart-collaterals div.cart_totals table tr.total strong, \
					.woocommerce div.cart-collaterals h2 a span, \
					.woocommerce .checkout-opener-text a, \
					.woocommerce form.checkout table.shop_table tfoot tr.total th strong, \
					.woocommerce form.checkout table.shop_table tfoot tr.total td span.amount, \
					.woocommerce aside .widget ul.product-categories a:hover, \
					.woocommerce-page aside .widget ul.product-categories a:hover{ \
						color: "+color+"; \
					} \
					.social_icon_holder .icon-stack:hover i.icon-circle, \
					.box_image_holder .box_icon .icon-stack i.icon-circle{ \
						color: "+color+" !important; \
					} \
					.box_image_with_border:hover, \
					.qbutton, \
					.load_more a, \
					#submit_comment, \
					.filter_holder ul, \
					.tabs .tabs-nav li.active a, \
					.price_table_inner .price_button, \
					#respond textarea:focus, \
					#respond input[type='text']:focus, \
					.contact_form input[type='text']:focus, \
					.contact_form  textarea:focus, \
					.pagination ul li.next a:hover, \
					.pagination ul li.prev a:hover, \
					.pagination ul li.last a:hover, \
					.pagination ul li.first a:hover, \
					.widget .tagcloud a:hover, \
					.blog_holder article.format-link .post_text:hover .post_text_holder, \
					.blog_holder article.format-quote .post_text:hover .post_text_holder, \
					#back_to_top:hover span, \
					#panel .open, \
					.icon_list i, \
					.box_holder_icon_inner.square .icon-stack, \
					.icon_with_title.boxed .icon_holder .icon-stack, \
					.progress_bars_icons_inner.square .bar.active .bar_noactive, \
					.progress_bars_icons_inner.square .bar.active .bar_active, \
					.widget.widget_search form input[type='submit'], \
					.vc_text_separator.full div, \
					.ajax_loader_html, \
					.woocommerce input[type='text']:focus, \
					.woocommerce input[type='password']:focus, \
					.woocommerce input[type='email']:focus, \
					.woocommerce-page input[type='text']:focus, \
					.woocommerce-page input[type='password']:focus, \
					.woocommerce-page input[type='email']:focus, \
					.woocommerce textarea:focus, \
					.woocommerce-page textarea :focus, \
					.woocommerce .button, \
					.woocommerce-page .button, \
					.woocommerce-page input[type='submit'], \
					.woocommerce input[type='submit'], \
					.woocommerce ul.products li.product .added_to_cart, \
					.woocommerce-pagination ul.page-numbers li a.prev:hover, \
					.woocommerce-pagination ul.page-numbers li a.next:hover, \
					.widget #searchform.form_focus, \
					.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, \
					.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle { \
						border-color: "+color+"; \
					} \
					.social_share_icon{\
						background-image: url('http://demo.qodeinteractive.com/subway/demo_images/"+share_image+".png');\
					}\
					";
				jQuery('body').append('<style id="toolbar_colors_css" type="text/css">'+newSkin+'</style>');
				
		});
	});
}); 

function hexToRgb(hex) {
    // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
    hex = hex.replace(shorthandRegex, function(m, r, g, b) {
        return r + r + g + g + b + b;
    });

    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
}

$j.fn.inlineStyle = function (prop) {
	 var styles = this.attr("style"),
		 value;
	 styles && styles.split(";").forEach(function (e) {
		 var style = e.split(":");
		 if ($j.trim(style[0]) === prop) {
			 value = style[1];           
		 }                    
	 });   
	 return value;
};
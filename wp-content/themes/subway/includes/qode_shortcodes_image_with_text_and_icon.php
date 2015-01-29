<?php
$full_path = __FILE__;
$path = explode( 'wp-content', $full_path );
require_once( $path[0] . '/wp-load.php' );
 ?>

<div id="qode_shortcode_form_wrapper">
<form id="qode_shortcode_form" name="qode_shortcode_form" method="post" action="">
	<div class="input">
		<label>Image</label>
		<input id="image" type="text" name="image" class="popup_image" value="" size="55" />
		<input class="upload_button" type="button" value="Upload file" id="popup_image_button">
	</div>
	<div class="input">
		<label>Icon Size (em)</label>
			<input name="icon_size" id="icon_size" value="" maxlength="12" size="12" />
	</div>
	<div class="input">
		<label>Icon Background Color</label>
		<div class="colorSelector"><div style=""></div></div>
		<input type="text" name="icon_background_color" id="icon_background_color" value="" size="10" maxlength="10" />
	</div>
	<div class="input">
		<label>Icon</label>
			<select id="icon" name="icon">
				<option value=""></option>
				<?php
				$fa_icons = getFontAwesomeIconArray();
				print_r($fa_icons);
				foreach ($fa_icons as $key => $value) {
				?>
					<option value="<?php echo $key; ?>"><?php echo $key; ?></option>
				<?php
				}
				?>
			</select>
	</div>
	<div class="input">
		<label>Link</label>
		<input name="link" id="link" value="" maxlength="100" size="55" />
	</div>
	<div class="input">
		<label>Target</label>
		<select name="target" id="target">
			<option value=""></option>
			<option value="_self">Self</option>
			<option value="_blank">Blank</option>
			<option value="_parent">Parent</option>
		</select>
	</div>
	<div class="input">
		<label>Title</label>
		<input name="title" id="title" value="" maxlength="100" size="55" />
	</div>
	<div class="input">
		<label>Title Color</label>
		<div class="colorSelector"><div style=""></div></div>
		<input name="title_color" id="title_color" value="" maxlength="12" size="12" />
	</div>
	<div class="input">
		<input type="submit" name="Insert" id="qode_insert_shortcode_button" value="Submit" />
	</div>
</form>
</div>
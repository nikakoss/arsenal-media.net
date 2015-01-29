<?php
$full_path = __FILE__;
$path = explode( 'wp-content', $full_path );
require_once( $path[0] . '/wp-load.php' );
 ?>

<div id="qode_shortcode_form_wrapper">
<form id="qode_shortcode_form" name="qode_shortcode_form" method="post" action="">
	<div class="input">
		<label>Image 1</label>
		<input id="image1" class="popup_image" type="text" name="image1" value="" size="55" />
		<input class="upload_button" type="button" value="Upload file" id="popup_image_button">
	</div>
	<div class="input">
		<label>Image 2</label>
		<input id="image2" class="popup_image" type="text" name="image2" value="" size="55" />
		<input class="upload_button" type="button" value="Upload file" id="popup_image_button">
	</div>
	<div class="input">
		<label>Image 3</label>
		<input id="image3" class="popup_image" type="text" name="image3" value="" size="55" />
		<input class="upload_button" type="button" value="Upload file" id="popup_image_button">
	</div>
	<div class="input">
		<label>Image 4</label>
		<input id="image4" class="popup_image" type="text" name="image4" value="" size="55" />
		<input class="upload_button" type="button" value="Upload file" id="popup_image_button">
	</div>
	<div class="input">
		<label>Icon Background Color</label>
		<div class="colorSelector"><div style=""></div></div>
		<input type="text" name="icon_background_color" id="icon_background_color" value="" size="10" maxlength="10" />
	</div>
	<div class="input">
		<label>Icon 1</label>
			<select id="icon1" name="icon1">
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
		<label>Icon 2</label>
			<select id="icon2" name="icon2">
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
		<label>Icon 3</label>
			<select id="icon3" name="icon3">
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
		<label>Icon 4</label>
			<select id="icon4" name="icon4">
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
		<label>Link 1</label>
		<input type="text" name="link1" id="link1" value="" size="10" maxlength="80" />
	</div>
	<div class="input">
		<label>Target 1</label>
		<select name="target1" id="target1">
			<option value="_self">Self</option>
			<option value="_blank">Blank</option>
			<option value="_parent">Parent</option>
		</select>
	</div>
	<div class="input">
		<label>Link 2</label>
		<input type="text" name="link2" id="link2" value="" size="10" maxlength="80" />
	</div>
	<div class="input">
		<label>Target 2</label>
		<select name="target2" id="target2">
			<option value="_self">Self</option>
			<option value="_blank">Blank</option>
			<option value="_parent">Parent</option>
		</select>
	</div>
	<div class="input">
		<label>Link 3</label>
		<input type="text" name="link3" id="link3" value="" size="10" maxlength="80" />
	</div>
	<div class="input">
		<label>Target 3</label>
		<select name="target3" id="target3">
			<option value="_self">Self</option>
			<option value="_blank">Blank</option>
			<option value="_parent">Parent</option>
		</select>
	</div>
	<div class="input">
		<label>Link 4</label>
		<input type="text" name="link4" id="link4" value="" size="10" maxlength="80" />
	</div>
	<div class="input">
		<label>Target 4</label>
		<select name="target4" id="target4">
			<option value="_self">Self</option>
			<option value="_blank">Blank</option>
			<option value="_parent">Parent</option>
		</select>
	</div>
	<div class="input">
		<input type="submit" name="Insert" id="qode_insert_shortcode_button" value="Submit" />
	</div>
</form>
</div>
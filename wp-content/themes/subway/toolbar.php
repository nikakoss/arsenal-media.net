<?php global $qode_options_subway; 


?>
<div id="panel" style="margin-left: -318px;">   
    <div id="panel-admin">
		<h4>THEME <span>OPTIONS</span></h4>
		<div class="panel-admin-box">
			<select id="tootlbar_header_top">
				<option value="">Header Top Menu</option>
				<option <?php //if ($qode_header_top == "yes") { echo "selected='selected'"; } ?> value="yes">Yes</option>
				<option <?php //if ($qode_header_top == "no") { echo "selected='selected'"; } ?> value="no">No</option>
		
			</select>
		</div>
		<div class="panel-admin-box">
			<select id="tootlbar_smooth_scroll">
				<option value="">Smooth Scroll</option>
				<option value="no">No</option>
				<option value="yes">Yes</option>
			</select>
		</div>
		<div class="panel-admin-box">
			<select id="tootlbar_boxed">
				<option value="">Boxed Layout</option>
				<option value="">No</option>
				<option value="boxed">Yes</option>
			</select>
		</div>
		<div class="panel-admin-box">
			<select id="tootlbar_background">
				<option value="no">Choose Background</option>
				<option value="background1">Background 1</option>
				<option value="background2">Background 2</option>
				<option value="background3">Background 3</option>
			</select>
		</div>
		<div class="panel-admin-box">
			<select id="tootlbar_pattern">
				<option value="no">Choose Pattern</option>
				<option value="pattern11">Retina Wood</option>
				<option value="pattern12">Retina Wood Grey</option>
				<option value="pattern1">Transparent</option>
				<option value="pattern3">Cubes</option>
				<option value="pattern4">Diamond</option>
				<option value="pattern5">Escheresque</option>
				<option value="pattern10">Whitediamond</option>
				
			</select>
		</div>
		<div class="panel-admin-box">
			<h5>COLORS</h5>
			<div id="tootlbar_colors">
				<div class="color active color1" data-color="#1e9944" style="background-color:#1e9944;"></div>
				<div class="color color2" data-color="#ff4e00" style="background-color:#ff4e00;"></div>
				<div class="color color3" data-color="#59b2e5" style="background-color:#59b2e5;"></div>
				<div class="color color4" data-color="#ffd200" style="background-color:#ffd200;"></div>
				<div class="color color5" data-color="#ff008a" style="background-color:#ff008a;"></div>
				<div class="color color6" data-color="#bcbcbc" style="background-color:#bcbcbc;"></div>
			</div>
		</div>
		
    </div>
    <a class="open" href="#"><span><i class="icon-cog"></i></span></a>

</div>
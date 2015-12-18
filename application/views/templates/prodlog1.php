<?php 

	$images = array(
		"ace-long", 
		"ace", 
		"big-data",
		"connect-4-m-sp",
		"connect-enterprise"
	);

	foreach ($images as $key => $value) {

		echo 	'<img src="images/'.$value.'-print.jpg" alt="" class="rpv-img">
				<ul class="button-group">
					<li><a href="images/'.$value.'.svg" class="button-sand" download>SVG</a></li>
					<li><a href="images/'.$value.'-print.jpg" class="button-sand" download>JPG (300dpi)</a></li>
					<li><a href="images/'.$value.'-screen.png" class="button-sand" download>PNG</a></li>
				</ul>';

	}

?>
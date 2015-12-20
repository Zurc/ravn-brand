<?php 

	$colors = array( array('maroon',
							array("#991B1E", "rgb(153, 27, 30)", "cmyk(25, 99, 99, 24)", "pantone 7628 C"),	//	main
							array("#800205", "rgb(153, 27, 30)", "cmyk(25, 99, 99, 24)", "pantone 7628 C"),	//	shade 1
							array("#4E0000", "rgb(153, 27, 30)", "cmyk(25, 99, 99, 24)", "pantone 7628 C"),	//	shade 2
							array("#cd4f52", "rgb(153, 27, 30)", "cmyk(25, 99, 99, 24)", "pantone 7628 C"),	//	tint 1
							array("#FF8386", "rgb(153, 27, 30)", "cmyk(25, 99, 99, 24)", "pantone 7628 C")	//	tint 2
					 ),
					 array('emerald',
					 		array("#1b9996", "rgb(27, 153, 150)", "cmyk(80, 20, 44, 1)", "pantone 7473 C"),	//	main
							array("#02807d", "rgb(153, 27, 30)", "cmyk(25, 99, 99, 24)", "pantone 7628 C"),	//	shade 1
							array("#004e4b", "rgb(153, 27, 30)", "cmyk(25, 99, 99, 24)", "pantone 7628 C"),	//	shade 2
							array("#4fcdca", "rgb(153, 27, 30)", "cmyk(25, 99, 99, 24)", "pantone 7628 C"),	//	tint 1
							array("#83fffe", "rgb(153, 27, 30)", "cmyk(25, 99, 99, 24)", "pantone 7628 C")	//	tint 2
			  		 ),
		)
			// array("hex" => "#993B4E", "rgb" => "rgb(153, 27, 30)", "cmyk" => "cmyk(25, 99, 99, 24)","pantone" => "pantone 7628 C"),
	;

	foreach ($colors as $key => $value) {

		echo '<section class="bottom-shadow">
				<div class="col-xs-12">
					<h2>'.$colors[$key][0].'</h2>
					<p>The RAVN logo should be reproduced in Main color -Maroon/ Black/White with white background whenever possible.</p>
					<p>If color reproduction is not available, the logo should be reproduced in Gray/Black/ White.</p>
				</div>
				<div class="col-xs-12 col-sm-2">
					<div class="center">
						<div class="color-box" style="background:'.$colors[$key][3][0].' "></div>
						<p class="lead">Shade 2</p>
					</div>
					<p class="color-code">'.$colors[$key][1][0].'</p>
					<p class="color-code">'.$colors[$key][1][1].'</p>
					<p class="color-code">'.$colors[$key][1][2].'</p>
				</div>
				<div class="col-xs-12 col-sm-2">
					<div class="center">
						<div class="color-box" style="background:'.$colors[$key][2][0].' "></div>
						<p class="lead">Shade 1</p>
					</div>
					<p class="color-code">'.$colors[$key][1][0].'</p>
					<p class="color-code">'.$colors[$key][1][1].'</p>
					<p class="color-code">'.$colors[$key][1][2].'</p>
				</div>
				<div class="col-xs-12 col-sm-3">
					<div class="center">
						<div class="main-color-box" style="background:'.$colors[$key][1][0].' "></div>
						<p class="lead">Main</p>
					</div>
					<p class="color-code">'.$colors[$key][1][0].'</p>
					<p class="color-code">'.$colors[$key][1][1].'</p>
					<p class="color-code">'.$colors[$key][1][2].'</p>
					<p class="color-code">'.$colors[$key][1][3].'</p>
				</div>
				<div class="col-xs-12 col-sm-2">
					<div class="center">
						<div class="color-box" style="background:'.$colors[$key][4][0].' "></div>
						<p class="lead">Tint 1</p>
					</div>
					<p class="color-code">'.$colors[$key][1][0].'</p>
					<p class="color-code">'.$colors[$key][1][1].'</p>
					<p class="color-code">'.$colors[$key][1][2].'</p>
				</div>
				<div class="col-xs-12 col-sm-2">
					<div class="center">
						<div class="color-box" style="background:'.$colors[$key][5][0].' "></div>
						<p class="lead">Tint 2</p>
					</div>
					<p class="color-code">'.$colors[$key][1][0].'</p>
					<p class="color-code">'.$colors[$key][1][1].'</p>
					<p class="color-code">'.$colors[$key][1][2].'</p>
				</div>
			</section>';

	}

?>
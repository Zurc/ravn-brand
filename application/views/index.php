<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include("templates/header.php");
include("templates/sidebar.php");
?>

<div id="content">
	<div class="col-xs-12 col-sm-9">
	  

	<?php 

		if(empty($_GET['link'])) {

			include("templates/index.php");

		} else {

			$l = $_GET['link'];
			$l = basename($l);
			$template = 'templates/'.$l.'.php';
			$path = $_SERVER['DOCUMENT_ROOT']."/brand/application/views/".$template;
			// show path	
			echo "<script type=\"text/javascript\">console.log('path: ".$path."')</script>";

			// if(empty($template)) {
			// 	include ($_SERVER['DOCUMENT_ROOT']."/brand/views/".$template);
			if(file_exists($path)) {
				include "templates/".$l.".php";
			} else {
				include("templates/index.php");
			}
		}
		
	?>

	</div><!--/.col-xs-12.col-sm-9-->
</div><!--/content-->

<?php include("templates/footer.php"); ?>
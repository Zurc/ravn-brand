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
			if(!file_exists("templates/".$l.".php"))
				include "templates/one.php";
			// show an specific template according which link it is in your url
			else include "templates/".$l.".php";
		}
		
	?>

	</div><!--/.col-xs-12.col-sm-9-->
</div><!--/content-->

<?php include("templates/footer.php"); ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include("templates/header.php");
include("templates/sidebar.php");
?>

<div id="content">
	<div class="col-xs-12 col-sm-9">
	  <p class="visible-xs">
	    <button type="button" class="btn btn-primary btn-md" data-toggle="offcanvas">Contents</button>
	  </p>

	<?php 

		if(empty($_GET['link'])) {

			include("templates/index.php");

		} else {
			$l = $_GET['link'];

			echo $l;
		}
		
	?>

	</div><!--/.col-xs-12.col-sm-9-->
</div><!--/content-->

<?php include("templates/footer.php"); ?>
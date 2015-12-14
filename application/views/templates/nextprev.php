<?php 

$pagelinks = array(
	"0" => "introduction",
	"1"	=> "brand-essence",
	"2"	=> "ravn-logo"
);
$arrlength = count($pagelinks);

$linkkey = $_GET['link'];
$linkvalue = array_search($linkkey, $pagelinks);

// show link index
echo "<script type=\"text/javascript\">console.log('link index: ".$linkvalue."')</script>";


?>

<div id="subnav">
    <div id="nextprev">
    <?php 
    
    	if ($linkvalue > 0 ) {
    
    	echo "<span class='glyphicon glyphicon-menu-left' aria-hidden='true'></span><a href='index.php?link=".$pagelinks[$linkvalue - 1]."' class='prev'>Prev</a>";
	
		}

    	if ($linkvalue < $arrlength -1 ) {
    
    	echo "<a href='index.php?link=".$pagelinks[$linkvalue + 1]."' class='next'>Next</a><span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span>";
	
		}
	?>

    </div>
</div>


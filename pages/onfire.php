<?php
	session_start();
	if(!isset($_SESSION['Start&Boost'])){
		include("fixed.php");	
		include("landingcont.php");	
	}else{
			$pages="onfire";
		include("fixed.php");
		include("onfirecont.php");
	
	}

?>
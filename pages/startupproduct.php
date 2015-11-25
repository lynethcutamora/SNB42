<?php
	session_start();
	if(!isset($_SESSION['Start&Boost'])){
		include("fixed.php");	
		include("landingcont.php");	
	}else{
		$pages="startup";
		include("fixed.php");
		include("cont.php");
	}

?>
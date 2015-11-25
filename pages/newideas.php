<?php
	session_start();
	if(!isset($_SESSION['Start&Boost'])){
		include("fixed.php");	
		include("landingcont.php");	
	}else{
		$pages="newideas";
		include("fixed.php");
		include("newideascont.php");
		
	}

?>

    <?php 
    	session_start();
    	if(!isset($_SESSION['Start&Boost'])){
    		header("location:../index.php");
    	}else{
    			$_SESSION['pages']='adminoverallreports';
    	include("fixed.php");?>
    <?php include("content.php");?>
    <?php include("footer.php");?>
    <?php include("controlsidebar.php");?>
    <?php include("chartcontent.php");}?>
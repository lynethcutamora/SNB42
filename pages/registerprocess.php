<?php 
session_start();
include("dbcon.php");
  if(isset($_POST['btnIdeator'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['repassword']) )
    {     
    	if($_POST['password']==$_POST['repassword']){
	    	 $userId = uniqid('id');
	      	 $lname = $_POST['lname'];
	      	 $fname = $_POST['fname'];
	      	 $midinit = $_POST['midinit'];
	      	 $age = $_POST['age'];
	      	 $gender = $_POST['gender'];
	      	 $email = $_POST['email'];
	      	 $password = $_POST['password'];
	      	 $address = $_POST['address'];
	


	     	 
	      	 mysql_query("INSERT INTO User_MD(userId,userType,dateRegistered,address,emailAdd,password)
	      	 VALUES('$userId','Ideator',NOW(),'$address','$email','$password')");
	      	 mysql_query("INSERT INTO user_dtl(userId,lName,fName,midInit,age,gender,profilePic)
	      	 VALUES('$userId','$lname','$fname','$midinit','$age','$gender','1')");



	        echo "Successfully Register";
	    }else{
	    	$_SESSION['error']="Password and Confirm Password didn't match";
	    echo "sayop Register";
	    }
    }
   else if(isset($_POST['btnInvestor'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['repassword']) )
    {     
    	if($_POST['password']==$_POST['repassword']){
	    	 $userId = uniqid('in');
	      	 $lname = $_POST['lname'];
	      	 $fname = $_POST['fname'];
	      	 $midinit = $_POST['midinit'];
	      	 $age = $_POST['age'];
	      	 $gender = $_POST['gender'];
	      	 $email = $_POST['email'];
	      	 $password = $_POST['password'];
	      	 $address = $_POST['address'];
	


	     	 
	      	 mysql_query("INSERT INTO User_MD(userId,userType,dateRegistered,address,emailAdd,password)
	      	 VALUES('$userId','Investor',NOW(),'$address','$email','$password')");
	      	 mysql_query("INSERT INTO user_dtl(userId,lName,fName,midInit,age,gender,profilePic)
	      	 VALUES('$userId','$lname','$fname','$midinit','$age','$gender','1')");



	        echo "Successfully Register";
	    }else{
	    	$_SESSION['error']="Password and Confirm Password didn't match";
	    echo "sayop Register";
	    }
    } 
    else if(isset($_POST['btnCompany'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['repassword']) )
    {     
    	if($_POST['password']==$_POST['repassword']){
	    	 $userId = uniqid('in');
	      	 $companyname = $_POST['companyname'];
	      	 $ownername = $_POST['ownname'];
	      	 $businesstype = $_POST['businesstype'];
	      	 $yearfounded = $_POST['yearfounded'];
	      	 $address = $_POST['address'];
	      	 $email = $_POST['email'];
	      	 $password = $_POST['password'];
	


	     	 
	      	 mysql_query("INSERT INTO User_MD(userId,userType,dateRegistered,address,emailAdd,password)
	      	 VALUES('$userId','Company',NOW(),'$address','$email','$password')");
	      	 mysql_query("INSERT INTO Company_dtl(userId,companyName,businessType,ownerName,yearFounded)
	      	 VALUES('$userId','$lname','$fname','$midinit','$age','$gender','1')");



	        echo "Successfully Register";
	    }else{
	    	$_SESSION['error']="Password and Confirm Password didn't match";
	    echo "sayop Register";
	    }
    }



?>
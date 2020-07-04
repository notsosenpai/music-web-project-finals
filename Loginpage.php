<!--
Lloyd Robinson G. Lopez
N2
ITMC Platform Technologies
July 4, 2020
Midterm Requirement

Honor Code:
I completed this code by the help of my friends but asking the code but an explanation only.
 
-->
<?php
	include "conn.php";
	session_start();
	
	//initialize variables
	$uname= $_POST['uname'];
	$pname = $_POST['pname'];
	
	//query
	$Signup = "select * from userdata where Username = '$uname' && Password = '$pname'";
	$result = mysqli_query($conn, $Signup);
	$num = mysqli_num_rows($result);
	$get = mysqli_fetch_assoc($Signup);
	$ID = $get['ID'];
	
	// if account was found in the database, the user will be redirected to the home page
	// else, back to login page
	if($num == 1){
		$_SESSION['uname'] = $uname;
		header("location:index1.php");
	}else{
		header("location:Login-page.php");
	}
?>
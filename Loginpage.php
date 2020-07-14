<!--
Lloyd Robinson G. Lopez
N2
ITMC Platform Technologies
July 14, 2020
Final Requirement

Honor Code:
I completed this code with the help of online tutorials and a bit of explanations from my friends.
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. If proven guilty, I won't be credited any points for this endeavor.
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
	//ID getter
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
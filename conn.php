<!--
Lloyd Robinson G. Lopez
N2
ITMC Platform Technologies
July 14, 2020
Final Requirement


Honor Code:
This is my own work and I have not received any unauthorized help in completing this. I have not copied from my classmate, friend, nor any unauthorized resource.
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. If proven guilty, I won't be credited any points for this endeavor.
-->
<?php
	// start session and connect to database
	session_start();
	$conn = mysqli_connect('localhost', 'test1','1234','data1')
	OR die('error: ' .
	mysqli_connect_error());

	// declare variables
	$uname = "";
	$ename = "";
	$pname = "";
	$ID = 0;
	$update = false;

	// check if the update button has been set or clicked
	if (isset($_POST['update'])) {
		$ID = $_POST['ID'];
		$uname = $_POST['uname'];
		$ename = $_POST['ename'];
		$pname = $_POST['pname'];
		
		// this will update the data inside the database
		mysqli_query($conn, "UPDATE userdata SET Username='$uname', Email='$ename', Password='$pname' WHERE ID=$ID");
		$_SESSION['message'] = "Account updated!"; 
		header('location: Update.php');  
	}
	
	// if home button is clicked, the user will be redirected to the login page
	if (isset($_POST['Home'])) {
		header('location: index1.php');
	}
	
?>


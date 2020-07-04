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
	include('conn.php');
	
	// check if the delete button has been set or clicked
	if (isset($_GET['del'])) {
	$ID = $_GET['del'];
	
		// delete the account from the database
		mysqli_query($conn, "DELETE FROM userdata WHERE ID=$ID");
		$_SESSION['message'] = "Account deleted!"; 
		header('location: Login-page.php');
	}
?>
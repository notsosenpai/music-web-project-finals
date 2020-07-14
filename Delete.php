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
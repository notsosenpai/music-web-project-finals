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
	include "conn.php";
	
	session_start();
	unset($_SESSION['ID']);
	session_destroy();
	
	// after logging out, the user will be redirected to the login page
	header('location:Login-page.php');
?>
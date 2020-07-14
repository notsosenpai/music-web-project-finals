<!--
Lloyd Robinson G. Lopez
N2
ITMC Platform Technologies
July 14, 2020
Final Requirement


Honor Code:
This is not completely my own work. I have integrated some knowledge that i have gained and learned from watching online tutorials.
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. If proven guilty, I won't be credited any points for this endeavor.
-->

<?php
	// the file conn.php will be included in this file just once
	include_once 'conn.php';
	// the file redirect.php will be required in this file just once
	require_once "redirect.php";
	
	// check if google code has already been set and declared
	if(isset($_GET['code'])){
		// retrieve ID token
		$token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
		
		// check if there is no error in accessing and retrieving ID token
		if (!isset($token['error'])) {
			$google_client->setAccessToken($token['access_token']);
			// declare the session access token to the access token retrieved from google
			$_SESSION['access_token'] = $token['access_token'];
			
			// retrieve data profile from google
			$google_service = new Google_Service_Oauth2($google_client);
			$data = $google_service->userinfo->get();
			
			// check if the user's given name in google is not empty
			if (!empty($data['given_name']))
			{
				// declare the session username to the given name retrieved from the user's google account
				$_SESSION['uname'] = $data['given_name'];
				
				// concatenate the given name and the family name of the user in his/her google account
				$name = $data['given_name']." ".$data['family_name'];
				$_SESSION['googlename'] = $name;
				
				$username = $_SESSION['uname'];
				
				// a query that will check if a username has already been stored in the database
				$query = "SELECT * FROM userdata WHERE uname='$username';";
				$result = mysqli_query($conn, $query);
				
				if (mysqli_num_rows($result) > 0 ) {
					$row = mysqli_fetch_assoc($result);
				}
				
				// if the user has successfully signed in
				// the user will be redirected to the home page
				if ($username == $row['uname']) {
					$_SESSION['ID'] = $row['ID'];
					header('location: index1.php');
					exit();
				}				
				// if the user's data has not yet been stored or found in the database after signing up,
				// then his/her details will then be inserted in the database
				else{
					$password = "12345";
					$sql = "INSERT INTO userdata(Username, Password) VALUES ('$username', '$password')";
					$mysql = mysqli_query($conn, $sql);
				}			
			}
		}
	}
?>
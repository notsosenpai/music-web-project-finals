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
	// the file autoload.php will be required in this file just once
    require_once("GoogleAPI/vendor/autoload.php");
	
    $google_client = new Google_Client();
	// set client id to the client id of the application generated with google
    $google_client->setClientId("6994650910-0e07cddtn3ra4t3pmq7f55sjvnd1ocm1.apps.googleusercontent.com");
	// set client secret to the client secret of the application generated with google
    $google_client->setClientSecret("9FIrvIcZpJ3EMukkeLTwvzzQ");
	// set the name of this application
    $google_client->setApplicationName("Musicwebapp");
	// set a redirection url to google.php
    $google_client->setRedirectUri("http://localhost/Music-Web-Project/google.php");
	// add scope which is the email of the user in his/her gmail account
    $google_client->addScope("email");
	// add scope which is the profile of the user in his/her gmail account
    $google_client->addScope("profile");
	// create authorization url
    $loginURL = $google_client->createAuthUrl();
?>
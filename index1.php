<!DOCTYPE html>
<!--
Lloyd Robinson G. Lopez
N2
ITMC Platform Technologies
July 4, 2020
Midterm Requirement

Honor Code:
This is not totally my own Ive seek help and Ideas at youtube:
links:
https://www.youtube.com/watch?v=92yD3nOV1pk
https://www.youtube.com/watch?v=Z-Waawn5yqw
-->
	<?php
		include "conn.php";
	?>
	<html lang="en">
		<head>
			<!-- Unicode -->
			<meta charset="UTF-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<meta http-equiv="X-UA-Compatible" content="ie=edge" />
			<!-- Fonts-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
			<title>Music Player</title>
			<link rel="stylesheet" href="MP.css" />
		</head>
		<body>
			<!-- Left content-->
			<div class="split left">
				<div class="left_content">
					<div class="dropdown">
						<!-- Signup button-->
						<div class="logout_btn">
							<h2> Welcome: </h2> 
							<h3> <?php echo $_SESSION['uname'];?></h3> 
							<button><a href="Update.php"> Profile </a></button>
							<button class="logout"><a href="Logout.php"> Sign out </a></button>
						</div>
					
						<button onclick="myFunction()" class="dropbtn"><i class="fa fa-play"> PLAYLIST</i></button>
						<hr/>
						<!-- Dropdown playlist list-->
						<div id="myDropdown" class="dropdown-content">
							<a>Maximillian - Beautiful Scars</a>
							<a>Finding Hope - 3AM</a>
							<a>Kina - Can We Kiss Forever</a>
							<a>Joji - Slow Dancing in the Dark</a>
							<a>Post Malone - Circles</a>
							<a>The Weeknd - Blinding Lights</a>
							<a>Travis Scott - Sicko Mode fr. Drake</a>
							<a>Music Hero - KLWKN</a>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Mid Content-->
			<div class="split mid">
				<div class="mid_content">
					<ul>
						<li><a class="active" href="index.html"><i class="fa fa-play-circle-o"></i> Comu-Fy</a></li>
					</ul>
				</div>
			</div>
			<div class="split right">
				<div class="right_content">
				</div>
			</div>
		
			<audio loop src="Maximillian - Beautiful Scars.mp3" id="song"></audio>
			<img src="maximillianicon.jpg" alt="background" id="BG" />
			<div class="container">
				<div class="song-name"></div>
				<div class="song-title">Maximillian - Beautiful Scars</div>
				<img src="maximillianicon.jpg" alt="thumbnail" id="thumbnail" />
				<div class="box"></div>
				<img src="IconsPlay.ico" alt="play/pause" onclick="playPause()" id="pp" />
				<img src="forward.png" alt="nextSong" id="ns" onclick="nextSong()" />
				<img src="forward.png" alt="previousSong" id="ps" onclick="previousSong()" />
				<input type="range" id="progressBar" min="0" max="" value="0" onchange='const progressBar = document.querySelector("#progressBar"); document.querySelector("#song").currentTime = progressBar.value;'>
			</div>
			
			<script src="MP.js"></script>
		</body>
	</html>
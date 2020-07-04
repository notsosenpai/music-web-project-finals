/*
Lloyd Robinson G. Lopez
N2
ITMC Platform Technologies
July 4, 2020
Midterm Requirement


--Honor Code:
I seek help doing this javascript in the internet to play music.
*/
	const songTitle = document.querySelector(".song-title");
	const thumbnail = document.querySelector("#thumbnail");
	const BG = document.querySelector("#BG");
	const pp = document.querySelector("#pp");
	const progressBar = document.querySelector("#progressBar");
	const song = document.querySelector("#song");
	var playing = true;
	
	//song list
	var songs = ["Maximillian - Beautiful Scars.mp3", "findinghope.mp3", "Kina - Can We Kiss Forever.mp3", "Joji - SLOW DANCING IN THE DARK.mp3","Post Malone - Circles.mp3","The Weeknd - Blinding Lights.mp3","Travis Scott - SICKO MODE ft. Drake.mp3","Music Hero - KLWKN.mp3"],
  songIndex = 0;

	//song album picture
	(thumbnails = ["maximillianicon.jpg", "findinghopeicon.jpg", "kinaicon.jpg", "Jojiicon.jpg","posticon.jpg","theweekndicon.jpg","travisicon.jpg","musicheroicon.jpg"]),
  (songNames = [
    "Maximillian - Beautiful Scars",
    "Finding Hope - 3am",
    "Kina - Can We Kiss Forever",
    "Joji - Slow Dancing In The Dark",
    "Post Malone - Circles",
    "The Weeknd - Blinding Lights",
    "Travis Scott - SICKO MODE ft.Drake",
    "Music Hero - KLWKN"
  ]);
  
function playPause() {
	if (playing) {
		const song = document.querySelector("#song"),
		pp = document.querySelector("#pp"),
		thumbnail = document.querySelector("#thumbnail");
		pp.src = "pause.png";
		song.play(); 
		playing = false;
		thumbnail.style.width = "160%";
	} else {
		pp.src = "IconsPlay.ico";
		song.pause(); 
		playing = true;
		thumbnail.style.width = "130%";
	}
}

function nextSong() {
	songIndex++;
	if (songIndex > songs.length-1) songIndex = 0;
	document.querySelector("#song").src = songs[songIndex];
	document.querySelector("#thumbnail").src = thumbnails[songIndex];
	document.querySelector("#BG").src = thumbnails[songIndex];
	playPause();
	document.querySelector(".song-title").innerHTML = songNames[songIndex];
}

function previousSong() {
	songIndex--;
	if (songIndex < 0) songIndex = songs.length-1;
	document.querySelector("#song").src = songs[songIndex];
	document.querySelector("#thumbnail").src = thumbnails[songIndex];
	document.querySelector("#BG").src = thumbnails[songIndex];
	playPause();
	document.querySelector(".song-title").innerHTML = songNames[songIndex];
}

function updateProgressValue() {
	const progressBar = document.querySelector("#progressBar");
	progressBar.max = document.querySelector("#song").duration;
	progressBar.value = document.querySelector("#song").currentTime;
}

/* dropdown playslit */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
	if (!event.target.matches('.dropbtn')) {
		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}
setInterval(updateProgressValue, 700);
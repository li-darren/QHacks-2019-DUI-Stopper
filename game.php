<?php 
include("server.php");
if (!isset($_SESSION['username'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reaction Time</title>
    <link rel="stylesheet" href="css/game.css">
</head>
<body>
  <div id="start" class="start">
    <div class="start-content">
    <p id="instructions"></p>
    <input type="button" id="startButton" value="START"/>
    </div>
  </div>
  <div id="box"></div>
  <p id="printReactionTime"></p>
  <div id="modal" class="modal">
    <div class="modal-content">
    <p id="someText"></p>
    <p id="moreText"></p>
    <p id="evenText"></p>
    <input type="button" id="backButton" value="Try Again"/>
    <input type="button" id="nextButton" value="UNLOCK MY CAR"/>
</div>
</div>
</body>
<script>
var tryCount = 0;
var clickedTime;
var createdTime;
var reactionTime;
var clickedGreen = -1;
var starting = document.getElementById("startButton");
var start = document.getElementById('start');
var next = document.getElementById("nextButton");
var back = document.getElementById("backButton");
var modal = document.getElementById('modal');

function bigBig() {
  myMain();
  startBox();
  closeStart();
  write();
  makeBox();
}

function myMain() {
setTimeout(startBox, 0);
}

function startBox() {
  document.getElementById("instructions").innerHTML = "Click on the green dots as quickly and accurately as possible as soon as it appears to unlock your car.\n Press 'START' to begin."
  start.style.display = "block";
}

function closeStart() {
	starting.onclick = function() {
  	createdTime = Date.now();
		setTimeout(myFunction, 10000);
  	start.style.display = "none";
	}
}

function write() {
  document.getElementById("box").onclick = function() {
    clickedTime = Date.now();
    reactionTime = (clickedTime - createdTime) / 1000;
    document.getElementById("printReactionTime").innerHTML = "Reaction Time: " + reactionTime + "s";
    this.style.display = "none";
    makeBox();
  }
}

function makeBox() {
  setTimeout(function() {
    document.getElementById("box").style.borderRadius = "100px";
    var top = Math.random();
    top = top * 300;
    var left = Math.random();
    left = left * 1200;
    document.getElementById("box").style.top = top + "px";
    document.getElementById("box").style.left = left + "px";
    document.getElementById("box").style.backgroundColor = "#2ead29";
    document.getElementById("box").style.display = "block";
    createdTime = Date.now();
    ++ clickedGreen;
  }, 1);
} 

function myFunction() {
  var average = 15 / clickedGreen;
	document.getElementById("someText").innerHTML = "Number of green clicked: " + clickedGreen;
  document.getElementById("moreText").innerHTML = "Current average reaction time: " + average + "s";
  document.getElementById("evenText").innerHTML = "Usual reaction time: 1.89s";
  modal.style.display = "block";
  if (average <= 1.89) {
    next.style.display = "block"; //button to open the car--'onclick'
    next.onclick = function() {
    window.location = "car.php";
    }
  }
  else {
  	++ tryCount;
    back.style.display = "block";
    back.onclick = function() {
        next.style.display = "none"
        back.style.display = "none"
        modal.style.display = "none"
        clickedGreen = 0;
        bigBig(); 
    }
  }
}

	bigBig();
</script>
</html>
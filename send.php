<?php
include ("header.php");
if (isset($_POST['drunk'])) {
	
	$query = "UPDATE users SET drunk = $drunk_state WHERE CustomerID = $username";
	mysqli_query($conn, $query);
	echo $username;
  }
if (isset($_POST['maps'])) {
	echo "hello";
	$places = mysqli_real_escape_string($conn, $_POST['maps']);
	if($places==1){
		echo "there are places! do shit";
		echo $places;

	}
	echo $username;
  }
?>
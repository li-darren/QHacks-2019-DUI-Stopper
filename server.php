<?php
session_start();
include ("header.php");

// connect to the database
$conn = mysqli_connect($host, $username, $pin, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

// USER REGISTRATION
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pin_1 = mysqli_real_escape_string($conn, $_POST['pin_1']);
  $pin_2 = mysqli_real_escape_string($conn, $_POST['pin_2']);
  $age = mysqli_real_escape_string($conn, $_POST['age']);

  // handle error messages
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($pin_1)) { array_push($errors, "PIN is required"); }
  if (empty($age)) { array_push($errors, "Age is required"); }
  if ($pin_1 != $pin_2) {
	   array_push($errors, "The two PINs do not match");
  }

  // ensure user doesn't already exists in the db with same username and email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, store the user in the db if there are no errors in the form
  if (count($errors) == 0) {
  	//$pin = md5($pin_2);//encrypt the pin using MD5 hash before saving in the database
      $pin = sha1($pin_2);
  	$query = "INSERT INTO users (username, email, pin, name, age) 
  			  VALUES('$username', '$email', '$pin', '$name', '$age')";
  	mysqli_query($conn, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }
}

// USER LOGIN
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $pin = mysqli_real_escape_string($conn, $_POST['pin']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($pin)) {
    array_push($errors, "PIN is required");
  }

  if (count($errors) == 0) {
    //$pin = md5($pin); // decrypt pin from MD5
    $pin = sha1($pin);
    $query = "SELECT * FROM users WHERE username='$username' AND pin='$pin'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      session_start();
      header('location: home.php');
    }else {
      array_push($errors, "Wrong username/pin");
    }
  }
}

?>
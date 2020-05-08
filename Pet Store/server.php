<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'mysql', 'Enquiry_Management');

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM marketing_executive WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
	$row = mysqli_fetch_assoc($results);

  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username; //not fetching 
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
// CHANGE PASSWORD
if (isset($_POST['password']) && isset($_POST['newpassword']) && isset($_POST['newpassword2'])) {
  $username = $_SESSION['username'];
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password1 = mysqli_real_escape_string($db, $_POST['newpassword']);
  $password2 = mysqli_real_escape_string($db, $_POST['newpassword2']);

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM marketing_executive WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
	$row = mysqli_fetch_assoc($results);
	
	if($password1!=$password2)
	{
		array_push($errors, "New Password Mismatched.");
	}
	else{

  	if (mysqli_num_rows($results) == 1) {
		$password1 = md5($password1);
		  	$query = "UPDATE marketing_executive SET password='$password1' WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
		
  	 array_push($errors, "Password Changed Sucessfully!");
  	}else {
  		array_push($errors, "Please Enter Correct Current Password. ");
  	}
  }}
}
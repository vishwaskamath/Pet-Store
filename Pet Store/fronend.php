<?php 
  session_start(); 
  require_once("stats.php");
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  include 'server.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>End of Day Report</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Latest compiled and minified CSS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
 
#loading-img{
display:none;
}
 
.response_msg{
margin-top:10px;
font-size:13px;
background:#E5D669;
color:#ffffff;
width:250px;
padding:3px;
display:none;
}
 
</style>
</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">Enquiry Management System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li ><a href="end_report.php">End of Day Report</a></li>
		        <li><a href="my_enquires.php">My Enquires</a></li>
<li class="active"><a href="profile.php">Change Password</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
<li><a href="index.php?logout='1'"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>
<body>

<div class="header">
	Change Password
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

	<div class="row">
 
<div class="col-md-10">
	<?php include('errors.php'); ?>
<form name="contact-form" action="profile.php" method="post" id="contact-form">
<div class="form-group">
<label for="password">Current Pasword</label>
<input type="password" class="form-control" name="password" placeholder="Current Password" required>
</div>
<div class="form-group">
<label for="newpassword">New Password</label>
<input type="password" class="form-control" name="newpassword" placeholder="New Password" required>
</div>
<div class="form-group">
<label for="newpassword2">Confirm New Password</label>
<input type="password" class="form-control" name="newpassword2" placeholder="Confirm New Password" required>
</div>
 
<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
<div class="response_msg"></div>
</form>
</div>
</div>


</div>
		
</body>
<footer class="footer">
  <div class="container">
    <span class="text-muted">© 2019 Enoch Renault</span>
    <span class="text-muted" style="float: right;">Powered by <a href="http://rooloodesigns.com/">Rooloo</span>
	
  </div>
</footer>
</html>
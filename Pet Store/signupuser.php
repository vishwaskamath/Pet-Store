<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<?php
include("config.php");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$license = $_POST['license'];
$rs=mysqli_query($con,"SELECT * from user where email='$email'");

if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
else
{
$query="INSERT INTO user(name,email,gender,phone,address,license,password) VALUES('$name','$email','$gender','$phone','$address','$license','$password')";

$rs=mysqli_query($con,$query) or
 die("Could Not Perform the Query");

echo "<br><div class=head1>Please Login to direct to home page</div>";
echo "<br><div class=head1><a href=login.php>Login</a></div>";

}
?>
</body>
</html>
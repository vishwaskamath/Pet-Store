<?php
$con=mysqli_connect("localhost", "root","", "pet");
$db1=mysqli_connect("localhost", "root","", "test");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

?>

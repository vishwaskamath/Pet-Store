<?php
include_once 'config.php';
session_start();
$id=$_POST['id'];
mysqli_query($con,"UPDATE lost SET status = '1' where id='$id'");
?>
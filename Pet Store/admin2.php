<?php
include_once 'config.php';
session_start();
$id=$_POST['id'];
mysqli_query($con,"UPDATE sell SET status = '1'  where id='$id' ");
?>
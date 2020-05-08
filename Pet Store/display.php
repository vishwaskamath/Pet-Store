<?php
include_once 'config.php';
session_start();

    
    $cname=$_POST['cname'];
   
    mysqli_query($db1,"UPDATE orders SET status = 'done' where cname='$cname'");
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="text-align: center
    ">Success</p>
</body>
</html>




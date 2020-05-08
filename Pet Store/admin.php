<?php
include_once 'config.php';
session_start();

foreach ($_SESSION["cart_item"] as $item) {
    
    $code= $item['code'];
    $dbqty = mysqli_query($db1,"SELECT quantity FROM tblproduct WHERE code='$code' ");
    $dbqty1 = mysqli_query($db1,"SELECT quantity FROM tblfood WHERE code='$code' ");

    $qty = mysqli_fetch_array($dbqty)[0]-$item['quantity'];
    $qty1 = mysqli_fetch_array($dbqty1)[0]-$item['quantity'];
    
    mysqli_query($db1,"UPDATE tblproduct SET quantity = '$qty' WHERE code = '$code' ");
    
    mysqli_query($db1,"UPDATE tblfood SET quantity = '$qty1' WHERE code = '$code' ");
   
}

?>

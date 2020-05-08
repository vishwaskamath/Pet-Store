<?php
session_start();
require_once('config.php');
$email = '';
?>
<html>

<head>
    <title>User Login</title>
    <style>
        body{
            color: white;
        }
    </style>
</head>

<body style="background-color: black">

    <?php
    if ($_SESSION["login"]) {
    ?>
    <div style="text-align: center; margin-top:20%">
    Welcome <?php echo $_SESSION["login"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.</a> <br>
    Click here for <a href="home.html" tite="Logout">Home page.</a>
        <?php
    } else echo "<h1>Please login first .</h1>";
        ?>
    </div>
      
</body>

</html>
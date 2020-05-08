<?php
session_start();
include("config.php");
$email = '';
$pass = '';
if (isset($_POST['email']) && isset($_POST['pass'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $rs = mysqli_query($con, "SELECT * from login where email='$email' and pass='$pass'");
    if (mysqli_num_rows($rs) < 1) {
        $found = "N";
        echo "<p>Error login!</p>";
    ?>
        <?php
        exit;
    } else {
        $_SESSION["login"] = $email;
        $row = mysqli_fetch_assoc($rs);
        if ($row['admin'] == 1) {
            echo "<h1 align=center>Hey you are ADMIN!!!</h1>";
        ?>
            <script>
                window.location.href = "adminpanel.html";
            </script>
        <?php
        }
    }


    if (isset($_SESSION["login"])) {
        echo "<h1 align=center>Hey you are sucessfully login!!!</h1>";

        $_SESSION["login"] = $email;
        ?>
        <script>
            window.location.href = "user.html";
        </script>


<?php




    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nova+Square&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            background-color: black;
            font-family: 'Nova Square';
        }

        container {
            padding: 20px;
        }

        input[type=text],
        input[type=password] {
            width: 50%;
            padding: 15px;
            margin: 18px 0 22px 0;
            display: inline-block;
            border: none;
        }
    </style>
</head>

<body>
    <div class="card">
        <div style="text-align: center;">
            <div style="background-color:black;">


                <h2 style="color: ghostwhite;">
                    LOGIN
                </h2>
                <p style="color: ghostwhite;">PROCEED TO LOGIN TO YOUR ACCOUNT</p>


            </div>




            <div>
                <br>




                <div style="padding: 50px; background-color: azure; width: 20%; text-align: center; border-radius: 5%; box-shadow: cornsilk; margin-left: 35%;">


                    <form name="form1" method="POST">
                        <div class="container">



                            <label for="email"><b>Email</b></label> &nbsp; &nbsp; &nbsp;
                            <input type="text" placeholder="Enter Email" name="email" required>
                            <br>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="pass" required>
                            <br>


                            <?php
                            if (isset($found)) {
                                echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="login.php">Please try again</p>';
                            }
                            ?>
                            <p>New User <a href="index.html">Register Here</a></p>
                            <br>
                    </form>
                    <div style="text-align: center;">
                        <button style="width: 100px;     background: black;
                        color: whitesmoke;
                        padding: 10px;" }>Login</button>
                    </div>

                </div>
            </div>
            <br>


        </div>


    </div>
    <br>
    <br>
    <br>
    <br>


</body>

</html>
<?php
include_once 'config.php';
?>
<!DOCTYPE html>


<head>
    <title>DELETE</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nova+Square&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: black;
            font-family: 'Nova Square';
        }

        container {
            padding: 20px;
        }
    </style>
</head>

<body>
    <br>
    <br>
    <div id="header" style="text-align: center">
        <label style="color: white">DELETE</label>
    </div>
    <br>

    <br>
    <div id="body">
        <div style="padding: 50px; background-color: azure; width: 30%;height:  100px; text-align: center; border-radius: 5%; box-shadow: cornsilk; margin-left: 31%;">


            <form action="upload_breed.php" method="post" enctype="multipart/form-data">

           

                <label for=" pwd">Delete from database</label>
            <br>
                <br>
                ENTER ID:
                <input type="text" name="id" />
                <br>
                <br>
                <button type="submit" name="btn-uploaded">Delete</button>
            </form>
            <br>
            <br>
            <br>
          
            <br /><br />
           
        </div>

    </div>

</body>

</html>
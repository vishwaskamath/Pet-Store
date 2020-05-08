<?php
include_once 'config.php';
?>
<!DOCTYPE html>


<head>
    <title>UPLOAD</title>
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
        <label style="color: white">Insert kennel</label>
    </div>
    <br>

    <br>
    <div id="body">
    <div style="padding: 50px; background-color: azure; width: 30%;height:  260px; text-align: center; border-radius: 5%; box-shadow: cornsilk; margin-left: 31%;">

            <form action="upload_kennel.php" method="post" enctype="multipart/form-data">
               
                <label for=" pwd">Para</label>
                <input type="text" name="para" />
                <br>
                <br>
                <label for=" pwd">Phone</label>
                <input type="text" name="phone" />
                <br>
                <br>
                <label for=" pwd">File</label>
                <input type="file" name="file" />
                <br>
                <br>

                <button type="submit" name="btn-upload">Upload</button>
                <br>
                <br>
               
            </form>
            <br>
            <br>
            <br>
            <div style="text-align: center">
                <a href="option.html"> <button style="    padding: 15px;
    color: blueviolet;
    background: cornsilk;
    border-radius: 10%;"><b>
                            option
                        </b></button>
                </a> </div>
       

        <br /><br />
        <?php
        if (isset($_GET['success'])) {
        ?>
             <div style="text-align: center">
                    <label>File Uploaded Successfully... <a href="kennel.php">click here to view file.</a></label>
                </div>
        <?php
        } else if (isset($_GET['fail'])) {
        ?>
            <label>Problem While File Uploading !</label>
        <?php
        } else {
        ?>

</div>
        <?php
        }
        ?>
    </div>

</body>

</html>
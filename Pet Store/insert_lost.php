<?php
include_once 'config.php';
?>
<!DOCTYPE html>


<head>
    <title>UPLOAD</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <br>
    <br>
    <div id="header" style="text-align: center">
        <label>File Uploading With PHP and MySql</label>
    </div>
    <br>

    <br>
    <div id="body">
        <div style="text-align: center">
            <form action="upload_lost.php" method="post" enctype="multipart/form-data">
            <label for=" pwd">Owner Name</label>
                <input type="text" name="owner" />
                <br>
                <br>
                <label for=" pwd">Breed</label>
                <input type="text" name="breed" />
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
                <a href="user.html"> <button style="    padding: 15px;
    color: blueviolet;
    background: cornsilk;
    border-radius: 10%;"><b>
                            back
                        </b></button>
                </a> </div>
        </div>

        <br /><br />
        <?php
        if (isset($_GET['success'])) {
        ?>
            <label>File Uploaded Successfully... <a href="lost.php">click here to view file.</a></label>
        <?php
        } else if (isset($_GET['fail'])) {
        ?>
            <label>Problem While File Uploading !</label>
        <?php
        } else {
        ?>


        <?php
        }
        ?>
    </div>

</body>

</html>
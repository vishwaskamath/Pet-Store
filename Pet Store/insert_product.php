<?php
include_once 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://fonts.googleapis.com/css?family=Nova+Square&display=swap" rel="stylesheet">
      <title>Signup</title>
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
                              INSERT PRODUCT
                        </h2>



                  </div>




                  <div>




                        <div style="padding: 50px; background-color: azure; width: 30%;height:  560px; text-align: center; border-radius: 5%; box-shadow: cornsilk; margin-left: 31%;">


                              <form action="upload_product.php" method="post" enctype="multipart/form-data">
                                    <div class="container">

                                          <label for="pwd"><b> Name</b></label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                          <input type="text" placeholder="Enter Name" name="name" />
                                          <br>

                                          <label for="pwd"><b>Price</b></label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                          <input type="text" placeholder="Enter Phone" name="price" />
                                          <br>
                                          <label for="pwd"><b>Code</b></label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                          <input type="text" placeholder="Enter Email" name="code" />
                                          <br>
                                          <label for="pwd"><b>File</b></label>&nbsp; &nbsp;
                                          <input type="file" placeholder="Insert file" name="file" />

                                          <br>
                                          <label for="pwd"><b>Description</b></label>&nbsp;
                                          <input type="text" placeholder="Enter desccription" name="des" />
                                          <br>

                                          <label for="pwd"><b>Quantity</b></label>&nbsp;
                                          <input type="text" placeholder="Enter quantity" name="quantity" />
                                          <br>

                                          <br>
                                          <button type="submit" name="btn-upload">Upload</button>
                                          <br>
                <br>
               
                              </form>
                              <br>
                              <br>
                              <?php
                              if (isset($_GET['success'])) {
                              ?>
                                    <div style="text-align: center">
                                          <label>File Uploaded Successfully... <a href="product.php">click here to view file.</a></label>

                                    </div>
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
                  </div>

            </div>








      </div>



</body>

</html>
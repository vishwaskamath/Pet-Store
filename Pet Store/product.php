<?php
session_start();
require_once("config.php");

?>
<HTML>

<HEAD>

    <link rel="icon" href="images/title.png" type="image/icon type">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BARKING MANGALORE</title>
    <link rel="icon" href="title.png" type="image/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'NOW', serif;
            color: #211a1a;
            font-size: 2.0em;
        }

        #shopping-cart {
            margin: 40px;
        }

        #product-grid {
            margin: 40px;
        }

        #shopping-cart table {
            width: 100%;
            background-color: #F0F0F0;
        }

        #shopping-cart table td {
            background-color: #FFFFFF;
        }

        .txt-heading {
            color: #211a1a;
            border-bottom: 1px solid #E0E0E0;
            overflow: auto;
        }

        #btnEmpty {
            background-color: #ffffff;
            border: #d00000 1px solid;
            padding: 5px 10px;
            color: #d00000;
            float: right;
            text-decoration: none;
            border-radius: 3px;
            margin: 10px 0px;
        }

        .btnAddAction {
            padding: 5px 10px;
            margin-left: 5px;
            background-color: #efefef;
            border: #E0E0E0 1px solid;
            color: #211a1a;
            float: right;
            text-decoration: none;
            border-radius: 3px;
            cursor: pointer;
        }

        #product-grid .txt-heading {
            margin-bottom: 18px;
        }

        .product-item {
            float: left;
            background: #ffffff;
            margin: 30px 30px 0px 0px;
            border: #E0E0E0 1px solid;
        }

        .product-image {
            height: 155px;
            width: 250px;
            background-color: #FFF;
        }

        .clear-float {
            clear: both;
        }

        .demo-input-box {
            border-radius: 2px;
            border: #CCC 1px solid;
            padding: 2px 1px;
        }

        .tbl-cart {
            font-size: 0.9em;
        }

        .tbl-cart th {
            font-weight: normal;
        }

        .product-title {
            margin-bottom: 20px;
        }

        .product-price {
            float: left;
        }

        .cart-action {
            float: right;
        }

        .product-quantity {
            padding: 5px 10px;
            border-radius: 3px;
            border: #E0E0E0 1px solid;
        }

        .product-tile-footer {
            padding: 15px 15px 0px 15px;
            overflow: auto;
        }

        .cart-item-image {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: #E0E0E0 1px solid;
            padding: 5px;
            vertical-align: middle;
            margin-right: 15px;
        }

        .no-records {
            text-align: center;
            clear: both;
            margin: 38px 0px;
        }

        .row {
            margin-right: 0;
            margin-left: 0;
        }

        .navbar {
            margin-bottom: 0;
            background-color: black;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: 'NOW', serif;
        }

        .navbar li a,
        .navbar .navbar-brand {
            color: orange !important;
        }

        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            color: black !important;
            background-color: orange !important;
        }

        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: orange !important;
        }


        .responsive {
            width: 100%;
            height: auto;
        }

        .card {
            transition: 0.3s;
            width: 75%;
            margin-left: 15%;
            background-color: black;
        }


        .card2 {

            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title2 {
            color: grey;
            font-size: 18px;
        }

        .button2 {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .button {

            outline: 0;
            display: inline-block;
            padding: 15px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;

            font-size: 18px;
        }

        .a2 {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        .btn {
            background-color: black;
            color: orange;
            padding: 15px 10px;
        }

        .dropdown-menu {
            background-color: black;
            color: orange;
        }

        .dropdown-menu {
            padding: 16px;
        }
    </style>

</HEAD>

<BODY>
    <!-- Cart ---->
    <nav class="navbar navbar-default navbar-fixed-top  ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="store.php">Store</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="ngo.php">NGO's</a></li>
                    <li><a href="sell.php">SELL</a></li>

                    <li><a href="lost.php">Lost Pets</a></li>
                    <li><a href="event.php">Events</a></li>
                    <li><a href="about.html">About Pets</a></li>
                    <li><a href="kennel.php">Kennel Club</a></li>
                    <li><a href="doc.php">Veterenary</a></li>
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              User
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="logout.php">Logout</a>
                              <br>
                              
                              <a class="dropdown-item" href="cart.php">Cart</a>
                            </div>
                          </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <br>

    <div style="background:url(images/banner_3.jpg);">
        <br>
        <h2 style="text-align: center; color: whitesmoke; font-family: 'Lobster Two', cursive;"> <b> BARKING MANGALORE </b>
        </h2>
        <br>
        <div style="text-align: center;">
            <img src="images/logo.jpeg" alt="logo" width="250px" height="250px" style="border-radius: 50%; box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
        </div>
        <br>
        <br>

    </div>



    <div id="product-grid">
        <div class="txt-heading">
            <h3>
                Accessories
            </h3>
        </div>
        <?php
        $product = mysqli_query($db1, "SELECT * FROM tblproduct ORDER BY id ASC");
        if (!empty($product)) {
            while ($row = mysqli_fetch_array($product)) {

        ?>
                <div class="product-item">
                    <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                        <div class="product-image"><img src="uploads/<?php echo $row["image"]; ?>" style="width: 50%"></div>
                        <div class="product-tile-footer">
                            <div class="product-title"><?php echo $row["name"]; ?></div>
                            <div class="product-price"><?php echo "$" . $row["price"]; ?></div>
                            <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                                <input type="submit" value="Add to Cart" class="btnAddAction" />
                            </div>
                        </div>
                    </form>
                    <button type="button" data-des="<?php echo $row['des']; ?>" class="btn btn-info btn-lg view">More</button>
                </div>
            <?php
            }
        } else {
            echo "No Records.";
        }
            ?>
                </div>
                <div id="product-grid">

                    <?php
                    $product = mysqli_query($db1, "SELECT * FROM tblfood ORDER BY id ASC");
                    if (!empty($product)) {
                        while ($row = mysqli_fetch_array($product)) {

                    ?>
                            <div class="product-item">
                                <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                    <div class="product-image"><img src="uploads/<?php echo $row["image"]; ?>" style="width: 50%"></div>
                                    <div class="product-tile-footer">
                                        <div class="product-title"><?php echo $row["name"]; ?></div>
                                        <div class="product-price"><?php echo "$" . $row["price"]; ?></div> &nbsp;
                                        <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                                            <input type="submit" value="Add to Cart" class="btnAddAction" />
                                        </div>

                                    </div>
                                </form>
                                <button type="button" data-des="<?php echo $row['des']; ?>" class="btn btn-info btn-lg view">More</button>

                            </div>
                    <?php
                        }
                    } else {
                        echo "No Records.";
                    }
                    ?>
                </div>

                <br>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog" style="padding: 150px; width: 100%;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p style="color: black" id="des">

                                </p>
                            </div>

                        </div>

                    </div>
                </div>
    <!-- Modal -->
    <!-- JQuery -->
    <script>
        $('.view').click(function() {
            console.log("hello")
            $('#myModal').modal('show');
            $('#des').html($(this).data('des'));
        });
    </script>

    <script>
        function updateDatabase() {
            $.ajax({
                type: "POST",
                url: "admin.php",

                success: function(response) {
                    console.log(response);
                    alert("success");
                },
                error: function(response) {
                    console.log(response);
                    alert("error");
                }
            })
        }
    </script>

</BODY>

</HTML>
<?php
session_start();
require_once("config.php");


//code for Cart
if (!empty($_GET["action"])) {
	switch ($_GET["action"]) {
			//code for adding product in cart
		case "add":
			if (!empty($_POST["quantity"])) {
				$id = $_GET["id"];
				$result = mysqli_query($db1, "SELECT * FROM tblproduct WHERE id='$id'");
				
				
				while ($productByCode = mysqli_fetch_array($result)) {
					$itemArray = array($productByCode["code"] => array('id' => $productByCode["id"], 'name' => $productByCode["name"], 'code' => $productByCode["code"], 'quantity' => $_POST["quantity"], 'price' => $productByCode["price"], 'image' => $productByCode["image"]));
					if (!empty($_SESSION["cart_item"])) {
						if (in_array($productByCode["code"], array_keys($_SESSION["cart_item"]))) {
							foreach ($_SESSION["cart_item"] as $k => $v) {
								if ($productByCode["code"] == $k) {
									if (empty($_SESSION["cart_item"][$k]["quantity"])) {
										$_SESSION["cart_item"][$k]["quantity"] = 0;
									}
									$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];			//increase quantity if already present
								}
							}
						} else {
							$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray); 		//added item with exsisting item
						}
					} else {
						$_SESSION["cart_item"] = $itemArray;					//just add if empty
					}
				}
				///food
				$result1 = mysqli_query($db1, "SELECT * FROM tblfood WHERE id='$id'");
				while ($productByCode = mysqli_fetch_array($result1)) {
					$itemArray = array($productByCode["code"] => array('id' => $productByCode["id"], 'name' => $productByCode["name"], 'code' => $productByCode["code"], 'quantity' => $_POST["quantity"], 'price' => $productByCode["price"], 'image' => $productByCode["image"]));
					if (!empty($_SESSION["cart_item"])) {
						if (in_array($productByCode["code"], array_keys($_SESSION["cart_item"]))) {
							foreach ($_SESSION["cart_item"] as $k => $v) {
								if ($productByCode["code"] == $k) {
									if (empty($_SESSION["cart_item"][$k]["quantity"])) {
										$_SESSION["cart_item"][$k]["quantity"] = 0;
									}
									$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];			//increase quantity if already present
								}
							}
						} else {
							$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray); 		//added item with exsisting item
						}
					} else {
						$_SESSION["cart_item"] = $itemArray;					//just add if empty
					}
				}
			}
			break;

			// code for removing product from cart
		case "remove":
			if (!empty($_SESSION["cart_item"])) {
				foreach ($_SESSION["cart_item"] as $k => $v) {
					if ($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if (empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
				}
			}
			break;
			// code for if cart is empty
		case "empty":
			unset($_SESSION["cart_item"]);
			break;
	}
}
?>
<HTML>

<HEAD>
	<TITLE>PET Shopping Cart</TITLE>
	<link rel="icon" href="images/title.png" type="image/icon type">
	<style>
		body {
			font-family: Arial;
			color: #211a1a;
			font-size: 0.9em;
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
	</style>

</HEAD>

<BODY>
	<!-- Cart ---->
	<div id="shopping-cart">
		<div class="txt-heading">
			<h1>
				Shopping Cart
			</h1>
		</div>
		<div>
		<a href="product.php">	<button>Back</button>
		</a>	
	</div>

		<a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>

		<?php
		if (isset($_SESSION["cart_item"])) {
			$total_quantity = 0;
			$total_price = 0;
		?>
			<table class="tbl-cart" cellpadding="10" cellspacing="1">
				<tbody>
					<tr>
						<th style="text-align:left;">Name</th>
						<th style="text-align:left;">Code</th>
						<th style="text-align:right;" width="5%">Quantity</th>
						<th style="text-align:right;" width="10%">Unit Price</th>
						<th style="text-align:right;" width="10%">Price</th>
						<th style="text-align:center;" width="5%">Remove</th>
					</tr>
					<?php
					foreach ($_SESSION["cart_item"] as $item) {
						$item_price = $item["quantity"] * $item["price"];
					?>
						<tr>
							<td><img src="uploads/<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
							<td><?php echo $item["code"]; ?></td>

							<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
							<td style="text-align:right;"><?php echo "₹ " . $item["price"]; ?></td>
							<td style="text-align:right;"><?php echo "₹ " . number_format($item_price, 2); ?></td>
							<td style="text-align:center;"><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="images/icon-delete.png" alt="Remove Item" /></a></td>
						</tr>
					<?php
						$total_quantity += $item["quantity"];
						$total_price += ($item["price"] * $item["quantity"]);
					}
					?>

					<tr>
						<td colspan="2" align="right">Total:</td>
						<td align="right"><?php echo $total_quantity; ?></td>
						<td align="right" colspan="2"><strong><?php echo "₹ " . number_format($total_price, 2); ?></strong></td>
						<td></td>
					</tr>
				</tbody>
			</table>
	
			<button type="button" id="purchase" onclick="updateDatabase()">Purchase</button>


		<?php
		} else {
		?>
			<div class="no-records">Your Cart is Empty</div>
		<?php
		}
		?>
	</div>

	<!--cart ends-->


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
							<div class="product-price"><?php echo "$" . $row["price"]; ?></div>
							<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" />
								<input type="submit" value="Add to Cart" class="btnAddAction" />
							</div>
						</div>
					</form>
				</div>
		<?php
			}
		} else {
			echo "No Records.";
		}
		?>
	</div>
	
	<br>
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
			window.location.href="purchase.php";
		
		}
	</script>

</BODY>

</HTML>
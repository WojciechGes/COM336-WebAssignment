<?php include("login_Session.php");
include("shoppingcart.php");
?>


<!DOCTYPE html>
<html>

<head>
	<Title>
		<?php
		$Page_Title_Name = "Checkout";
		echo $Page_Title_Name;
		?>
	</Title>
	<link rel="stylesheet" href="assets/order.css">
	<link rel="stylesheet" href="assets/index.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<?php $_SESSION["role"] = "user";
	include("navbar.php"); ?>

	You curretly have these items in your basket. </p>


	<div class="table-responsive">
		<table class="table table-bordered">
			<tr>
				<th width="25%">Car Name</th>
				<th width="20%">Car Colour</th>
				<th width="15%">Action</th>
				<th width="5%">Price</th>
			</tr>
			<?php
			if (!empty($_SESSION["shopping_cart"])) {
				$total = 0;
				foreach ($_SESSION["shopping_cart"] as $keys => $values) {
			?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<!--<td><?php echo $values["item_quantity"]; ?></td>-->
						<td> <?php echo $values["item_colour"]; ?></td>
						<!--<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>-->
						<td><a href="Checkout.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-dark">Remove</span></a></td>
						<td> <?php echo $values["item_price"]; ?></td>
					</tr>
				<?php
					$total = $total + ($values["item_price"]);
				}
				?>
				<tr>
					<td colspan="3" align="right">Total</td>
					<td align="right">$ <?php echo number_format($total, 2); ?></td>

				</tr>
			<?php
			}
			?>
		</table>

		<?php  $Staff = 0; ?>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<form name="Upate" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

					<select name="Staff" id="drop">
						<option value="1" <?php $Staff = 1;
											if ($Staff == 1) echo "selected"; ?>>George Jones</option>
						<option value="2" <?php $Staff = 2;
											if ($Staff == 2) echo "selected"; ?>>Rose Beattie</option>
						<option value="3" <?php $Staff = 3;
											if ($Staff == 3) echo "selected"; ?>>Michael Clarkson</option>
					</select>

					<button  class="btn btn-primary" session_unset(); type="submit">PAY NOW</button>
				</form>
			</div>
		</div>
		
		<?php extract($_REQUEST);
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$Staff = $_POST["Staff"];
			echo '<script>alert("Staff UPDATED.")</script>';
			echo '<script>window.location="salesinvoice.php"</script>';
		}
		?>
		<div class="row">
		<div class="col-sm-6">
			<form name="salesinvoice" action ="salesinvoice.php" >
				

				<?php

				$carID = $values["item_id"];



				$sql = "INSERT INTO `sales_invoice` (Car_ID,Customer_ID,Staff_ID, Total_Price) " .  "VALUES ('$carID', '1','$Staff', $total)";
				$res = mysqli_query($mySqlConn, $sql);
				
				?> 
			
				
			</form>
			</div>
		</div>
	</div>
	
	
</body>

</html>
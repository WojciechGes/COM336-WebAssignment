<?php
include("login_Session.php");
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
    
	 <title>Basic PHP MySQl Shopping Cart</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include("navbar.php");?>
 
<div style="clear:both"></div>
			<br />
			<h4>Order details</h4>
<div>
<div class="col-sm-6">
<h5>Customer Details</h5>

<form class = "col-sm-6" action="process-form.php" method="post">
	<div class = "col-sm-6">
	<label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
	</div>
	<div class = "col-sm-6">
	<label for="email">Email:</label>
  	<input type="email" id="email" name="email" required>	
	</div>
	<div class = "col-sm-6"> 
	<label for="phone">Phone:</label>
  	<input type="tel" id="phone" name="phone">
	</div>
	<div class = "col-sm-6">
	<label for="address">Address:</label>
  	<textarea id="address" name="address"></textarea>
	</div>
 
 
  
  <input type="submit" value="Submit">
 </form>	
</div>		
<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="25%">Car Name</th>
						<th width="20%">Car Colour</th>
						<th width="15%">Action</th>
						<th width="5%">Price</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<!--<td><?php echo $values["item_quantity"]; ?></td>-->
						<td> <?php echo $values["item_colour"]; ?></td>
						<!--<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>-->
						<td><a href="Checkout.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-dark">Remove</span></a></td>
						<td> <?php echo $values["item_price"];?></td>
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
			</div> 
			</div>
			<?php
			//include("footer.php");
			?>

</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
include("login_Session.php");
include ("shoppingcart.php");


?>

<!DOCTYPE html>
<html>
<head>
	<Title>
		<?php 
			$Page_Title_Name = "Shopping"; 
			//echo $Page_Title_Name;
		?> 
	</Title> 
</head>
<link rel="stylesheet" href="assets/order.css">
<link rel="stylesheet" href="assets/index.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">

	 </head> 	
     <body>
	 <?php  $_SESSION["role"] = "user"; 
	 		include("navbar.php");?>
        <div class="container-fluid" Style = "postion: center;">
			<br />
      <h4 align="center">Ford Dealership</h4><br />

				<?php
				$query = "SELECT * FROM car ORDER BY Car_ID ASC";
				$result = mysqli_query($mySqlConn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{ 
                  
                        
				?>
           
               
			        <div class="col-sm-2" Style = "margin-bottom: 100px"; >
                    
				<form method="post" action="carorder.php?action=add&id=<?php echo $row["Car_ID"]; ?>">
					    <div style="border:0px solid #333; background-color:#e6e6ff; border-radius:5px; padding: 0px;" >
						<img class ="CustomImage" src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />
						<h5 class="text-info"><?php echo "Model: ".$row["Model"]; ?></h5>
						<h5 class="text-info"><?php echo "Car Colour: ".$row["Colour"]; ?></h5>
						<h5 class="text-dark">$<?php echo $row["Price"]; ?></h5>
						<input type="hidden" name="hidden_name" value="<?php echo $row["Model"]; ?>" />	
						<input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
						<input type="hidden" name="hidden_colour" value="<?php echo $row["Colour"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:10px;" class="btn btn-primary" value="Add to Cart" />
					    </div>
                </form>
			        
                </div>
           
			<?php
					}}
			?>
             </div>
			 <?php
			include("footer.php");
			?>
	</body> </html>

    


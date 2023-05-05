<?php
 include("login_Session.php");
// Check if the form has been submitted
include ("Register_Form_Varibles.php");	




extract($_REQUEST);
if (($email) && ($password) &&($Customer_FName) && ($Customer_LName) && ($Customer_SEX) && ($Customer_DOB) && ($Customer_Contact_Num) && ($Customer_Address) && ($Customer_Postcode) ) {
{
$sql  = "START TRANSACTION;	 INSERT INTO register (email, password) VALUES ('$email', '$password' );";
$sql .= "INSERT INTO customer (Customer_FName, Customer_LName, Customer_SEX, Customer_DOB, Customer_Contact_Num, Customer_Address, Customer_Postcode, register_ID) VALUES ('$Customer_FName', '$Customer_LName', '$Customer_SEX' , '$Customer_DOB' , '$Customer_Contact_Num' ,'$Customer_Address' ,'$Customer_Postcode', LAST_INSERT_ID()); COMMIT;";


$mySqlConn -> multi_query($sql);
$status = "Message <i>$email</i> has been posted<br><br>";
}
}?>


<!DOCTYPE html>
<html>

<head>
    <Title>
        <?php 
    $Page_Title_Name = "Register Page"; 
    echo $Page_Title_Name;
    ?>
    </Title>
    <link rel="stylesheet" href="assets/reg-log.css">
</head>

<body>

<?php $_SESSION["role"] = "guest";
include("navbar.php");?>
    <header>
        <div class="wrapper">
            <div class="logo">
                <img src="assets\images\ford.png" alt="logo">
			</div>

                <section class="row-alt">
				<div class="lead container">
					<h1>Register</h1>
			
					<p>Please fill in the registration form below to create an account. If you have any enquiries or issues, please contact us on <a href="register@******.com"></a>info@ford.com</p>
			
				</div>
			</div>
			</section>
			<section class="row">
				<div class="grid">
					
					<section class="col-2-3">
						<br><h2>Register an Account</h2>
								
						<form class="col-1-3" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
						<fieldset class="register-group">
					
						<label>
								Fist Name (required)
								<input type="text" name="Customer_FName" required>
							</label>
			
							<br><br>
			
							<label>
								Surname (required)
								<input type="text" name="Customer_LName"  required>
							</label>

							<br><br>
			
							<label>
								Sex (required)
								<input type="text" name="Customer_SEX" required>
							</label>

							<br><br>

							<label>
								D.O.B (required)
								<input type="date" name="Customer_DOB" required
       								min="1900-01-01" max="2023-04-26">
							</label>

							<br><br>

							<label>
								Tele.No (required)
								<input type="text" name="Customer_Contact_Num"required>
							</label>
			
							<br><br>

							<label>
								Address (required)
								<input type="text" name="Customer_Address" required>
							</label>
							
							<label>
								Postcode (required)
								<input type="text" name="Customer_Postcode"required>
							</label>

							<label>
								Email (required)
								<input type="email" name="email" required>
							</label>

							<br><br>

							<label>
								Password (required)
								<input type="password" name="password" required>
							</label>

						</fieldset>
						
						<input class="btn btn-default" type="submit" name="customer" value="Post">
			
					</form>
				</div>
			</section>
					
        <button id="scroll-to-top">
            <img src="assets/images/arrow.png" alt="Top" class="arrow-img">
        </button>
        <script src="assets/index.js"></script>

    </body>
	

    <?php
   // include("footer.php");
    ?>
    </header>
</body>

</html>
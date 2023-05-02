<?php include("navbarActiveSwitch.php");?>


<div class="wrapper">
<div class ="logo">
<!--<img src="assets/images/ford.png" alt="logo"> -->
</div>
<ul class = "menu">
<li><a class = <?php echo $Highlight_Navbar_Active1; ?> href="index.php">Home</a></li>
<li><a class = <?php echo $Highlight_Navbar_Active2; ?> href="faq.php">FAQs</a></li>
<li><a class = <?php echo $Highlight_Navbar_Active3; ?> href="aboutUs.php">About Us</a></li>
<li><a class = <?php echo $Highlight_Navbar_Active4; ?> href="contact.php">Contact Us</a></li>
<li><a class = <?php echo $Highlight_Navbar_Active6; ?> href="carorder.php">Order</a></li>
<li<a href="Checkout.php"><img src="images/shopping-cart.png" alt="icon of shopping basket with transparent background" style="width:52px;height:52px;"></a></li>
<li><a class = <?php echo $Highlight_Navbar_Active7; ?> href="login.php?action=logout">Log Out</a></li>
</ul>

</div>
<div class="banner"><?php echo $Page_Title_Name;?>
</div>

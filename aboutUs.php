<?php 
 $role="";
include("login_Session.php");

?>
<!DOCTYPE html>
<html>
    <head>
    <Title>
	<?php 
		$Page_Title_Name = "About"; 
		echo $Page_Title_Name;
	?> 
</Title> 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="assets/about.css">
     <link rel="stylesheet" href="assets/index.css">
    </head>
    <body>
    <?php include("navbar.php");?>

    
        <div class="title">
            <h2>Meet Our Staff</h2>
        </div>
        <div class="image-section">
            <div class="image-box">
                <img src="assets/images/icon.jpg" alt="Image 1">
                <h2>Ryan McMullan</h2>
                <p>Email: mcmullan-r17@ulster.ac.uk</p>
            </div>
            <div class="image-box2">
                <img src="assets/images/icon.jpg" alt="Image 2">
                <h2>Wojciech Geslak</h2>
                <p>Email: geslak-w@ulster.ac.uk</p>
            </div>
            <div class="image-box3">
                <img src="assets/images/icon.jpg" alt="Image 3">
                <h2>Kieran McGeady</h2>
                <p>Email: mcgeady-k@ulster.ac.uk</p>
            </div>
            <div class="image-box4">
                <img src="assets/images/icon.jpg" alt="Image 4">
                <h2>Adrian Gormley</h2>
                <p>Email: gormley-a13@ulster.ac.uk</p>
            </div>
            <div class="image-box5">
                <img src="assets/images/icon.jpg" alt="Image 5">
                <h2>Oisin Mulhern</h2>
                <p>Email: mulhern-o@ulster.ac.uk</p>
            </div>
        </div>
        <button id="scroll-to-top">
            <img src="assets/images/arrow.png" alt="Top" class="arrow-img">
        </button>
        <script src="assets/index.js"></script>
    
    </body>
    <?php
			include("footer.php");
			?>
</html>
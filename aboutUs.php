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
    </head>
    <body>
    <?php include("navbar.php");?>

    <section class="row">
            <div class="grid">
                
                <section class="col-2-3">
                    <br><h2>Our Mission Statement</h2><br>
                    
                    <p>At Ford, we are committed to providing our 
                        customers with the best possible online shopping experience for 
                        Ford vehicles.</p><br>
        
                    <p>Our mission is to offer a wide selection 
                    of high-quality cars at competitive prices, while delivering exceptional 
                    customer service and support throughout the entire purchase process. 
                    We strive to create a seamless and user-friendly e-commerce platform that 
                    makes it easy for our customers to browse, compare, and purchase their 
                    dream car from the comfort of their own home.</p><br>
                        
                    <p>Our goal is to exceed our 
                    customers' expectations by providing personalized assistance, transparent 
                    pricing, and convenient financing options</p><br>
        
                    <p>At Ford, we are 
                    dedicated to becoming your trusted online destination for all your 
                    Ford car needs.</p><br>

                    <p>We value transparency and honesty, and we believe that our customers
                    deserve to know exactly what they are getting. That is why we provide 
                    detailed descriptions, pricing, and shipping information on our website.</p><br>

                    <p>Thank you for considering us for your vehicular needs. We look forward to serving 
                       you and exceeding your expectations. If you have any questions or comments, please do
                       not hesitate to contact us on our "Contact Us" page by simply clicking the button below: 
                    </p><br>

                    <div class="button-container">
                        <a href="contact.html" class="contact-button">Get In Touch</a>
                    </div>
                </section>
            </div>
        </section>
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
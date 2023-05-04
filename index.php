<?php include("login_Session.php");?>
<!DOCTYPE html>
<html>

<head>
    <Title>
        <?php 
$Page_Title_Name = "Ford Dealership"; 
?>
    </Title>
    <link rel="stylesheet" href="assets/index.css">
</head>

<body>

<?php 

include("navbar.php");?>

<div class="container">
                <div class="content-container">
                    <div class="content-box">
                        <h2>Why Choose Us?</h2>
                        <p>Ford is an industry leader with a long standing reputation for excellence in the automotive industry.</p><br>
                        <p>Whether you're in the market for a compact car for city driving, a family-friendly SUV foir long road trips, or a powerful
                           truck for work or play, Ford has you covered. 
                        </p>
                        <div class="button-container">
                            <a href="contact.html" class="contact-button">Get In Touch</a>
                        </div>
                    </div>
                    <div class="content-box2">
                        <ul>
                            <li>Extensive selection of Ford made cars available for purchase online</li>
                            <li>Convenient and easy online purchasing process</li>
                            <li>Competitive prices and financing options available</li>
                            <li>Expert support and assistance from Ford customer service team</li>
                            <li>Comprehensive vehicle information available online to help make informed purchasing decisions</li>
                        </ul>
                    </div>
                    <div class="content-box3">
                        <p>
                            We are a well-established automobile manufacturer, with a long history of providing
                            reliable and innovative vehicles to customers worldwide.
                        </p><br>
                        <p>Ford offers reliable and innovative vehicles, excellent customer service, and 
                           a commitment to sustainability, investing in new technologies and initiatives to 
                           reduce its environmental impact. 
                        </p> <br>
                        <p>Our commitment to quality and innovation ensures that your vehicles are known
                           for their durability, safety, and comfort, making us an excellent choice for drivers
                           of all kinds.
                        </p><br>
                        <p>Keep up-to-date with our latest updates and information regarding our services by 
                           completing the form on the right.
                        </p><br>
                    </div>
                    <div class="content-box4">
                        <h2>Keep Up-To-Date</h2>
                        <form>
                            <label for="name">Your Name (required)</label>
                            <input type="text" id="name" name="name"><br>
                            
                            <label for="email">Your Email (required)</label>
                            <input type="text" id="email" name="email"><br>

                            <label for="phone">Your Phone Number (required)</label>
                            <input type="tel" id="phone" name="phone"><br>

                            <input type="submit" value = "Submit">
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <div class="image-section">
            <div class="image-box">
                <a href="contact.html">
                    <img src="assets/images/contact.jpg" alt="Image 1">
                </a>
                <h2>Contact Us</h2>
                <p>Visit our 'Contact Us' page to find out more detail regarding our company</p>
            </div>
            <div class="image-box2">
                <a href="order.html">
                    <img src="assets/images/car.jpg" alt="Image 2">
                </a>
                <h2>View Cars</h2>
                <p>Click here to view all of our cars from a wide variety for selection</p>
            </div>
            <div class="image-box3">
                <a href="about.html">
                    <img src="assets/images/about.jpg" alt="Image 3">
                </a>
                <h2>About Us</h2>
                <p>To find out more information about Ford, click here</p>
            </div>
        </div>
        <button id="scroll-to-top">
            <img src="assets/images/arrow.png" alt="Top" class="arrow-img">
        </button>
        <script src="assets/index.js"></script>
    </body>

 <?php include("footer.php");?>


</html>
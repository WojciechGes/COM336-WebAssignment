<?php include("login_Session.php");?>
<!DOCTYPE html>
<?php
    $address = "Highfield Rd, Craigavon BT64 1AG";
    $phone = "123 456 7890";
    $email = "infoFord@outlook.com";
?>
<html>
    <head>
<?php $Page_Title_Name = "Contact Us"; ?> 
     <link rel="stylesheet" href="assets/contact.css">
     <link rel="stylesheet" href="assets/index.css">
    </head>
    <body>
   <?php include("navbar.php");?>
        <main>
        <div class = "get-in-touch">
            <h4 style = "text-align: left;">Get In Touch</h4>
        </div>
            <section class = "contactUs">
                    <iframe src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2320.0559192478327!2d-6.395886383961492!3d54.44429969960345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4860fab24462cf23%3A0x5f96a7aede3ba3a2!2sTrustFord%20Craigavon%20Car%20%26%20Transit%20Centre!5e0!3m2!1sen!2suk!4v1679997068095!5m2!1sen!2suk">
                    </iframe>
                    <div class="container">
                            <h4>Contact Details</h4>
                            <p>Address: <?php echo $address; ?></p><br>
                            <p>Phone: <?php echo $phone; ?></p><br>
                            <p>Email: <?php echo $email; ?></p>
                    </div>
                        <div class = "form-box">
                            <form>
                                <div class="form-row">
                                    <div class="form-col col-1">
                                        <label for="firstName"><span>First Name: </span></label>
                                        <input type = "text" id = "firstName" name = "firstName" required
                                        placeholder="Your Name">

                                        <label for="email"><span>Email: </span></label>
                                        <input type = "email" id = "email" name = "email" required
                                        placeholder="someone@example.com">
            
                                        <label for="address"><span>Address: </span></label>
                                        <input type="text" id = "address" name = "address" required
                                        placeholder="123 Example St

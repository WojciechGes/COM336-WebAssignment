<?php 
   
     if($_SESSION["role"] == "admin")
     {
        include("navbar_Admin.php");
     }
     elseif($_SESSION["role"] =="user")
     {
        include("navbar_User.php");
     }
     else{
    include("navbar.php");
    } ?>
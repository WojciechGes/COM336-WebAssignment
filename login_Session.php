<?php
   session_start();
   include ("configConnect.php");

   

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST["email"]; 
      $password = $_POST["password"];

      $sql = "SELECT * FROM register WHERE email = '$email'";
      $result = mysqli_query($mySqlConn, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      $_SESSION["role"] = "";
      $role ="";
      
      if($count == 1 && ($password==  $row["password"])) 
      {
         $_SESSION["email"] = $email;
         $_SESSION["role"] = $row["role"];
         $role = $row["role"];

      
   
         if($role == "admin")
         {
            header("Location: admin.php");
         }
         elseif($role =="user")
         {
            header("Location: carorder.php");
         }

      }
      else {
         echo "Invalid Email or Password";
         }
   }
   
?>
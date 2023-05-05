<?php include("login_Session.php");

if (($_SESSION["role"] == "admin") || ($_SESSION["role"] == "user")|| ($_SESSION["role"] == "")) {
    $_SESSION["role"] = "guest";
    }
?>


<!DOCTYPE html>
<html>
<head>
    <Title>
        <?php 
$Page_Title_Name = "Login"; 
echo $Page_Title_Name;

?>
    </Title>
    <link rel="stylesheet" href="assets/index.css">
</head>

<body>

<?php include("navbar.php");?>

   <form method="POST" action="<?php $action;?>">
   <label>Username:</label>
   <input type="text" name="email">
   <br>
   <label>Password:</label>
   <input type="password" name="password">
   <br>
   <button type="submit">Log in</button>
</form>
<div><?php 
if($incorrectEmailandPassword == true){
 $stringEmail = "Invalid Email or Password";
 echo $stringEmail;
}
else{
echo "";
$incorrectEmailandPassword = false;
}

?></div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
   <title>User Profile</title>
   <head>
    <Title>
        <?php 
$Page_Title_Name = "User"; 
echo $Page_Title_Name;
?>
    </Title>
    <link rel="stylesheet" href="assets/index.css">
</head>

<body>

<?php include("navbar_User.php"); ?>  
   <h1>Welcome, <?php echo $_SESSION["email"]; ?>!</h1>
   <p>You are logged in as a regular user.</p>
   <?php echo $_SESSION["role"]; ?>
   <!--<a href="login.php">Log out</a>-->

    </form>
    <a href="login.php?action=logout">Log out?</a>

</body>
</html>

<?php
if ( isset( $_GET["action"] )) 
{
    logout();
}

function logout() {
   
    unset($_SESSION["email"] );
    unset($_SESSION["pasword"] );
    unset($_SESSION["role"] );
    session_destroy();
    exit();
    header("Location: login.php");
    }
?>


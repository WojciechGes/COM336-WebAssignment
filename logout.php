<?php

    unset($_SESSION["email"] );
    unset($_SESSION["pasword"] );
    unset($_SESSION["role"]);
    session_destroy();
    header("Location: login.php");
    
    exit();

?>
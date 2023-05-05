<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
$servername='localhost';
$username='root';
$password='';
$dbname = "forddealership";
$mySqlConn = mysqli_connect($servername,$username,$password,"$dbname");
if(!$mySqlConn){
    die('Could not Connect MySql Server:' .mysql_error());
  }
?>
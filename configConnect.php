<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "ford dealership";
$mySqlConn = mysqli_connect($servername,$username,$password,"$dbname");
if(!$mySqlConn){
    die('Could not Connect MySql Server:' .mysql_error());
  }
?>
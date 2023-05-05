<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
$servername='com336aws.cdybmgd0rq3p.us-east-1.rds.amazonaws.com';
$username='admin_com336';
$password='iwilldeletethisafter20';
$dbname = "forddealership";
$mySqlConn = mysqli_connect($servername,$username,$password,"$dbname");
if(!$mySqlConn){
    die('Could not Connect MySql Server:' .mysql_error());
  }
?>
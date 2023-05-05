<?php include("login_Session.php"); ?>
<!DOCTYPE html>
<html>
<head>
<?php 
		$Page_Title_Name = "FAQ"; 
		//echo $Page_Title_Name;
	?> 
    <link rel="stylesheet" href="assets/order.css">
    <link rel="stylesheet" href="assets/index.css">
</head>
<body>
<?php
include("navbar.php");
?>
<?php
extract($_REQUEST);
if ( isset($subject) && isset($body) ) {
        if (mysqli_connect_errno())
    {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    } else {
            $sql = "INSERT INTO `reviews` (subject, body) ".  "VALUES ('$subject', '$body' )";
            $res = mysqli_query($mySqlConn, $sql);
            $status = "Message <i>$subject</i> has been posted<br><br>";
            }
}?>

<h1>Post a Message</h1>
<strong><?php if ( isset($status)  ) echo $status ?>
</strong>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>">
		Subject <input type="text" name="subject"  size="35"><br>
        <textarea name="body" cols="40" rows="15"></textarea>
        <input type="submit" value="Post">
</form>

<?php
    if (mysqli_connect_errno())
    {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    } else {
        $sql = "SELECT * FROM reviews";
        $res = mysqli_query($mySqlConn, $sql);
        $num_messages = mysqli_num_rows( $res);
    }
?>
<?php
// Loop over all the posts and print them out.
  while( $row = mysqli_fetch_assoc( $res) ) {
     $subject = $row['Subject'];
     $body = $row['Body'];
     print "<strong>$subject</strong><br>";
     print "$body<br><br>";

  }?>
</body>

</html>
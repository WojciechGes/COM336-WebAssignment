<!DOCTYPE html>
<html>
<head>
  <title>Image Upload</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    <input type="file" name="image" id="image">
    <input type="submit" value="Upload">
  </form>

  <div id="preview"></div>

  <script src="script.js"></script>
</body>
</html>

<?php
if(isset($_FILES["image"])) {
  $file_name = $_FILES["image"]["name"];
  $file_tmp = $_FILES["image"]["tmp_name"];
  $file_type = $_FILES["image"]["type"];
  $file_size = $_FILES["image"]["size"];
  $file_ext = strtolower(end(explode(".", $file_name)));

  $extensions = array("jpeg", "jpg", "png");

  if(in_array($file_ext, $extensions) === false) {
    echo "File extension not allowed, please choose a JPEG or PNG file.";
    exit();
  }

  if($file_size > 2097152) {
    echo "File size must be less than 2 MB.";
    exit();
  }

  $new_file_name = uniqid('', true) . "." . $file_ext;
  move_uploaded_file($file_tmp, "uploads/" . $new_file_name);

  echo "Image uploaded successfully.";
}
?>
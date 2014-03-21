<?php
header('Location: ' . $_SERVER['HTTP_REFERER']);
$localhost="127.0.0.1";
$con=mysqli_connect($localhost,"ramil","ramil","birthdays");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="INSERT INTO guest_book (name,comments)
VALUES
('$_POST[name]','$_POST[comments]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>

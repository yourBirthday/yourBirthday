<?php
header('Location: ' . $_SERVER['HTTP_REFERER']);

$localhost = "127.0.0.1";
$user = "ramil";
$pass = "ramil";
$db = "birthdays";
$con = mysqli_connect($localhost,$user,$pass,$db);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$name = $_POST['name'];
$comments = $_POST['comments'];
echo "name eqauls =" .$name;
echo "comments equals =" .$comments;
if (isset($name) && !empty($name)) {
	$sql="INSERT INTO guest_book (name,comments)
	VALUES
	('$name','$comments')";
	if (!mysqli_query($con,$sql)) {
  		die('Error: ' . mysqli_error($con));
	}
	echo "1 record added";
}

	echo "no record added";
mysqli_close($con);


function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
?>

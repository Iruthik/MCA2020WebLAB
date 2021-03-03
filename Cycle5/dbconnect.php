<?php
$servername = "localhost";
$username = "20mca027";
$password = "2514";

$conn = mysqli_connect($servername, $username, $password,"20mca020");
if (!$conn) {
  die("Connection failed : " .mysqli_connect_error());
}
echo "Connected successfully !!";
?>
<?php
$servername = "localhost";
$username = "20mca027";
$password = "2514";
$dbname = "20mca027";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Students(Name,Branch, Marks)
VALUES ('Gokul', 'MCA', '89')";

if (mysqli_query($conn, $sql)) {
  echo "A new record is inserted successfully !";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
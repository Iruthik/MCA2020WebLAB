<html>
<head>
<style>
body{
    background-color: linen;
}
</style>
</head>
<body>
<?php
$severname="localhost";
$username="20mca027";
$password="2514";
$dbname="20mca027";
$con = mysqli_connect($severname,$username,$password,$dbname);
$id=$_GET["id"];
if($con)
{

$qry1="delete from customer where no='$id'";

if(mysqli_query($con, $qry1))
{
echo "Data Removed<br>";
}
}
?>

</body>
</html>
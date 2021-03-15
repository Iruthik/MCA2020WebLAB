<html>
<head></head>
<title<Customer Details</title>
<style>
body{
    background-color: linen;
}
</style>
<body>
<?php
 $id=$_GET['id'];
 $severname="localhost";
 $username="20mca027";
 $password="2514";
 $dbname="20mca027";
 $con = mysqli_connect($severname,$username,$password,$dbname);
$qry="select*from customer where no='$id'";
$res=mysqli_query($con, $qry);
$r=mysqli_fetch_array($res);
?>
<form method="post" action="customer_update.php" >
<h1 style="text-align:center"><u>UPDATE</u></h1>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<table align="center">
<tr>
<td>No</td>
<td>:</td>
<td><input type="text" name="sid" value="<?php echo $r['no'];?>"></td></tr>
<tr>
<td>Name of Customer</td>
<td>:</td>
<td><input type="text" name="name" value="<?php echo $r['name'];?>"></td></tr>
<tr>
<td>Item</td>
<td>:</td>
<td><input type="text" name="item" value="<?php echo $r['item'];?>"></td>
</tr>
<tr>
<td>Mobile</td>
<td>:</td>
<td><input type="text" name="mob" value="<?php echo $r['mob'];?>"></td>
</tr>
<td colspan="2" style="text-align:right"><input type="submit" value="update" name="update"></td>
</table>
</form>
<?php
if(isset($_POST["update"]))
{

$id=$_POST["sid"];
$sname=$_POST["name"];
$sitem=$_POST["item"];
$smob=$_POST["mob"];

$qry1="update customer set name ='$sname',item = '$sitem',mob='$smob' where no='$id'";

if(mysqli_query($con, $qry1))
{
   
echo "Data updated successfully<br>";
}
}
?>
</body>
</html>
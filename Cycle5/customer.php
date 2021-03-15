<html>
<head>
<style>
body{
    background-color: linen;
}

</style>
</head>
<body>
<div align="center">
<h1 style="text-align:center"><u>Insert Data</u></h1>
<form method="post" action="customer.php" >
Name:<input type="text" name="name"><br><br>
Item:<input type="text" name="item"><br><br>
Mobile:<input type="text" name="mob"><br><br>
<input type="submit" value="submit" name="submit">
</div>
<div align="center">
<form method="post" action="customer.php">
<h1 style="text-align:center"><u>UPDATE DATA</u></h1>
<input type="text" name="search_id" >
<input type="submit" name="search" value="Search">
<input type="submit" name="view" value="view">
</form>
</div>
<?php
$severname="localhost";
$username="20mca027";
$password="2514";
$dbname="20mca027";
$con = mysqli_connect($severname,$username,$password,$dbname);
if(isset($_POST["submit"]))
{

echo $name=$_POST["name"];
echo $item=$_POST["item"];
echo $mob=$_POST["mob"];
$qry="INSERT INTO customer(name,item,mob) VALUES ('$name','$item','$mob')";

if(mysqli_query($con, $qry))
{

echo "Data inserted successfully<br>";
}
}

if(isset($_POST["search"]))
{
$id=$_POST["search_id"];
$qry="select* from customer where no='$id'";
$data=mysqli_query($con, $qry);

?>
<h1 style="text-align:center"><u>CUSTOMER DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>No</th>
<th>Name</th>
<th>Item</th>
<th>Mobile</th>
</tr>
<?php
$res=mysqli_fetch_array($data);
?>
<tr>
<td><?php echo $res['no'];?></td>
<td><?php echo $res['name'];?></td>
<td><?php echo $res['item'];?></td>
<td><?php echo $res['mob'];?></td>
<td><a href="customer_update.php?id=<?php echo $res['no'];?>">update</a></td>
<td><a href="customer_delet.php?id=<?php echo $res['no'];?>">Delete</a></td>
</tr>
</table>
<?php
}
if(isset($_POST["view"]))
{
$qry="select*from customer";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>CUSTOMER</u></h1>
<table align="center" border="1">
<tr>
<th>No</th>
<th>Name</th>
<th>Item</th>
<th>Mobile</th>
</tr>
<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res['no'];?></td>
<td><?php echo $res['name'];?></td>
<td><?php echo $res['item'];?></td>
<td><?php echo $res['mob'];?></td>
</tr>

<?php
}
}
?>
</table>
</body>
</html>
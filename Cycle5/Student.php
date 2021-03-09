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
<form method="post" action="Student.php" >
Name:<input type="text" name="name"><br><br>
Branch:<input type="text" name="branch"><br><br>
Mark:<input type="text" name="marks"><br><br>
<input type="submit" value="submit" name="submit">
</div>
<div align="center">
<form method="post" action="Student.php">
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
echo $branch=$_POST["branch"];
echo $marks=$_POST["marks"];
$qry="INSERT INTO Students(Name,Branch,Marks) VALUES ('$name','$branch','$marks')";

if(mysqli_query($con, $qry))
{

echo "Data inserted successfully<br>";
}
}

if(isset($_POST["search"]))
{
$id=$_POST["search_id"];
$qry="select* from Students where id='$id'";
$data=mysqli_query($con, $qry);

?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
<th>Marks</th>
</tr>
<?php
$res=mysqli_fetch_array($data);
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['Name'];?></td>
<td><?php echo $res['Branch'];?></td>
<td><?php echo $res['Marks'];?></td>
<td><a href="student_update.php?id=<?php echo $res['id'];?>">update</a></td>
<td><a href="student_delet.php?id=<?php echo $res['id'];?>">Delete</a></td>
</tr>
</table>
<?php
}
if(isset($_POST["view"]))
{
$qry="select*from Students";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
<th>marks</th>
</tr>
<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['Name'];?></td>
<td><?php echo $res['Branch'];?></td>
<td><?php echo $res['Marks'];?></td>
</tr>

<?php
}
}
?>
</table>
</body>
</html>
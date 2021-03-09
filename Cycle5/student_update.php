<html>
<head></head>
<title<Student Registration</title>
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
$qry="select*from Students where id='$id'";
$res=mysqli_query($con, $qry);
$r=mysqli_fetch_array($res);
?>
<form method="post" action="student_update.php" >
<h1 style="text-align:center"><u>UPDATE</u></h1>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<table align="center">
<tr>
<td>Student ID</td>
<td>:</td>
<td><input type="text" name="sid" value="<?php echo $r['id'];?>"></td></tr>
<tr>
<td>Name of Student</td>
<td>:</td>
<td><input type="text" name="name" value="<?php echo $r['Name'];?>"></td></tr>
<tr>
<td>Branch</td>
<td>:</td>
<td><input type="text" name="branch" value="<?php echo $r['Branch'];?>"></td>
</tr>
<tr>
<td>Mark</td>
<td>:</td>
<td><input type="text" name="marks" value="<?php echo $r['Marks'];?>"></td>
</tr>
<td colspan="2" style="text-align:right"><input type="submit" value="update" name="update"></td>
</table>
</form>
<?php
if(isset($_POST["update"]))
{

$id=$_POST["sid"];
$sname=$_POST["name"];
$sbranch=$_POST["branch"];
$smarks=$_POST["marks"];

$qry1="update Students set Name ='$sname',Branch = '$sbranch',Marks='$smarks' where id='$id'";

if(mysqli_query($con, $qry1))
{
   
echo "Data updated successfully<br>";
}
}
?>
</body>
</html>

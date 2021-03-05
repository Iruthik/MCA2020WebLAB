<html>
<head>
<title>
insert update db
</title>
<style>
body{
    background-color: blue;
    color: black;
}
h1{
    color:white;
}
</style>
</head>
<body>
 <center>
    <h1>INSERT UPDATE DELETE DISPLAY DATAS IN DATABASE</h1>
    <form method="post">
    <label>Name:</label><input type="text" name="textname"><br><br>
    <label>Branch:</label><input type="text" name="branchname"><br><br>
    <label>Marks:</label><input type="text" name="marks"><br><br>
    <input type="submit" name="btnsbmt" value="Save" >&nbsp;
    <input type="submit" name="btnview" value="view">
    </form>
</center>
</body>
</html>
<?php 
$severname="localhost";
$username="20mca027";
$password="2514";
$dbname="20mca027";

$conn = mysqli_connect($severname,$username,$password,$dbname);

if(isset($_POST["btnsbmt"]))
{
$name = $_POST["textname"];
$branch = $_POST["branchname"];
$mark = $_POST["marks"];
$sql = "insert into Students(Name,Branch,Marks)values('$name','$branch','$mark')";
echo $sql;
mysqli_query($conn,$sql);
}
if(isset($_POST["btnview"]))
{

$sql = "SELECT * FROM Students";
$result = mysqli_query($conn, $sql);


while($row=mysqli_fetch_assoc($result))
{
echo  "<font size=2 color=red>". $ctr. "Name = " .$row['Name']. "  Branch = ".$row['Branch']."  Marks = ".$row['Marks']."</font><br>";
 
        //increment the counter
$ctr ++;
}

}
?>
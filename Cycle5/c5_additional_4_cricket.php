<html>
<head></head>
<body>
<style>
body{
background-color:linen;
}
table {
  
  border-collapse: collapse;
  width: 50%;
text-align: center
  
}
th,td{
padding: 10px;
}
th{
background-color:#b366ff;
}
tr:nth-child(even){background-color: #d9b3ff}
</style>
<?php
$my_array = array( "Virat Kohli", "Shikhar Dhawan", "M.S Dhoni","Suresh Raina","Rohit Sharma","Mohit Sharma","Vijay Shankar","Ravindra Jadeja","Irfan Pathan","Gautam Gambhir","Parthiv Pate","Virender Sehwag","Harbhajan Singh","Anil Kumble","Sachin Tendulkar","Rohit Sharma","	Gautam Gambhir");

?>
<h1 style="text-align:center"><u>Indian Cricket Players</u></h1>
<table border=�1� align="center">
<tr>
<th>Sl.No</th>
<th>Name of Players</th>

</tr>
<?php
$arraysize=sizeof($my_array);
for($i=0;$i<$arraysize;$i++)
{
?>
<tr>
<td><?php echo $i+1; ?></td>
<td><?php echo $my_array[$i];?></td>

</tr>
<?php
}
?>
</table>
</body>
</html>
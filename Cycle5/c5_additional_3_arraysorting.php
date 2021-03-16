<html>
<title>student array</title>
<body>

<?php
$name=array("APPU","AMMU","RAJU","MONU");
$name1=array("KUMAR","LIBIN","BABU");
$name2=array("SAGAR","BINISH","SOMAN","GEORGE","JACOB","HARI");
echo "<h1>ARRAY IS</h1>";
print_r($name);
print_r($name1);
asort($name);
arsort($name1);
asort($name2);
arsort($name2);
echo "<h1>Ascending Order</h1>";
foreach($name as $name_array)
   {
   echo  $name_array;
   echo "<br>";
   }
   echo "<h1>Descending Order</h1>";
foreach($name1 as $name1_array)
   {
   echo  $name1_array;
   echo "<br>";
   }
echo " new line<br><br><br>";
foreach($name2 as $name2_array)
   {
   echo  $name2_array;
   echo "<br>";
   }
?>

</body>
</html><html>
<title>student array</title>
<body>

<?php
$name=array("APPU","AMMU","RAJU","MONU");
$name1=array("KUMAR","LIBIN","BABU");
$name2=array("SAGAR","BINISH","SOMAN","GEORGE","JACOB","HARI");
echo "<h1>ARRAY IS</h1>";
print_r($name);
print_r($name1);
rsort($name);
rsort($name1);
rsort($name2);
echo "<h1>Ascending Order</h1>";
foreach($name as $name_array)
   {
   echo  $name_array;
   echo "<br>";
   }
   echo "<h1>Descending Order</h1>";
foreach($name1 as $name1_array)
   {
   echo  $name1_array;
   echo "<br>";
   }
echo "<br><br><br>";
foreach($name2 as $name2_array)
   {
   echo  $name2_array;
   echo "<br>";
   }
?>

</body>
</html>
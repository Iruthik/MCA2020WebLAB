<html>
<head>
<title> Max out of three </title>
</head>
<body>
<p>a = 3<br>b=5<br> c = 8<p> 
 <?php
 $a = 3;
 $b = 5;
 $c = 8;
 if($a > $b)
 {
 if($a > $c)
 echo "Maximum num a = $a";
 else
 echo "Maximum num c = $c";
 }
 else
 {
 if($c > $b)
 echo "Maximum num c = $c";
else
 echo "Maximum num b = $b";
 }
 ?>
</body>
</html>
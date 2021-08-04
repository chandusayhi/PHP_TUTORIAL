<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
 <?php
$name="Chandrakant Hatti";
$bref="Working as Assistant Professor";

echo $name .",". $bref;

$info=$name .",". $bref;
echo "<br/>";
echo "To upper:". strtoupper($info);
echo "<br/>";
echo "To lower:". strtolower($info);
echo "<br/>";
echo "Trim:". trim("  gadag	 city "). " best city" ;
echo "<br/>";
echo "replace:". str_replace("emerge", "smplicity", $info);
 ?>


</body>
</html>

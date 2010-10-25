<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, inbyggda strängfunktioner</title>
</head>

<body>
	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a></p>

<?php 

error_reporting(-1); 

echo "<pre>";

$spaces = "        ";
$s1 = "A";
$s2 = "nice";
$s3 = "string";

$s = $spaces . $s1 . $spaces . $s2  . $spaces . $s3  . $spaces;
echo "'$s'<br>";

echo "strlen is: " . strlen($s) . "<br>";
$s = trim($s);
echo "Trimming the string from spaces using trim. Strlen is now: " . strlen($s) . "<br>";
echo "'$s'<br>";

echo "Reverse the string: " . strrev($s) . "<br>";
echo "String is however the same: '$s'<br>";
echo "Get a substring: " . substr($s, strlen($spaces) + strlen($s1), strlen($s2)) . "<br>";
echo "<br>";

echo "Create a md5 hash of the string: " . md5($s) . "<br>";

echo "</pre>";

?>


</body>
</html>

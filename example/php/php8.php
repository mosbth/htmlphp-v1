<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, uttryck och operatorer</title>
</head>

<body>
	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a></p>

<?php 
error_reporting(-1); 


// Calculate using integers
$v1 = 42;
$v2 = 4.2;
$v3 = $v1 + $v2;
echo "Some addition " . $v1 . " " . $v2 . " " . $v3 . "<br>";

// Calculate using integers and float
$v1 = 42;
$v2 = 4.2;
$v3 = $v1 - $v2;
echo "Some subtraction " . $v1 . " " . $v2 . " " . $v3 . "<br>";

// Calculate using strings
$v1 = "42";
$v2 = "4.2";
$v3 = $v1 - $v2;
echo "Count using strings works " . $v1 . " " . $v2 . " " . $v3 . "<br>";

// Combine strings
$v1 = "42";
$v2 = "4.2";
$v3 = $v1 . $v2;
echo "Combine or concatenate strings " . $v1 . " " . $v2 . " " . $v3 . "<br>";

// Boolean tests
$v1 = TRUE;
$v2 = FALSE;
$v3 = $v1 && $v2;
$v4 = $v1 || $v2;
echo "Boolean algebra ";
var_dump($v1);
var_dump($v2);
var_dump($v3);
var_dump($v4);



?>


</body>
</html>

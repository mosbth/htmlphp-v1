<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, funktioner</title>
</head>

<body>
	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a></p>

<?php 

error_reporting(-1); 

// Just return some value
function f1() {
	return 42;
}

// Pass argument by value
function f2($aValue) {
	return $aValue*42;
}

// Pass argument by reference
function f3(&$aValue) {
	$i = $aValue;
	$aValue = 4.2;
	return $i;
}


$val = 42;

echo "f1() returns: " . f1() . "<br>";
echo 'f2($val) returns: ' . f2($val) . "<br>";
echo 'f3($val) returns: ' . f3($val) . ' but $val is something else: ' . $val . "<br>";

?>


</body>
</html>

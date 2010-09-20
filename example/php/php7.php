<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, variabler och typer</title>
</head>

<body>

<?php 
error_reporting(-1); 


// Test a integer
$value = 42;
echo $value . "<br>";
echo gettype($value) . "<br>";
echo "$value is a integer? " . is_int($value) . "<br><br>";

// Test a float
$value = 4.2;
echo $value . "<br>";
echo gettype($value) . "<br>";
echo "$value is a float? " . is_float($value) . "<br><br>";

// Test a string
$value = "42";
echo $value . "<br>";
echo gettype($value) . "<br>";
echo "$value is a string? " . is_string($value) . "<br>";
echo "$value is a numeric value? " . is_numeric($value) . "<br><br>";

// Test a boolean
$value = TRUE;
echo $value . "<br>";
echo gettype($value) . "<br>";
echo "$value is a boolean? " . is_bool($value) . "<br><br>";


?>


	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>

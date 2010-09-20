<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, sätt på felmeddelanden</title>
</head>

<body>

<?php 
error_reporting(-1); 

echo "<br>1: ";
$forgot_to_put_dollar_sign_before_variable = "Must use $-sign before all variables.";
echo forgot_to_put_dollar_sign_before_variable;

echo "<br>2: ";
ecco "Trying to call an undefined function.";

echo "<br>3: ";
echo "Did someone forget a semicolon to end the statement?"

echo "<br>4: ";
printf("Did I miss an argument to this funktion %d?");

?>


	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>

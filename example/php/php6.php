<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, använd kommentarer</title>
</head>

<body>
	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a></p>

<?php 
error_reporting(-1); 

echo "I got a lot of error messages so I try to uncomment the whole code block to start with.<br>";
echo "It makes debugging so much easier. View the source to see what I mean.";

/*
echo "<br>1: ";
$forgot_to_put_dollar_sign_before_variable = "Must use $-sign before all variables.";
// Add a $-sign before the variable
echo forgot_to_put_dollar_sign_before_variable;

echo "<br>2: ";
// Change ecco to echo
ecco "Trying to call an undefined function.";

echo "<br>3: ";
// Add a semicolon after the following statement
echo "Did someone forget a semicolon to end the statement?"  // Add semicolon before this comment

echo "<br>4: ";
// Add a argument to the functino, such as ...%d?", 1984");
printf("Did I miss an argument to this funktion %d?");
*/

?>


</body>
</html>

<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, villkorssatser</title>
</head>

<body>

<?php 
error_reporting(-1); 

$v = 42;

if($v == 42) {
	echo "Yes, seems that the variable is 42<br>";
}

if($v != 42) {
	echo "Yes, seems that the variable is NOT 42<br>";
} else {
	echo "Nope, seems that the variable is still 42<br>";
}

if($v == 42 && is_string($v)) {
	echo "Yep, the variable is 42 AND its type is string<br>";
} else if ($v == 42 || is_string($v)) {
	echo "Hmm, the variable is 42 OR its type is string<br>";
}


?>


	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>

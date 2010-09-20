<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, utskrifter med echo och printf()</title>
</head>

<body>

<?php

echo "Hello World";
echo "<br>";
echo "My name is" . " Mikael " . "Roos" . "<br>";

print('PHP is nice.<br>');

printf('I like the C-stylish way of print.<br>');

printf("I learned C back in %d, I see I can use that knowledge now. Nice.<br>", 1984);

?>

	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>

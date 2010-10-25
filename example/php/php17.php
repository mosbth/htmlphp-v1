<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, spara array till fil på disk</title>
</head>

<body>
	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a></p>

<?php 

error_reporting(-1); 

$a = Array("Item a", "Item b", 42);

echo "The array contains the following values:<br>";
print_r($a);
echo "<br>";
echo "<br>";

echo "Writing file to disk (directory needs to be writable).<br>";
file_put_contents("test/file.txt", serialize($a));
echo "<br>";

echo "Reading file from disk.<br>";
$s = file_get_contents("test/file.txt");
echo "<br>";

echo "File content is:<br>" . $s . "<br>";
echo "<br>";

$a = unserialize($s);

echo "The array contains the following values:<br>";
print_r($a);
echo "<br>";


?>


</body>
</html>

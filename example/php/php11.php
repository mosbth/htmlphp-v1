<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, arrayer</title>
</head>

<body>

<?php 
error_reporting(-1); 

$a = Array("Item a", "Item b", 42);

array_push($a, "Item 1", "Item 2", "Item 3");

echo "The array contains the following values";
print_r($a);
echo "<br>";

echo "The array has " . sizeof($a) . " items.<br>";
echo "<br>";

echo "Remove some items<br>";
echo array_pop($a) . "<br>";
echo array_pop($a) . "<br>";
echo "<br>";

echo "Loop through the remaining items.<br>";
foreach($a as $value) {
	echo $value . "<br>";
}
echo "<br>";

echo "The array has " . sizeof($a) . " items.<br>";
echo "Sorting the array<br>";
sort($a);

echo "Loop through the sorted array.<br>";
foreach($a as $value) {
	echo $value . "<br>";
}
echo "<br>";




?>


	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>

<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, loopar</title>
</head>

<body>

<?php 
error_reporting(-1); 

$v = 42;

for($i = 0; $i <= $v; $i++) {
	echo $i;
}
echo "<br>";

$i = $v;
while($i >= 0) {
	echo $i--;
}
echo "<br>";

$i = 0;
do {
	echo $i++;
} while($i <= $v);
echo "<br>";



?>


	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>

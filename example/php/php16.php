<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, klasser och objekt</title>
</head>

<body>

<?php 

error_reporting(-1); 

// A class with one member variable and one method
class CMyClass {

	public $i;
	
	public function f1() {
		return 42;
	}

};

// Create an object of the class
$obj = new CMyClass();
$obj->i = 42;

echo $obj->i . " == " . $obj->f1() . "<br>";


?>


	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>

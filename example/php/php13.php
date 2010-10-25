<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP, $_SESSION</title>
</head>

<body>
	<p><a href="../../source.php?dir=example/php&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a></p>

<?php 
$sessionName = 'htmlphp_mos';
session_name($sessionName); 
session_start(); 
error_reporting(-1); 

$_SESSION['value'] += 1;
echo "<pre>";
print_r($_SESSION);
echo "</pre>";



?>


</body>
</html>

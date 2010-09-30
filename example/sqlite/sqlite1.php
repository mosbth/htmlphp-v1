<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP PDO och SQLite. Att koppla mot en SQLite databas</title>
</head>

<body>

<?php 
// ---------------------------------------------------------------------------------------------
//
// Always have error_reporting to -1. Show all errors.
//
error_reporting(-1); 

// ---------------------------------------------------------------------------------------------
//
// Create a default handler for exceptions (when things go wrong).
//
//  http://php.net/manual/en/function.set-exception-handler.php
// 
function exceptionHandler($aException) {
	die("<p>Uncaught exception: " . $aException->getMessage());
}
set_exception_handler('exceptionHandler');


// ---------------------------------------------------------------------------------------------
//
// Create a object that connects to the database file "database.sqlite". The database-file must 
// exist and be writable by the webserver (chmod 666).
//
//  http://php.net/manual/en/pdo.connections.php
//
$db = new PDO("sqlite:database.sqlite");


// ---------------------------------------------------------------------------------------------
//
// Create a table, but only if it does not already exists.
//
//  http://www.sqlite.org/lang_createtable.html
//
$stmt = $db->prepare('
	CREATE TABLE IF NOT EXISTS Jetty_mos 
	(jettyPosition INTEGER PRIMARY KEY  NOT NULL  UNIQUE , boatType VARCHAR(20) NOT NULL , 
	boatEngine VARCHAR(20) NOT NULL , boatLength INTEGER, boatWidth INTEGER, ownerName VARCHAR(20));
');




// ---------------------------------------------------------------------------------------------
//
// Close the connection by setting it to null
//
$db = null;


?>


	<p><a href="../../source.php?dir=example/sqlite&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>


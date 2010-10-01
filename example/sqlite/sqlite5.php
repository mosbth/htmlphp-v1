<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP PDO och SQLite. Ger fel, försöker skriva till en skrivskyddad databas-fil</title>
</head>

<body>
	<p><a href="../../source.php?dir=example/sqlite&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>

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
// Create a object that connects to the database file "database.sqlite". The database-file is 
// created if it does not exist. The database file must be writable by the webserver (chmod 666) 
// and so must the directory in which the file resides (chmod 777). 
// Create an empty database-file by using Firefox SQLite Manager.
// Set attributes to use exception handling.
//
//  http://php.net/manual/en/pdo.connections.php
//  http://php.net/manual/en/pdo.setattribute.php
//
$db = new PDO("sqlite:database2.sqlite");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// ---------------------------------------------------------------------------------------------
//
// Create a table, but only if it does not already exists. An exception is thrown if
// something fails.
//
//  http://www.sqlite.org/lang_createtable.html
//  http://php.net/manual/en/pdo.prepare.php
//  http://php.net/manual/en/pdostatement.execute.php
//
$stmt = $db->prepare('
	CREATE TABLE Jetty
	(
		jettyPosition INTEGER PRIMARY KEY  NOT NULL  UNIQUE, 
		boatType VARCHAR(20) NOT NULL, 
		boatEngine VARCHAR(20) NOT NULL, 
		boatLength INTEGER, 
		boatWidth INTEGER, 
		ownerName VARCHAR(20)
	);
');

echo "<p>Executing SQL statement:<pre>" . $stmt->queryString . "</pre>";
$stmt->execute();


// ---------------------------------------------------------------------------------------------
//
// Close the connection by setting it to null
//
$db = null;


?>


</body>
</html>


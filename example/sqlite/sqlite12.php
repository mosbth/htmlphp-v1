<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel PHP PDO och SQLite. Uppdatera värden med UPDATE via _GET</title>
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
$db = new PDO("sqlite:database3.sqlite");
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
/*
$stmt = $db->prepare('
	CREATE TABLE IF NOT EXISTS Jetty
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
*/


// ---------------------------------------------------------------------------------------------
//
// Delete rows from a table. An exception is thrown if something fails.
//
//  http://www.sqlite.org/lang_insert.html
//  http://php.net/manual/en/pdo.prepared-statements.php
//  http://php.net/manual/en/pdo.prepare.php
//  http://php.net/manual/en/pdostatement.bindparam.php
//  http://php.net/manual/en/pdostatement.execute.php
//
/*
$stmt = $db->prepare('DELETE FROM Jetty;');

//echo "<p>Executing SQL statement:<pre>" . $stmt->queryString . "</pre>";
$stmt->execute();
*/

// ---------------------------------------------------------------------------------------------
//
// Insert values into a table. An exception is thrown if something fails.
//
//  http://www.sqlite.org/lang_insert.html
//  http://php.net/manual/en/pdo.prepared-statements.php
//  http://php.net/manual/en/pdo.prepare.php
//  http://php.net/manual/en/pdostatement.bindparam.php
//  http://php.net/manual/en/pdostatement.execute.php
//
/*
$stmt = $db->prepare('
	INSERT INTO Jetty
		(boatType, boatEngine, boatLength, boatWidth, ownerName) 
		VALUES
		(:boatType, :boatEngine, :boatLength, :boatWidth, :ownerName);
');

// Bind SQL parameters to PHP variables
$stmt->bindParam(':boatType', 	$boatType);
$stmt->bindParam(':boatEngine', $boatEngine);
$stmt->bindParam(':boatLength', $boatLength);
$stmt->bindParam(':boatWidth', 	$boatWidth);
$stmt->bindParam(':ownerName', 	$ownerName);
*/
// Display debuginfo of the statement
/*
echo "<p>Dump debuginfo of the statement:<pre>";
$stmt->debugDumpParams();
echo "</pre>";
*/
/*
// INSERT INTO Jetty VALUES(1,'Buster XXL','Yamaha 115hk',635,240,'Adam');
$boatType 	= "Buster XXL";
$boatEngine = "Yamaha 115hk";
$boatLength = 635;
$boatWidth 	= 240;
$ownerName 	= "Adam";
$stmt->execute();
//echo "<p>Inserted '$boatType'. Rowcount is = " . $stmt->rowCount();

// INSERT INTO Jetty VALUES(2,'Buster M','Yamaha 40hk',460,186,'Berit');
$boatType 	= "Buster M";
$boatEngine = "Yamaha 40hk";
$boatLength = 460;
$boatWidth 	= 186;
$ownerName 	= "Berit";
$stmt->execute();
//echo "<p>Inserted '$boatType'. Rowcount is = " . $stmt->rowCount();

// INSERT INTO Jetty VALUES(3,'Linder 440','Tohatsu 4hk',431,164,'Ceasar');
$boatType 	= "Linder 440";
$boatEngine = "Tohatsu 4hk";
$boatLength = 431;
$boatWidth 	= 164;
$ownerName 	= "Ceasar";
$stmt->execute();
//echo "<p>Inserted '$boatType'. Rowcount is = " . $stmt->rowCount();
*/

// ---------------------------------------------------------------------------------------------
//
// Update row/cell in a table. An exception is thrown if something fails.
//
//  http://www.sqlite.org/lang_update.html
//  http://www.sqlite.org/lang_datefunc.html
//  http://php.net/manual/en/pdo.prepared-statements.php
//  http://php.net/manual/en/pdo.prepare.php
//  http://php.net/manual/en/pdostatement.execute.php
//
echo "<p><form method=get><label>Id: <input name=id></label><label> Status: <input name=status></label><input type=submit></form>";
echo "<p>Update status info by inserting the id (jettyPosition) and a string with status information.";

// Only try to update if the $_GET['id'] has a reasonable value 
if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {

	$stmt = $db->prepare('
		UPDATE Jetty 
		SET 
			status = ?,
			modified = datetime("now"),
			modifier = ?
		WHERE
			jettyPosition = ?;
	');
	$stmt->execute(array($_GET['status'], $_SERVER['HTTP_USER_AGENT'], $_GET['id']));
	
	echo "<p>" . $stmt->rowCount() . " rows affected.";
}
	

// ---------------------------------------------------------------------------------------------
//
// Select rows from a table. An exception is thrown if something fails.
//
//  http://www.sqlite.org/lang_select.html
//  http://www.sqlite.org/lang_expr.html
//  http://php.net/manual/en/pdo.prepared-statements.php
//  http://php.net/manual/en/pdo.prepare.php
//  http://php.net/manual/en/pdostatement.execute.php
//  http://php.net/manual/en/pdostatement.fetch.php
//  http://php.net/manual/en/pdostatement.fetchall.php
//
$stmt = $db->prepare('
	SELECT jettyPosition, boatType, boatEngine, ownerName, status, datetime(modified), modified, modifier FROM Jetty;
');

//echo "<p>Executing SQL statement:<pre>" . $stmt->queryString . "</pre>";
$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
/*
echo "<p>Results from query:<pre>";
print_r($res);
echo "</pre>";
*/

echo "<table style='border:1px solid #999'><tr style='background:#999'>";
// Get all columnnames and use for table header
foreach($res[0] AS $key => $val) {
	echo "<th>$key</th>";
}
echo "</tr>";

// Get all rows, one by one
foreach($res AS $val) {
	echo "<tr>";
	foreach($val AS $val1) {
		echo "<td>$val1</td>";
	}
	echo "</tr>";
}
echo "</table>";


// ---------------------------------------------------------------------------------------------
//
// Close the connection by setting it to null
//
$db = null;


// ---------------------------------------------------------------------------------------------
//
// Clear the example and start with an empty table
//
echo "<p><a href=sqlite11.php>Clear table";


?>


</body>
</html>


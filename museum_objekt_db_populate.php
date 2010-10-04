<?php
$title = "Formulär (SQLite) för att arbeta med Museum Objekt";
$bodyId = "begr-formdb";
include("header.php");
include("header_begravning.php"); 


// ---------------------------------------------------------------------------------------------
//
// SET ERROR REPORTING TO ON
// Always set error reporting to on, will save a load of time during development and testing
// 
error_reporting(-1);

// ---------------------------------------------------------------------------------------------
//
// INCLUDE FUNCTIONS
// Include the functions needed to make this form work.
//
//	http://php.net/manual/en/function.require-once.php
//
require_once("functions.php");


//
// Create variables used all over the script
//
$output = "";
$obj = Array(
		'id'					=> '',
		'title' 			=> '',
		'category'		=> '',
		'text' 				=> '',
		'image' 			=> '',
		'owner' 			=> '',
	);


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
$db = new PDO("sqlite:museum/db/museum.sqlite");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// Create the table and populate by reading each file and insert its value into the database
if(isset($_GET['doit'])) {

	// Drop & Create a table, but only if it does not already exists. An exception is thrown if
	$stmt = $db->prepare('DROP TABLE IF EXISTS Object;');
	$output .= "<p>Executing SQL statement:<pre>" . $stmt->queryString . "</pre>";
	$stmt->execute();
	
	$stmt = $db->prepare('
		CREATE TABLE IF NOT EXISTS Object
		(
			id INTEGER PRIMARY KEY  NOT NULL  UNIQUE, 
			title TEXT, 
			category TEXT, 
			text TEXT,
			image TEXT,
			owner TEXT
		);
	');
	$output .= "<p>Executing SQL statement:<pre>" . $stmt->queryString . "</pre>";
	$stmt->execute();

	// Read all files
	$dir = dirname(__FILE__) . "/museum/objects_fil/";
	$files = readDirectory($dir);
	
	foreach($files as $val) {
		if(is_file("$dir/$val")) {
			$obj = unserialize(file_get_contents("$dir/$val"));

			$stmt = $db->prepare('INSERT INTO Object (title, category, text, image, owner) VALUES (:title, :category, :text, :image, :owner);');
			$stmt->bindValue(':title', 			$obj['title']);
			$stmt->bindValue(':category', 	$obj['category']);
			$stmt->bindValue(':text', 			$obj['text']);
			$stmt->bindValue(':image', 			$obj['image']);
			$stmt->bindValue(':owner', 			$obj['owner']);
			$stmt->execute();

			$obj['id'] 	= $db->lastInsertId();
		}
	}

	//
	// Select rows from a table. An exception is thrown if something fails.
	//
	$stmt = $db->prepare('SELECT * FROM Object;');	
	$stmt->execute();
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	$output .= "<table style='border:1px solid #999'><tr style='background:#999'>";
	// Get all columnnames and use for table header
	foreach($res[0] AS $key => $val) {
		$output .=  "<th>$key</th>";
	}
	$output .=  "</tr>";
	
	// Get all rows, one by one
	foreach($res AS $val) {
		$output .=  "<tr>";
		foreach($val AS $val1) {
			$output .=  "<td>$val1</td>";
		}
		$output .=  "</tr>";
	}
	$output .=  "</table>";

}


// ---------------------------------------------------------------------------------------------
//
// Close the connection by setting it to null
//
$db = null;


?>


<!-- - - - - - - - - - - - - - - - - - wrap whole content - - - - - - - - - - - - - - -->
<div id="wrap">

<!-- - - - - - - - - - - - - - - - - - *******      - - - - - - - - - - - - - - - - - -->
<article class=fullwidth>

	<section>

<?php
if(!isset($_GET['doit'])) {
	$out = <<<EOD
<h1>Museum Objekt, initiera databasen från filerna</h1>
<p>Initiera databasen och fyll den med information från filerna genom att klicka på följande länk.
<p><a href="?doit">Initiera databasen</a>
EOD;
	echo $out;
} else {
	echo "<h1>Museum Objekt, databasen är initierad</h1>";
	echo "<p><a href='museum_objekt_db_form.php'>Gå vidare och jobba med objekten</a>";
	echo $output;
}
?>	
		<?php include("byline.php"); ?>
	
	</section>
</article>
</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

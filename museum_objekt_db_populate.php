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
			ingress TEXT, 
			text TEXT,
			image TEXT,
			year TEXT,
			owner TEXT,
			trustee TEXT,
			background TEXT
		);
	');
	output .= "<p>Executing SQL statement:<pre>" . $stmt->queryString . "</pre>";
	$stmt->execute();

	// Read all files
	$dir = dirname(__FILE__) . "/objects_fil/";
	$files = readDirectory($dir);
	
	foreach($files as $val) {
		if(is_file("$dir/$val")) {
			$obj = unserialize(file_get_contents("$dir/$val"));

			$stmt = $db->prepare('INSERT INTO Object (title, category, text, image, owner) VALUES (:title, :category, :text, :image, :owner);');
			$stmt->bindParam(':id', 				$obj['id']);
			$stmt->bindValue(':title', 			$obj['title']);
			$stmt->bindValue(':category', 	$obj['category']);
			$stmt->bindValue(':text', 			$obj['text']);
			$stmt->bindValue(':image', 			$obj['image']);
			$stmt->bindValue(':owner', 			$obj['owner']);
			$stmt->execute();

		}
	}





	$stmt = $db->prepare('
		UPDATE Object 
		SET 
			title = :title,
			category = :category,
			text = :text,
			image = :image,
			owner = :owner,
		WHERE
			id = :id;
	');
	$stmt->bindValue(':id', 				validateIncoming($_POST, 'id', 					0));
	$stmt->bindValue(':title', 			validateIncoming($_POST, 'title', 			'Titel saknas'));
	$stmt->bindValue(':category', 	validateIncoming($_POST, 'category', 		'Kategori/gruppering saknas'));
	$stmt->bindValue(':text', 			validateIncoming($_POST, 'text', 				'Text saknas'));
	$stmt->bindValue(':image', 			validateIncoming($_POST, 'image', 			'../../img/noimage.png'));
	$stmt->bindValue(':owner', 			validateIncoming($_POST, 'owner', 			'Ägare saknas'));
	$stmt->execute();
		
	$output = "Objektet sparades. " . $stmt->rowCount() . " rader påverkades.";
}



if(!empty($_POST['doAdd'])) {	
	$stmt = $db->prepare('INSERT INTO Object (title) VALUES ("Titel ej vald");');
	$stmt->execute();
	$id	= $db->lastInsertId();
	$obj['id'] 	= $id;
	$output .= "<p>Nytt objekt skapades med id={$obj['id']}. Klicka på spara för att spara objektet. ";
}



// ---------------------------------------------------------------------------------------------
//
// VIEW ALL
// Create a clickable list of all files saved in the objects-directory.
// Use $_GET (?id=x) to send the id of the file/object to display.
//
// Also create a select/option list to be used in the form
//
//	http://php.net/manual/en/language.constants.predefined.php
//	http://php.net/manual/en/function.dirname.php
//	http://php.net/manual/en/control-structures.foreach.php
//	

?>


<!-- - - - - - - - - - - - - - - - - - wrap whole content - - - - - - - - - - - - - - -->
<div id="wrap">

<!-- - - - - - - - - - - - - - - - - - *******      - - - - - - - - - - - - - - - - - -->
<article class=fullwidth>

	<section class=w600>
		<h1>Museum Objekt, initiera databasen från filerna</h1>

		<p>Initiera databasen och fyll den med information från filerna genom att klicka på följande länk.
		
		<p><a href="?doit">Initiera databasen</a>
	
		<?php include("byline.php"); ?>
	
	</section>
</article>
</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

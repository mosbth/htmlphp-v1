<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" media="all" type="text/css" href="../form/forms.css" title="Mos standard form layout">
	<link rel="shortcut icon" href="../../img/favicon.ico">
	<title>Exempel SQLite med formulär</title>
</head>

<?php
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


// ---------------------------------------------------------------------------------------------
//
// VALIDATE INCOMING VALUES FROM POST AND GET VARIABLES.
// Do some initial checking, validating and defining/setting of variables that will be used
// all through the script. 
//
//

//
// Get id from GET or POST, if set in POST then override GET-value, defaults to 0.
// This way id will always have a value which may be convienient.
//
//	http://www.w3schools.com/php/php_if_else.asp
//	http://www.w3schools.com/php/php_operators.asp
//
//  http://php.net/manual/en/control-structures.if.php
//	http://php.net/manual/en/language.operators.assignment.php
//	http://php.net/manual/en/function.is-numeric.php
//	http://php.net/manual/en/function.die.php
//
$id = validateIncoming($_GET, 'id', 0); 		// Get id from _GET or set it to 0 if not set
$id = validateIncoming($_POST, 'id', $id);	// Get id again from _POST, use the previous value as default
if(!is_numeric($id) || $id < 0) {
	die("Id är ej giltigt.");
}

//
// Create variables used all over the script
//
// $filename: Which file to work with and where to store it.
// $output: Some text providing feedback to the user on what happened
// $obj: An array of all form values, to be used to store to and read from file.
//
//	http://www.w3schools.com/php/php_variables.asp
//	http://www.w3schools.com/php/php_arrays.asp
//	http://www.w3schools.com/php/php_ref_array.asp
//
//	http://php.net/manual/en/language.variables.basics.php
//	http://php.net/manual/en/function.array.php
//	http://php.net/manual/en/ref.array.php
//
$filename = "objects/$id";
$output		= "";
$obj = Array(
		'id'					=> '',
		'title' 			=> '',
		'ingress' 		=> '',
		'text' 				=> '',
		'image' 			=> '',
		'year' 				=> '',
		'owner' 			=> '',
		'trustee' 		=> '',
		'background' 	=> '',
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
$db = new PDO("sqlite:museum.sqlite");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// ---------------------------------------------------------------------------------------------
//
// SAVE FORM
// Take action if the form is to be saved, allow numeric id > 0
//
/*
if(!empty($_POST['doSave']) && $id > 0) {

	//
	// Store the values from the form in the array.
	// Validate the input, no need to end up in a forum like this: https://www.flashback.org/f16 
	// Give some default values if appropriate.
	//
	$obj['id'] 					= validateIncoming($_POST, 'id', 					0);
	$obj['title']				= validateIncoming($_POST, 'title', 			'Titel saknas');
	$obj['ingress']			= validateIncoming($_POST, 'ingress', 		'Ingress saknas');
	$obj['text']				= validateIncoming($_POST, 'text', 				'Text saknas');
	$obj['image'] 			= validateIncoming($_POST, 'image', 			'../../img/noimage.png');
	$obj['year'] 				= validateIncoming($_POST, 'year', 				'Årtal saknas');
	$obj['owner'] 			= validateIncoming($_POST, 'owner', 			'Ägare saknas');
	$obj['trustee']			= validateIncoming($_POST, 'trustee', 		'Förvaltare saknas');
	$obj['background']	= validateIncoming($_POST, 'background', 	'Bakgrund saknas');
	
	if(!is_numeric($obj['id']) || $obj['id'] <= 0) {
		die("Id = " . $obj['id'] . " är ej giltigt.");
	}

	//
	//  Serialize the array and write it to disk.
	// Change mod to 777 on the directory to make it writable by the webserver.
	//
	//	http://php.net/manual/en/function.file-put-contents.php
	//	http://php.net/manual/en/function.serialize.php
	//
	file_put_contents($filename, serialize($obj));
	$output = "Filen sparades. ";
}
*/

if(!empty($_POST['doSave']) && $id > 0) {
	
	$stmt = $db->prepare('
		UPDATE Object 
		SET 
			title = :title,
			ingress = :ingress,
			text = :text,
			image = :image,
			year = :year,
			owner = :owner,
			trustee = :trustee,
			background = :background
		WHERE
			id = :id;
	');
	$stmt->bindValue(':id', 				validateIncoming($_POST, 'id', 					0));
	$stmt->bindValue(':title', 			validateIncoming($_POST, 'title', 			'Titel saknas'));
	$stmt->bindValue(':ingress', 		validateIncoming($_POST, 'ingress', 		'Ingress saknas'));
	$stmt->bindValue(':text', 			validateIncoming($_POST, 'text', 				'Text saknas'));
	$stmt->bindValue(':image', 			validateIncoming($_POST, 'image', 			'../../img/noimage.png'));
	$stmt->bindValue(':year', 			validateIncoming($_POST, 'year', 				'Årtal saknas'));
	$stmt->bindValue(':owner', 			validateIncoming($_POST, 'owner', 			'Ägare saknas'));
	$stmt->bindValue(':trustee', 		validateIncoming($_POST, 'trustee', 		'Förvaltare saknas'));
	$stmt->bindValue(':background', validateIncoming($_POST, 'background', 	'Bakgrund saknas'));
	$stmt->execute();
		
	$output = "Objektet sparades. " . $stmt->rowCount() . " rader påverkades.";
}


// ---------------------------------------------------------------------------------------------
//
// CLEAR
// Clear the form and produce an empty form. Setting id=0 will do this.
//
//  http://php.net/manual/en/control-structures.if.php
//	http://php.net/manual/en/function.empty.php
//
if(!empty($_POST['doClear'])) {	
	$id=0;
	$output .= "<p>Formuläret är nu tomt. ";
}


// ---------------------------------------------------------------------------------------------
//
// ADD
// Add a new empty object. Give the new object a unique id.
//
//  http://php.net/manual/en/control-structures.if.php
//	http://php.net/manual/en/function.empty.php
//	http://php.net/manual/en/function.max.php
//
/*
if(!empty($_POST['doAdd'])) {	
	$files 			= readDirectory(dirname(__FILE__) . "/objects");
	$id 				= max($files) + 1;
	$obj['id'] 	= $id;
	$filename 	= "objects/$id";
	$output .= "<p>Nytt objekt med id=$id. Klicka på spara för att spara objektet. ";
}
*/

if(!empty($_POST['doAdd'])) {	
	$stmt = $db->prepare('INSERT INTO Object (title) VALUES ("Titel ej vald");');
	$stmt->execute();
	$id	= $db->lastInsertId();
	$obj['id'] 	= $id;
	$output .= "<p>Nytt objekt skapades med id={$obj['id']}. Klicka på spara för att spara objektet. ";
}



// ---------------------------------------------------------------------------------------------
//
// READ FROM FILE
// Read info from file, if the id is set, if the id=0 then do nothing and produce a empty form.
//
//	http://www.w3schools.com/php/php_ref_filesystem.asp
//	http://www.w3schools.com/php/php_if_else.asp
//	http://www.w3schools.com/php/php_operators.asp
//
//	http://php.net/manual/en/control-structures.elseif.php
//	http://php.net/manual/en/language.operators.assignment.php
//	http://php.net/manual/en/language.operators.php
//	http://php.net/manual/en/function.file-get-contents.php
//	http://php.net/manual/en/function.unserialize.php
//
/*
if($id == 0) {
	// Do nothing, just produce an empty form
} else if(is_file($filename)) {
	// Read file into array
	$obj = unserialize(file_get_contents($filename));
	$output .= "Filen lästes in från disk. ";
} else {
	// The file does not exists
	$output .= "Filen kunde inte hittas på disken. ";	
}	
*/

//
// Read the row that has choosen id
//
$stmt = $db->prepare('SELECT * FROM Object WHERE id = ?;');
$stmt->execute(array($id));
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(isset($res[0])) {
	$obj = $res[0];
}


// ---------------------------------------------------------------------------------------------
//
// DELETE
// Take action if the object is to be deleted
//
//	http://www.w3schools.com/php/php_if_else.asp
//
//	http://php.net/manual/en/function.is-file.php
//	http://php.net/manual/en/function.unlink.php
//
/*
if(!empty($_POST['doDelete'])) {	
	if(is_file($filename)) {
		unlink($filename);		
		$output .= "<p>Filen raderades från disken. ";
	} else {
		$output .= "<p>Filen kunde inte raderas, filen fanns ej.";		
	}
}
*/

//
// Delete the row that has choosen id
//
if(!empty($_POST['doDelete'])) {	
	$stmt = $db->prepare('DELETE FROM Object WHERE id = ?;');
	$stmt->execute(array($id));
	$output .= "<p>" . $stmt->rowCount() . " objekt raderades. ";
}


// ---------------------------------------------------------------------------------------------
//
// VIEW ALL
// Create a clickable list of all files saved in the objects-directory.
// Use $_GET (?id=x) to send the id of the file/object to display.
//
//	http://php.net/manual/en/language.constants.predefined.php
//	http://php.net/manual/en/function.dirname.php
//	http://php.net/manual/en/control-structures.foreach.php
//	
/*
$files = readDirectory(dirname(__FILE__) . "/objects");

$objects = "";
foreach($files as $val) {
	$objects .= "<a href='?id=$val'>$val</a> ";
}
*/

//
// Read all values from database and show their title
//
$stmt = $db->prepare('SELECT * FROM Object;');
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

$objects = "";
foreach($res as $val) {
	$objects .= "<a href='?id={$val['id']}'>{$val['title']}</a> ";
}


?>

<body>
	<p><a href="../../source.php?dir=example/sqlite&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
	<a href=sqlite14.php>Skapa om databasen med default-innehåll</a>

	<p>Följande objekt finns sparade:
	<p><?php echo $objects; ?>
	<form class="standard w600" method=post>
	 <fieldset>
		<legend>Hantera Museum Objekt</legend>
	
		<label>Id:<input type=number name=id placeholder="Id på objektet, en siffra " value="<?php echo $obj['id']; ?>"></label>
		<label>Titel:<input type=text name=title placeholder="Titel/namn på objektet" value="<?php echo $obj['title']; ?>"></label>
		<label>Ingress:<textarea name=ingress placeholder="Ingress, en kortare och slagkraftig intro till objektet"><?php echo $obj['ingress']; ?></textarea></label>
		<label>Text:<textarea name=text placeholder="Text, en beskrivning av objektet"><?php echo $obj['text']; ?></textarea></label>
		<label>Bild:<input type=url name=image placeholder="Bild, en länk till en bild på objektet" value="<?php echo $obj['image']; ?>"></label>
		<img src="<?php echo $obj['image']; ?>" alt="[Bild saknas]">
		<label>Årtal:<input type=text name=year placeholder="Årtal, när skapades objektet, årtal, spann av år eller sekel" value="<?php echo $obj['year']; ?>"></label>
		<label>Ägare:<input type=text name=owner placeholder="Ägare, vem äger objektet" value="<?php echo $obj['owner']; ?>"></label>
		<label>Förvaltare:<input type=text name=trustee placeholder="Förvaltare, vem förvaltar objektet för tillfället" value="<?php echo $obj['trustee']; ?>"></label>
		<label>Bakgrund:<textarea name=background placeholder="Bakgrund, hur hittade objektet fram till dess nuvarande ägare och förvaltare"><?php echo $obj['background']; ?></textarea></label>
				
		<input type=submit name=doDelete value="Radera" title="Radera detta objektet från disk genom att ta bort filen.">
		<input type=submit name=doAdd value="Nytt objekt" title="Skapa ett nytt objekt med ett unikt id.">
		<input type=submit name=doClear value="Töm formulär" title="Töm formuläret på alla värden, visa ett tomt formulär">
		<input type=reset value="Återställ" title="Återställ formuläret till dess ursprunliga läge">
		<input type=submit name=doSave value="Spara" title="Spara alla ändringar">
		
		<output><?php echo $output; ?></output>
		
	 </fieldset>
	</form>

</body>
</html>

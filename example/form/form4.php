<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" media="all" type="text/css" href="forms.css" title="Mos standard form layout">
	<link rel="shortcut icon" href="../../img/favicon.ico">
 	<title>Exempel formulär, del 4</title>
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
// FUNCTION
// Function to validate incoming values. Reduces code writing.
//
// $aArray: An array containing the values, for example $_POST or $_GET
// $aEntry: An entry in the array, for example 'id' or 'title'
// $aDefault: Default value to use when the array-entry is not set or is empty.
//
//	http://www.w3schools.com/php/php_functions.asp
//
//	http://php.net/manual/en/functions.user-defined.php
//	http://php.net/manual/en/functions.arguments.php
//	http://php.net/manual/en/functions.returning-values.php
//  http://php.net/manual/en/control-structures.if.php
//	http://php.net/manual/en/control-structures.else.php
//	http://php.net/manual/en/language.operators.logical.php
//	http://php.net/manual/en/function.isset.php
//	http://php.net/manual/en/function.empty.php
//	http://php.net/manual/en/function.strip-tags.php
//
function validateIncoming($aArray, $aEntry, $aDefault) {
	if(isset($aArray[$aEntry]) && !empty($aArray[$aEntry])) {
		return strip_tags($aArray[$aEntry]);
	} else {
		return $aDefault;
	}
}


// ---------------------------------------------------------------------------------------------
//
// VALIDATE INCOMING VALUES FROM POST AND GET VARIABLES.
// Do some initial checking, validating and defining/setting of variables that will be used
// all through the script. 
//
//

//
// Get id from POST, defaults to 0.
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
$id = validateIncoming($_POST, 'id', 0);	// Get id from _POST, use 0 as default
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
// SAVE FORM
// Take action if the form is to be saved, allow numeric id > 0
//
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


// ---------------------------------------------------------------------------------------------
//
// CLEAR
// Clear the form and produce an empty form. Setting id=0 will do this.
//
if(!empty($_POST['doClear'])) {	
	$output .= "<p><em>CLEAR: Ännu inte implementerat.</em> ";
}


// ---------------------------------------------------------------------------------------------
//
// ADD
// Add a new empty object. Give the new object a unique id.
//
if(!empty($_POST['doAdd'])) {	
	$output .= "<p><em>ADD: Ännu inte implementerat.</em> ";
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


// ---------------------------------------------------------------------------------------------
//
// DELETE
// Take action if the object is to be deleted
//
//	http://php.net/manual/en/function.empty.php
//
if(!empty($_POST['doDelete'])) {	
	$output .= "<p><em>DELETE: Ännu inte implementerat.</em> ";
}


// ---------------------------------------------------------------------------------------------
//
// VIEW ALL
// Create a clickable list of all files saved in the objects-directory.
//	
$objects = "<p><em>VIEW ALL: Ännu inte implementerat.</em> ";		


?>

<body>
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
	<p><a href="../../source.php?dir=example/form&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>

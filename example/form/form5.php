<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" media="all" type="text/css" href="forms.css" title="Mos standard form layout">
	<link rel="shortcut icon" href="../../img/favicon.ico">
 	<title>Exempel formulär, del 5</title>
</head>

<?php
// ---------------------------------------------------------------------------------------------
//
// Always set error reporting to on, will save a load of time during development and testing
// 
error_reporting(-1);


// ---------------------------------------------------------------------------------------------
//
// Function to validate incoming values. Reduces code writing.
//
// $aArray: An array containing the values, for example $_POST or $_GET
// $aEntry: An entry in the array, for example 'id' or 'title'
// $aDefault: Default value to use when the array-entry is not set or is empty.
//
//	http://php.net/manual/en/functions.user-defined.php
//	http://php.net/manual/en/functions.arguments.php
//	http://php.net/manual/en/functions.returning-values.php
//	http://php.net/manual/en/function.isset.php
//	http://php.net/manual/en/function.empty.php
//	http://php.net/manual/en/function.strip-tags.php
//	http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary
//
function validateIncoming($aArray, $aEntry, $aDefault) {
	return (isset($aArray[$aEntry]) && !empty($aArray[$aEntry]) ? strip_tags($aArray[$aEntry]) : $aDefault);
}


// -------------------------------------------------------------------------------------------
//
// Function to open and read a directory, return its content as an array.
//
// $aPath: A path to the directory to scan for files. 
// 
//	http://php.net/manual/en/function.is-dir.php
//	http://php.net/manual/en/function.opendir.php
//	http://php.net/manual/en/function.readdir.php
//	http://php.net/manual/en/function.is-file.php
//	http://php.net/manual/en/function.closedir.php
//	http://php.net/manual/en/function.sort.php
//	
function readDirectory($aPath) {
	$list = Array();
	if(is_dir($aPath)) {
		if ($dh = opendir($aPath)) {
			while (($file = readdir($dh)) !== false) {
				if(is_file("$aPath/$file") && $file != '.htaccess') {
					$list[$file] = "$file";
				}
			}
			closedir($dh);
		}
	}
	sort($list, SORT_NUMERIC);
	return $list;
}


// ---------------------------------------------------------------------------------------------
//
// Do some initial checking, validating and defining/setting of variables that will be used
// all through the script. 
//
//	http://php.net/manual/en/function.is-numeric.php
//	http://php.net/manual/en/function.die.php
//

//
// Get id from GET or POST, if set in POST then override GET-value, defaults to 0.
// This way id will always have a value which may be convienient.
//
$id = validateIncoming($_POST, 'id', validateIncoming($_GET, 'id', 0));
if(!is_numeric($id) || $id < 0) {
	die("Id är ej giltigt.");
}

//
// Create variables used all over the script
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
// Take action if the form is to be saved
//
if(!empty($_POST['doSave'])) {

	//
	// Validate the input, no need to end up in a forum like this: https://www.flashback.org/f16 
	// Give some default values if appropriate
	//
	$title 			= validateIncoming($_POST, 'title', 'Titel saknas');
	$ingress		= validateIncoming($_POST, 'ingress', 'Ingress saknas');
	$text 			= validateIncoming($_POST, 'text', 'Text saknas');
	$image 			= validateIncoming($_POST, 'image', 'no-image.png');
	$year 			= validateIncoming($_POST, 'year', 'Årtal saknas');
	$owner 			= validateIncoming($_POST, 'owner', 'Ägare saknas');
	$trustee 		= validateIncoming($_POST, 'trustee', 'Förvaltare saknas');
	$background	= validateIncoming($_POST, 'background', 'Bakgrund saknas');
	
	//
	// Create an array of all items and write it to disk in the subdirectory named 'objects'.
	// Change mod to 777 on the directory to enable webserver to create files.
	//
	$obj['id']					= $id;
	$obj['title'] 			= $title;
	$obj['ingress'] 		= $ingress;
	$obj['text'] 				= $text;
	$obj['image'] 			= $image;
	$obj['year'] 				= $year;
	$obj['owner'] 			= $owner;
	$obj['trustee'] 		= $trustee;
	$obj['background']	= $background;

	file_put_contents($filename, serialize($obj));
	$output = "Filen sparades. ";
}


// ---------------------------------------------------------------------------------------------
//
// Read info from file, if the id is set, if the id=0 then do nothing and produce a empty form.
//
//	http://php.net/manual/en/function.file-get-contents.php
//	http://php.net/manual/en/function.unserialize.php
//	http://php.net/manual/en/control-structures.elseif.php
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
// Take action if the object is to be deleted
//
//	http://php.net/manual/en/function.unlink.php
//
if(!empty($_POST['doDelete'])) {	
	if(is_file($filename)) {
		unlink($filename);		
		$output .= "<p>Filen raderades från disken. ";
	} else {
		$output .= "<p>Filen kunde inte raderas, filen fanns ej.";		
	}
}


// ---------------------------------------------------------------------------------------------
//
// Create a clickable list of all files saved in the objects-directory.
// Use $_GET (?id=x) to send the id of the file/object to display.
//
//	http://php.net/manual/en/language.constants.predefined.php
//	http://php.net/manual/en/function.dirname.php
//	http://php.net/manual/en/control-structures.foreach.php
//
$files = readDirectory(dirname(__FILE__) . "/objects");

$objects = "";
foreach($files as $val) {
	$objects .= "<a href='?id=$val'>$val</a> ";
}


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
		<label>Årtal:<input type=text name=year placeholder="Årtal, när skapades objektet, årtal, spann av år eller sekel" value="<?php echo $obj['year']; ?>"></label>
		<label>Ägare:<input type=text name=owner placeholder="Ägare, vem äger objektet" value="<?php echo $obj['owner']; ?>"></label>
		<label>Förvaltare:<input type=text name=trustee placeholder="Förvaltare, vem förvaltar objektet för tillfället" value="<?php echo $obj['trustee']; ?>"></label>
		<label>Bakgrund:<textarea name=background placeholder="Bakgrund, hur hittade objektet fram till dess nuvarande ägare och förvaltare"><?php echo $obj['background']; ?></textarea></label>
				
		<input type=submit name=doDelete value="Radera" title="Radera detta objektet från disk genom att ta bort filen.">
		<input type=reset value="Återställ" title="Återställ formuläret till dess ursprunliga läge">
		<input type=submit name=doSave value="Spara" title="Spara alla ändringar">
		
		<output><?php echo $output; ?></output>
		
	 </fieldset>
	</form>
	<p><a href="../../source.php?dir=example/form&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>

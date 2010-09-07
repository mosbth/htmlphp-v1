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
// Always set error reporting to on, will save a load of time during development and testing
// 
error_reporting(-1);


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
// Do some initial checking, validating and defining/setting of variables. 
//
$output	= "";


// ---------------------------------------------------------------------------------------------
//
// Take action if the form is to be saved
//
if(!empty($_POST['doSave'])) {
	
	//
	// Removed saving in this example, just to reduce the amount of code 
	//
	$output .= "Filen sparas inte i detta exempel. ";
}


// ---------------------------------------------------------------------------------------------
//
// Read info from file, if the id is set, if the id=0 then do nothing and produce a empty form.
//
//	http://php.net/manual/en/function.file-get-contents.php
//	http://php.net/manual/en/function.unserialize.php
//	http://php.net/manual/en/function.is-file.php
//
$id 			= isset($_GET['id']) ? $_GET['id'] : 0;
$filename = "objects/$id";
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

if(!is_numeric($id) || $id < 0) {
	// The id is invalid
	$output .= "Filens id var ej korrekt angivet. ";	
} else if($id == 0) {
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
	
	if(isset($_POST['id']) && is_numeric($_POST['id'])) {
		$filename = "objects/" . $_POST['id'];
		if(is_file($filename)) {
			unlink($filename);		
			$output .= "<p>Filen raderades från disken. ";
		} else {
			$output .= "<p>Filen kunde inte raderas, filen fanns ej.";		
		}
	} else {
		$output .= "<p>Filen kunde inte raderas, felaktigt id.";
	}
	
}


// ---------------------------------------------------------------------------------------------
//
// Create a clickable list of all files saved in the objects-directory.
// Use $_GET to send the id of the file/object to display.
//
//	http://php.net/manual/en/language.constants.predefined.php
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

<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" media="all" type="text/css" href="forms.css" title="Mos standard form layout">
	<link rel="shortcut icon" href="../../img/favicon.ico">
 	<title>Exempel formulär, del 3</title>
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
$output 	= "";


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
// Read info from file, if the id is set
//
//	http://php.net/manual/en/function.file-get-contents.php
//	http://php.net/manual/en/function.unserialize.php
//
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
	$obj = unserialize(file_get_contents("objects/" . $_GET['id']));
	$output .= "Filen lästes in från disk. ";
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
				
		<input type=reset value="Återställ" title="Återställ formuläret till dess ursprunliga läge">
		<input type=submit name=doSave value="Spara" title="Spara alla ändringar">
		
		<output><?php echo $output; ?></output>
		
	 </fieldset>
	</form>
</body>
</html>

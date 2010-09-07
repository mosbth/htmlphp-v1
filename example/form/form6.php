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
// Create a function to validate incoming values. Makes better code.
//
//	http://php.net/manual/en/functions.user-defined.php
//	http://php.net/manual/en/functions.arguments.php
//	http://php.net/manual/en/functions.returning-values.php
//
function validatePost($aEntry, $aDefault) {
	return (isset($_POST[$aEntry]) && !empty($_POST[$aEntry]) ? strip_tags($_POST[$aEntry]) : $aDefault);
}


// ---------------------------------------------------------------------------------------------
//
// Do some initial checking and defining/setting of variables. 
//
$id 			= validatePost('id', 0);
$filename = "objects/$id";
$output 	= "";


//
// Double check that $id is a number since we will use it as filename
//
//	http://php.net/manual/en/function.is-numeric.php
//	http://php.net/manual/en/function.die.php
//
if(!(is_numeric($id) && $id >= 0)) {
	$output = "<p>FEL: Id är inte en siffra. Id måste vara ett positivt heltal eller 0.";
	die($output);
}


// ---------------------------------------------------------------------------------------------
//
// Only do this if the form is submitted
//
//	http://php.net/manual/en/control-structures.if.php
//	http://php.net/manual/en/function.empty.php
//
if(!empty($_POST['doSave'])) {
	
	// ---------------------------------------------------------------------------------------------
	//
	// Validate the input, no need to end up in a forum like this: https://www.flashback.org/f16 
	// Give some default values if appropriate
	//
	$title 			= validatePost('title', 'Titel saknas');
	$ingress		= validatePost('ingress', 'Ingress saknas');
	$text 			= validatePost('text', 'Text saknas');
	$image 			= validatePost('image', 'no-image.png');
	$year 			= validatePost('year', 'Årtal saknas');
	$owner 			= validatePost('owner', 'Ägare saknas');
	$trustee 		= validatePost('trustee', 'Förvaltare saknas');
	$background	= validatePost('background', 'Bakgrund saknas');
	

	// ---------------------------------------------------------------------------------------------
	//
	// Create an array of all items and write it to disk in the subdirectory named 'objects'.
	// Change mod to 777 on the directory to enable webserver to create files.
	//
	// 	http://php.net/manual/en/function.array.php
	//	http://php.net/manual/en/function.file-put-contents.php
	//	http://php.net/manual/en/function.serialize.php
	//
	$obj = Array(
			'id'					=> $id,
			'title' 			=> $title,
			'ingress' 		=> $ingress,
			'text' 				=> $text,
			'image' 			=> $image,
			'year' 				=> $year,
			'owner' 			=> $owner,
			'trustee' 		=> $trustee,
			'background' 	=> $background,
		);
	file_put_contents($filename, serialize($obj));
	$output .= "Filen sparades. ";
}

// ---------------------------------------------------------------------------------------------
//
// Read info from file
//
//	http://php.net/manual/en/function.file-get-contents.php
//	http://php.net/manual/en/function.unserialize.php
//
$obj = unserialize(file_get_contents($filename));


?>

<body>
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
	<p><a href="../../source.php?dir=example/form&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>

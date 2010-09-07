<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" media="all" type="text/css" href="forms.css" title="Mos standard form layout">
	<link rel="shortcut icon" href="../../img/favicon.ico">
 	<title>Exempel formulär, del 2</title>
</head>

<body>
	<form class="standard w600" method=post>
	 <fieldset>
		<legend>Hantera Museum Objekt</legend>
	
		<label>Id:<input type=number name=id placeholder="Id på objektet, en siffra "></label>
		<label>Titel:<input type=text name=title placeholder="Titel/namn på objektet"></label>
		<label>Ingress:<textarea name=ingress placeholder="Ingress, en kortare och slagkraftig intro till objektet"></textarea></label>
		<label>Text:<textarea name=text placeholder="Text, en beskrivning av objektet"></textarea></label>
		<label>Bild:<input type=url name=image placeholder="Bild, en länk till en bild på objektet"></label>
		<label>Årtal:<input type=text name=year placeholder="Årtal, när skapades objektet, årtal, spann av år eller sekel"></label>
		<label>Ägare:<input type=text name=owner placeholder="Ägare, vem äger objektet"></label>
		<label>Förvaltare:<input type=text name=trustee placeholder="Förvaltare, vem förvaltar objektet för tillfället"></label>
		<label>Bakgrund:<textarea name=background placeholder="Bakgrund, hur hittade objektet fram till dess nuvarande ägare och förvaltare"></textarea></label>
				
		<input type=reset value="Återställ" title="Återställ formuläret till dess ursprunliga läge">
		<input type=submit name=doSave value="Spara" title="Spara alla ändringar">
		
		<output>
<?php
// ---------------------------------------------------------------------------------------------
//
// Always set error reporting to on, will save a load of time during development and testing
// 
error_reporting(-1);

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
	// 	http://php.net/manual/en/function.isset.php
	// 	http://php.net/manual/en/function.strip-tags.php
	// 	http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary
	//
	$id					= isset($_POST['id']) 				&& !empty($_POST['id'])					? strip_tags($_POST['id']) 					: 0;
	$title 			= isset($_POST['title']) 			&& !empty($_POST['title']) 			? strip_tags($_POST['title'])		 		: 'Titel saknas';
	$ingress		= isset($_POST['ingress']) 		&& !empty($_POST['ingress']) 		? strip_tags($_POST['ingress'])		 	: 'Ingress saknas';
	$text 			= isset($_POST['text']) 			&& !empty($_POST['text']) 			? strip_tags($_POST['text'])	 			: 'Text saknas';
	$image 			= isset($_POST['image']) 			&& !empty($_POST['image']) 			? strip_tags($_POST['image'])	 			: 'no-image.png';
	$year 			= isset($_POST['year']) 			&& !empty($_POST['year']) 			? strip_tags($_POST['year'])	 			: 'Årtal saknas';
	$owner 			= isset($_POST['owner']) 			&& !empty($_POST['owner']) 			? strip_tags($_POST['owner'])		 		: 'Ägare saknas';
	$trustee 		= isset($_POST['trustee']) 		&& !empty($_POST['trustee']) 		? strip_tags($_POST['trustee'])		 	: 'Förvaltare saknas';
	$background	= isset($_POST['background']) && !empty($_POST['background']) ? strip_tags($_POST['background'])	: 'Bakgrund saknas';
	
	//
	// Double check that $id is a number since we will use it as filename
	//
	//	http://php.net/manual/en/function.is-numeric.php
	//	http://php.net/manual/en/function.die.php
	//
	is_numeric($id) && $id >= 0 
		or die("<p>FEL: Id är inte en siffra. Id måste vara ett positivt heltal eller 0.");


	// ---------------------------------------------------------------------------------------------
	//
	// Create an array of all items and write it to disk in the subdirectory named 'objects'.
	// Change mod to 777 on the directory to enable webserver to create files.
	//
	// 	http://php.net/manual/en/function.array.php
	//	http://php.net/manual/en/function.file-put-contents.php
	//	http://php.net/manual/en/function.serialize.php
	//
	$filename = "objects/$id";
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


	// ---------------------------------------------------------------------------------------------
	//
	// Read info back from file
	//
	//	http://php.net/manual/en/function.file-get-contents.php
	//
	$str = file_get_contents($filename);

	echo "<p>Filen '$filename' innehåller följande:<p><code>$str</code>";

	$obj1 = unserialize($str);
	echo "<p>Objektet innehåller följande värden:<pre>";
	print_r($obj1);
	echo "</pre>";
}
?>
		</output>
		
	 </fieldset>
	</form>
</body>
</html>

<?php
$title = "Formulär för att arbeta med Museum Objekt";
$bodyId = "begr-form";
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
if($id == -1) {
	$id = 0;
}
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
//$dirname	= "museum/objects";
$dirname	= "museum/objects_fil";
$imageDir	= "museum/img";
$filename = "$dirname/$id";
$output		= "";
$obj = Array(
		'id'					=> '',
		'title' 			=> '',
		'category'		=> '',
//		'ingress' 		=> '',
		'text' 				=> '',
		'image' 			=> '',
//		'year' 				=> '',
		'owner' 			=> '',
//		'trustee' 		=> '',
//		'background' 	=> '',
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
	$allowedTags = "<p>";
	$obj['id'] 					= validateIncoming($_POST, 'id', 					0);
	$obj['title']				= validateIncoming($_POST, 'title', 			'Titel saknas');
	$obj['category']		= validateIncoming($_POST, 'category', 		'Kategori/gruppering saknas');
//	$obj['ingress']			= validateIncoming($_POST, 'ingress', 		'Ingress saknas', $allowedTags);
	$obj['text']				= validateIncoming($_POST, 'text', 				'Text saknas', $allowedTags);
	$obj['image'] 			= validateIncoming($_POST, 'image', 			'img/noimage.png');
//	$obj['year'] 				= validateIncoming($_POST, 'year', 				'Årtal saknas');
	$obj['owner'] 			= validateIncoming($_POST, 'owner', 			'Ägare saknas');
//	$obj['trustee']			= validateIncoming($_POST, 'trustee', 		'Förvaltare saknas');
//	$obj['background']	= validateIncoming($_POST, 'background', 	'Bakgrund saknas', $allowedTags);
	
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
if(!empty($_POST['doAdd'])) {	
	$files 			= readDirectory(dirname(__FILE__) . "/$dirname");
	$id 				= max($files) + 1;
	$obj['id'] 	= $id;
	$obj['title'] 	= "Titel saknas";
	$filename 	= "$dirname/$id";
	file_put_contents($filename, serialize($obj));
	$output .= "<p>Nytt objekt med id=$id. ";
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
$isReadonly = " disabled ";

if($id == 0) {
	// Do nothing, just produce an empty form
} else if(is_file($filename)) {
	if(is_writable($filename)) {
		$isReadonly = "";
	} else {
		$output .= "Filen är skrivskyddad. ";	
	}
	
	// Read file into array
	$obj = unserialize(file_get_contents($filename));
	$output .= "Filen lästes in från disk. ";
} else {
	// The file does not exists
	$output .= "Filen kunde inte hittas på disken. ";	
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
$dir = dirname(__FILE__) . "/$dirname/";
$files = readDirectory($dir);

$objects = "";
$select	= "<select name='id' onChange='submit();'><option value=-1>Välj objekt</option>";
// Scan all files for the name of the object
foreach($files as $val) {
	if(is_file("$dir/$val")) {
		$i = unserialize(file_get_contents("$dir/$val"));
		$objects	.= "<a href='?id=$val'>{$i['title']} ({$i['id']})</a> ";
		$select		.= "<option value='$val'" . ($val == $id ? " selected " : "") . ">{$i['title']} ({$i['id']})</option>";
	}
}
$select .= "</select>";


// ---------------------------------------------------------------------------------------------
//
// UPLOAD IMAGES
// Upload images to the server.
//
//	http://php.net/manual/en/features.file-upload.post-method.php
//	
if(!empty($_POST['doFileUpload'])) {
	$uploaddir = dirname(__FILE__) . "/$imageDir/";
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    $output .= "Filen laddas upp. ";
	} else {
    $output .= "Något gick fel när filen laddades upp. ";
	}
	
	// To debug
	//echo "<pre>"; print_r($_FILES); echo "</pre>";
}


// ---------------------------------------------------------------------------------------------
//
// DELETE IMAGES
// Delete images from the server.
//	
if(!empty($_GET['doRemoveImage'])) {
	$dir 	= dirname(__FILE__) . "/$imageDir/";
	$file = basename(strip_tags($_GET['doRemoveImage']));
	if(is_file("$dir/$file")) {
		unlink("$dir/$file");
    $output .= "Bilden $dir/$file raderas. ";
	}
}


// ---------------------------------------------------------------------------------------------
//
// DISPLAY LIST OF IMAGES
// Display the images that were uploaded.
//
$dir = dirname(__FILE__) . "/$imageDir/";
$files = readDirectory($dir);
sort($files);

$images = "";
foreach($files as $val) {
	if(is_file("$dir/$val")) {
		$del = "";
		if(is_writeable("$dir/$val")) {
			$del = " <a href='?id=$id&amp;doRemoveImage=$val' title='Radera bilden'>x</a>";
		}
		$images	.= "<a href='$imageDir/$val' title='Visa bilden $imageDir/$val'>$val</a>{$del}<br>";
	}
}



?>


<!-- - - - - - - - - - - - - - - - - - wrap whole content - - - - - - - - - - - - - - -->
<div id="wrap">

<!-- - - - - - - - - - - - - - - - - - *******      - - - - - - - - - - - - - - - - - -->
<article class=fullwidth>

<!-- - - - - - - - - - - - - - - - - - aside        - - - - - - - - - - - - - - - - - -->
	<aside class="right">
		<aside class="box">
			<h4>Vissa objekt är skrivskyddade</h4>
			<p>De objekt som jag lagt dit går ej att uppdatera eller radera. De bilder som jag lagt dit går ej att radera. 
			Testar du att skapa egna objekt eller ladda upp egna bilder så går det att radera dem.
			Det är fritt fram att testa. Du kan inte förstöra något.
			</p>
		</aside>
		
		<aside class="box">
			<h4>Museum Objekt</h4>
			<p>Följande objekt finns sparade:
			<p><?php echo $objects; ?></p>
		</aside>
		
		<aside class="box">
			<h4>Ladda upp egna bilder</h4>
			<form enctype="multipart/form-data" action="?id=<?php echo $id; ?>" method="POST">
				<!-- MAX_FILE_SIZE must precede the file input field -->
				<input type="hidden" name="MAX_FILE_SIZE" value="9000000" />
				<!-- Name of input element determines name in $_FILES array -->
				<input name="userfile" type="file" />
				<input type="submit" name="doFileUpload" value="Ladda upp" />
			</form>

			<p><?php echo $images; ?></p>
		</aside>

	</aside>

	<section class=w600>
		<h1>Museum Objekt</h1>
		<form class="standard" action="?id=<?php echo $id; ?>" method=post>
		 <fieldset>
			<legend>Hantera Museum Objekt</legend>
		
			<!--
			<label>Id:<input type=number name=id placeholder="Id på objektet, en siffra " value="<?php echo $obj['id']; ?>"></label>
			-->
			<?php echo $select; ?>
			<input type=submit name=doAdd value="Nytt objekt" title="Skapa ett nytt objekt med ett unikt id.">
			<input type=submit name=doDelete value="Radera" title="Radera detta objektet från disk genom att ta bort filen.">

			<label>Titel:<input type=text name=title placeholder="Titel/namn på objektet" value="<?php echo $obj['title']; ?>"></label>
			<label>Kategori:<input type=text name=category placeholder="Kategori/gruppering" value="<?php echo $obj['category']; ?>"></label>
			<label>Ägare:<input type=text name=owner placeholder="Ägare, vem äger objektet" value="<?php echo $obj['owner']; ?>"></label>
			<label>Text:<textarea name=text placeholder="Text, en beskrivning av objektet"><?php echo $obj['text']; ?></textarea></label>
			<label>Bild:<input type=url name=image placeholder="Bild, en länk till en bild på objektet" value="<?php echo $obj['image']; ?>"></label>
			<figure class="standard strict inline w550">
				<a href="<?php echo $obj['image']; ?>"><img src="<?php echo $obj['image']; ?>" alt="[Bild saknas]"></a>
			</figure>
<!--			<label>Ingress:<textarea name=ingress placeholder="Ingress, en kortare och slagkraftig intro till objektet"><?php echo $obj['ingress']; ?></textarea></label> -->
<!--			<label>Årtal:<input type=text name=year placeholder="Årtal, när skapades objektet, årtal, spann av år eller sekel" value="<?php echo $obj['year']; ?>"></label> -->
<!--			<label>Förvaltare:<input type=text name=trustee placeholder="Förvaltare, vem förvaltar objektet för tillfället" value="<?php echo $obj['trustee']; ?>"></label> -->
<!--			<label>Bakgrund:<textarea name=background placeholder="Bakgrund, hur hittade objektet fram till dess nuvarande ägare och förvaltare"><?php echo $obj['background']; ?></textarea></label> -->
					
			<!--<input type=submit name=doClear value="Töm formulär" title="Töm formuläret på alla värden, visa ett tomt formulär">-->
			<input type=reset value="Återställ" title="Återställ formuläret till dess ursprunliga läge">
			<input type=submit name=doSave value="Spara" <?php echo $isReadonly; ?> title="Spara alla ändringar">
			
			<output><?php echo $output; ?></output>
			
		 </fieldset>
		</form>
	
		<?php include("byline.php"); ?>
	
	</section>
</article>
</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

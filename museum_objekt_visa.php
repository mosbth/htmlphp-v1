<?php
$title = "Formulär för att arbeta med Museum Objekt";
$bodyId = "begr-obj";
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
$dirname	= "museum/objects";
$imageDir	= "museum/img";
$filename = "$dirname/$id";
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
$select	= "<select name='id' onChange='submit();'><option value=0>Välj objekt</option>";
// Scan all files for the name of the object
foreach($files as $val) {
	if(is_file("$dir/$val")) {
		$i = unserialize(file_get_contents("$dir/$val"));
		$objects	.= "<a href='?id=$val'>{$i['title']} ({$i['id']})</a> ";
		$select		.= "<option value='$val'" . ($val == $id ? " selected " : "") . ">{$i['title']} ({$i['id']})</option>";
	}
}
$select .= "</select>";


?>


<!-- - - - - - - - - - - - - - - - - - wrap whole content - - - - - - - - - - - - - - -->
<div id="wrap">

<!-- - - - - - - - - - - - - - - - - - *******      - - - - - - - - - - - - - - - - - -->
<article class=fullwidth>

<!-- - - - - - - - - - - - - - - - - - aside        - - - - - - - - - - - - - - - - - -->
	<aside class="right">
		<aside class="box">
			<p>Följande objekt finns sparade:
			<p><?php echo $objects; ?></p>
		</aside>

		<aside class="box">
			<p>Du kan uppdatera och spara nya objekt samt ändra bilderna via följande länk:
			<p><a href="museum_objekt_form.php">Administrera museum objekt</a> 
			</p>
		</aside>
	</aside>
	
	<section class=w600>
		<?php echo (empty($id) ? "<p>Välj objekt att visa från högra kolumnen." : ""); ?> 
		<h1><?php echo $obj['title']; ?></h1>

		<img src="<?php echo $obj['image']; ?>" alt="[Bild saknas]">
		<p class=ingress><?php echo $obj['ingress']; ?></p>
		<p><?php echo $obj['text']; ?></p>
		<p><?php echo $obj['year']; ?></p>
		<p><?php echo $obj['owner']; ?></p>
		<p><?php echo $obj['trustee']; ?></p>
		<p><?php echo $obj['background']; ?></p>

		<output><?php echo $output; ?></output>
	
		<?php include("byline.php"); ?>
	
	</section>
</article>
</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

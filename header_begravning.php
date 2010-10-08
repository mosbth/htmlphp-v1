		<nav class=submenu>
			<a id="begr-om" 			href="begravningsmuseum_om.php">Om</a> 
			<a id="begr-artiklar" href="begravningsmuseum_artiklar.php">Artiklar</a> 
			<a id="begr-objdb" 		href="museum_objekt_db_visa.php">Objekt (SQLite)</a> 
			<a id="begr-formdb"		href="museum_objekt_db_form.php">Administrera Objekt (SQLite)</a> 
			<a id="begr-obj" 			href="museum_objekt_fil_visa.php">Objekt (filer)</a> 
			<a id="begr-form" 		href="museum_objekt_fil_form.php">Administrera Objekt (filer)</a> 

			<!-- <a id="begr-seder-" href="begravningsseder_och_bruk.php">Seder o bruk</a> -->
			<!-- <a id="begr-lit-" 	href="begravningsmuseum_litteratur.php">Litteratur</a> -->

		</nav>


<?php
// Create a breadcrumb menu
require('functions.php');

$history = array(
	array('href' => 'begravningsmuseum_artiklar.php', 'text' => 'Artiklar'), 
);
$current = array(
	'begr-seder' => array('href' =>'artikel_begravningsseder_och_bruk.php', 'text' => 'Begravningsseder och Bruk'),
	'begr-fest' => array('href' =>'artikel_festligheter_vid_begravning_gravol_och_konfekt.php', 'text' => 'Festligheter vid begravning, gravöl och konfekt'),
	'begr-parlkrans' => array('href' =>'artikel_parlkrans.php', 'text' => 'Pärlkransar'),
	'begr-minnestavla' => array('href' =>'artikel_minnestavla.php', 'text' => 'Minnestavlor'),
);

if(array_key_exists($bodyId, $current)) {
	echo createBreadCrumb($bodyId, $history, $current);
}
?>	

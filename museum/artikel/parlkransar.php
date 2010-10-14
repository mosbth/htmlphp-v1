<!-- Text och aside till artikeln "Begravningskonfekt" -->
<?php
// ---------------------------------------------------------------------------------------------
//
// Get objects to illustrate this article
//

// ---------------------------------------------------------------------------------------------
//
// INCLUDE FUNCTIONS
// Include the functions needed to make this form work.
//
require_once("functions.php");


// ---------------------------------------------------------------------------------------------
//
// Create a object that connects to the database file "database.sqlite". The database-file is 
// created if it does not exist. The database file must be writable by the webserver (chmod 666) 
// and so must the directory in which the file resides (chmod 777). 
// Create an empty database-file by using Firefox SQLite Manager.
// Set attributes to use exception handling.
//
$db = new PDO("sqlite:museum/db/museum.sqlite");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// ---------------------------------------------------------------------------------------------
//
// READ FROM DATABASE
// Read objects from database.
//
$stmt = $db->prepare('SELECT * FROM Object WHERE category = "Pärlkrans";');
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

$objects = "";
foreach($res as $val) {
	$img = modifyImgUrl($val['image'], 250);
	$objects .= <<< EOD
<figure class="standard strict">
	<a href="museum_objekt_db_visa.php?id={$val['id']}"><img src="$img" alt="[Bild: {$val['title']}]"></a>
	<figcaption>{$val['text']}</figcaption>
</figure>
EOD;

}


?>

<aside class="right plain">
	<?php echo $objects; ?>
</aside>		

<article>
	<h1>Pärlkransar</h1>
	<p class="byline">Av Ronny Holm, bearbetad av Mikael Roos, mos@bth.se. <time pubdate datetime="2010-10-14">14:e 
	oktober 2010</time></p>

	<p>Kransar gjorda av glaspärlor hängdes på gravkorset eller lades på graven. 
	Den tunna tråden med glaspärlor formades till spiraler, blad eller blommor. 
	Bruket kom ursprungligen från Italien och Frankrike men började förekomma i 
	Sverige under senare delen av 1800-talet. Man lade den på kistan i hemmet och 
	sedan följde kransen kistan till gravsättningen då man lade kransen på graven.
	
	<p>Trots att metalltråden rostade och glaspärlorna kunde gå sönder av frosten 
	varade kransarna längre än de av naturligt material. Efter en tid tog man 
	hem kransen och förvarade den på loge eller vind för att användas vid nästa 
	dödsfall. Först på 30-talet försvann de från kyrkogårdarna; på landsbygden 
	kunde de dock ses ända in på 50- och 60-talen.
	</p>

	<?php include("byline.php"); ?>

</article>

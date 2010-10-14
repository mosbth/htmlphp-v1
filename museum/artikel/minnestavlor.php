<!-- Text och aside till artikeln "Minnestavlor" -->
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
$stmt = $db->prepare('SELECT * FROM Object WHERE category = "Minnestavla";');
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
	<h1>Minnestavlor</h1>
	<p class="byline">Av Ronny Holm, bearbetad av Mikael Roos, mos@bth.se. <time pubdate datetime="2010-10-14">14:e 
	oktober 2010</time></p>
	
	<p>Bruket med begravningstavlor får allt större utbredning i början av 1800-talet 
	och är vanligast i sydvästra Sverige, Halland, västra Småland och sydöstra 
	Skåne. Seden upphörde under 1900-talets första decennier. Minnestavlorna består 
	ofta av namn på den döde, födelsedatum, dödsdatum och en hyllningstext i form av 
	en vers som omges av kors, kistor, änglar, sorgtråd, urnor m.m.
	
	<p>Bland dem som målade minnestavlor fanns ofta i äldre tider skollärare och 
	indelta soldater som lärt sig skriva, ibland också församlingens klockare. 
	Efter folkskolestadgans införande 1842 lärde sig allt flera att läsa och skriva, 
	vilket gjorde att även lantbrukare kunde måla minnestavlor vid sidan av sitt 
	ordinarie arbete. En bygdekonstnär som hade en egen personlig stil kunde bli 
	tongivande i en hel trakt och hans tavlor kom att pryda väggarna i många hem 
	till minne av en kär anhörig som gått bort.
	
	<p>Den mångsidige halländske bonden Eric Jacob Romberg (1810-1895) är främst känd 
	för sina målade minnestavlor. Vad man först lägger märke till i hans tavlor är 
	de många grälla färgerna, helt i stil med allmogemåleriets gamla traditioner, 
	vilket ger ett något brokigt intryck. Utmärkande är också målningens arkitektoniska 
	uppbyggnad.
	</p>

	<?php include("byline.php"); ?>

</article>

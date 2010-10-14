<!-- Text och aside till artikeln "Festligheter vid begravningar, gravöl och konfekt" -->
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
$stmt = $db->prepare('SELECT * FROM Object WHERE category = "Begravningsfest" OR category = "Begravningskonfekt";');
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
	<h1>Begravningskonfekt</h1>
	<p class="byline">Av Ronny Holm, bearbetat av Mikael Roos, mos@bth.se. <time pubdate datetime="2010-10-14">14:e 
	oktober 2010</time></p>

	<p>Seden att bjuda på sorgekonfekt spred sig under senare hälften av 1800-talet 
	från adeln till borgarfamiljerna i de större städerna. Från 1800-talets slut 
	och fram till 1930-talet var det en vedertagen sedvänja i stora delar av vårt 
	land. Begravningskonfekten beställdes antingen på ortens konditori eller från 
	någon av bygdens karamellgummor. Innehållet i högtidskonfekterna tycks alltid 
	ha varit en tjock glasyr, ibland med någon essens i. Den avlidnes initialer 
	kunde skrivas i svart glasyr ovanpå.
	
	<p>Konfekten hade omslag av svart eller vitt krusat papper och dekor av tyll och 
	spets. Ofta dekorerades de med sentimentala texter som monterades på 
	konfekternas ovansida med en liten änglabild, ett kors eller något liknande. 
	Vanligtvis serverades konfekten före begravningen men även direkt då gästerna 
	återvänt till sorgehuset efter begravningshögtiden. Ofta sparades begravningskonfekten 
	till minne av den avlidne och lades undan i stället för att ätas upp.
	</p>

	<?php include("byline.php"); ?>

</article>

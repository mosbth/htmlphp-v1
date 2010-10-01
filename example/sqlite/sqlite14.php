<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel SQLite med formulär, skapa databas/tabell för object</title>
</head>

<body>
	<p><a href="../../source.php?dir=example/sqlite&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>

<?php 
// ---------------------------------------------------------------------------------------------
//
// Always have error_reporting to -1. Show all errors.
//
error_reporting(-1); 

// ---------------------------------------------------------------------------------------------
//
// Create a default handler for exceptions (when things go wrong).
//
//  http://php.net/manual/en/function.set-exception-handler.php
// 
function exceptionHandler($aException) {
	die("<p>Uncaught exception: " . $aException->getMessage());
}
set_exception_handler('exceptionHandler');


// ---------------------------------------------------------------------------------------------
//
// Create a object that connects to the database file "database.sqlite". The database-file is 
// created if it does not exist. The database file must be writable by the webserver (chmod 666) 
// and so must the directory in which the file resides (chmod 777). 
// Create an empty database-file by using Firefox SQLite Manager.
// Set attributes to use exception handling.
//
//  http://php.net/manual/en/pdo.connections.php
//  http://php.net/manual/en/pdo.setattribute.php
//
$db = new PDO("sqlite:museum.sqlite");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// ---------------------------------------------------------------------------------------------
//
// Create a table, but only if it does not already exists. An exception is thrown if
// something fails.
//
//  http://www.sqlite.org/lang_createtable.html
//  http://www.sqlite.org/datatype3.html
//  http://php.net/manual/en/pdo.prepare.php
//  http://php.net/manual/en/pdostatement.execute.php
//
$stmt = $db->prepare('DROP TABLE IF EXISTS Object;');
echo "<p>Executing SQL statement:<pre>" . $stmt->queryString . "</pre>";
$stmt->execute();

$stmt = $db->prepare('
	CREATE TABLE IF NOT EXISTS Object
	(
		id INTEGER PRIMARY KEY  NOT NULL  UNIQUE, 
		title TEXT, 
		ingress TEXT, 
		text TEXT,
		image TEXT,
		year TEXT,
		owner TEXT,
		trustee TEXT,
		background TEXT
	);
');
echo "<p>Executing SQL statement:<pre>" . $stmt->queryString . "</pre>";
$stmt->execute();


// ---------------------------------------------------------------------------------------------
//
// Insert values into a table. An exception is thrown if
// something fails.
//
//  http://www.sqlite.org/lang_insert.html
//  http://php.net/manual/en/pdo.prepared-statements.php
//  http://php.net/manual/en/pdo.prepare.php
//  http://php.net/manual/en/pdostatement.bindparam.php
//  http://php.net/manual/en/pdostatement.execute.php
//
$stmt = $db->prepare('
	INSERT INTO Object
		(title, ingress, text, image, year, owner, trustee, background) 
		VALUES
		(?, ?, ?, ?, ?, ?, ?, ?);
');

// Put all initial values in an array
$values = Array(
	Array(
		"Begravningskonfekt",
		"Ingress saknas",
		"Text saknas",
		"../../museum/img/konfekt.jpg",
		"1950-60",
		"Ronny Holm",
		"Ronny Holm",
		"<p>Seden att bjuda på sorgekonfekt spred sig under senare hälften av 1800-talet
från adeln till borgarfamiljerna i de större städerna. Från 1800-talets slut och
fram till 1930-talet var det en vedertagen sedvänja i stora delar av vårt land.
Begravningskonfekten beställdes antingen på ortens konditori eller från någon
av bygdens karamellgummor. Innehållet i högtidskonfekterna tycks alltid ha
varit en tjock glasyr, ibland med någon essens i. Den avlidnes initialer kunde
skrivas i svart glasyr ovanpå.

<p>Konfekten hade omslag av svart eller vitt krusat papper och dekor av tyll
och spets. Ofta dekorerades de med sentimentala texter som monterades på
konfekternas ovansida med en liten änglabild, ett kors eller något liknande.
Vanligtvis serverades konfekten före begravningen men även direkt då
gästerna återvänt till sorgehuset efter begravningshögtiden. Ofta sparades
begravningskonfekten till minne av den avlidne och lades undan i stället för att
ätas upp.",		
	),
	Array(
		"Minnestavla för Herr Jonas Danielson",
		"Ingress saknas",
		"Text saknas",
		"../../museum/img/minnestavla.jpg",
		"1817",
		"Ronny Holm",
		"Ronny Holm",
		"<p>Bruket med begravningstavlor får allt större utbredning i början av 1800-talet
och är vanligast i sydvästra Sverige, Halland, västra Småland och sydöstra
Skåne. Seden upphörde under 1900-talets första decennier. Minnestavlorna
består ofta av namn på den döde, födelsedatum, dödsdatum och en hyllningstext
i form av en vers som omges av kors, kistor, änglar, sorgträd, urnor m.m.

<p>Bland dem som målade minnestavlor fanns ofta i äldre tider skollärare och
indelta soldater som lärt sig skriva, ibland också församlingens klockare. Efter
folkskolestadgans införande 1842 lärde sig allt flera att läsa och skriva, vilket
gjorde att även lantbrukare kunde måla minnestavlor vid sidan av sitt ordinarie
arbete. En bygdekonstnär som hade en egen personlig stil kunde bli tongivande
i en hel trakt och hans tavlor kom att pryda väggarna i många hem till minne av
en kär anhörig som gått bort.

<p>Den mångsidige halländske bonden Eric Jacob Romberg (1810-1895) är främst
känd för sina målade minnestavlor. Vad man först lägger märke till i hans
tavlor är de många grälla färgerna, helt i stil med allmogemåleriets gamla
traditioner, vilket ger ett något brokigt intryck. Utmärkande är också målningens
arkitektoniska uppbyggnad.",		
	),
	Array(
		"Pärlkrans",
		"Ingress saknas",
		"Text saknas",
		"../../museum/img/parlkrans.jpg",
		"Tidigt 1900-tal",
		"Ronny Holm",
		"Ronny Holm",
		"<p>Kransar gjorda av glaspärlor hängdes på gravkorset eller lades på graven. Den
tunna tråden med glaspärlor formades till spiraler, blad eller blommor. Bruket
kom ursprungligen från Italien och Frankrike men började förekomma i Sverige
under senare delen av 1800-talet. Man lade den på kistan i hemmet och sedan
följde kransen kistan till gravsättningen då man lade kransen på graven.

<p>Trots att metalltråden rostade och glaspärlorna kunde gå sönder av frosten
varade kransarna längre än de av naturligt material. Efter en tid tog man hem
kransen och förvarade den på loge eller vind för att användas vid nästa dödsfall.
Först på 30-talet försvann de från kyrkogårdarna; på landsbygden kunde de dock
ses ända in på 50- och 60-talen.",		
	),
);

// Insert values
foreach($values AS $val) {
	$stmt->execute($val);		
	echo "<p>Inserted one row. Rowcount is = " . $stmt->rowCount();
}


// ---------------------------------------------------------------------------------------------
//
// Select rows from a table. An exception is thrown if something fails.
//
//  http://www.sqlite.org/lang_select.html
//  http://www.sqlite.org/lang_expr.html
//  http://php.net/manual/en/pdo.prepared-statements.php
//  http://php.net/manual/en/pdo.prepare.php
//  http://php.net/manual/en/pdostatement.execute.php
//  http://php.net/manual/en/pdostatement.fetch.php
//  http://php.net/manual/en/pdostatement.fetchall.php
//
$stmt = $db->prepare('
	SELECT * FROM Object;
');

$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table style='border:1px solid #999'><tr style='background:#999'>";
// Get all columnnames and use for table header
foreach($res[0] AS $key => $val) {
	echo "<th>$key</th>";
}
echo "</tr>";

// Get all rows, one by one
foreach($res AS $val) {
	echo "<tr>";
	foreach($val AS $val1) {
		echo "<td>$val1</td>";
	}
	echo "</tr>";
}
echo "</table>";


// ---------------------------------------------------------------------------------------------
//
// Close the connection by setting it to null
//
$db = null;


?>


</body>
</html>


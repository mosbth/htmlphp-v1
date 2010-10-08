<?php
$title = "20 steg för att komma igång med SQLite";
$bodyId = "guide-sqlite20";
include("header.php");
include("header_guider.php");
?>

<!-- - - - - - - - - - - - - - - - - - wrap whole content - - - - - - - - - - - - - - -->
<div id="wrap">

<!-- - - - - - - - - - - - - - - - - - aside        - - - - - - - - - - - - - - - - - -->
<aside class="right">
	<aside class=box>
		<h4>W3Schools hjälper dig med SQL</h4>
		<p>Här finns en bra guide till SQL. Använd den samtidigt som du jobbar igenom denna artikel.
		<p><a href="http://w3schools.com/SQL">SQL på W3Schools</a>
		</p>
	</aside>
	<aside class=box>
		<h4>Databasboken ger bakgrunden</h4>
		<p>I systerkurserna används boken Databasteknik. Denna bok har en webbplats med 
		en webbkurs. Via den kan du få lite bakgrund om SQL och en mindre introduktion.
		<p><a href="http://www.databasteknik.se/webbkursen/sql/index.html">Databasteknik: Webbkursen om SQL</a>
		</p>
	</aside>
</aside>

<!-- - - - - - - - - - - - - - - - - - article      - - - - - - - - - - - - - - - - - -->
<article>
	<header id="start">
		<h1>20 steg för att komma igång med SQLite</h1>

			<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-10-10">1:e 
			oktober 2010</time>

			<p class="ingress">En introduktion till att komma igång med SQLite, SQL och PHP PDO på 20 steg.

			<p>Bästa sättet att genomföra övningen är att du själv gör alla stegen och kopierar eller skriver om
			kodexemplen till ditt egna fungerande exempel.
			Läsa är bra men man måste göra själv, "kan själv", för att lära sig.
			
			<ol>
				<li><a href="#s1">Om SQLite</a>
				<li><a href="#s2">SQLite Manager</a>
				<li><a href="#s3">Skapa en tabell</a>
				<li><a href="#s4">Lägg till rader i en tabell</a>
				<li><a href="#s5">Visa rader i en tabell med <code>SELECT</code></a>
				<li><a href="#s6">Aggregerande funktioner</a>
				<li><a href="#s7">Inbyggda funktioner</a>
				<li><a href="#s8">Import och export av data</a>
				<li><a href="#s9">Flytta databas mellan maskiner</a>
				<li><a href="#s10">PHP och SQLite</a>
				<li><a href="#s11">PHP och PDO</a>
				<li><a href="#s12">SQL injections</a>
				<li><a href="#s13">Koppla ett PHP-skript till en SQLite databas via PDO</a>
				<li><a href="#s14">Vanliga felmeddelanden</a>
				<li><a href="#s15">Skapa nya rader i tabellen med <code>INSERT</code></a>
				<li><a href="#s16">Ta bort rader med <code>DELETE</code></a>
				<li><a href="#s17">Visa innehållet i tabellen med <code>SELECT</code></a>
				<li><a href="#s18">Uppdatera rader och värden med <code>UPDATE</code></a>
				<li><a href="#s19">Ett komplett exempel med formulär och en SQLite databas</a>
				<li><a href="#s20">Andas</a>
			</ol>
	
	</header>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s1">
		<h2>1. Om SQLite</h2>			
		<p>SQLite är ett opensource mjukvarubibliotek som implementerar en filbaserad databas. Enligt deras
		site så anser de att SQLite är den mest spridda databasen i världen. Bekanta dig med informationen
		på deras hemsida.
		
		<p><a href="http://www.sqlite.org/">http://www.sqlite.org/</a>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s2">
		<h2>2. SQLite Manager</h2>
		
		<p>SQLite Manager är ett användargränssnitt för SQLite databaser. Med verktyget kan du skapa
		nya databaser, skapa tabeller, editera data i tabellerna och söka i dem. 
		
		<p>SQLite Manager är en Firefox AddOn. Ladda ned och installera det. Starta upp det via menyn "Firefox - Tools - SQLite Manager".
		
		<p><a href="https://addons.mozilla.org/sv-SE/firefox/addon/5817/">Ladda ned och installera SQLite Manager som Firefox AddOn</a>
		
		<p>Skapa en ny databas och döp den till test.
		
		<figure class="standard strict inline">
			<a href="img/sqlite-20/sqliteman-new-db.png"><img src="img/sqlite-20/sqliteman-new-db.png" alt="[Bild: SQLite Manager New Db]"></a>
			<figcaption>Skapa en ny databas, <code>test.sqlite</code>, i SQLite Manager.</figcaption>
		</figure>

		
		<p>Se dig om i verktyget, bekanta dig med menyerna, menyvalen och olika inställningsmöjligheter under options.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s3">
		<h2>3. Skapa en tabell</h2>
		
		<p>En databas består av tabeller, varje tabell har ett antal kolumner. Varje kolumn är av en viss datatyp.
		En tabell består av rader av värden. Det är bra om varje rad har ett unikt värde, ett värde som identifierar
		just den raden.
		Det åstakoms med en nyckel för varje rad. Denna nyckel kallas primärnyckel och definerar
		vilken kolumn som gör raden unik. En primärnyckel kan vara en kombination av flera kolumner.
		
		<p>Låt oss testa genom att göra en databas till den lokala båtklubben. Skapa en ny databas (<code>boats.sqlite</code>) med en tabell
		(<code>Jetty</code>) där alla båtar och deras respektive bryggplats lagras. Låt bryggplatsens id vara primärnyckel.
		Skapa kolumner för att spara båttyp, motor, längd, bredd och ägarens namn.
		
		<p>Så här ser det ut för mig.
		
		<p>Jag skapar den nya databasen enligt tidigare, därefter skapar jag en ny tabell.

		<figure class="standard strict inline">
			<a href="img/sqlite-20/create-table.png"><img src="img/sqlite-20/create-table.png" alt="[Bild: SQLite Manager Create Table]"></a>
			<figcaption>Skapa en ny tabell, <code>Jetty</code>, i databasen <code>boats.sqlite</code>.</figcaption>
		</figure>

		<p>Så här ser det ut när jag tittar på den tomma tabellen.
		
		<figure class="standard strict inline">
			<a href="img/sqlite-20/view-table-jetty.png"><img src="img/sqlite-20/view-table-jetty.png" alt="[Bild: SQLite Manager Empty Table Jetty]"></a>
			<figcaption>Så här ser en tom tabell ut, ännu finns inga rader av värden i tabellen.</figcaption>
		</figure>

		<p>Som du kanske märkte så använde sig verktyget av SQL-kod för att skapa tabellen. I mitt fall blev det
		följande kod.
		
		<blockquote>
			<code>
			CREATE  TABLE "main"."Jetty" ("jettyPosition" INTEGER PRIMARY KEY  NOT NULL  UNIQUE , "boatType" VARCHAR(20) NOT NULL , "boatEngine" VARCHAR(20) NOT NULL , "boatLength" INTEGER, "boatWidth" INTEGER, "ownerName" VARCHAR(20))
			</code>
		</blockquote>
		
		<p>Vi kan återkomma till SQL lite senare.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s4">
		<h2>4. Lägg till rader i en tabell</h2>
		
		<p>Låt oss lägga till ett par båtar i tabellen. Du kan använda följande båtar om du vill.
		
		<ul>
			<li>Båt: Buster XXL, motor: Yamaha 115hk, längd: 635, bredd: 240, ägare: Adam
			<li>Båt: Buster M, motor: Yamaha 40hk, längd: 460, bredd: 186, ägare: Berit
			<li>Båt: Linder 440, motor: Tohatsu 4hk, längd: 431, bredd: 164, ägare: Ceasar
		</ul>
		
		<p>Klicka på "Add" för att lägga till en ny rad. Du behöver inte ange en siffra för "jettyPosition". Det automatgenereras
		eftersom kolumnen är specificerad som PRIMARY KEY och INTEGER. Så här ser det ut för mig.
		
		<p>Lägg till en båt som en ny rad i tabellen.

		<figure class="standard strict inline">
			<a href="img/sqlite-20/add-row.png"><img src="img/sqlite-20/add-row.png" alt="[Bild: SQLite Manager Add Rows]"></a>
			<figcaption>Lägga till rader i tabellen via knappen "Add".</figcaption>
		</figure>

		<p>Så här ser det ut när de tre båtarna finns inlagda i tabellen.
		
		<figure class="standard strict inline">
			<a href="img/sqlite-20/rows-added.png"><img src="img/sqlite-20/rows-added.png" alt="[Bild: SQLite Manager Rows Added]"></a>
			<figcaption>Så här ser en tom tabell ut, ännu finns inga rader av värden i tabellen.</figcaption>
		</figure>

		<p>Som du kanske märkte så använde sig verktyget återigen av SQL-kod för att lägga till rader i tabellen.
		SQL är centralt när man pratar om databaser (relationsdatabaser). SQL-koden för att lägga till dessa 3 rader följer.
		
		<blockquote class=code>
INSERT INTO "Jetty" VALUES(1,'Buster XXL','Yamaha 115hk',635,240,'Adam');
INSERT INTO "Jetty" VALUES(2,'Buster M','Yamaha 40hk',460,186,'Berit');
INSERT INTO "Jetty" VALUES(3,'Linder 440','Tohatsu 4hk',431,164,'Ceasar');
		</blockquote>
		
		<p>Testa att klicka runt på följande knappar "Duplicate", "Edit" och "Delete". Se vad som händer
		och studera SQL-koden som används.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s5">
		<h2>5. Visa rader i en tabell med <code>SELECT</code></h2>
		
		<p><code>SELECT</code> används för att välja ut rader och kolumner från en tabell. Det går att
		kombinera olika sökvillkor för att visa ett subset av tabellens innehåll.

		<p>Börja med att klicka på knappen "Search", välj att visa "alla båtar vars längd är större än 4.5m".		

		<p>Gör en ny sökning och välj att visa "alla båtar som heter 'Buster' i namnet".
		
		<p> Gör ytterligare en sökning där du kombinerar ovanstående sökvillkor och lägger till villkoret 
		"båtens bredd är mindre än 2m". Rätt svar på frågan är "Buster M", det finns endast en båt som matchar detta villkor.

		<figure class="standard strict inline">
			<a href="img/sqlite-20/search.png"><img src="img/sqlite-20/search.png" alt="[Bild: SQLite Manager Search]"></a>
			<figcaption>Sök ut rader i tabellen som matchar vissa sökvillkor.</figcaption>
		</figure>

		<p>Hur ser då en <code>SELECT</code>-fråga ut för att göra samma urval. Ett kort och snabbt svar är följande:

		<blockquote class=code>
SELECT * FROM Jetty
WHERE
	boatType LIKE "%Buster%" AND
	boatLength > 450 AND
	boatWidth < 200;
		</blockquote>

		<p>Klicka på fliken "Execute SQL" och testa ovanstående sats. Får du det förväntade svaret?
		
		<figure class="standard strict inline">
			<a href="img/sqlite-20/select.png"><img src="img/sqlite-20/select.png" alt="[Bild: SQLite Manager Select]"></a>
			<figcaption><code>SELECT</code>-satsen ger samma svar.</figcaption>
		</figure>

		<p>Låt oss bryta ned <code>SELECT</code>-satsen i dess beståndsdelar för att bättre förstå vad den gör.
		
		<p><code>SELECT * FROM Jetty</code> säger att "välj alla kolumner från tabellen Jetty". Pröva att
		byta ut <code>*</code> mot namnet på två av kolumnerna, tex <code>boatType, ownerName</code> och exekvera frågan igen. 

		<figure class="standard strict inline">
			<a href="img/sqlite-20/select1.png"><img src="img/sqlite-20/select1.png" alt="[Bild: SQLite Manager Select again]"></a>
			<figcaption>Välj vilka kolumner som skall visas i resultatet.</figcaption>
		</figure>

		<p>Om du vill ha bättre namn på kolumn-rubrikerna så kan du ange det med <code>AS</code>-konstruktionen.
		Testa att ändra din fråga till följande: <code>SELECT boatType AS Typ, ownerName AS Namn FROM Jetty</code>.
		Titta på kolumnrubrikerna i bilden så ser du att de ändrades.

		<figure class="standard strict inline">
			<a href="img/sqlite-20/select2.png"><img src="img/sqlite-20/select2.png" alt="[Bild: SQLite Manager Select again2]"></a>
			<figcaption>Byt namn på kolumnrubrikerna med <code>AS</code>.</figcaption>
		</figure>

		<p>I <code>WHERE</code>-delen görs urvalet av raderna. Endast de rader som matchar <code>WHERE</code>-kriteriat kommer
		att visas i resultatet. Testa att uppdatera <code>WHERE</code>-delen med följande satser.
		
		<ul>
			<li><code>SELECT * FROM Jetty</code> (Ta bort samtliga villkor för att visa alla rader i tabellen)
			<li><code>WHERE ownerName = "Adam"</code> (Visa båtar som Adam äger)
			<li><code>WHERE ownerName LIKE "%a%"</code> (Visa båtar som ägs av någon som har ett 'a' i sitt namn)
			<li><code>WHERE boatWidth = 164</code> (Visa båtar vars bredd är 164cm)
			<li><code>WHERE boatWidth >= 164 AND boatWidth <= 186</code> (Visa båtar vars bredd är större än/lika med 164cm och mindre än/lika med 186cm)
			<li><code>WHERE (boatWidth >= 164 AND boatWidth <= 186) OR boatWidth = 240</code> (samma som ovan men visar även båtar vars bredd är 240cm)
		</ul>

		<figure class="standard strict inline">
			<a href="img/sqlite-20/select3.png"><img src="img/sqlite-20/select3.png" alt="[Bild: SQLite Manager Select again3]"></a>
			<figcaption>Ett "krångligt" sätt att visa alla rader i tabellen i form av en lite mer avancerad konstruktion med <code>AND</code>, <code>OR</code> och paranteser.</figcaption>
		</figure>

		<p>Att välja ur värden från tabeller är kärnan i databasbearbetning. Det är bra att ha koll på sina
		<code>SELECT</code>-satser.
			
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s6">
		<h2>6. Aggregerande funktioner</h2>
		
		<p>SQLite har ett par inbyggda aggregerande funktioner.
		
		<p><a href="http://www.sqlite.org/lang_aggfunc.html">http://www.sqlite.org/lang_aggfunc.html</a>
		
		<p>Med dessa funktioner kan man tex beräkna antalet rader i en tabell, medelvärdet eller summan
		av en kolumn eller max/min värde i en kolumn.
		
		<p>Testa följande SQL satser och se vilket resultat du får.
	
		<ul>
			<li><code>SELECT COUNT(jettyPosition) FROM Jetty</code> (Räkna antalet rader i tabellen)
			<li><code>SELECT MAX(boatLength) FROM Jetty</code> (Visa största båtlängden)
			<li><code>SELECT MIN(boatWidth) FROM Jetty</code> (Visa den minsta bredden)
			<li><code>SELECT SUM(boatWidth) FROM Jetty</code> (Visa summan av samtliga båtars bredd)
			<li><code>SELECT AVG(boatLength) FROM Jetty</code> (Visa medellängden av samtliga båtar)
		</ul>

		<figure class="standard strict inline">
			<a href="img/sqlite-20/aggregate.png"><img src="img/sqlite-20/aggregate.png" alt="[Bild: SQLite Manager Aggregate]"></a>
			<figcaption>Beräkna medellängden av alla båtar med aggregat-funktionen <code>AVG()</code>.</figcaption>
		</figure>

		<p>Aggregat-funktioner är ett viktigt verktyg för databasprogrammeraren.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s7">
		<h2>7. Inbyggda funktioner</h2>
		
		<p>SQLite har inbyggda funktioner som kan hjälpa vid beräkningar eller för att förbereda resultatet
		för presentation.
		
		<p><a href="http://www.sqlite.org/lang_corefunc.html">http://www.sqlite.org/lang_corefunc.html</a>
		
		<p>Med dessa funktioner kan du bearbeta datamängden för att få bra rapporter. Ibland är det 
		bättre att bearbeta datamängden via SQL och dess funktioner, istället för att låta PHP bearbeta datat.
		Försök att använda SQL för att göra så korrekta rapporter som möjligt, det minimerar kodandet i PHP
		och är ofta ett effektivt sätt att programmera.
		
		<p>Testa följande SQL satser och se vilket resultat du får.
	
		<ul>
			<li><code>SELECT round(AVG(boatLength), 2) FROM Jetty</code> (Visa medellängden av samtliga båtar, avrunda till två decimaler)
			<li><code>SELECT length(ownerName) FROM Jetty</code> (Räkna antalet tecken i namnet)
			<li><code>SELECT random()</code> (Välj ett slumpvärde)
			<li><code>SELECT hex(random())</code> (Välj ett slumpvärde och visa som hexadecimalt tal)
			<li><code>SELECT upper(ownerName) FROM Jetty</code> (Omvandla till stora bokstäver)
		</ul>

		<figure class="standard strict inline">
			<a href="img/sqlite-20/functions.png"><img src="img/sqlite-20/functions.png" alt="[Bild: SQLite Manager Functions]"></a>
			<figcaption>Omvandla alla namn till stora bokstäver med inbyggda funktionen <code>upper()</code>.</figcaption>
		</figure>

		<p>Inbyggda funktioner är viktiga för att kunna bearbeta och komplettera resultatet från
		<code>SELECT</code>-satserna.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s8">
		<h2>8. Import och export av data</h2>
		
		<p>Det går att exportera hela databasen till en textfil bestående av SQL-kommandon. Det är bra om
		man vill ta backup eller om man vill dela med sig av sin data. 
		
		<p>Välj fliken "Structure" och klicka på knappen "Export" eller välj fliken "Export Wizard".
		Välj Att exportera din tabell som SQL och klicka för checkboxen "Include CREATE TABLE statement".
		Klicka "OK" och spara filen på ditt skrivbord. 

		<figure class="standard strict inline">
			<a href="img/sqlite-20/export.png"><img src="img/sqlite-20/export.png" alt="[Bild: SQLite Manager Export]"></a>
			<figcaption>Exportera databasen som SQL-kommandon.</figcaption>
		</figure>

		<p>Innehållet i min egen fil följer (observera att jag har bytt namn på
		min tabell från "Jetty" till "Jetty_mos"). <a href="example/sqlite/Jetty_mos.sql">Du kan även ladda ned en kopia av filen</a>
		(högerklicka och välj "Spara länk som").
		
		<blockquote class=code>
DROP TABLE IF EXISTS "Jetty_mos";
CREATE TABLE "Jetty_mos" (
"jettyPosition" INTEGER PRIMARY KEY  NOT NULL  UNIQUE , 
"boatType" VARCHAR(20) NOT NULL , "boatEngine" VARCHAR(20) NOT NULL , 
"boatLength" INTEGER, 
"boatWidth" INTEGER, 
"ownerName" VARCHAR(20)
);
INSERT INTO "Jetty_mos" VALUES(1,'Buster XXL','Yamaha 115hk',635,240,'Adam');
INSERT INTO "Jetty_mos" VALUES(2,'Buster M','Yamaha 40hk',460,186,'Berit');
INSERT INTO "Jetty_mos" VALUES(3,'Linder 440','Tohatsu 4hk',431,164,'Ceasar');
		</blockquote>
		
		<p>Testa nu att importera min exporterade data in i din egen databas. Spara ned ovanstående data
		i en egen fil och döp den till <code>Jetty_mos.sql</code>.
		
		<p>Välj "Import" från toolbaren, eller välj fliken "Import Wizard". Välj "SQL", peka ut filen
		och klicka "OK".
	
		<figure class="standard strict inline">
			<a href="img/sqlite-20/import.png"><img src="img/sqlite-20/import.png" alt="[Bild: SQLite Manager Import]"></a>
			<figcaption>Importera en tabell med värden via SQL-kommandon.</figcaption>
		</figure>

		<p>Sådär, nu finns både tabell och värden i min (och i din) databas igen. Precis som om jag skapat dem själv.
		Nåja, typ.

		<p>Denna typen av import och export av värden i en databas är bra att ha koll på. Det visar 
		hur man kan utbyta information med ren SQL i text-filer.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s9">
		<h2>9. Flytta databas mellan maskiner</h2>
		
		<p>En fördel med SQLite är att den är just en filbaserad databas. Det är enkelt att flytta hela databasen 
		till en annan plats eller dator. Ta och kopiera din databas och lägg kopian den i en katalog
		så att din lokala webbserver kommer åt den.
		
		<p>Nu är vi redo att börja leka lite med PHP för att komma åt databasen.
	
<!--
		<figure class="standard strict inline">
			<a href="img/sqlite-20/move-to-server.png"><img src="img/sqlite-20/move-to-server.png" alt="[Bild: SQLite Manager Move To Server]"></a>
			<figcaption>Flytta (kopiera) databasen till ssh.student.bth.se.</figcaption>
		</figure>

		<p>Nu finns databasen tillgänglig på webbservern, men hur kommer vi nu åt den? 
-->		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s10">
		<h2>10. PHP och SQLite</h2>
		
		<p>Via PHP kan man komma åt en SQLite-databas. Det finns olika PHP-interface för att jobba
		mot SQLite. Du kan läsa mer om dessa i PHP-manualen (översiktligt).
		
		<blockquote class=links>
			<a href="http://php.net/manual/en/book.sqlite.php">http://php.net/manual/en/book.sqlite.php</a><br>
			<a href="http://php.net/manual/en/book.sqlite3.php">http://php.net/manual/en/book.sqlite3.php</a><br>
			<a href="http://php.net/manual/en/ref.pdo-sqlite.php">http://php.net/manual/en/ref.pdo-sqlite.php</a><br>
		</blockquote>				
		
		<p>I denna kursen kommer vi att använda interfacet PDO för att jobba mot SQLite. PHP Data Objects (PDO) är ett generiskt gränssnitt för att
		jobba mot olika databaser. 
		
		<p>Med lite PHP-kod kan du kontrollera om din PHP-installation har stöd för PDO och SQLite.
		Lägg följande kod i en PHP-fil och kör den på din webbserver för att se om det finns stöd för PDO
		och SQLite.

<?php
$code = <<<EOD
if(class_exists('PDO') && in_array("sqlite", PDO::getAvailableDrivers())) {
	echo "<p style='color:green'>sqlite PDO driver IS enabled";
} else {
	echo "<p style='color:red'>sqlite PDO driver IS NOT enabled";
}
EOD;
?>
		
		<blockquote class=code>
<?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?>
		</blockquote>		
		
		<p>Ovanstående kod finns med som en del av Utility/check_php_config.php. Det finns
		installerad på www.student.bth.se och på dbwebb.se. Du kan testköra dem här:
		
		<blockquote class=link>
			<a href="http://www.student.bth.se/~mos/utility/check_php_config.php">http://www.student.bth.se/~mos/utility/check_php_config.php</a><br>
			<a href="http://dbwebb.se/utility/check_php_config.php">http://dbwebb.se/utility/check_php_config.php</a><br>
		</blockquote>		
		
		<p>WAMPServer (Windows) och MAMP (Mac) har SQLite enablad från början.

		<p>Vi dubbelkollar konfigurationen på WAMPServer och Windows.

		<figure class="standard strict inline">
			<a href="img/sqlite-20/pdo-sqlite-enabled-wamp.png"><img src="img/sqlite-20/pdo-sqlite-enabled-wamp.png" alt="[Bild: SQLite enabled on WAMPServer]"></a>
			<figcaption>PDO och SQLite är enablat i WAMPServer (Windows)</figcaption>
		</figure>

		<p>Lika bra att dubbelkolla konfigurationen på MAMP och MacOS också.

		<figure class="standard strict inline">
			<a href="img/sqlite-20/pdo-sqlite-enabled-mamp.png"><img src="img/sqlite-20/pdo-sqlite-enabled-mamp.png" alt="[Bild: SQLite enabled on MAMP]"></a>
			<figcaption>PDO och SQLite är enablat i MAMP (Mac)</figcaption>
		</figure>

		<p>Fint, PHP, PDO och SQLite verkar vara en kombination som kan fungera. Kolla din egna maskin så att allt är ok.
		Använd ovanstående PHP-kod för att kontrollera att PHP PDO och SQLite är installerat.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s11">
		<h2>11. PHP och PDO</h2>
		
		<p>PHP Data Objects (PDO) är ett interface för att accessa databaser i PHP. Varje databas-driver
		som implementerar ett PDO-interface kan nås via PDO. SQLite har ett sådant PDO-interface.
		
		<p>Läs kort introduktionen om PDO <a href="http://www.php.net/manual/en/intro.pdo.php">http://www.php.net/manual/en/intro.pdo.php</a>.
		
		<p>En feature som stöds av många databaser är "Prepared Statements". Med dessa är det enkelt 
		att ställa SQL-frågor till databasen. Prepared statements har också ett säkert sätt att 
		hantera argument, ett sätt som undviker vanliga säkerhetshål som SQL injections.
		
		<p><a href="http://www.php.net/manual/en/pdo.prepared-statements.php">Läs stycket om prepared statements och studera översiktligt exemplen</a>.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s12">
		<h2>12. SQL injections</h2>

		<p>Låt oss säga några ord om säkerhetshål och SQL injections innan vi fortsätter. 
		
		<figure class="standard strict inline">
			<a href="http://2.bp.blogspot.com/__5n6ix43i0g/SvktSAi22MI/AAAAAAAAAgM/sJcRtgAvDpQ/s400/exploits_of_a_mom.png"><img src="http://2.bp.blogspot.com/__5n6ix43i0g/SvktSAi22MI/AAAAAAAAAgM/sJcRtgAvDpQ/s400/exploits_of_a_mom.png" alt="[Bild: SQL injections strip]"></a>
			<figcaption>Strip om SQL injections från <a href="http://xkcd.com/327/">http://xkcd.com/327/</a>.</figcaption>
		</figure>

		<p>SQL injections är ett sätt för en "cracker" att "bryta sig in" i en webbapplikation
		genom att via URL:en, eller formulär, modifiera SQL-satserna. Ett sådant säkerhetshål 
		kan ge en inbrytare tillgång till alla användare och lösenord i en databas.
		
		<p><a href="http://en.wikipedia.org/wiki/SQL_injection">Läs lite snabbt om SQL Injections på Wikipedia</a>.

		<p>I bloggen finns en <a href="http://db-o-webb.blogspot.com/2009/11/sakerhet-i-webbapplikationer-undvik-sql.html">kortare artikel om SQL injections och hur man kan skydda sig mot 
		dem i PHP</a>.

		<p>Om du är intresserad av att se hur det går till i praktiken, när webbplatser crackas och
		resultatet publiceras, så surfar du in till flashback.org. Där finns ett <a href="https://www.flashback.org/f16">forum
		där information (IT-säkerhet) om crackade webbplatser och listor med lösenord, användarid och mailadresser
		publiceras</a>.

		<p>PDO och prepared statements är en teknik som undviker SQL injections. Det kan du läsa
		om i <a href="http://www.php.net/manual/en/pdo.prepared-statements.php">stycket om prepared statements</a>.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s13">
		<h2>13. Koppla ett PHP-skript till en SQLite databas via PDO</h2>
		
		<p>Vi gör ett minsta möjliga skript som skapar en SQLite databas via PHP. Därefter fyller vi på med kod för
		att skapa en tabell i databasen. 
		
		<p><a href="example/sqlite/sqlite1.php">Exempel för att skapa en databas med en tabell</a>

		<p>Studera källkoden för exemplet och försök förstå vad den gör. Läs kommentarerna. Försök 
		förstå flödet i filen. Kopiera koden till din egna fil och gör ett eget exempel.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s14">
		<h2>14. Vanliga felmeddelanden</h2>
		
		<p>I exemplet ovan används exception-hantering om något går fel. Det betyder att ett 
		felmeddelande "kastas" och hanteras av närmaste felhanterare. I exemplet finns det en global
		felhanterare <code>exceptionHandler()</code> som fångar dessa fel och skriver ut dess feltext.
		Därefter avbryts skriptet.
		
		<p>Denna exception-hantering är vanlig även i andra språk, till exempel i Java och C++.
		Ofta hanteras koden inom ett try-block och ett catch-block, men i våra exempel använder
		vi endast en global exception-hanterare.
		
		<p>Här följer ett par exempel på vanliga felkoder som kan uppkomma i samband med SQLite.
		
		<p><a href="example/sqlite/sqlite2.php">Försöker skapa en databasfil men har inte rättigheter på katalogen (ändra rättigheter till 777)</a>

		<p><a href="example/sqlite/sqlite5.php">Försöker skriva till en databas-fil som är skrivskyddad (ändra rättigheter till 666)</a>

		<p><a href="example/sqlite/sqlite3.php">Fel i SQL-satsen (ändra SQL-koden och/eller testkör den i Firefox SQLite Manager)</a>

		<p><a href="example/sqlite/sqlite4.php">Försöker skapa en tabell som redan finns (radera tabellen med DROP eller använd <code>CREATE TABLE IF NOT EXISTS</code></a>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s15">
		<h2>15. Skapa nya rader i tabellen med <code>INSERT</code></h2>
		
		<p>Vi utökar testskriptet med att lägga in ett antal värden i databasen med SQL-satsen <code>INSERT</code>.
		
		<p><a href="http://www.sqlite.org/lang_insert.html">Läs om SQL-satsen <code>INSERT</code> på www.sqlite.org</a>

		<p><a href="example/sqlite/sqlite6.php">Exempel för att lägga till rader i en tabell</a>

		<p>Studera källkoden för exemplet och försök förstå vad den gör. Läs kommentarerna. Försök 
		förstå flödet i filen. Kopiera koden till din egna fil och gör ett eget exempel.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s16">
		<h2>16. Ta bort rader med <code>DELETE</code></h2>
		
		<p>Vi utökar testskriptet med att ta bort samtliga rader med SQL-satsen <code>DELETE</code>.
		Det innebär att vi tömmer tabellen på värden innan vi börjar lägga in värden. 
		
		<p><a href="http://www.sqlite.org/lang_delete.html">Läs om SQL-satsen <code>DELETE</code> på www.sqlite.org</a>

		<p><a href="example/sqlite/sqlite7.php">Exempel för att ta bort rader från en tabell</a>

		<p>Studera källkoden för exemplet och försök förstå vad den gör. Läs kommentarerna. Försök 
		förstå flödet i filen. Kopiera koden till din egna fil och gör ett eget exempel.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s17">
		<h2>17. Visa innehållet i tabellen med <code>SELECT</code></h2>
		
		<p>Vi fortsätter med att utöka testskriptet. Nu vill vi visa värden från tabellen med hjälp
		<code>SELECT</code>. 

		<p><a href="http://www.sqlite.org/lang_select.html">Läs om SQL-satsen <code>SELECT</code> på www.sqlite.org</a>

		<p><a href="example/sqlite/sqlite8.php">Exempel för att visa alla rader från en tabell</a>

		<p><a href="example/sqlite/sqlite9.php">Uppdaterat exempel som skriver ut resultatet i en <code>&lt;table&gt;</code></a>

		<p><a href="example/sqlite/sqlite10.php">Exempel som skriver ut rader som matchar en viss söksträng</a>

		<p>Studera källkoden för exemplet och försök förstå vad den gör. Läs kommentarerna. Försök 
		förstå flödet i filen. Kopiera koden till din egna fil och gör ett eget exempel.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s18">
		<h2>18. Uppdatera rader och värden med <code>UPDATE</code></h2>
		
		<p>Vi förändrar testskriptet för att uppdatera värden i raderna med <code>UPDATE</code>. Vi 
		skapar en ny databas med några extra kolumner i tabellen. Vi skapar en
		status-kolumn där man kan skriva lite status om båten. Vi lägger till en kolumn som anger
		vem som ändrade statusraden och vi lägger till en kolumn med en datum för när statusraden senast
		ändrades.
		
		<p><a href="http://www.sqlite.org/lang_update.html">Läs om SQL-satsen <code>UPDATE</code> på www.sqlite.org</a>

		<p><a href="example/sqlite/sqlite12.php">Visa värden i den nya databasen och uppdatera statusraden</a>

		<p>Studera källkoden för exemplet och försök förstå vad den gör. Läs kommentarerna. Försök 
		förstå flödet i filen. Kopiera koden till din egna fil och gör ett eget exempel.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s19">
		<h2>19. Ett komplett exempel med formulär och en SQLite databas</h2>
		
		<p>Sådär, redo för ett exempel där vi använder allt vi pratat om hittills? Jag tar och uppdaterar
		mitt form-exempel. Där använde jag tidigare filhantering. Låt se hur det kan se ut om
		vi byter ut filhanteringen mot SQL, PDO och SQLite.
		
		<p><a href="forms.php#klar">Det kompletta form-exemplet där formulärdata sparades på disk</a>

		<p><a href="example/sqlite/sqlite13.php">Form-exemplet, nu med SQL, PDO och SQLite</a>

		<p>Studera källkoden för exemplet och försök förstå vad den gör. Läs kommentarerna. Försök 
		förstå flödet i filen. Studera koden som gör jobbet mot databasen och studera koden som jobbar mot filer (bortkommenterad i exemplet).

		<p><a href="source.php?dir=example/sqlite&file=sqlite13.php">Källkod för exemplet med PDO, SQL och SQLite kontra filhantering</a>

		<p>Vilken kod tycker du verkar enklast att förstå och vilken verkar effektivast att använda?

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s20">
		<h2>20. Andas</h2>
		
		<p>Ta ett djupt andetag. Du har precis gått igenom grunderna i SQL, SQLite, PHP PDO och 
		Prepared Statements. Det är en hel del som ska falla på plats. Iallafall om detta var
		en av dina första bekantskaper med databaser. Andas. Slappna av. Var nöjd.

		<p>Bästa sättet att genomföra övningen var att du själv gjorde alla stegen och själv kopierade över koden till ett eget fungerande exempel.
		Läsa är bra men man måste göra själv, "kan själv", för att lära sig.
		
		<p>Om detta verkar svårt och kryptiskt så föreslår jag att du låter det vara en dag eller två.
		Kom sedan tillbaka hit och skumma igenom artikeln igen. Nu har du iallafall
		detta dokument som du kan använda som uppslagsverk framöver.
		
		<p>Bra jobbat!

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>



<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
<!--
	<section id="s10">
		<h2>10. Textbaserat gränssnitt till SQLite</h2>
		
		<p>SQLite har ett textbaserat gränssnitt där all kommunikation med databasen kan ske.
		
		<p>Om du har tillgång till en xterminal (xterm på Mac eller Linux/Unix) eller putty (Windows)
		så kan du logga in på ssh.student.bth.se. Om du ännu inte har installerat xterm/putty, och vill göra det, 
		så kan du läsa lite om det här, <a href="http://dbwebb.se/oophp/install_lab_environment">http://dbwebb.se/oophp/install_lab_environment</a>, läs stycket om ssh-klienter.

		<p>Om du nu har tillgång till xterm/putty, och har loggat in på ssh.student.bth.se, så kan du
		komma åt databasen med kommandot <code>sqlite3 boats.sqlite</code>. Se nedanstående bild för detaljer.

		<figure class="standard strict inline">
			<a href="img/sqlite-20/cu-ssh_student.png"><img src="img/sqlite-20/cu-ssh_student.png" alt="[Bild: SQLite cu-ssh.student]"></a>
			<figcaption>Den textbaserade verktyget för att jobba med SQLite. Visa den inbyggda hjälpen med <code>.help</code></figcaption>
		</figure>

		
		Skriv in <code>sqlite3 test.db</code> för att skapa en ny databas. Använd den inbyggda hjälpen för 
		att se vilka funktioner som finns tillgängliga. Skriv kommandot <code>.help</code> för att visa 
		den inbyggda hjälpen.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>
-->





<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
	<?php include("byline.php"); ?>
	
</article>

</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

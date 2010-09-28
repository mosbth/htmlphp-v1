<?php
$title = "20 steg för att komma igång med SQLite";
$bodyId = "sqlite20";
include("header.php");
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
		<h4>PHP-manualen, din bästa vän</h4>
		<p>Lär känna PHP-manualen och lär dig hitta i den. Både i innehållsförteckningen och via sökfunktionen.
		Lär dig hur de olika funktionerna beskrivs
		och manualen kommer till slut att bli din bästa vän och nästan den enda resursen du behöver
		för ditt PHP-programmerande.</p>
		<p><a href="http://php.net/manual/en/">PHP Manualen</a>
		</p>
	</aside>
</aside>

<!-- - - - - - - - - - - - - - - - - - article      - - - - - - - - - - - - - - - - - -->
<article>
	<header id="start">
		<h1>20 steg för att komma igång med SQLite</h1>

			<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-09-29">29:e 
			september 2010</time>

			<p class="ingress">En introduktion till att komma igång med PHP på 20 steg.
			
			<ol>
				<li><a href="#s1">Om PHP</a>
				<li><a href="#s2">PHP som skriptspråk i HTML</a>
				<li><a href="#s3">PHP som programmeringssspråk tillsammans med HTML</a>
				<li><a href="#s4">Skriv ut text med <code>echo</code></a>
				<li><a href="#s5">Utskrift av felmeddelande</a>
				<li><a href="#s6">Kommentarer</a>
				<li><a href="#s7">Variabler och typer</a>
				<li><a href="#s8">Uttryck och operatorer</a>
				<li><a href="#s9">Villkorssatser</a>
				<li><a href="#s10">Loopar</a>
				<li><a href="#s11">Arrayer</a>
				<li><a href="#s12">Filer och <code>include()</code></a>
				<li><a href="#s13">Fördefinerade variabler, <code>$_SERVER</code>, <code>$_GET</code>, <code>$_POST</code>, <code>$_SESSION</code></a>
				<li><a href="#s14">Inbyggda funktioner</a>
				<li><a href="#s15">Funktioner</a>
				<li><a href="#s16">Klasser och Objekt</a>
				<li><a href="#s17">Filhantering</a>
				<li><a href="#s18">Databaser</a>
				<li><a href="#s19">Vad är installerat med <code>phpinfo()</code></a>
				<li><a href="#s20">Grön programmering och kodstandarder</a>
			</ol>
			
			<p>Läs mer när du väl kommit igång. 
			
			<ul>
				<li><a href="#form">PHP och HTML-formulär</a>
			</ul>
	
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
		nya databaser, skapa tabeller, editera data i tabellerna och söka. 
		
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
		vilken kolumn som gör raden unik. En primärnyckel kan också vara en kombination av flera kolumner.
		
		<p>Låt oss testa lite genom att göra en databas till den lokala båtklubben. Skapa en ny databas (<code>boats.sqlite</code>) med en tabell
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
		
		<p>Klicka på "Add" för att lägga till en ny rad. Du behöver inte ange en siffra för "jettyPosition", det automatgenereras
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

		<p>Hur ser då en <code>SELECT</code>-fråga ut för att göra samma urval. ett kort och snabbt svar är följande:

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
		byta ut <code>*</code> mot namnet på två av kolumnerna, tex <code>boatType, ownerName</code> och exekvera frågan. 

		<figure class="standard strict inline">
			<a href="img/sqlite-20/select1.png"><img src="img/sqlite-20/select1.png" alt="[Bild: SQLite Manager Select again]"></a>
			<figcaption>Välj vilka kolumner som skall visas i resultatet.</figcaption>
		</figure>

		<p>Om du vill ha bättre namn på kolumn-rubrikerna så kan du ange det med <code>AS</code>-konstruktionen.
		Testa att ändra din fråga till följande: <code>SELECT boatType AS Typ, ownerName AS Namn FROM Jetty</code>.

		<figure class="standard strict inline">
			<a href="img/sqlite-20/select2.png"><img src="img/sqlite-20/select2.png" alt="[Bild: SQLite Manager Select again2]"></a>
			<figcaption>Byt namn på kolumnrubrikerna med <code>AS</code>.</figcaption>
		</figure>

		<p>I <code>WHERE</code>-delen görs urvalet av raderna. Endast de rader som matchar <code>WHERE</code>-kriteriat kommer
		att visas i resultatet. Testa att uppdatera <code>WHERE</code>-delen med följande satser, får du förväntat svar?
		
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
			<figcaption>Ett "krångligt" sätt att visa alla rader i tabellen, en lite mer avancerad konstruktion med <code>AND</code>, <code>OR</code> och paranteser.</figcaption>
		</figure>

		<p>Att välja ur värden från tabeller är kärnan i databasbearbetning. Det är bra att ha koll på sina
		<code>SELECT</code>-satser.
			
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s6">
		<h2>6. Aggregerande funktioner</h2>
		
		<p>Låt oss lägga till ett par båtar i tabellen. Du kan använda följande båtar om du vill.
		
		<ul>
			<li>Båt: Buster XXL, motor: Yamaha 115hk, längd: 635, bredd: 240, ägare: Adam
			<li>Båt: Buster M, motor: Yamaha 40hk, längd: 460, bredd: 186, ägare: Berit
			<li>Båt: Linder 440, motor: Tohatsu 4hk, längd: 431, bredd: 164, ägare: Ceasar
		</ul>
		
		<p>Klicka på "Add" för att lägga till en ny rad. Du behöver inte ange en siffra för "jettyPosition", det automatgenereras
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
	<section id="s7">
		<h2>7. Inbyggda funktioner</h2>
		

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s8">
		<h2>8. Import och export av data</h2>
		

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s9">
		<h2>9. Flytta databas mellan maskiner</h2>
		
		<p>Flytta till www.student.bth.se.

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s10">
		<h2>10. Textbaserat gränssnitt till SQLite</h2>
		
		<figure class="standard strict inline">
			<a href="img/sqlite-20/cu-help.png"><img src="img/sqlite-20/cu-help.png" alt="[Bild: SQLite cu-help]"></a>
			<figcaption>Den textbaserade verktyget för att jobba med SQLite. Visa den inbyggda hjälpen med <code>.help</code></figcaption>
		</figure>

		
		<p>SQLite har ett textbaserat gränssnitt där all kommunikation med databasen kan ske.
		Skriv in <code>sqlite3 test.db</code> för att skapa en ny databas. Använd den inbyggda hjälpen för 
		att se vilka funktioner som finns tillgängliga. Skriv kommandot <code>.help</code> för att visa 
		den inbyggda hjälpen.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s11">
		<h2>11. PHP och SQLite</h2>
		
		<p>Olika sätt att komma åt en SQLite databas

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s12">
		<h2>12. PHP och PDO</h2>
		
		<p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s13">
		<h2>13. Koppla ett PHP-skript till en databas</h2>
		
		<p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s14">
		<h2>14. Prepared statements</h2>
		
		<p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s15">
		<h2>15. Välj och presentera data med <code>SELECT</code></h2>
		
		<p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s16">
		<h2>16. Lägg till rader</h2>
		
		<p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s17">
		<h2>17. Ta bort rader</h2>
		
		<p>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s18">
		<h2>18. Ett formulärexempel och en SQLite databas</h2>
		
		<p>





<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
	<?php include("byline.php"); ?>
	
</article>

</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

<?php
$title = "20 steg för att komma igång med PHP";
$bodyId = "guide-php20";
include("header.php");
include("header_guider.php");
?>

<!-- - - - - - - - - - - - - - - - - - wrap whole content - - - - - - - - - - - - - - -->
<div id="wrap">

<!-- - - - - - - - - - - - - - - - - - aside        - - - - - - - - - - - - - - - - - -->
<aside class="right">
	<aside class=box>
		<h4>Använd source.php</h4>
		<p>Vid felsökning av PHP-kod så kan det ibland underlätta om någon kollega kan titta på felet.
		Detta händer om och om igen i dessa kurser och i samtliga fall så gäller att skicka länken 
		till ditt exempel som inte fungerar samt skicka länken till dess källkod. I kurserna används
		ett PHP-skript som heter source.php. Med det kan du visa all källkod i en katalog. Använd det när
		det handlar om felsökning, hjälp och handledning.
		<p><a href="http://dbwebb.se/source">Senaste versionen av source.php på GitHub</a>
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
	<aside class=box>
		<h4>W3Schools hjälper dig på vägen</h4>
		<p>Här finns enkla guider som hjälper dig att komma igång. korta beskrivningar av det viktigaste
		tillsammans med kodexempel. Om du är osäker så ta en titt i W3Schools tutorials och se om de kan hjälpa dig.</p>
		<p><a href="http://w3schools.com/PHP">PHP på W3Schools</a>
		</p>
	</aside>
</aside>

<!-- - - - - - - - - - - - - - - - - - article      - - - - - - - - - - - - - - - - - -->
<article>
	<header id="start">
		<h1>20 steg för att komma igång med PHP</h1>

			<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-09-20">20:e 
			september 2010</time>

			<p class="ingress">En introduktion till att komma igång med PHP på 20 steg.
			
			<p>Bästa sättet att genomföra övningen är att du själv gör alla stegen och kopierar eller 
			skriver om kodexemplen till ditt egna fungerande exempel. Läsa är bra men man måste göra 
			själv, "kan själv", för att lära sig.
			
			<p><a href="20_steg_for_att_komma_igang_med_php_labb.php">Du kan använda följande övningar (labb) om du vill ha lite praktisk guidning till PHP</a>.
			Svaren till övningarna hittar du i exempelkoden i detta dokument. Om du är praktiskt lagd så kan
			det vara ett bra sätt att utgå i från labben och sedan försöka leta reda på svaren i PHP-20.
			
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
		<h2>1. Om PHP</h2>			
		<p>PHP är ett skriptspråk som främst används tillsammans med webbservrar för att skapa dynamiska
		webbsidor. Läs om PHP och dess historia på Wikipedia.
		
		<blockquote class=links>
			<p><a href="http://en.wikipedia.org/wiki/PHP">http://en.wikipedia.org/wiki/PHP (engelska)</a>
			<p><a href="http://sv.wikipedia.org/wiki/PHP">http://sv.wikipedia.org/wiki/PHP (svenska)</a>
		</blockquote>
		
		<p>Via <a href="http://php.net">php.net</a> går det ladda ned PHP och manualerna. PHP-manualen finns
		online och med hjälp av sökfunktionen går det hitta de funktioner man söker efter. Gör PHP-manualen 
		till en av dina bästa vänner.
		
		<p><a href="http://php.net/manual/en/index.php">PHP-manualens innehållsförteckning</a>

		<p><code>&lt;?php</code> representerar en start-tag för PHP och <code>?&gt;</code> är slut-taggen. 
		Koden mellan taggarna intepreteras av PHP motorn, också kallad Zend Engine. Resultatet från 
		interpreteringen skrivs ut och betraktas vanligen som ren text.

		<p><a href="example/php/php0.php">Se exempel på en väldigt liten php-sida</a>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s2">
		<h2>2. PHP som skriptspråk i HTML</h2>			
		<p>Ett vanligt sätt att börja med PHP är att stoppa in lite skript-taggar här och var i en 
		HTML-sida. Det är så vi använder PHP i denna kursen. Det är främst HTML-koden som bygger upp sidan
		och PHP-skripten stoppas in där det passar. Ett exempel på detta är header-sidan, <code>header.php</code>.
		
		<p><a href="source.php?file=header.php#L1">Exempel på HTML mixat med PHP-skript</a>
		
		<p>Man kan säga att HTML står för strukturen och PHP för viss dynamik.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s3">
		<h2>3. PHP som programmeringsspråk tillsammans med HTML</h2>			
		<p>Ett alternativt sätt att bygga webbapplikationer är att betrakta PHP som ett rent programmeringsspråk 
		och bygga strukturen med PHP för att sedan skriva ut HTML-resultatet.
		
		<p>Ett exempel på detta är <code>source.php</code>, ett PHP-skript som visar innehållet i en katalog och källkoden
		för de filer som finns där. Här används PHP som ett programmeringsspråk för att bygga upp sidan. I
		slutet av skriptet så skrivs HTML-koden ut.
		
		<p><a href="source.php?file=source.php#L1">Exempel på PHP programmering i <code>source.php</code></a>
		
		<p>Vilket är bäst? Ingen aning. Det beror på vad man skall göra. Det beror på helt enkelt. Det är viktigt
		att lära sig båda varianterna så att man kan förstå dess fördelar och nackdelar. I ett jobb som PHP-programmerare
		kommer man stöta på båda varianterna. I htmlphp-kursen används skriptsättet, i de andra kurserna används
		programmeringssättet.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s4">
		<h2>4. Skriv ut text med <code>echo</code></h2>			
		<p>I PHP handlar det mycket om strängar, stränghantering och att skriva ut dem. Studera följande exempel 
		för att se hur <code>echo</code>, <code>printf()</code> och <code>die()</code> används för utskrifter.
		
		<p><a href="example/php/php2.php">Exempel på <code>echo</code> och <code>printf()</code></a>
		<p><a href="example/php/php3.php">Exempel på <code>die()</code></a>

		<p>Använd sökfunktionen i <a href="http://php.net/manual/en/">PHP-manualen</a> för att slå upp respektive funktion.

		<p>Notera att strängar kan vara omringade med antingen " (dubbelfnutt) eller ' (enkelfnutt). Den stora skillnaden
		mellan dessa fnuttar är hur variabler i strängar hanteras. Med dubbelfnuttar skrivs värdet av variabeln ut, med enkelfnutt 
		skrivs texten ut som den är, den tolkas inte som en variabel.
		
		<p>Om du kan andra programmeringsspråk sedan tidigare så kommer du känna igen dig. Framförallt om du kan C eller C++.
		Syntax och semantik är liknande och C-funktioner för utskrifter återfinns i PHP.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s5">
		<h2>5. Utskrift av felmeddelanden</h2>			
		<p>Innan vi skriver någon PHP-kod så är det bäst att sätta på utskriften av felmeddelandena.
		Annars kan vi ägna låååång tid till felsökning. Använd funktionen <code>error_reporting(-1)</code>
		för att ställa in så att alla felutskrifter och varningar skrivs ut.
		
		<p><a href="example/php/php4.php">Sida som genererar felmeddelanden</a>
		
		<p>Felsökning är viktigt. Läs alltid felmeddelandena och försök bli av med dem ett efter ett. 
		Börja alltid från toppen. Studera följande skript, det innehåller ett par vanliga fel. Gör en kopia av dess källkod 
		och rätta koden så att den fungerar.
		
		<p><a href="example/php/php5.php">Sida med ett par vanliga felmeddelande, kan du rätta dem?</a>
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s6">
		<h2>6. Kommentarer</h2>			
		<p>Att kommentera sin kod är bra. Ordning och reda. I PHP finns två olika kommentarsvarianter (samma som i C och C++).
		Konstruktionen <code>//</code> kommenterar resten av raden medans konstruktionen <code>/*</code> innebär
		start på kommentarsstycke som sedan avslutas med <code>*/</code>. Det kan vara bra att använda båda 
		dessa kommentarstyper. 
		
		<p>För min egna del använder jag normalt <code>//</code> för att kommentera i koden.
		När jag felsöker eller vill kommentera bort ett större block av koden så använder jag <code>/* ... */</code>. 

		<p><a href="example/php/php6.php">Sida med olika varianter på kommentarer.</a>
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s7">
		<h2>7. Variabler och typer</h2>			
		<p>Variabler är en lagringsplats för information. Variabler i PHP föregås av ett $-tecken.
		Ett värde i en variabel kan vara av en viss typ. PHP är ett språk som är svagt typat och 
		det är variablens innehåll som anger hur värdet skall tolkas och bestämmer vilken typ det har.
		
		<p>I PHP innebär detta att en sträng kan vara en siffra och en siffra kan adderas till en sträng.
		Detta kan både vara kraftfullt och delvis förvirrande, iallafall om man är van vid starkt typade språk
		där en variabel är av en viss typ och därmed punkt.
		
		<p><a href="example/php/php7.php">Exempel med variabler och typning av dem</a>
		
		<p>I PHP-manualen finns ett stycke som beskriver hur variabler fungerar och vilka olika typer som finns
		att tillgå.
		
		<blockquote class=links>
			<p><a href="http://php.net/manual/en/language.types.intro.php">PHP-manualen om typer</a>
			<p><a href="http://php.net/manual/en/language.variables.basics.php">PHP-manualen om variabler</a>
		</blockquote>		

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s8">
		<h2>8. Uttryck och operatorer</h2>			
		<p>Uttryck är en grundsten i de flesta programmeringsspråk såväl som i PHP. Nästan allt som skrivs 
		är ett uttryck. Om du vill lägga ihop värdet av två variabler så är det ett uttryck och anropar
		du en funktion så är det ett uttryck.
		
		<p>I samband med uttrycken så kan operatorer användas. En operator kan till exempel vara tilldelningsoperatorn (=)
		eller operatorer för addition (+) eller subtraktion (-).
		
		<p><a href="example/php/php8.php">Exempel med uttryck och operatorer</a>
		
		<p>I PHP-manualen finns ett stycke som beskriver i detalj beskriver uttryck och operatorer.
		
		<blockquote class=links>
			<p><a href="http://php.net/manual/en/language.expressions.php">PHP-manualen om uttryck (expressions)</a>
			<p><a href="http://php.net/manual/en/language.operators.php">PHP-manualen om operatorer (operators)</a>
		</blockquote>		

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s9">
		<h2>9. Villkorssatser</h2>			
		<p>If-satser används för att testa villkor, <em>"om ett villkor är uppfyllt så gör följande annars gör något annat"</em>.
		<p>Med switch-case-satser kan ett uttryck testas mot flera värden.
		
		<p><a href="example/php/php9.php">Exempel med villkorssatser</a>
		
		<p>I PHP-manualen finns ett stycke som beskriver PHP och dess kontrollstrukturer.
		
		<blockquote class=links>
			<p><a href="http://php.net/manual/en/control-structures.if.php">PHP-manualen med <code>if</code></a>
			<p><a href="http://php.net/manual/en/control-structures.switch.php">PHP-manualen med <code>switch</code></a>
		</blockquote>		

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s10">
		<h2>10. Loopar</h2>			
		<p>Det finns både while, do-while och for-loopar i PHP.
		
		<p><a href="example/php/php10.php">Exempel med loopar</a>
		
		<p>Liksom if-satser och switch-satser så är loopar definerade som kontrollstrukturer i PHP.
		
		<blockquote class=links>
			<p><a href="http://php.net/manual/en/control-structures.for.php">PHP-manualen med <code>for</code></a>
			<p><a href="http://php.net/manual/en/control-structures.while.php">PHP-manualen med <code>while</code></a>
			<p><a href="http://php.net/manual/en/control-structures.do.while.php">PHP-manualen med <code>do-while</code></a>
		</blockquote>		


		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s11">
		<h2>11. Arrayer</h2>			
		<p>Arrayer är en kraftfull konstruktion i PHP. Det fungerar som en lista, eller mängd av värden.
		Lär dig använda arrayer och du kommer spara mängder av tid och kodrader.
		
		<p><a href="example/php/php11.php">Exempel med arrayer</a>
		
		<p>Studera manualstycket om arrayer och se vilka inbyggda funktioner som finns till stöd när du jobbar med arrayer.
		
		<blockquote class=links>
			<p><a href="http://php.net/manual/en/book.array.php">PHP-manualen med arrayer</a>
		</blockquote>		


		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s12">
		<h2>12. Filer och <code>include()</code></h2>			
		<p>När en fil blir för stor så är det dags att dela upp den i mindre filer. Det är ett bra sätt
		att strukturera sin kod och underlättar återanvändning. En fil blir en modul av kod. Ett exempel 
		på hur uppdelningen av kod kan fungera är style-väljaren. Koden för style-väljaren ligger i en
		fil och det räcker att inkludera den filen för att få med dess funktion i en webbsida.
		
		<p><a href="source.php?dir=&amp;file=header.php#L21">Se hur stilväljaren inkluderas i filen <code>header.php</code> (rad 21)</a> och
		<a href="source.php?dir=&amp;file=header.php#L53">hur den används längre ned i filen (rad 53)</a>
		<p><a href="source.php?dir=&amp;file=choose_style.php">Se källkoden för stilväljaren</a>
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s13">
		<h2>13. Fördefinerade variabler, <code>$_SERVER</code>, <code>$_GET</code>, <code>$_POST</code>, <code>$_SESSION</code></h2>			
		<p>Det finns ett antal fördefinerade variabler i PHP, ett par av dem ligger i gränslandet mellan 
		webbservern och PHP-koden.
		
		<p><code>$_SERVER</code>, innehåller information om själva http-requesten, själva anropet till 
		webbsidan.

		<p><a href="example/php/php12.php">Se exempel på utskrift av <code>$_SERVER</code></a>

		<p><code>$_SESSION</code>, innehåller information om det som finns lagrat i sessionen. Sessionsvariablen kan du använda för att lagra information 
		mellan anropen till webbsidorna. Du kan läsa mer om <a href="http://php.net/manual/en/book.session.php">sessionshantering i manualen</a>.

		<p><a href="example/php/php13.php">Se exempel på utskrift av <code>$_SESSION</code></a>

		<p>Om sessionsvariabeln inte innehåller något så kan du byta style med styleväljaren och sedan köra exemplet igen.
		Då kommer du att se stylens namn i sessionen. Testa även att göra reload på exempelsidan så ser du hur variabelns värde ökar.
		
		<p><code>$_GET</code> och <code>$_POST</code> innehåller formulärdata som postats via ett formulär eller
		skickats via urlen.

		<p><a href="http://dbwebb.se/htmlphp/mom05/selfsubmit/">Se exempel på formulär med <code>$_GET</code> och <code>$_POST</code></a>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s14">
		<h2>14. Inbyggda funktioner</h2>			
		<p>Det finns ett stort antal inbyggda funktioner i PHP. Manualsidan för <a href="http://php.net/manual/en/funcref.php">"Function Reference"</a> 
		ger en översikt.
		
		<p><a href="example/php/php14.php">Se exempel på inbyggda funktioner för stränghantering</a>

		<p><a href="http://php.net/manual/en/book.strings.php">Stränghantering har ett eget stycke i manualen</a>.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s15">
		<h2>15. Funktioner</h2>			
		<p>Ett bra sätt att strukturera sin kod är att dela in den i funktioner. Funktioner kan ta
		argument och returnera värden. En funktion kan även ta in-argument och ändra dess innehåll, 
		så kallade in/out-argument eller skicka-argument-via-referens.
		
		<p><a href="example/php/php15.php">Se exempel på funktioner</a>

		<p><a href="http://php.net/manual/en/language.functions.php">Läs om funktioner och argument i manualen</a>.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s16">
		<h2>16. Klasser och Objekt</h2>			
		<p>PHP har stöd för att skapa klasser och objekt. Det finns stöd för de vanligaste 
		objektorienterade konstruktionerna. Kursen oophp har objektorienterad PHP-programmering
		som sitt huvudsakliga fokus och det är inget vi kommer använda i htmlphp-kursen.
		Men det kan ju inte skada att tjuvkika på ett exempel. 
		
		<p><a href="example/php/php16.php">Se exempel på klasser och objekt</a>

		<p><a href="http://php.net/manual/en/language.oop5.php">Läs om klasser och objekt i manualen</a>.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s17">
		<h2>17. Filhantering</h2>			
		<p>Med tanke på PHP och webbapplikationer så är det vanligen naturligt att lagra information i databaser.
		Men, det funkar också bra att lagra i filer. Ibland är det till och med bättre att lagra information
		på disk istället för i databas.
		
		<p> Filen som visar källkod, <code>source.php</code>, använder ett antal funktioner för att 
		visa innehållet på disk och jobba mot filer. Studera kodstycket som visar alla filer i
		en viss katalog.
		
		<p><a href="source.php?file=source.php#L110">Exempel att läsa innehållet i en katalog (start rad 110) i <code>source.php</code></a>

		<p><a href="example/php/php17.php">Se exempel på hur man lagrar en array på disk med <code>serialize()</code></a>
		
		<p>Tekniken med <code>serialize()</code> går även att använda på objekt. Ett annat användningsområde för <code>serialize()</code>
		är när man vill lagra objekt eller arrayer i sessionen. Mycket användbart.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s18">
		<h2>18. Databaser</h2>			
		<p>Med PHP kan man koppla sig till flertalet olika databaser. Två vanliga databaser som används tillsammans
		med PHP är MySQL och SQLite. MySQL-kopplingen och MySQLi används i kurserna oophp, dbwebb1 och dbwebb2. 
		I kursen htmlphp använder vi SQLite och PDO. PDO är ett lager som gör att användandet av en databas är likadan oavsett
		vilken databasmotor som ligger under.
		
		<p><a href="http://db-o-webb.blogspot.com/2009/10/att-koppla-php-mot-databas.html">Exempel på PHP-koppling mot databaserna MySQL och SQL Server</a>

		<p><a href="http://php.net/manual/en/book.pdo.php">Läs på om PHP Data Objects, PDO</a>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s19">
		<h2>19. Vad är installerat med <code>phpinfo()</code></h2>			
		<p>Det finns flera versioner av PHP och ibland vill man verkligen veta vilken av dessa som är installerad.
		Dessutom finns det flera optioner och moduler som kan vara installerade i en PHP-installation.  
		PHP-konfigureringen i init-filen (<code>php.ini</code>) kan också innehålla viktig information.
		
		<p>Ett enkelt sätt att få reda på denna information är att använda funktionen <code>phpinfo()</code> 
		(<a href="http://php.net/manual/en/function.phpinfo.php">länk till manualen</a>).
		
		<p><a href="http://dbwebb.se/htmlphp/me/example/php/php1.php">Exempel där funktionen <code>phpinfo()</code> används</a>
		
		<p>Denna typen av information är ofta nödvändig för PHP-utvecklaren. Ibland är dock funktionen 
		avstängd på grund av säkerhetskäl. Då kan det vara bra att ha ett eget skript som berättar vilka funktioner
		som finns installerade på servern. 
		
		<p><a href="http://www.student.bth.se/~mos/htmlphp/mom04/me/example/php/php1.php"><code>phpinfo()</code> är spärrat på www.student.bth.se</a>

		<p><a href="http://www.student.bth.se/~mos/utility/check_php_config.php">Eget skript för att testa vad som är konfigurerat i PHP (<code>check_php_config.php</code>)</a>
		<p><a href="http://www.student.bth.se/~mos/utility/source.php?file=check_php_config.php">Källkoden till <code>check_php_config.php</code></a>

		<p>En riktigt duktig PHP-programmerare har koll på sin omgivning och vet vad som krävs och vilka begränsningar som finns.
		Skript såsom <code>check_php_config.php</code> underlättar sådan hantering. 

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s20">
		<h2>20. Grön programmering och kodstandarder</h2>			
		<p>Det finns olika sätt att skriva sin kod på. Det underlättar om man använder kodningskonventioner
		som är liknande överallt. För att underlätta detta brukar man använda kodstandarder. Du kan läsa om kodstandarder för 
		PHP och se exempel på ett par alternativa kodstandarder via följande länk.
			
		<p><a href="http://db-o-webb.blogspot.com/2010/03/gron-programmering-en.html">Programmeringsfilosofi och kodstandarder</a>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="form">
		<h2>PHP och HTML-formulär</h2>			
		<p>PHP används för att bearbeta och lagra information från HTML-formulär. När ett formulär
		kommer till en php-sida finns dess innehåll antingen i <code>$_GET</code> eller i <code>$_POST</code>.
		
		<p><a href="http://dbwebb.se/htmlphp/mom05/selfsubmit/">Exempel på ett formulär med <code>$_GET</code> och <code>$_POST</code></a>
		
		<p>Här följer <a href="example/php/php18.php">ytterligare ett exempel på ett formulär och hur dess innehåll skickas via <code>$_GET</code> eller <code>$_POST</code></a>.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
	<?php include("byline.php"); ?>
	
</article>

</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

<?php
$title = "20 steg för att komma igång med PHP";
$bodyId = "php20";
include("header.php");
?>

<!-- - - - - - - - - - - - - - - - - - wrap whole content - - - - - - - - - - - - - - -->
<div id="wrap">

<!-- - - - - - - - - - - - - - - - - - aside        - - - - - - - - - - - - - - - - - -->
<aside class="right">
	<aside class=box>
		<p>PHP-manualen, din bästa vän.</p>
	</aside>
	<aside class=box>
		<p>W3Schools har enklare kom-igång-guider.</p>
	</aside>
	<aside class=box>
		<p>Kodstandarder.</p>
	</aside>
</aside>

<!-- - - - - - - - - - - - - - - - - - article      - - - - - - - - - - - - - - - - - -->
<article>
	<header id="start">
		<h1>20 steg för att komma igång med PHP</h1>

			<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-09-20">20:e 
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
				<li><a href="#s2">Inbyggda funktioner</a>
				<li><a href="#s2">Funktioner</a>
				<li><a href="#s2">Klasser och Objekt</a>
				<li><a href="#s2">Systemkommandon</a>
				<li><a href="#s2">Filhantering</a>
				<li><a href="#s2">Databaser</a>
				<li><a href="#s18">Vad är installerat med <code>phpinfo()</code></a>
				<li><a href="#s2">Vanliga felmeddelanden och problem</a>
				<li><a href="#s2">Grön programmering</a>
			</ol>
	</header>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s1">
		<h2>1. Om PHP</h2>			
		<p>PHP är ett skriptspråk som främts används tillsammans med webbservrar för att skapa dynamiska
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
		och PHP-skripten stoppas in där det passar. Ett exempel på detta är till exempel header-sidan.
		
		<p><a href="source.php?file=header.php">Exempel på HTML mixat med PHP-skript</a>
		
		<p>Man kan säga att HTML står för strukturen och PHP för viss dynamik.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s3">
		<h2>3. PHP som programmeringsspråk tillsammans med HTML</h2>			
		<p>Ett alternativt sätt att bygga webbapplikationer är att betrakta PHP som ett rent programmeringsspråk 
		och bygga strukturen med PHP och sedan skriva ut HTML-koden.
		
		<p>Ett exempel på detta är <code>source.php</code>, ett PHP-skript som visar innehållet i en katalog och källkoden
		för de filer som finns där. I den filen används PHP som ett programmeringsspråk för att bygga upp sidan. I
		slutet av skriptet så skrivs HTML-koden ut.
		
		<p><a href="source.php?file=source.php">Exempel på PHP programmering i <code>source.php</code></a>
		
		<p>Vilket är bäst? Ingen aning. Det beror på vad man skall göra. Det beror på helt enkelt. Det är viktigt
		att lära sig båda varianterna så att man kan förstå dess fördelar och nackdelar. I ett jobb som PHP-programmerare
		kommer man stöta på båda varianterna. I htmlphp-kursen används skriptsättet, i de andra kurserna används
		programmeringssättet.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s4">
		<h2>4. Skriv ut text med <code>echo</code></h2>			
		<p>I PHP handlar det mycket om strängar och att skriva ut dem. Studera följande exempel 
		för att se hur <code>echo</code>, <code>printf()</code> och <code>die()</code> används för utskrifter.
		
		<p><a href="example/php/php2.php">Exempel på <code>echo</code> och <code>printf()</code></a>
		<p><a href="example/php/php3.php">Exempel på <code>die()</code></a>

		<p>Använd sökfunktionen i <a href="http://php.net/manual/en/">PHP-manualen</a> för att slå upp respektive funktion.

		<p>Notera att strängar kan vara omringade med antingen " (dubbelfnutt) eller ' (enkelfnutt). Den stora skillnaden
		mellan dessa fnuttar är hur variabler i strängar hanteras, låt oss återkomma till det.
		
		<p>Om du kan ett annat programmeringsspråk sedan tidigare så kommer du känna igen dig. Framförallt om du kan C eller C++.
		Syntax och semantik är liknande och C-funktioner för utskrifter återfinns i PHP.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s5">
		<h2>5. Utskrift av felmeddelanden</h2>			
		<p>Innan vi skriver någon PHP-kod så är det lika bra att sätta på utskriften av felmeddelandena.
		Annars kan vi ägna låååång tid till felsökning. Använd funktioner <code>error_reporting(-1);</code>
		för att göra så att alla felutskrifter och varningar skrivs ut.
		
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
		den är variablens innehåll som anger hur värdet skall tolkas och vilken typ det har.
		
		<p>Detta innebär att en sträng kan vara en siffra och en siffra kan adderas till en sträng.
		Dett kan både vara kraftfullt och delvis förvirrande, iallafall om man är van vid starkt typade språk
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
		<p>Uttryck en en grundsten i PHP och de flesta programmeringsspråk. Nästan allt som skrivs 
		är ett uttryck. Om du vill lägga ihop värdet av två variabler så är det ett uttryck.
		
		<p>I samband med uttrycken så används operatorer. En operator kan vara tilldelningsoperatorn =
		eller operatorer för addition (+) och subtraktion (-).
		
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
		<p>Med switch-case-satser kan flera villkor testas med en struktur.
		
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
		
		<p>Liksom if-satser och switch-satser så är loopar definerade som en kontrollstruktur i PHP.
		
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
		Lär dig använda arrayer, det kommer spara mängder av tid och kodrader.
		
		<p><a href="example/php/php11.php">Exempel med arrayer</a>
		
		<p>Studera manualstycket om arrayer och se vilka inbyggda funktioner som finns till stöd när du jobbar med arrayer.
		
		<blockquote class=links>
			<p><a href="http://php.net/manual/en/book.array.php">PHP-manualen med arrayer</a>
		</blockquote>		


		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s12">
		<h2>12. Filer och <code>include()</code</h2>			
		<p>När en fil blir för stor så är det dags att dela upp den i mindre filer. Det är ett bra sätt
		att strukturera sin kod och underlättar återanvändning. En fil blir en modul av kod. Ett exempel 
		på hur uppdelningen av kod kan fungera är style-väljaren. Koden för style-väljaren ligger i en
		fil och det räcker att inkludera den filen för att få med dess funktion.
		
		<p><a href="source.php?dir=&file=header.php#L21">Se hur stilväljaren inkluderas i filen <code>header.php</code> (rad 21)</a> och
		<a href="source.php?dir=&file=header.php#L53">hur den används längre ned i filen (rad 53)</a>
		<p><a href="source.php?dir=&file=choose_style.php">Se källkoden för stilväljaren</a>
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s13">
		<h2>13. Fördefinerade variabler, <code>$_SERVER</code>, <code>$_GET</code>, <code>$_POST</code>, <code>$_SESSION</code></h2>			
		<p>Det finns ett antal fördefinerade variabler i PHP, ett par av dem ligger i gränslandet mellan 
		webbservern och PHP-koden.
		
		<p><code>$_SERVER</code>, innehåller information om själva http-requesten, själva anropet till 
		webbsidan.

		<p><a href="example/php/php12.php"></a>Se exempel på utskrift av <code>$_SERVER</code></a>

		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>




<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s2">
		<h2>X. Filhantering</h2>			
		<p>__FILE__

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s18">
		<h2>18. Vad är installerat med <code>phpinfo()</code></h2>			
		<p>Det finns flera versioner av PHP och ibland vill man verkligen veta vilken av dessa som är installerad.
		Dessutom finns det flera optioner, moduler, som kan vara instalerade i en PHP-installation och 
		själva konfigureringen av init-filen för PHP (<code>php.ini</code>) kan innehålla viktig information.
		
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


<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
	<?php include("byline.php"); ?>
	
</article>

</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

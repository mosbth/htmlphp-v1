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
				<li><a href="#s4">Vad är installerat med <code>phpinfo()</code></a>
				<li><a href="#s2">Skriv ut text med echo</a>
				<li><a href="#s1">Felrapportering</a>
				<li><a href="#s2">Variabler och typer</a>
				<li><a href="#s2">Uttryck och operatorer</a>
				<li><a href="#s2">If-satser</a>
				<li><a href="#s2">Loopar</a>
				<li><a href="#s2">Arrayer</a>
				<li><a href="#s2">Fördefinerade variabler, _SERVER, _GET, _POST, _SESSION</a>
				<li><a href="#s2">Filer och include()</a>
				<li><a href="#s2">Funktioner</a>
				<li><a href="#s2">Klasser och Objekt</a>
				<li><a href="#s2">Systemkommandon</a>
				<li><a href="#s2">Filhantering</a>
				<li><a href="#s2">Databaser</a>
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
		
		<p>Via <a href="http://php.net">php.net</a> går det ladda ned PHP och manualerna.
		
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
		kommer man stöta på båda varianterna.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s4">
		<h2>4. Vad är installerat med <code>phpinfo()</code></h2>			
		<p>Det finns flera versioner av PHP och ibland vill man verkligen veta vilken av dessa som är installerad.
		Dessutom finns det flera optioner, moduler, som kan vara instalerade i en PHP-installation och 
		själva konfigureringen av init-filen för PHP (<code>php.ini</code>) kan innehålla viktig information.
		
		<p>Ett enkelt sätt att få reda på denna information är att använda funktionen <code>phpinfo()</code>.
		
		<p><a href="http://dbwebb.se/htmlphp/me/example/php/php1.php">Exempel där funktionen <code>phpinfo()</code> används</a>
		
		<p>Denna typen av information är ofta nödvändig för PHP-utvecklaren.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s2">
		<h2>2. phpinfo()</h2>			
		<p>Hur vill vi disponera sidan? Var vill vi att de olika delarna skall
		synas? Sidornas grundstruktur är ofta liknande, det finns ett antal olika varianter 
		som återkommer. Låt oss ta en titt på de vanligaste förekommande varianterna.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s2">
		<h2>X. Filhantering</h2>			
		<p>__FILE__

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>


<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
	<?php include("byline.php"); ?>
	
</article>

</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

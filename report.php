<?php 
$title = "Redovisningar av kursmoment i htmlphp-kursen";
$bodyId = "report"; // Set id of the body to enable tracking current poge and display in navbar
include("header.php"); 
?>

<!-- Here is the actual content of the page-->
<div id="wrap">
	<article>
	
		<section>
			<header>
				<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-08-19">19:e 
				augusti 2010</time></p>
				<hgroup>
					<h1>Redovisning av htmlphp</h1>
					<h2>Intro</h2>
				</hgroup>
				<ul>
					<li><a href="kmom01">Kmom01: Kom igång med HTML, CSS och PHP</a>
					<li><a href="kmom02">Kmom02: HTML-element och CSS-konstruktioner</a>
					<li><a href="kmom03">Kmom03: Projektstart av Museum Online</a>
				</ul>
			</header>
			
			<p>Här skriver du de redovisningstexter som anges i slutet av varje kursmoment.
			Redovisningstexterna är oftast en reflektion över kursmomentet. 
			En reflektion som dessutom besvarar ett antal frågor.
	
			<p>Exempel på frågor kan vara följande. Vad gick bra? Var något svårt? Vad har du lärt dig?
			Förbättringsförslag till kursmomentet?
	
			<p>Normalt skriver du ett textstycke om ca 15 meningar. Skriv så utförligt så att en utomstående, dvs dina 
			lärare och med-studenter, förstår och kan sätta sig in i de problem och lösningar du jobbat igenom.
	
			<p>Bara för att det skall vara rättvist så ska jag själv skriva mina egna funderingar när jag
			är klar med utvecklingen av varje kursmoment.
			</p>
		</section>
		
		<section id="kmom01">
			<h2>Kmom01: Kom igång med HTML, CSS och PHP</h2>
	
			<p>Det tog en kalendervecka för att utveckla kursmomentet, ca 40 aktiva timmar och en del oredovisade
			timmar där man går och funderar på hur allt skall hänga ihop och hur den röda tråden kan etableras.
			Till slut blev det ändå "klart", iallafall i en första variant.
	
			<p>Kursmomentet handlar om att komma igång. Med labbmiljön, driftsmiljön och med HTML, CSS och PHP.
			Är man nybörjare kan det bli lite mycket på en gång. Speciellt med tanke på de läsanvisningar som finns. 
			Men jag tycker att det är bättre att köra på lite från början, sen blir de kommande kursmomenten tillfälle
			för lite repetition. Det ska ju vara bra för inlärning, säger de som vet. Repetition alltså.
	
			<p>För den som redan gjort PHP, kanske på gymnasienivå, så kan dessa första steg vara rätt enkla.
			Bra. Då vet jag att du har desto mer tid att lägga på boken och tid för att fundera på den
			"perfekta webbsidan". Den "perfekta webbsidan" blir ett återkommande tema och går ut på att försöka finna en ideal 
			komposition av i synnerhet HTML och CSS.
	
			<p>Jag stötte inte på några större svårigheter när jag utvecklade koden och testade kursmomentet.
			HTML5 elementen funkade utan svårigheter. Det gick även bra att använda CSS3. WampServer var
			för mig en ny erfarenhet men den funkar mycket bra tillsammans med Windows 7. Jag använde Win7 
			som referensplattform för att installera labbmiljön. Jag antar att de flesta av er sitter på den miljön.
			För min egen del så sitter jag i Mac och FreeBSD. Det är de plattformar jag helst jobbar med.
	
			<p>När jag tittar på min me-sida, så här i efterhand, så märker jag ett par saker som jag kunde/borde
			gjort annorlunda. Funderade lite på att ändra på det men valde till slut att göra det till en 
			del av nästa kursmoment istället.
	
			<p>Finns det verkligen en "perfekt webbsida"?
	
			<h3>Länkar till kursmaterialet</h3>
				<ul>
					<li><a href='http://bit.ly/htmlphp_kmom01'>Instruktion för kursmomentet</a>
					<li><a href='http://bit.ly/htmlphp_labbmiljo'>Guide för att installera labbmiljön</a>
					<li><a href='http://github.com/mosbth/me/tree/v1.03'>Källkod</a>
					<li><a href='http://www.student.bth.se/~mos/htmlphp/mom01/me/me.php'>Driftsmiljön</a>
				</ul>
		</section>
	
		<section id="kmom02">
			<h2>Kmom02: HTML-element och CSS-konstruktioner</h2>
	
			<p>Sådär. Då var kursmoment 02 klart. Även det tog ca 40 timmar att utveckla. Det blev en hel 
			del skrivande av HTML-20 och CSS-20. Men det känns som det är en bra början på denna kurs.
			Det blir lite repetition av kmom01 och en möjlighet att djupdyka in i HTML och CSS standarder.
			
			<p>En uppdaterad me-sida blev det också. En sådan här struktur på en webbplats är helt ok.
			I allafall om du frågar mig. Lätt att underhålla och lätt att utveckla.
			
			<p>Ytterligare ett steg på vägen mot en "perfekt" webbsida.
		
			<h3>Länkar till kursmaterialet</h3>
				<ul>
					<li><a href='http://bit.ly/htmlphp_kmom02'>Instruktion för kursmomentet</a>
					<li><a href='http://github.com/mosbth/me/tree/v2.0'>Källkod</a>
					<li><a href='http://www.student.bth.se/~mos/htmlphp/mom02/me/me.php'>Driftsmiljön</a>
				</ul>
		</section>

		<section id="kmom03">
			<h2>Kmom03: Projektstart av Museum Online</h2>
	
			<p>Detta momentet gick lite snabbare att göra, det tog 3-4 dagar. det strulade i slutet när
			jag skulle göra min stylesheet-väljare. Jag ville göra ett enklare exempelprogram men
			det krävdes en del kod för att göra det. Dessutom behövs sessioner och det krånglade naturligtvis 
			för mig. Trots att jag gjort detta ett antal gånger. Jag fick användning av min egen länk
			som beskriver ett vanligt förekommande problem i PHP-programmering.
			
			<blockquote>
				<a href="http://db-o-webb.blogspot.com/2010/02/warning-cannot-modify-header.html">http://db-o-webb.blogspot.com/2010/02/warning-cannot-modify-header.html</a>
			</blockquote>
			
			<p>Det var kul att speca upp projektet, lite programvaruteknik med ordning och reda. Alltid trevligt.
			
			<p>Jag har stuckit ut huvudet lite och lovat kunden att detta är något vi kan fixa. Ska bli
			spännande att se hur bra Museum Online vi kan göra. Ska bli extra kul att se hur ni tolkar
			kundens önskemål om Begravningsmuseum Online.
			
			<h3>Länkar till kursmaterialet</h3>
				<ul>
					<li><a href='http://bit.ly/htmlphp_kmom03'>Instruktion för kursmomentet</a>
					<li><a href='http://github.com/mosbth/me/tree/v3.04'>Källkod</a>
					<li><a href='http://www.student.bth.se/~mos/htmlphp/mom03/me/me.php'>Driftsmiljön</a>
				</ul>
		</section>

<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
		<?php include("byline.php"); ?>
	
	</article>

</div> <!-- wrapper -->

<?php include("footer.php"); ?>

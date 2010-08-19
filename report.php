<?php 
$title = "Redovisningar av kursmoment i htmlphp-kursen";
$bodyId = "report";
include("header.php"); 
?>

<!-- Here is the actual content of the page-->
<section class="content">
	<section>
		<header>
			<h1>Redovisning av htmlphp</h1>
			<h2>Intro</h2>
		</header>
		<p>
			Här skriver du de redovisningstexter som anges i slutet av varje kursmoment.
			Redovisningstexterna är oftast en reflektion över kursmomentet. 
			En reflektion som dessutom besvarar ett antal frågor.
		</p>
		<p>
			Exempel på frågor kan vara följande. Vad gick bra? Var något svårt? Vad har du lärt dig?
			Förbättringsförslag till kursmomentet?
		</p>
		<p>
			Normalt skriver du ett textstycke om ca 15 meningar. Skriv så utförligt så att en utomstående, dvs dina 
			lärare och med-studenter, förstår och kan sätta sig in i de problem och lösningar du jobbat igenom.
		</p>
		<p>
			Bara för att det skall vara rättvist så ska jag själv skriva mina egna funderingar när jag
			är klar med utvecklingen av varje kursmoment.
		</p>
	</section>
	
	<section>
		<header>
			<h2>Kmom01: Kom igång med HTML, CSS och PHP</h2>
		</header>
		<p>
			Det tog en kalendervecka för att utveckla kursmomentet, ca 40 aktiva timmar och en del oredovisade
			timmar där man går och funderar på hur allt skall hänga ihop och hur den röda tråden kan etableras.
			Till slut blev det ändå "klart", iallafall i en första variant.
		</p>
		<p>
			Kursmomentet handlar om att komma igång. Med labbmiljön, driftsmiljön och med HTML, CSS och PHP.
			Är man nybörjare kan det bli lite mycket på en gång. Speciellt med tanke på de läsanvisningar som finns. 
			Men jag tycker att det är bättre att köra på lite från början, sen blir de kommande kursmomenten tillfälle
			för lite repetition. Det ska ju vara bra för inlärning, säger de som vet. Repetition alltså.
		</p>
		<p>
			För den som redan gjort PHP, kanske på gymnasienivå, så kan dessa första steg vara rätt enkla.
			Bra. Då vet jag att du har desto mer tid att lägga på boken och tid för att fundera på den
			"perfekta webbsidan". Den "perfekta webbsidan" blir ett återkommande tema och går ut på att försöka finna en ideal 
			komposition av i synnerhet HTML och CSS.
		</p>
		<p>
			Jag stötte inte på några större svårigheter när jag utvecklade koden och testade kursmomentet.
			HTML5 elementen funkade utan svårigheter. Det gick även bra att använda CSS3. WampServer var
			för mig en ny erfarenhet men den funkar mycket bra tillsammans med Windows 7. Jag använde Win7 
			som referensplattform för att installera labbmiljön. Jag antar att de flesta av er sitter på den miljön.
			För min egen del så sitter jag i Mac och FreeBSD. Det är de plattformar jag helst jobbar med.
		</p>
		<p>
			När jag tittar på min me-sida, så här i efterhand, så märker jag ett par saker som jag kunde/borde
			gjort annorlunda. Funderade lite på att ändra på det men valde till slut att göra det till en 
			del av nästa kursmoment istället.
		</p>
		<p>
			Finns det verkligen en "perfekt webbsida"?
		</p>
		<h3>Länkar till kursmaterialet</h3>
			<ul>
				<li><a href='http://bit.ly/htmlphp_kmom01'>Instruktion för kursmomentet</a>
				<li><a href='http://bit.ly/htmlphp_labbmiljo'>Guide för att installera labbmiljön</a>
				<li><a href='http://github.com/mosbth/me/tree/v1.02'>Källkod</a>
				<li><a href='http://www.student.bth.se/~mos/htmlphp/mom01/me/me.php'>Driftsmiljön</a>
			</ul>
	</section>

</section>

<?php include("footer.php"); ?>

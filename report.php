<?php 
$title = "Redovisningar av kursmoment i htmlphp-kursen";
$bodyId = "kursen-report"; // Set id of the body to enable tracking current poge and display in navbar
include("header.php"); 
include("header_kursen.php"); 
?>

<!-- Here is the actual content of the page-->
<div id="wrap">
	<article>
	
		<section>
			<header>
				<p class="byline">Av Mikael Roos, mos@bth.se, uppdaterad senast <time pubdate datetime="2010-10-14">14:e 
				oktober 2010</time></p>
				<hgroup>
					<h1>Redovisning av htmlphp</h1>
					<h2>Intro</h2>
				</hgroup>
				<ul>
					<li><a href="#kmom01">Kmom01: Kom igång med HTML, CSS och PHP</a>
					<li><a href="#kmom02">Kmom02: HTML-element och CSS-konstruktioner</a>
					<li><a href="#kmom03">Kmom03: Projektstart av Museum Online</a>
					<li><a href="#kmom04">Kmom04: Projektet, CSS och PHP</a>
					<li><a href="#kmom05">Kmom05: HTML Formulär och PHP</a>
					<li><a href="#kmom06">Kmom06: PHP och SQLite</a>
					<li><a href="#kmom07">Kmom07: CSS och Stylesheets</a>
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
					<li><a href='http://dbwebb.se/htmlphp/kmom01/instruction'>Instruktion för kursmomentet</a>
					<li><a href='http://dbwebb.se/htmlphp/install_lab_environment'>Guide för att installera labbmiljön</a>
					<li><a href='http://github.com/mosbth/htmlphp/tree/v1.03'>Källkod</a>
					<li><a href='http://www.student.bth.se/~mos/htmlphp/mom01/me/me.php'>Me på driftsmiljön</a>
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
					<li><a href='http://dbwebb.se/htmlphp/kmom02/instruction'>Instruktion för kursmomentet</a>
					<li><a href='http://github.com/mosbth/htmlphp/tree/v2.0'>Källkod</a>
					<li><a href='http://www.student.bth.se/~mos/htmlphp/mom02/me/me.php'>Me på driftsmiljön</a>
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
					<li><a href='http://dbwebb.se/htmlphp/kmom03/instruction'>Instruktion för kursmomentet</a>
					<li><a href='http://github.com/mosbth/htmlphp/tree/v3.06'>Källkod</a>
					<li><a href='http://www.student.bth.se/~mos/htmlphp/mom03/me/me.php'>Me på driftsmiljön</a>
				</ul>
		</section>


		<section id="kmom04">
			<h2>Kmom04: Projektet, CSS och PHP</h2>
	
			<p>Från början var inte tanken att detta momentet skulle finnas med, men efterhand så märkte jag att
			det krävdes ett andhämtningsmoment för att få med alla på tåget. Framförallt behövdes en genomgång
			av PHP innan vi sätter igång med formulär och sparar informationen på disk. Dessutom känns det
			bra att kunna erbjuda ytterligare ett lugnare moment så att det finns tid till att läsa kurslitteraturen.
			
			<p>I denna kursen anser jag kurslitteraturen vara oerhört viktigt. En stor del av kursens tanke är 
			att man läser litteraturen får att få med så mycket av HTML-elementen och CSS-konstruktionerna.

			<p>De kommande kursmomenten blir mer kodningsinriktade så det gäller att få lite PHP-kött på benen.
			Min förhoppning är att PHP-20 skall hjälpa till med det.
		
			<h3>Länkar till kursmaterialet</h3>
				<ul>
					<li><a href='http://dbwebb.se/htmlphp/kmom04/instruction'>Instruktion för kursmomentet</a>
					<li><a href='http://github.com/mosbth/htmlphp/tree/v4.01'>Källkod</a>
					<li><a href='http://www.student.bth.se/~mos/htmlphp/mom04/museum'>Museum Online, mos leverans 1</a>
					<li><a href='http://github.com/mosbth/MuseumOnline/tree/v0.1'>Museum Online Källkod</a>
					<li><a href='http://www.student.bth.se/~mos/htmlphp/mom04/me/me.php'>Min Me-sida och kurssidan</a>
				</ul>
		</section>

		<section id="kmom05">
			<h2>Kmom05: HTML Formulär och PHP</h2>
	
			<p>Nu körde det ihop sig. Det visade sig att detta kursmomentet tog nästan dubbelt så lång tid som de andra att utveckla. 
			Nästan 2 kalenderveckor. Trixet var att göra exemplet för formuläret så enkelt och rent som möjligt så att de som är
			nybörjare på PHP kan klara det.
			Det skall bli spännande att se om jag lyckades.
			Jag gjorde även lite extra uppgifter (file upload) så att de som anser sig redan kunna detta fick lite extra kodning att syssla med.
		
			<h3>Länkar till kursmaterialet</h3>
				<ul>
					<li><a href='http://dbwebb.se/htmlphp/kmom05/instruction'>Instruktion för kursmomentet</a>
					<li><a href='http://github.com/mosbth/me/tree/v5.02'>Källkod</a>
					<li><a href='http://dbwebb.se/htmlphp/mom05/me/me.php'>Min Me-sida och kurssidan</a>
				</ul>
		</section>


		<section id="kmom06">
			<h2>Kmom06: PHP och SQLite</h2>
	
			<p>Kursen närmar sig slutet. Det näst sista kursmomentet, innan projektet, och jag har nu en klarare bild av vad vi hinner 
			med. 
			
			<p>SQLite var en trevlig bekantskap. Det var första gången för mig men det gav mersmak av en enklare filbaserad databas 
			istället för server-baserade MySQL som jag brukar jobba med. Jag kan se flera fördelar med SQLite, speciellt 
			i mindre webbapplikationer. Naturligtvis är det kanske ingen databas där många transaktioner skriver och läser
			mot databasen. Men, för en enklare webbplats med lite konfigureringar och en enkel blog så behövs knappast mer.
			
			<p>Jämför man koden mellan filhantering och databashantering (formuläret) så ser man att det blir mindre kodrader med SQLite.
			Det var bra. Det kräver ju att man kan SQL för att kunna nyttja detta men de konstruktioner som används i kursmomentet
			bör inte vålla några större problem i sig.
			
			<p>Det som kan vara problematiskt är att SQL är ytterligare en teknik, en syntax, en semantik och ett nytt sätt att
			lösa programmeringsproblem. Tillsammans med PHP, HTML och CSS så har vi fyra olika tekniker. Det krävs en del 
			för att bemästra samtliga tekniker. Men, det finns inga genvägar för den som så vill. Bara att öva och öva igen.
			Till slut faller det på plats.
			
			<p>Måste bara säga att PHP PDO och prepared statements var även det en trevlig bekantskap. Även denna teknik
			var första gången som jag själv prövade på. Det finns alltid något nytt att lära sig...
	
			<h3>Länkar till kursmaterialet</h3>
				<ul>
					<li><a href='http://dbwebb.se/htmlphp/kmom06/instruction'>Instruktion för kursmomentet</a>
					<li><a href='http://github.com/mosbth/me/tree/v6.01'>Källkod</a>
					<li><a href='http://dbwebb.se/htmlphp/mom06/me/me.php'>Min Me-sida och kurssidan</a>
				</ul>
		</section>

		<section id="kmom07">
			<h2>Kmom07: CSS och Stylesheets</h2>
	
			<p>Kanske skulle detta kursmoment funnits på plats redan när projektet startades. Men så funkar det inte i
			verkligheten. All information finns inte på plats och man har inte all kunskap när projektet startar.
			Eftersom man jobbar så lär man sig mer och till slut finns allt framme och problemet ser inte så där 
			svårt ut. Egentligen.
			
			<p>Kursmomentet blir därför en repetition av hur man kan bygga upp, strukturera och styla en webbplats. 
			Det blir en resa i modulärt tänkande när man bygger stylesheets och det blir en möjlighet att testa
			varianter på mer avancerade CSS-konstruktioner.
			
			<p>Style! äe ett verktyg som Rickard byggt och det används i guiden Style-20. Verktyget underlättar utveckling av 
			html och css när man samarbeter via nätet. Tanken är att man skriver in sin kod och skickar en länk till 
			kollegan som kan hjälpa till, felsöka eller uppdatera koden. Ett arbetsverktyg anpassat till
			internet-åldern. Hoppas ni uppskattar verktyget. Det kommer även underlätta vår distansbaserade undervisning.
				
			<h3>Länkar till kursmaterialet</h3>
				<ul>
					<li><a href='http://dbwebb.se/htmlphp/kmom07/instruction'>Instruktion för kursmomentet</a>
					<li><a href='http://github.com/mosbth/me/tree/v7.01'>Källkod</a>
					<li><a href='http://dbwebb.se/htmlphp/mom07/me/me.php'>Min Me-sida och kurssidan</a>
				</ul>
		</section>



<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
		<?php include("byline.php"); ?>
	
	</article>

</div> <!-- wrapper -->

<?php include("footer.php"); ?>

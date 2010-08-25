<?php 
$title = "Projektbeskrivning av Museum Online";
$bodyId = "proj-proj"; // Set id of the body to enable tracking current page and display in navbar
include("header.php"); 
include("header_projekt.php"); 
?>

<!-- Here is the actual content of the page-->
<div id="wrap">

	<aside class="right">
		<aside class="box">
			<h4>Tyst kunskap</h4>
			<p>Från Wikipedia:
			<p class="quote">Med implicit kunskap (tyst eller outtalad kunskap) avses att kunna exempelvis knyta skorna 
			eller cykla men inte kunna förklara hur det ska gå till utan att först visa hur man faktiskt 
			gör. Denna kunskap är ofta underförstådd och svår att uttrycka i ord eller till och med okänd 
			för individen, den är erfarenhetsbaserad, praktisk och erhålls genom övning och erfarenhet. 
			Det är kunskap som "sitter i väggarna" och lärs in genom socialisering. Dess motsats är explicit 
			eller uttalad kunskap, som är känd för individen, teoretisk, objektiv  kunskap, lätt att förstå, 
			samla in och dokumentera.

			<p>Läs om <a href="http://sv.wikipedia.org/wiki/Implicit#Psykologi">Tyst Kunskap på svenska Wikipedia</a>
			och om <a href="http://en.wikipedia.org/wiki/Tacit_knowledge">Tacit Knowledge på engelska motsvarigheten</a>.
			</p>
		</aside>

		<aside class="box">
			<h4>Software Development</h4>
			<p>Är den term som Wikipedia använder för att samla allt som rör utvecklingen av programvaror.
			Här finns en komplett (så gott det går) översikt över de olika processer och metoder som används
			för utveckling av programvaror.

			<p>Läs om <a href="http://en.wikipedia.org/wiki/Software_development">Software Development på Wikipedia</a>.
			</p>
		</aside>

		<aside class="box">
			<h4>Software Engineering</h4>
			<p>Är en yrkeskategori som utvecklar programvaror. Några anser att det är ett ingenjörsmässigt yrke medans
			andra betraktar det mer konstform (engelska: Art).

			<p>Läs om <a href="http://en.wikipedia.org/wiki/Software_engineering">Software Engineer på Wikipedia</a> och läs
			om vad <a href="http://en.wikipedia.org/wiki/Art">begreppet Art (konst)</a> omfattar.
			</p>
		</aside>
	</aside>

	<article>
		<section>
			<header>
				<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-08-19">19:e 
				augusti 2010</time></p>
				<h1>Projekt: Museum Online</h1>
			</header>
			
			<h2>Mål</h2>
			<p>Målen med projektet är att:
			<ul>
				<li>Bygga ett Begravningsmuseum Online i enlighet med Ronny Holm's önskemål och i en strävan att vårda ett kulturarv.
				<li>Skapa en programvara, Museum Online, där alla hemmasamlare kan skapa sitt eget museum och utställning.
				<li>Skapa en egen återanvändbar kodbas för att bygga nya webbplatser (även efter denna kursen).
			</ul>
			
			<h2>Process</h2>
			<p>Vårt arbetssätt är att i, små iterationer, bygga in nya features och funktioner i webbplatsen. Efter varje 
			iteration gör vi en kritiskt granskning av resultatet. Därefter planerar vi vilka features och funktioner som
			skall finnas med i nästa iteration. Om det inte blev bra så gör vi om och gör bättre. Tills vi är klara.
			
			<p>Utvecklingssättet är nära besläktat med iterativ och inkrementell utveckling. Lite åt agile-hållet.
			<blockquote>
				<a href="http://en.wikipedia.org/wiki/Iterative_and_incremental_development">http://en.wikipedia.org/wiki/Iterative_and_incremental_development</a>
			</blockquote>
			
			<h2>Plan</h2>
			<p>Projektet är uppdelat i leveranser. Varje leverans har ett bestämt syfte och innehåll. Leveranserna finns
			planerade i följande dokument:

			<blockquote>
				<a href="leveranser.php">Leveransplan</a>
			</blockquote>
			

			<?php include("byline.php"); ?>
				
		</section>
	</article>
	
</div> <!-- wrapper -->

<?php include("footer.php"); ?>

<?php 
$title = "Projektbeskrivning av Museum Online";
$bodyId = "proj-proj"; // Set id of the body to enable tracking current page and display in navbar
include("header.php"); 
include("header_projekt.php"); 
?>

<!-- Here is the actual content of the page-->
<div id="wrap">

	<aside class="right">
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
				<a href="planering.php">Leveransplan</a>
			</blockquote>
			

			<?php include("byline.php"); ?>
				
		</section>
	</article>
	
</div> <!-- wrapper -->

<?php include("footer.php"); ?>

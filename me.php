<?php 
$title = "Min Me-sida om mig själv och htmlphp-kursen";
$bodyId = "kursen-me"; // Set id of the body to enable tracking current poge and display in navbar
include("header.php"); 
include("header_kursen.php"); 
?>

<!-- Here is the actual content of the page-->
<div id="wrap">

	<aside class="right">
		<figure class="standard">
			<img src="img/mikael1.jpg" alt="Bild på Mikael vid datorn" width="300">
			<figcaption>Me vid datorn, se så glad jag är!</figcaption>
		</figure>
	</aside>

	<article>
		<section class="columns2">
			<header>
				<h1>Me</h1>
				<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-08-19">19:e 
				augusti 2010</time></p>
			</header>
	
			<p>Mitt namn är Mikael Roos och jag är ansvarig för denna kursen och kursklustret som jag valt att
			kalla för db-o-webb.
			
			<p>Jag jobbar sedan 2006 på Blekinge Tekniska Högskola. Jag jobbade även här ett par år i mitten av 90-talet (92-95).
			Det var strax efter jag slutfört mina studier vid programmet Programvaruteknik (PT). Även det vid BTH.
			Mellan -95 och 2006 jobbade med programutveckling "ute i näringslivet". 
			Jag har testat positioner såsom utvecklare, projektledare, produktledare, 
			avdelningschef, produktchef, egen företagare, vd och styrelseledamot.
			Jobben har alltid rört programutveckling och utveckling av mjukvaror.
			
			<p>2005 bestämde jag mig för att avsluta min management-inriktade karriär och återgå till tekniken. 
			På något sätt hamnade jag då vid BTH och där sitter vi nu. 

			<p>Jag jobbar numer full tid som lärare
			på dessa distanskurser. Jag är även programansvarig för kandidatprogrammet "Webb, internet och programvaruteknik".
			Eftersom jag skapat både WIP och db-o-webb kurserna så hoppas jag att jag får jobba med dessa de närmaste åren.
			Det skall bli kul att fortsätta utveckla kurser inom denna nish.
			
			<p>Jag bor i Ronneby sedan 1990 med familj. Jag är dock smålänning och kommer från Bankeryd. Hejar på HV71
			och spelar bowling på fritiden. När jag får tid över så jobbar jag med PHP och MySQL i mina opensource projekt.
			Eller så gräver jag sten i sommarstugan. 
			
			<p>Till och från spelar jag poker online. Det är mitt senaste nyårslöfte,
			att lära mig spela poker. Än så länge går det inte så bra... men skam den som ger sig.
			Jag köpte 4 böcker, läste dem, och nu testar jag. Man kan om man vill.
			</p>

			<?php include("byline.php"); ?>
				
		</section>
	</article>
	
</div> <!-- wrapper -->

<?php include("footer.php"); ?>

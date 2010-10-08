<?php
$title = "Begravningsmuseum Online, artiklar som används i BMO";
$bodyId = "begr-artiklar";
include("header.php");
include("header_begravning.php");
?>

<!-- - - - - - - - - - - - - - - - - - wrap whole content - - - - - - - - - - - - - - -->
<div id="wrap">

<!-- - - - - - - - - - - - - - - - - - aside        - - - - - - - - - - - - - - - - - -->
<aside class="right">
</aside>

<!-- - - - - - - - - - - - - - - - - - article      - - - - - - - - - - - - - - - - - -->
<article>
	<h1>Artiklar att använda i BMO</h1>

	<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-10-05">5:e 
	oktober 2010</time>

	<h2>Översikt</h2>

	<p>Här följer en lista på de artiklar som skall finnas med i BMO samt en beskrivning av hur du kan ladda 
	hem dem tillsammans med bilderna.

	<ul>
		<li><a href="artikel_begravningsseder_och_bruk.php">Begravningsseder och Bruk</a>
		<li><a href="artikel_festligheter_vid_begravning_gravol_och_konfekt.php">Festligheter vid begravning, gravöl och konfekt</a>
		<li><a href="artikel_minnestavlor.php">Minnestavlor</a>
		<li><a href="artikel_parlkransar.php">Pärlkransar</a>
	</ul>


	<h2>Ladda ned text och bilder till artiklarna</h2>
	
	<h3>Texter till artiklarna</h3>
	
	<p>Ladda ned i zip-fil.

	<p><a href="download">Du hittar allt som går att ladda ned i katalogen download</a>.


	<h3>Databasen med museumobjekten</h3>
	<p><a href="download/museum.sqlite">Databasen med samtliga objekt går att ladda ned via denna länk</a>.

	<p>Bilderna till objekten finns sparade i en egen katalog. <a href="download/img_objekt.zip">Du kan ladda ned bild-katalogen 
	som en zip-fil</a>. Den är ca 23MB så den är lite större. Det kan ta lite tid att ladda ned den.

	<p>Koden för att "resiza" bilderna till olika storlekar följer med. Det är ren överkurs och studeras
	endast av de som så känner.
	
	<h3>Maggys artikel, "Begravningsseder och Bruk"</h3>
	<p>Maggys artikel, "Begravningsseder och Bruk", får du kopiera den hårda vägen, gör view source och kopiera html-koden eller
	kopiera bara texten för sig. Eller leta reda på källkoden till den, via min source.php, och kopiera den
	därifrån.
	
	<p><a href='download/img_begravningsmuseum.zip'>Bilderna till Maggys artikel kan du ladda ned via denna länk</a>.
	Spara dem i img/begravningsmuseum så fungerar bild-länkarna.

	
<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
	<?php include("byline.php"); ?>
	
</article>

</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

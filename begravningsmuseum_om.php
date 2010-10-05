<?php
$title = "Om Begravningsmuseum Online";
$bodyId = "begr-om";
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
	<h1>Om Begravningsmuseum Online</h1>

	<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-10-05">5:e 
	oktober 2010</time>

	<p>Här finns material som du kan använda i ditt begravningsmuseum online.
	
	<p>Maggys artikel, "Seder och Bruk", får du kopiera den hårda vägen, gör view source och kopiera html-koden eller
	kopiera bara texten för sig. Eller leta reda på källkoden till den, via min source.php, och kopiera den
	därifrån.
	
	<p><a href='download/img_begravningsmuseum.zip'>Bilderna till Maggys artikel kan du ladda ned via denna länk</a>.
	Spara dem i img/begravningsmuseum så fungerar bild-länkarna.
	
	<p><a href="download/museum.sqlite">[SQLite] Databasen med samtliga objekt går att ladda ned via denna länk</a>.

	<p><a href="download/objekt.zip">[Filer] Du kan ladda hem alla objekt-filer i en zip-fil</a>.
	
	<p>Bilderna till objekten finns sparade i en egen katalog. <a href="download/img_objekt.zip">Du kan ladda ned bild-katalogen 
	som en zip-fil</a>. Den är ca 23MB så den är lite större. Det kan ta lite tid att ladda ned den.

	<p>Koden för att "resiza" bilderna till olika storlekar följer med. Det är ren överkurs och studeras
	endast av de som så känner.

	<p><a href="download">Du hittar allt som går att ladda ned i katalogen download</a>.

<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
	<?php include("byline.php"); ?>
	
</article>

</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

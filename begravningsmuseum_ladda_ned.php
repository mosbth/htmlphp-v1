<?php
$title = "Begravningsmuseum Online, ladda ned material till BMO";
$bodyId = "begr-download";
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
	<h1>Ladda ned material till BMO</h1>

	<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-10-14">14:e 
	oktober 2010</time>
	
	<p><a href="download">Du hittar allt som går att ladda ned i katalogen download</a>.

	<p>Det finns en zip-fil som innehåller <a href="download/bmo.zip">allt material till BMO</a>.

	<p> Eller så kan du välja att ladda ned de olika delarna var för sig. 
	
	<p><a href="download/museum.sqlite">Databasen med samtliga objekt</a>.

	<p><a href="download/artiklar.zip">Texter till artiklarna </a>.

	<p><a href="download/img_objekt.zip">Samtliga bilder som en zip-fil</a>. 
	Filen är ca 23MB så den är lite större. Det kan ta lite tid att ladda ned den.

	<p>Koden för att "resiza" bilderna till olika storlekar följer med. Det är ren överkurs och studeras
	endast av de som så känner.
	
		
	
<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
	<?php include("byline.php"); ?>
	
</article>

</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

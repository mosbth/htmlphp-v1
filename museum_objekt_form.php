<?php
$title = "Formulär för att arbeta med Museum Objekt";
$bodyId = "begr-form";
include("header.php");
include("header_begravning.php"); 
?>

<!-- - - - - - - - - - - - - - - - - - wrap whole content - - - - - - - - - - - - - - -->
<div id="wrap">

<!-- - - - - - - - - - - - - - - - - - aside        - - - - - - - - - - - - - - - - - -->
<aside class="right">
</aside>

<!-- - - - - - - - - - - - - - - - - - *******      - - - - - - - - - - - - - - - - - -->
<article>

	<h1>Hantera objekt med formulär</h1>
	<p>Använd formulär för att låta kunden editera och spara information om objekten.

	<form class=standard method=post>
	 <fieldset>
		<legend>Hantera Museum Objekt</legend>
	
		<label>Id:<input type=text name=id placeholder="Id på objektet, en siffra "></label>
		<label>Titel:<input type=text name=title placeholder="Titel/namn på objektet"></label>
		<label>Ingress:<textarea name=ingress placeholder="Ingress, en kortare och slagkraftig intro till objektet"></textarea></label>
		<label>Text:<textarea name=text placeholder="Text, en beskrivning av objektet"></textarea></label>
		<label>Bild:<input type=url name=image placeholder="Bild, en länk till en bild på objektet"></label>
		<label>Årtal:<input type=text name=year placeholder="Årtal, när skapades objektet, årtal, spann av år eller sekel"></label>
		<label>Ägare:<input type=text name=owner placeholder="Ägare, vem äger objektet"></label>
		<label>Förvaltare:<input type=text name=trustee placeholder="Förvaltare, vem förvaltar objektet för tillfället"></label>
		<label>Bakgrund:<textarea name=background placeholder="Bakgrund, hur hittade objektet fram till dess nuvarande ägare och förvaltare"></textarea></label>
				
		<input type=reset value="Återställ" title="Återställ formuläret till dess ursprunliga läge">
		<input type=submit name=submit value="Spara" title="Spara alla ändringar">
		
		<output>
			<?php
				if(isset($_POST['submit'])) {
					echo "Sparat";
				}
			?>
		</output>
		
	 </fieldset>
	</form>


	<?php include("byline.php"); ?>

</article>
</div> <!-- id=wrap -->

<?php include("footer.php"); ?>
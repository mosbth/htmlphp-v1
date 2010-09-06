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
	<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-09-03">3:e 
	september 2010</time></p>

	<h1>Formulärhantering</h1>
	<p>Använd formulär för att låta kunden editera och spara information om objekten.

<?php
$code = <<<EOD
<form method=post>
 <fieldset>
  <legend>Hantera Museum Objekt</legend>

  <label>Titel:<input type=text name=title></label>
  <label>Ingress:<textarea name=ingress></textarea></label>
  <label>Text:<textarea name=text></textarea></label>
  <label>Bild:<input type=url name=image></label>
  <label>Förvaltare:<input type=text name=trustee></label>
  <label>Ägare:<input type=text name=owner></label>
  <label>Bakgrund:<input type=text name=background></label>
  <label>Årtal:<input type=text name=year></label>
			
  <input type=reset value="Återställ">
  <input type=submit name=submit value="Spara">
	
 </fieldset>
</form>

EOD;
?>

		<h2>Källkoden<h2>
		
		<blockquote class="code">
<?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?>
		</blockquote>

	<h2>Ostylat</h2>
	<form method=post>
		<fieldset>
			<legend>Hantera Museum Objekt</legend>

			<label>Titel:<input type=text name=title></label>
			<label>Ingress:<textarea name=ingress></textarea></label>
			<label>Text:<textarea name=text></textarea></label>
			<label>Bild:<input type=url name=image></label>
			<label>Förvaltare:<input type=text name=trustee></label>
			<label>Ägare:<input type=text name=owner></label>
			<label>Bakgrund:<input type=text name=background></label>
			<label>Årtal:<input type=text name=year></label>
			
			<input type=reset value="Återställ">
			<input type=submit name=submit value="Spara">
	
		</fieldset>
	</form>

	<h2>Stylad enligt standard form</h2>
	<p>class=standard
	
	<form class=standard method=post>
		<fieldset>
			<legend>Hantera Museum Objekt</legend>

			<label>Titel:<input type=text name=title></label>
			<label>Ingress:<textarea name=ingress></textarea></label>
			<label>Text:<textarea name=text></textarea></label>
			<label>Bild:<input type=url name=image></label>
			<label>Förvaltare:<input type=text name=trustee></label>
			<label>Ägare:<input type=text name=owner></label>
			<label>Bakgrund:<input type=text name=background></label>
			<label>Årtal:<input type=text name=year></label>
			
			<input type=reset value="Återställ">
			<input type=submit name=submit value="Spara">
	
		</fieldset>
	</form>

<p>
<form method=post>
 <fieldset>
  <legend>Hantera Museum Objekt</legend>

  <label>Titel:<input type=text name=title></label>
  <label>Ingress:<textarea name=ingress></textarea></label>
  <label>Text:<textarea name=text></textarea></label>
  <label>Bild:<input type=url name=image></label>
  <label>Förvaltare:<input type=text name=trustee></label>
  <label>Ägare:<input type=text name=owner></label>
  <label>Bakgrund:<input type=text name=background></label>
  <label>Årtal:<input type=text name=year></label>
			
  <input type=reset value="Återställ">
  <input type=submit name=submit value="Spara">
	
 </fieldset>
</form>

<p>
    Titel/namn på objektet
    Ingress, en kortare och slagkraftig intro till objektet
    Text, en beskrivning av objektet
    Bild, en länk till en bild på objektet
    Förvaltare, vem förvaltar objektet för tillfället, det kan vara utlånat från ägaren
    Ägare, vem äger objektet
    Bakgrund, hur hittade objektet fram till dess nuvarande ägare och förvaltare 
Årtal, när skapades objektet, årtal, spann av år eller sekel.

Lägg dit en knapp för att spara och en knapp för att resetta formuläret.
				
	

	<?php include("byline.php"); ?>

</article>
</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

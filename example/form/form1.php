<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" media="all" type="text/css" href="forms.css" title="Mos standard form layout">
	<link rel="shortcut icon" href="../../img/favicon.ico">
 	<title>Exempel formulär, del 1</title>
</head>

<body>
	<form class="standard w600" method=post>
	 <fieldset>
		<legend>Hantera Museum Objekt</legend>
	
		<label>Id:<input type=number name=id placeholder="Id på objektet, en siffra "></label>
		<label>Titel:<input type=text name=title placeholder="Titel/namn på objektet"></label>
		<label>Ingress:<textarea name=ingress placeholder="Ingress, en kortare och slagkraftig intro till objektet"></textarea></label>
		<label>Text:<textarea name=text placeholder="Text, en beskrivning av objektet"></textarea></label>
		<label>Bild:<input type=url name=image placeholder="Bild, en länk till en bild på objektet"></label>
		<img src="<?php echo $obj['image']; ?>" alt="[Bild saknas]">
		<label>Årtal:<input type=text name=year placeholder="Årtal, när skapades objektet, årtal, spann av år eller sekel"></label>
		<label>Ägare:<input type=text name=owner placeholder="Ägare, vem äger objektet"></label>
		<label>Förvaltare:<input type=text name=trustee placeholder="Förvaltare, vem förvaltar objektet för tillfället"></label>
		<label>Bakgrund:<textarea name=background placeholder="Bakgrund, hur hittade objektet fram till dess nuvarande ägare och förvaltare"></textarea></label>
				
		<input type=reset value="Återställ" title="Återställ formuläret till dess ursprunliga läge">
		<input type=submit name=doSave value="Spara" title="Spara alla ändringar">
		
		<output>
			<?php
				error_reporting(-1);
				if(isset($_POST['doSave'])) {
					echo "Formuläret innehåller följande värden:<pre>";
					print_r($_POST);
					echo "</pre>";
				}
			?>
		</output>
		
	 </fieldset>
	</form>
	<p><a href="../../source.php?dir=example/form&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>

<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/glider.ico">
 	<title>Exempel på img-tag och stylning av den</title>
</head>

<body>

	<h3>Inkludera bild med img-taggen</h3>
	<p>Minsta möjliga kod för att få in en bild.
	<?php $code = '<img src="../../img/mikael1.jpg">' ?>	
	<p><code><?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?></code>
	<div><?php echo $code; ?></div>

	<h3>Använd alt-attributet (rekomenderas)</h3>
	<p>Använd alt-attributet för att representera bilden i läsare som inte visar bilder eller om bilden inte kan hämtas.
	I nedanstående exempel refereras till en bild som inte finns, därmed visas texten från alt-attributet.
	<?php $code = '<img src="../../img/mikaelx.jpg" alt="[Bild på Mikael]">' ?>	
	<p><code><?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?></code>
	<div><?php echo $code; ?></div>

	<h3>Använd width och heigth</h3>
	<p>Ge webbläsaren en ledtråd till bildens storlek med width och height-attibuten. Ange bildens 
	storlek i pixlar. Bäst är om width/height är bildens naturliga storlek, då slipper webbläsaren att 
	skala bilden. Men, med width/height går det att åstakomma skalning av en bild.
	<?php $code = '<img src="../../img/mikael1.jpg" alt="[Bild på Mikael]" width=100>' ?>	
	<p><code><?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?></code>
	<div><?php echo $code; ?></div>
	<?php $code = '<img src="../../img/mikael1.jpg" alt="[Bild på Mikael]" height=100>' ?>	
	<p><code><?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?></code>
	<div><?php echo $code; ?></div>
	<?php $code = '<img src="../../img/mikael1.jpg" alt="[Bild på Mikael]" width=200 height=50>' ?>	
	<p><code><?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?></code>
	<div><?php echo $code; ?></div>

	<h3>Använd bakgrundsbilder</h3>
	<p>En div, eller andra element, kan innehålla bakgrundsbilder. Det är tex bra i en header, footer
	eller som bakgrundsbild för body-taggen.
	<?php $code = '<div style="background:url(../../img/mikael1.jpg) right top no-repeat;border:1px solid black;"><p>Text<p>Text</div>' ?>	
	<p><code><?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?></code>
	<div><?php echo $code; ?></div>

	<h3>Omslut img med HTML5 figure och figcaption</h3>
	<p>I HTML5 finns en semantisk möjlighet att koppla bild och bildtext inom ett figure- och figcaption-element.
<?php 
$code = <<<EOD
<figure>
 <img src="../../img/mikael1.jpg" alt="[Bild på Mikael]">
 <figcaption>Mikael är glad</figcaption>
</figure>
EOD;
?>	
	<pre><?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?></pre>
	<div><?php echo $code; ?></div>
	
	<h3>Styla figure och figcaption</h3>
	<p>Med hjälp av stylesheeten kan du styla utseendet för figure och figcaption. 
	<p><a href="http://dbwebb.se/htmlphp/me/de_20_vanligaste_css_konstruktionerna.php?#figure">Se exempel på stylning av figure i CSS-20</a>	

	<p><a href="../../source.php?dir=example&file=<?php echo basename(__FILE__); ?>"><em>Källkod</em></a>
</body>
</html>

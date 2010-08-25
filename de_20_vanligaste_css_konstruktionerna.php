<?php
$css20 = "style/css-20/";

if(isset($_GET['style'])) {
	$file = $css20 . $_GET['style'] . ".css";

	if(is_readable($file)) {
		$head = "<style type='text/css'>" . file_get_contents($file) . "</style>"; 
	} else {
		die("Failed: File '" . $_GET['style'] . "' does not exists.");
	}
}
?>

<?php
$title = "Enligt 80-20-regeln, vilka är de vanligaste CSS-konstruktionerna?";
$bodyId = "css20";
include("header.php");
?>

<!-- - - - - - - - - - - - - - - - - - wrap whole content - - - - - - - - - - - - - - -->
<div id="wrap">

<!-- - - - - - - - - - - - - - - - - - aside        - - - - - - - - - - - - - - - - - -->
<aside class="right">
	<?php include("de_20_vanligaste_aside.php"); ?>
</aside>

<!-- - - - - - - - - - - - - - - - - - article      - - - - - - - - - - - - - - - - - -->
<article>
	<header id="start">
		<h1>Vilka är de vanligaste CSS-konstruktionerna?</h1>

			<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-08-18">18:e 
			augusti 2010</time>

			<p class="ingress">Vilka är de 20% CSS-konstruktioner som troligtvis står för 80% av 
			användarfallen? Det beror 
			på vem man frågar och här kommer därför min egen lista på de element som 
			<strong>gäller för mig</strong>. Lär dig dessa och du
			har kommit en bit på vägen att bemästra CSS.

			<h4><a href="#part-I">Del I: Styla sidans struktur</a></h4>
			<ul>
				<li><a href="#struc-body">body</a>
				<li><a href="#header-top">header#top</a>
				<li><a href="#footer-bottom">footer#bottom</a>
				<li><a href="#nav">nav</a>
				<li><a href="#div-wrap">div#wrap</a>
				<li><a href="#clearer">clearer</a>
			</ul>

			<h4><a href="#part-II">Del II: Styla sidans presentation</a></h4>
			<ul>
				<li><a href="#style-body">body, p och h1-h6</a>
				<li><a href="#a">a</a>
				<li><a href="#figure">figure och img</a>
				<li><a href="#blockquote">blockquote</a>
			</ul>

			<h4><a href="#part-III">Del III: Bra att kunna</a></h4>
			<ul>
				<li><a href="#style-alternate">Alternativa stylesheet</a>
				<li><a href="#print">Stylesheet för print</a>
				<li><a href="#more">Mer jag kanske borde förklara</a>
			</ul>

	</header>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="part-I">
		<header>
			<h2>Del I: Styla sidans struktur</h2>
			
			<p class="ingress">Hur vill vi disponera sidan? Var vill vi att de olika delarna skall
			synas? Sidornas grundstruktur är ofta liknande, det finns ett antal olika varianter 
			som återkommer. Låt oss ta en titt på de vanligaste förekommande varianterna.
		</header>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="struc-body"> 
		<h3>body</h3>
		
		<p>Body är det som omfamnar hela sidan. Genom att styla body kan vi bestämma hur sidan är
		justerad i läsaren. Ofta väljer vi mellan att centrera sidan eller låta den vara som den
		är från början, dvs vänster-justerad. Det går att justera hela sidans bredd i body men det kan 
		vara bra att överlämna det till kommande element.
		
		<p>I specifikationen ser vi att body har en default stil där margins är specificerad. Om vi 
		inte vill ha det så får vi omspecificera det.
		
		<p>Exempel på vänsterjusterad sida där default margins är borttaget.
		<a href="?style=body_margin_0#struc-body">Testa</a>

		<blockquote class="code">
<?php include("$css20/body_margin_0.css"); ?>
		</blockquote>

		<p>Exempel på centrerad sida. Ändra läsarens storlek för att testa. 
		<a href="?style=body_margin_auto#struc-body">Testa</a>	

		<blockquote class="code">
<?php include("$css20/body_margin_auto.css"); ?>
		</blockquote>

		<p><a href="?#struc-body">Återgå till ursprunglig style</a>	

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a>
	</section>
		
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="header-top"> 
		<h3>header#top</h3>
		
		<p>En sidas header innehåller vanligen en bild, webbplatsens namn och en navigeringsbar 
		med länkar till webbplatsens innehåll.
		
		<p>Exempel på html-kod för en sidas header.

<?php
$code = <<<EOD
<header id="top1">
	<img src="img/logo.png" alt="htmlphp me" width=200 height=100>
	<p>Min Me-site för kursen htmlphp</p>
	<nav>
		<a href="me.php">Me</a> 
		<a href="report.php">Redovisning</a> 
		<a href="de_20_vanligaste_html_elementen.php">HTML-20</a> 
		<a href="de_20_vanligaste_css_konstruktionerna.php">CSS-20</a> 
	</nav>
</header>
EOD;
?>
		
		<blockquote id="top-example" class="code">
<?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?>
		</blockquote>

		<div class="example">
			<?php echo $code; ?>
		</div>

		<p>Exempel på stylad header. 
		<a href="?style=header1#top-example">Testa</a>	

		<blockquote class="code">
<?php include("$css20/header1.css"); ?>
		</blockquote>

		<p><a href="?#top-example">Återgå till ursprunglig style</a>
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a>
	</section>
		
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="footer-bottom"> 
		<h3>footer#bottom</h3>
		
		<p>En sidas footer brukar innehålla information om platsens ägare, privacy, licens och liknande.
		Den kan även innehålla länksamlingar till webbplatsen eller andra siter. Stylning av footer
		sker på liknande sätt som stylning av header.

		<p>Exempel på html-kod för en sidas footer.

<?php
$code = <<<EOD
<footer id="bottom1">
	<nav>
		<a href="">Copyright</a> 
		<a href="">Privacy policy</a>
		<a href="">Lega notices</a>
	</nav>

	<p>Except where otherwise noted, content on this site is licensed under the
	Creative Commons Attribution Share-Alike License v3.0 or any later version.

<p><pre>
.                        
..:  &copy; 2010 Mikael Roos
</pre>

</footer>
EOD;
?>
		
		<blockquote id="bottom-example" class="code">
<?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?>
		</blockquote>

		<div class="example">
			<?php echo $code; ?>
		</div>

		<p>Exempel på stylad header. 
		<a href="?style=footer1#bottom-example">Testa</a>	

		<blockquote class="code">
<?php include("$css20/footer1.css"); ?>
		</blockquote>

		<p><a href="?#bottom-example">Återgå till ursprunglig style</a>	

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="nav"> 
		<h3>nav</h3>
		
		<p>Att samla länkar inom ett nav-element ger vägledning till att det är en samling 
		länkar för navigation. Det ger också en möjlighet att styla länksamlingen.

		<p>Exempel på html-kod för en samling navigationslänkar.

<?php
$code = <<<EOD
<nav id="n1">
	<a href="me.php">Me</a> 
	<a href="report.php">Redovisning</a> 
	<a href="de_20_vanligaste_html_elementen.php">HTML-20</a> 
	<a href="de_20_vanligaste_css_konstruktionerna.php">CSS-20</a> 
</nav>
EOD;
?>
		
		<blockquote id="nav-example" class="code">
<?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?>
		</blockquote>

		<div class="example">
			<?php echo $code; ?>
		</div>

		<p>Exempel på stylad länksamling som en "navigation bar". 
		<a href="?style=nav1#nav-example">Testa</a>	

		<blockquote class="code">
<?php include("$css20/nav1.css"); ?>
		</blockquote>

		<p>Exempel på länksamling stylad som lista. 
		<a href="?style=nav2#nav-example">Testa</a>	

		<blockquote class="code">
<?php include("$css20/nav2.css"); ?>
		</blockquote>

		<p><a href="?#nav-example">Återgå till ursprunglig style</a>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="div-wrap"> 
		<h3>div#wrap</h3>
		
		<p>Det kan vara bra att använda en wrapper kring det huvudsakliga dokumentet. Det kan
		underlätta stylning och positionering av de olika delarna på sidan. Speciellt underlättar
		det om du vill ha flera kolumner på sidan.
		
		<p>En wrapper används för att uppnå 2- eller 3-kolumners sidor och det går att använda 
		för att positionera en aside jämte en article. Kort och gott, en wrapper kan underlätta.
		
		<p>Om du inte behöver en wrapper så ska du naturligtvis inte använda den. Ju färre element
		desto färre felkällor.

		<p>Exempel på html-kod där en wrapper används.

<?php
$code = <<<EOD
<div id="wrapper">
	<aside>
		<p>Något vid sidan om</p>
	</aside>
	<article>
		<p>En artikel skriven av mig.</p>
	</article>
</div>

EOD;
?>
		
		<blockquote  id="wrapper-example" class="code">
<?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?>
		</blockquote>

		<div class="example">
			<?php echo $code; ?>
		</div>
		
		<p>Exempel 1. <a href="?style=wrapper1#wrapper-example">Testa</a>	

		<blockquote class="code">
<?php include("$css20/wrapper1.css"); ?>
		</blockquote>

		<p>Exempel 2. <a href="?style=wrapper2#wrapper-example">Testa</a>	

		<blockquote class="code">
<?php include("$css20/wrapper2.css"); ?>
		</blockquote>

		<p>Exempel 3. <a href="?style=wrapper3#wrapper-example">Testa</a>	

		<blockquote class="code">
<?php include("$css20/wrapper3.css"); ?>
		</blockquote>

		<p><a href="?#wrapper-example">Återgå till ursprunglig style</a>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="clearer"> 
		<h3>clearer</h3>
		
		<p>Vid användning av flytande divs kan det behövas en och annan "clearer". Det behövs
		när en div omsluter en annan div vars storlek (höjd) är större än den div som omsluter.
		Det har presenterats flera lösningar/fixar på detta och för egen del så finner jag en lösning
		bestående av <code>overflow:auto</code> som en tilltalande variant. Den tilltalar mig eftersom 
		den är ren CSS och jag behöver inte skräpa ned min HTML-kod med extra fix-element.
		
		<p>Du kan läsa lite om problemställningen och olika varianter på lösningar i följande artikel.
		Eller googla på "clear floats".

		<blockquote>
			<a href="http://www.sitepoint.com/blogs/2005/02/26/simple-clearing-of-floats/">http://www.sitepoint.com/blogs/2005/02/26/simple-clearing-of-floats/</a>
		</blockquote>
		
		<p>Nedanstående exempel visar på två divs där ovan nämnda lösning används.

<?php
$code = <<<EOD
<div id="outer">
	<div id="inner">
		<p>Detta är texten i inner-div, om den är lång så kan fenomenet uppstå där
		outer-div inte omsluter den.
	</div>
	<p>Detta är outer-div som vilken vi vill skall omsluta inner-div.
</div>

EOD;
?>
		
		<blockquote id="clearer-example" class="code">
<?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?>
		</blockquote>

		<div class="example">
			<?php echo $code; ?>
		</div>
		
		<p>Exempel 1 utan <code>overflow:auto;</code>. <a href="?style=clearer1#clearer-example">Testa</a>	

		<blockquote class="code">
<?php include("$css20/clearer1.css"); ?>
		</blockquote>

		<p>Exempel 2 med <code>overflow:auto;</code>. <a href="?style=clearer2#clearer-example">Testa</a>	

		<blockquote class="code">
<?php include("$css20/clearer2.css"); ?>
		</blockquote>

		<p><a href="?#clearer-example">Återgå till ursprunglig style</a>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="part-II">
		<header>
			<h2>Del II: Styla sidans presentation</h2>
			
			<p class="ingress">Det handlar om färger, fonter och stilen. Vilken känsla vill vi
			användarna skall få när de besöker siten? Detta kan vi justera med webbplatsens
			"look &amp; feel". Det handlar om användarens upplevelse.
			
			<p>Följande kapitel ger en liten vägledning in i hur webbplatsen kan stylas och hur detta
			kan ske med några enkla CSS-konstruktioner.

		</header>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="style-body"> 
		<h3>body, p och h1-h6</h3>
		
		<p>Eftersom body är det element som omfamnar hela sidan så kan vi enkelt styla hela webbplatsens
		grundutseende via body. Kanske med en bakgrundsfärg eller bild.
		
		<p>Underliggande taggar ärver ofta (inte alltid) attribut av parents (föräldrar). Det 
		innebär att om vi sätter en font i body så gäller denna font även för p, a och h1-h6.
		
		<p>Exempel 1 med font och bakgrund definerat i body.
		<a href="?style=body1#style-body">Testa</a>

		<blockquote class="code">
<?php include("$css20/body1.css"); ?>
		</blockquote>

		<p>Exempel 2 med ändrad font för h1-h6, p och a.
		<a href="?style=body2#style-body">Testa</a>

		<blockquote class="code">
<?php include("$css20/body2.css"); ?>
		</blockquote>

		<p>Försök hela tiden skriva din CSS-kod så att det blir enkelt att göra ändringar.
		Optimalt är att du endast behöver ändra på ett ställe i stylesheeten för att tex ändra
		font.
		
		<p><a href="?#style-body">Återgå till ursprunglig style</a>	

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a>
	</section>
		
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="a"> 
		<h3>a</h3>
		
		<p>Ovan har vi sett exempel på hur länkar kan stylas i länksamlingar eller som en
		navigationbar. När länkar förekommer i löpande text så är det bra att att styla dem så 
		att texten blir lättläst utan att länkarna blir svåra att upptäcka.
		
		<p>Länkarna stylas olika beroende på vilket läge som gäller för länken. Varje läge kan
		stylas individuellt. Det räcker med att style förändringarna i respektive läge.
		
		<p>Exempel 1 med font och bakgrund definerat i body.
		<a href="?style=a1#a">Testa</a>

		<blockquote class="code">
<?php include("$css20/a1.css"); ?>
		</blockquote>

		<p>Krångla inte till det, det viktigaste är att användaren kan se att det är en klickbar länk.
		Fundera 2 extra gånger innan du tar bort understrykningen av en länk, det är understrykningen 
		som kännetecknar länken i ett textflöde.
		
		<p><a href="?#a">Återgå till ursprunglig style</a>	

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a>
	</section>
		
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="figure"> 
		<h3>figure och img</h3>

<?php
$code = <<<EOD
<figure id="f1">
	<img src="img/mikael1.jpg">
	<figcaption>Mos vid datorn, se så glad han är</figcaption>
</figure>

EOD;
?>
		
		<p>Ofta vill man visa bilder tillsammans med en undertext. HTML-elementen figure och figcaption
		är till för detta. Genom att styla dem kan man presentera dem på olika sätt.
		
		<blockquote class="code">
<?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?>
		</blockquote>

		<?php echo $code; ?>
		
		<p>Exempel 1.
		<a href="?style=figure1#figure">Testa</a>

		<blockquote class="code">
<?php include("$css20/figure1.css"); ?>
		</blockquote>

		<p>Exempel 2.
		<a href="?style=figure2#figure">Testa</a>

		<blockquote class="code">
<?php include("$css20/figure2.css"); ?>
		</blockquote>

		<p><a href="?#figure">Återgå till ursprunglig style</a>	

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a>
	</section>
		
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="blockquote"> 
		<h3>blockquote</h3>

<?php
$code = <<<EOD
<blockquote id="b1">
 Det här är källkod eller ett vackert citat, det beror på hur man stylar det.
</blockquote>

EOD;
?>
		
		<p>När man vill intendera text, i förhållande till den löpande texten, 
		så är blockquote ett bra element. I sin standardutförande
		så ger det en viss intendering. Med lite stylning så passar det dessutom bra för att 
		visa källkod eller citat.
		
		<blockquote class="code">
<?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?>
		</blockquote>

		<?php echo $code; ?>
		
		<p>Exempel 1, stylad för citat.
		<a href="?style=block1#blockquote">Testa</a>

		<blockquote class="code">
<?php include("$css20/block1.css"); ?>
		</blockquote>

		<p>Exempel 2, stylad för källkod.
		<a href="?style=block2#blockquote">Testa</a>

		<blockquote class="code">
<?php include("$css20/block2.css"); ?>
		</blockquote>

		<p>Exempel 3, stylad för källkod med begränsad bredd.
		<a href="?style=block3#blockquote">Testa</a>

		<blockquote class="code">
<?php include("$css20/block3.css"); ?>
		</blockquote>

		<p><a href="?#blockquote">Återgå till ursprunglig style</a>	

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a>
	</section>
		
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="part-III">
		<header>
			<h2>Del III: Bra att kunna</h2>
			
			<p class="ingress">Det finns så mycket bra-att-veta-saker när det rör sig om CSS.
			Det är ett stort område och oerhört viktigt för att ge användaren en bra upplevelse när de
			besöker våra webbplatser. nedan följer ett par saker som är bra att kunna. Kanske
			kan det underlätta ditt arbete med stylesheets.
			
		</header>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="style-alternate"> 
		<h3>Alternativa stylesheet</h3>
		
		<p>I head-elementet går det att specificera alternativa stylesheets. 
		Detta ger möjlighet att ändra stylesheet i browsern på klientsidan och det blir enkelt
		att komma åt och testa de olika stylesheeten.

		<p>Ett bra sätt, när man konstruerar stylesheets, är att 
		utgå från en grundstylesheet och sedan lägga till variationer i ytterligare stylesheets.
		Själva grundstylesheeten kan då importeras in i den nya stylesheeten. 
		<a href="style/stylesheet_red.css">Se följande länk för ett exempel</a>.

		<p>Till denna sidan finns ett par alternativa stylesheets. Byt dem i din webbläsares
		meny (Firefox - View - Page Style).

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="print"> 
		<h3>Stylesheet för print</h3>
		
		<p>Visst vore det bra om det gick att skriva ut denna artikel på en skrivare. Det vore
		ännu bättre om sidan då var stylad för just det syftet.
		Detta gör vi med en stylesheet som är dedikerad för printer-syftet.

		<p>Följande kod länkar in stylesheeten och anger vilken media som skall gälla.
		
		<blockquote class="code">
&lt;link rel="stylesheet" media="all" href="style/stylesheet.css" title="Mos standard grey" type="text/css"&gt;
&lt;link rel="stylesheet" media="print" href="style/print.css" type="text/css"&gt;
			</blockquote>

		<p>Genom att definera vilken media som skall gälla för stylesheeten så kan vi importera 
		en speciell stylesheet när sidan skrivs ut. I denna stylesheet, <code>print.css</code>, kan vi ta bort de 
		element som vi inte vill skriva ut.
		<a href="style/print.css">Se följande länk för ett exempel på <code>print.css</code></a>.

		<p>Testa att skriva ut denna sida. Det räcker att förhandsgranska utskriften.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="more"> 
		<h3>Mer jag kanske borde förklara</h3>
		
		<p>Som min egen kom-ihåg-lista så skriver jag ned de CSS-konstruktioner som kanske borde
		haft en egen sektion i denna artikel. Men tills vidare blir de endast omnämnda.

		<ul>
			<li>article
			<li>aside
			<li>2 kolumner
			<li>3 kolumner
			<li>Tabeller
			<li>Forms
			<li>Stylesheet för mobil
			<li>Verktyg vid utveckling av stylesheet (Web Developer och Firebug)
		</ul>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a>
	</section>

<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
	<?php include("byline.php"); ?>
	
</article>

</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

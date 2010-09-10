<?php 
$title = "Leveransplanering av Museum Online";
$bodyId = "proj-lev"; // Set id of the body to enable tracking current page and display in navbar
include("header.php"); 
include("header_projekt.php"); 
?>

<!-- Here is the actual content of the page-->
<div id="wrap">

	<aside class="right">
	</aside>

	<article>
<!-- *********************    Section ******************************************************** -->
		<section>
			<header>
				<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-08-19">19:e 
				augusti 2010</time></p>
				<h1>Leveransplanering</h1>
			</header>
			
			<p>Projektets är indelat i leveranser. Varje leverans har ett syfte och ett innehåll.
			
			<ul>
				<li><a href="#lev01">Leverans 1: En Outline till Begravningsmuseum Online</a>
				<li><a href="#lev02">Leverans 2: Skapa och Editera Museum Objekt</a>
			</ul>
		</section>
		
<!-- *********************    Section ******************************************************** -->
		<section id="lev01">
			<hgroup>
				<h2>Leverans 1: En Outline till Begravningsmuseum Online</h2>
				<h3>Syfte</h3>
			</hgroup>
			
			<p>Leveransens huvudsakliga syfte är att:
			<ul>
				<li>Ge kunden något att titta på och tycka till om. Vi vill att kunden blir involverad i projektet.
			</ul>
					
			<h3>Innehåll</h3>
						
			<p>Leveransens huvudsakliga innehåll är:
			<ul>
				<li>Ett skal till webbplatsen med header, navigering och footer.		
				<li>Utkast på webbplatsens första sida (home).
				<li>Utkast på webbplatsens info sida (about).
				<li>Använd material från följande artikel för att komma igång.
				<ul>
					<li><a href="begravningsseder_och_bruk.php">Begravningsseder och bruk</a>
				</ul>
				<li>Tre utkast till varianter på stylesheets.
				<ul>
					<li>Development: Enkel och ren. Vit bakgrund, inga bilder eller grafiska objekt.
					<li>SKKF: Samma färg, font, look&amp;feel som finns på SKKF's hemsida.
					<li>Personal: En vågad stylesheet efter ditt eget tycke och smak. Utmanande, stilig eller urflippad. Du väljer själv. 
				</ul>
			</ul>

			<h3>Tips från coachen</h3>
			
			<p>Webbplatsens titel är "Begravningsmuseum Online".
			
			<p>Använd din egen kunskap om vad ett traditionellt museum är. Ta denna kunskap och överför till ett museum online.
			Museumet är till för att presentera objekt och berätta historier. Detta sker ofta via olika utställningar där
			varje utställning ofta har ett tema. 
			
			<p>Pröva att googla på "Online museum", kanske finns det någon som gjort liknande saker där du kan hämta inspiration?
			<blockquote>
				<a href="http://www.google.com/search?q=+museum+online">Googla på Museum Online</a>
			</blockquote>
			
			<p>När det gäller förstasidan kan du hämta inspiration från följande förstasidor. Om du har svårt att själv klura ut
			en förstasida så kan du helt frankt kopiera upplägget som finns på Firefox förstasida.
			<ul>
				<li><a href="http://www.firefox.com">www.firefox.com</a>
				<li><a href="http://www.skype.se">www.skype.se</a>
			</ul>

			<p>Gör en enkel about-sida. Skriv att du gör detta som ett studentarbete i kursen htmlphp och vad webbplatsens är till för.
			Du kan fylla på med text senare.
			
			<p>Använd material från texten om <a href="begravningsseder_och_bruk.php">Begravningsseder och bruk</a>
			för att hämta inspiration samt skapa ett första utkast till Begravningsmuseum Online.
			</p>			
		</section>
		
<!-- *********************    Section ******************************************************** -->
		<section id="lev02">
			<hgroup>
				<h2>Leverans 2: Skapa och Editera Museum Objekt</h2>
				<h3>Syfte</h3>
			</hgroup>
			
			<p>Leveransens huvudsakliga syfte är att:
			<ul>
				<li>Ge kunden möjlighet att själv ladda upp och editera objekt till muséet.
			</ul>
				
			<h3>Innehåll</h3>
						
			<p>Leveransens huvudsakliga innehåll är:
			<ul>
				<li>Ett formulär för hantering av Museum Objekt, integrerad i siten Begravningsmuseum Online.
				<li>Med formuläret kan kunden skapa nya objekt och spara dem på disk.
				<li>Objekten kan editeras och uppdateras av kunden.
				<li>Det skall finnas en enkel sida som presenterar ett Museum Objekt utifrån dess innehåll.
			</ul>

			<h3>Tips från coachen</h3>
			
			<p>Gör hela kursmomentet innan du hoppar på leveransen. Gör formuläret så som det görs i kursmomentet.
			
			<p>Gör ytterligare en vanlig sida som läser in ett objekt utifrån en $_GET-variabel (id). Denna sidan
			presenterar sedan objektet i html-kod, inte som formulär.
			
			<p>Bygg ut ditt Begravningsmuseum och visa upp minst 3 av de objekt som finns tillgängliga på följande länk. 
			<a href="http://dbwebb.se/htmlphp/me/objekt_begravningsmuseum">Objekt till Begravningsmuseum</a>
			
			<p>Att ladda upp filer (bilder) eller skydda inmatningen med lösenord (se instruktionen för kursmomentet) 
			är ren överkurs och görs bara av de som vill, vågar och orkar.
			
		</section>			
			

		<?php include("byline.php"); ?>
				
	</article>
	
</div> <!-- wrapper -->

<?php include("footer.php"); ?>

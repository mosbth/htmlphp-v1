<?php
$title = "En introduktion till att styla din webbplats med CSS och Stylesheets";
$bodyId = "guide-style20";
include("header.php");
include("header_guider.php");
?>

<!-- - - - - - - - - - - - - - - - - - wrap whole content - - - - - - - - - - - - - - -->
<div id="wrap">

<!-- - - - - - - - - - - - - - - - - - aside        - - - - - - - - - - - - - - - - - -->
<aside class="right">
	<aside class=box>
		<h4>Style! på dbwebb.se/style</h4>
		<p>Ett verktyg för att underlätta utveckling av html och css-kod. Skriv in dina konstruktioner
		och skicka länken till en kollega för att få feedback, hjälp eller bara för att dela med dig
		av en schysst css-konstruktion.
		<p><a href="http://dbwebb.se/style">Style! på dbwebb.se</a>
		</p>
	</aside>
	<aside class=box>
		<h4>Firebug</h4>
		<p>Firebug är en addon till Firefox som hjälper dig vid webbutveckling. Med Firebug kan du
		undersöka html-element och style på en webbplats.
		<p><a href="http://getfirebug.com/">Läs om (och installera) Firebug</a>
		</p>
	</aside>
	<aside class=box>
		<h4>Web Developer</h4>
		<p>Web Developer är en addon till Firefox som hjälper dig vid webbutveckling. 
		<p><a href="https://addons.mozilla.org/en-US/firefox/addon/60/">Läs om (och installera) Web Developer</a>
		</p>
	</aside>
	<aside class=box>
		<h4>ColorZilla</h4>
		<p>ColorZilla är en "colorpicker" och addon till Firefox. Den kan hjälpa dig att hitta de färgkoder som används på en webbplats.
		<p><a href="https://addons.mozilla.org/en-US/firefox/addon/271/">Läs om (och installera) ColorZilla</a>
		</p>
	</aside>
</aside>

<!-- - - - - - - - - - - - - - - - - - article      - - - - - - - - - - - - - - - - - -->
<article>
	<header id="start">
		<h1>Styla med CSS och stylesheets</h1>

			<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-10-14">14:e 
			oktober 2010</time>

			<p class="ingress">En introduktion för att styla din webbplats med CSS och Stylesheets.
			
			<p>Style-20 visar hur du kan tänka när du stylar din webbplats. Med hjälp av <a href="http://dbwebb.se/style">
			verktyget Style!</a> kan du se och testa varianter på stylning. Ett exempel gås igenom
			där en webbplats byggs upp för Anders P. Bygg. Du får se grunderna i layout med CSS och du har möjlighet 
			att studera mer avancerade exempel av styling. 
			
			<p>Verktyget Style! kan fungera lite som en clipart av CSS-kod. Vill du bidra med
			ett exempel så skriver du in det i Style!, sparar det och mailar länken till mig på mos@bth.se.
			
			<p>Bästa sättet att genomföra övningen är att du själv går igenom och studerar alla exemplen. 
			Parallellt med det testar du att bygga upp en egen stylesheet för en tänkt webbplats.
			Läsa är bra men man måste göra själv, "kan själv", för att lära sig.
			
			<ol>
				<li><a href="#s1">Style! på dbwebb.se/style</a>
				<li><a href="#s2">Struktur och modulärt tänkande med stylesheets</a>
				<li><a href="#s3">CSS box modell</a>
				<li><a href="#s4">CSS floating</a>
				<li><a href="#s5">Storlekar i CSS</a>
				<li><a href="#s6">CSS positionering</a>
				<li><a href="#s7">Styla en webbplats: Anders P. Bygg</a>
				<li><a href="#s8">Styla en webbplats: Skapa sidans grundstruktur</a>
				<li><a href="#s9">Styla en webbplats: Layout med 1, 2 eller 3 kolumner</a>
				<li><a href="#s10">Styla en webbplats: Layout med article och aside</a>
				<li><a href="#s11">Styla en webbplats: Fixa till header och footer</a>
				<li><a href="#s12">Styla en webbplats: Styla med bakgrundsbilder</a>
				<li><a href="#s13">Styla en webbplats: Varianter på navigation bar</a>
				<li><a href="#s14">Styla en webbplats: Breadcrumb som navigering</a>
				<li><a href="#s15">Styla en webbplats: Klar!</a>
				<li><a href="#s16">Klar</a>
			</ol>

	</header>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s1">
		<h2>1. Style! på dbwebb.se/style</h2>			
		<p>Style! är ett verktyg som underlättar att testa olika varianter på styles och CSS-konstruktioner. 
		Du skriver in din HTML-kod och CSS-kod. 
		Direkt visas representationen i din webbläsare. Du kan spara nuvarande kod och länka till den.
		
		<p><a href="http://dbwebb.se/style">Länk till styling-verktyget Style!</a>
		
		<p>Style! kan hjälpa dig med felsökningar om du har problem men en viss CSS-konstruktion. Skriv in html/css i verktyget,
		spara och skicka länken och be dina kompisar om hjälp. Det är ett bra sätt att få hjälp genom att direkt visa på problemställningen.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s2">
		<h2>2. Struktur och modulärt tänkande med stylesheets</h2>

		<p>En stylesheet kan lätt bli stor och oöverskådlig. Det är bra att ha en viss grundstruktur och
		ett modulärt tänkande.
		
		<p>I denna guide så använder vi oss av @import-direktivet för att använda CSS-konstruktioner som
		vi tidigare skapat. Det blir en form av återanvändning. På detta sätt uppnås en grundstruktur där det 
		går att återanvända CSS-konstruktioner i form av mindre moduler. 
		
		<p>Tanken är att bygga sin webbplats på ett par generella styling-idéer och inkludera dem i en
		grundstylesheet. Därefter görs styling mer specifik och man lägger till färger och variationer beroende
		på vad webbplatsen är till för. Man importerar helt enkelt grundstylen med @import och sätter 
		därefter en färgskala.
		
		<p>@import-direktivet stöds i Style!, se följande exempel hur en befintlig style återanvänds.
		
		<p><a href="http://dbwebb.se/style/?id=39">Befintligt exempel</a>

		<p><a href="http://dbwebb.se/style/?id=66">Uppdaterat exempel som importerar befintlig style och ändrar färgen till gul</a>

		<p>@import kan vara speciellt bra i ett uppbyggnadsskede. När siten går i drift kan man överväga
		att lägga all style i en stylesheet. Det går att hävda att man slipper ett antal fil-referenser om man 
		tar bort @import-direktiven och inkluderar koden i en stylesheet. Men för egen del så kan jag
		tänka mig att drifta siter även med @import-direktiv. I dessa fall vill jag hävda att koden bli lättare
		att underhålla och vidarutveckla. Men, detta är något som går att diskutera.
				
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s3">
		<h2>3. CSS box modell</h2>
		
		<p>I CSS finns något som heter "box model". Det är en modell för hur margins, border och padding
		blir till en box. CSS box modell är ett grundkoncept som man behöver förstå för att få grepp om hur 
		storlekar beräknas och vad som bestämmer "hur bred en div är".
		
		<p>I nedanstående länk (CSS-specen om box model) visas en översiktlig bild av hur margin, border, padding och content
		förhåller sig till varandra.
		
		<p><a href="http://www.w3.org/TR/CSS2/box.html">CSS box modell förklarat i CSS-specen</a>
				
		<p>I Style! finns ett exempel som visar dels en representation av CSS box modell och dels
		exempel där varianter på margin, border och padding visas.
		
		<p><a href="http://dbwebb.se/style/?id=67">Exempel på CSS box modell med margin, border och padding</a>		
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s4">
		<h2>4. CSS floating</h2>
		
		<p>Med floating kan du bestämma hur ett element "flyter" med och positionerar sig i förhållande till
		övriga element. Du kan floata ett element till höger eller vänster. När du vill "stänga av" så
		gör du <code>clear:both</code>.
		
		<p>Studera följande exempel för att se hur float kan användas.
		
		<p><a href="http://dbwebb.se/style/?id=77">Text med rutor som texten omringar</a>		

		<p><a href="http://dbwebb.se/style/?id=78">Fotoalbum med floating thumbnails</a>		
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>
	
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s5">
		<h2>5. Storlekar i CSS</h2>
		
		<p>Det finns många olika sätt att ange storlekar i CSS. När vi pratar webbplatser som visas i en 
		traditionell datorskärm (screen) så är de vanligaste storleksangivelserna %, px och em.
		
		<p>Em är en storlek som är relativ fontstorleken. <a href="http://en.wikipedia.org/wiki/Em_%28typography%29">Läs om em på Wikipedia</a>

		<p>Pixel (px) är en pixel på din skärm. Det är också minsta beståndsdelen av en rasterbild. <a href="http://en.wikipedia.org/wiki/Pixel">Läs om pixels på Wikipedia</a>

		<p>Procent (%) är en procentuell del av den tillgängliga storleken. 100% är den totala storleken.

		<p><a href="http://dbwebb.se/style/?id=80">Exempel på storleksangivelser med em, px och %</a>
	
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>
	
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s6">
		<h2>6. CSS positionering</h2>
		
		<p>Med positionering kan man placera objekt på olika platser på skärmen. Följande varianter 
		finns av positionering.
		
		<ul>
		<li>Static: Default, elementen positioneras enligt det normala flödet.
		<li>Fixed: Elementet positioners relativt browsern och finns inte med i det normala flödet.
		<li>Relative: Elementet positioneras relativt sin normala position i det normala flödet.
		<li>Absolute: Elementen finns inte med i det normala flödet och positioneras relativt parent element som har
		en positioneringstyp skild från static.
		<li>Overlapping: Om ett element positioneras utanför det normala flödet så kan det även överlappa
		andra element genom att justera dess z-index.
		</ul>

		<p><a href="http://dbwebb.se/style/?id=96">Exempel på positionering</a>
		
		<p><a href="http://dbwebb.se/style/?id=97">Exempel på positionering med z-index</a>
						
		<p>En komplett bild av positionering och hur det får håller sig till float och display, 
		ges i <a href="http://www.w3.org/TR/CSS2/visuren.html">CSS-specen (Visual formatting model)</a>.
		
		<p>En mer populärvetenskaplig presentation, av positionering, får vi på W3Schools. 
		Läs om <a href="http://www.w3schools.com/css/css_positioning.asp">positionering på W3Schools</a>.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s7">
		<h2>7. Styla en webbplats: Anders P. Bygg</h2>
	
		<p>Låt oss gå genom ett exempel där vi stylar en webbplats till Anders P. Bygg. En vanlig webbplats
		där snickaren Anders P. kan presentera sin firma och dess tjänster.
		
		<p>När vi är klara kommer det se ut så här: 
		<a href="http://dbwebb.se/style/?id=95&amp;htmlcss">Den färdiga webbplatsen för Anders P. Bygg</a>.
		
		<p>Är du redo att bygga den webbplatsen steg för steg? Då kör vi.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s8">
		<h2>8. Styla en webbplats: Skapa sidans grundstruktur</h2>
	
		<p>De element som bygger upp en sidas grundstruktur diskuteras i <a href="de_20_vanligaste_css_konstruktionerna.php">CSS-20</a>.
		Det handlar om header, navbar, content-div och footer.
		
		<p>Låt oss göra ett exempel där vi bygger en webbplats till snickarfirman Anders P. Bygg.
		Vi börjar med att strukturera sidan och efterhand fyller vi den med information. 
		Följande exempel bygger upp grundstrukturen på sidan.
		
		<p><a href="http://dbwebb.se/style/?id=65">Grundstruktur med header, navbar, content och footer</a>
		
		<p>Ovanstående sida använder hela webbläsarens bredd. Ibland vill man ha en centrerad layout där sidan har en fix bredd.
		Låt oss göra ett exempel på centrerad layout och se hur stylesheeten ändras.
		
		<p><a href="http://dbwebb.se/style/?id=70">Grundstruktur centrerad med fast bredd</a>
		
		<p>Som du kan se i exemplet så används @import för att importera en tidigare style och sedan 
		endast tillföra de ändringar som krävs. Samma teknik kommer användas genomgående i exemplet.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s9">
		<h2>9. Styla en webbplats: Layout med 1, 2 eller 3 kolumner</h2>
		
		<p>Ett vanligt sätt att bygga webbplatser är att dela in sidan i kolumner. En huvudkolumn
		och en eller två sidokolumner som kan innehålla länkar, menyer eller relaterad information.
		
		<p>Vi utökar webbplatsen för Anders P. Bygg med lite olika förslag på kolumnlayout.

		<p><a href="http://dbwebb.se/style/?id=72">2 kolumner, meny-kolumn till vänster</a>		
		<p><a href="http://dbwebb.se/style/?id=73">2 kolumner, info-kolumn till höger</a>		
		<p><a href="http://dbwebb.se/style/?id=74">3 kolumner</a>		
		
		<p>Ovanstående kolumnlayout bygger på %. Ett annat sätt är att bestämma stoleken på kolumnerna
		i antal pixels. Principen för hur man bygger med kolumner är dock densamma. Uppmärksamma att
		vi behöver en clearer, annars sträcker sig kolumnerna inte över sitt fulla utrymme. 
		<a href="de_20_vanligaste_css_konstruktionerna.php#clearer">Läs mer om clearer i CSS-20</a>.
		
		<p>Pröva själv att bygga en style som kombinerar 3-kolumners-layouten med en centrerad sida
		samt ange storlekarna i pixels. Kan du återanvända det som finns? Pröva själv innan
		du kikar i <a href="http://dbwebb.se/style/?id=75">facit</a>.
		
		<p>När man jobbar med kolumnlayout så är det bra att ha CSS box modellen i färskt minne. Ibland behöver
		man ta hänsyn till storlekar på margin, padding och border. Ett tips är att strukturera med
		divs och inte låta dessa divs ha margin, padding eller border. Det kan underlätta men beror helt
		och hållet på vad man försöker uppnå.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s10">
		<h2>10. Styla en webbplats: Layout med article och aside</h2>
		
		<p>I denna kursen (htmlphp) så används mestadels en variant av 2-kolumn layouten.
		Skillnaden är att den baseras på article- och aside-elementen. Det huvudsakliga 
		innehållet läggs i en article som har en fast bredd. Vid sidan kan det finns innehåll i aside som 
		också har en fast bredd.
		
		<p>I praktiken så skiljer det sig så mycket från en kolumnlayout. Döm själva.
		
		<p><a href="http://dbwebb.se/style/?id=76">Layout med article och aside-element.</a>
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s11">
		<h2>11. Styla en webbplats: Fixa till header och footer</h2>
		
		<p>I <a href="de_20_vanligaste_css_konstruktionerna.php">CSS-20</a> så finns det ett par exempel på hur man stylar <a href="de_20_vanligaste_css_konstruktionerna.php?#header-top">header</a> och 
		<a href="de_20_vanligaste_css_konstruktionerna.php?#footer-bottom">footer</a>. Vi använder 
		den informationen för att styla header och footer till Anders P. Bygg.
		
		<p>Dessutom använder vi styling på html- och body-elementet för att "style lite extra" och göra en 
		ram med runda hörn.
		
		<p><a href="http://dbwebb.se/style/?id=79">Nu börjar det likna en webbplats</a>
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s12">
		<h2>12. Styla en webbplats: Styla med bilder</h2>
		
		<p>Bilder är bra att använda för att förhöja en känsla hos besökaren. Vi tar ett par bilder
		och lägger in dem på webbplatsen Anders P. Bygg. Blir det någon skillnad?
		
		<p><a href="http://dbwebb.se/style/?id=79">Utan bilder</a>

		<p><a href="http://dbwebb.se/style/?id=83">Med bilder</a>
		
		<p>När det gäller bilder så kan <a href="http://db-o-webb.blogspot.com/2010/10/skapa-bilder-for-din-webbplats-med-svg.html">
		SVG, Open Clip Art Library och Inkscape hjälpa dig</a>.

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s13">
		<h2>13. Styla en webbplats: Varianter på navigation bar</h2>
		
		<p>En navigation bar, eller huvudmeny, går att styla på effektfulla sätt. I Style! finns
		en kategori av exempel med olika varianter på navbar.
		
		<p>Gå till Style! och titta på exemplen som finns under kategori "navigation bar". Kika på <a href="http://dbwebb.se/style/?id=89">Mos standard grey navigation bar with rounded corners</a> och kolla sedan 
		de andra exemplen som ligger under kategorin "navigation bar". Hittar du någon snygg och kan du styla
		en egen?
		
		<p>Ska vi se om vi kan återanvända stylen för dessa navbars genom att importera dem in i webbplatsen för Anders P. Bygg?
		Det borde gå. Återanvändning är bra.

		<p><a href="http://dbwebb.se/style/?id=92">Importera existerande navbar till ny webbplats</a>. Du kan
		testa att ändra till olika varianter på navbar genom att ändra id för den navbar som importeras. Tryck
		sedan "uppdatera".
		
		<p>Till Anders P. bygg valdes en variant liknande Firefox. <a href="http://dbwebb.se/style/?id=93">Webbplats nu med en stylad navbar</a>. 

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s14">
		<h2>14. Styla en webbplats: Breadcrumb som navigering</h2>
		
		<p>En vanlig sätt att navigera en webbplats är med hjälp av breadcrumbs. 
		Läs på Wikipedia om <a href="http://en.wikipedia.org/wiki/Breadcrumb_%28navigation%29">breadcrumbs som 
		navigeringsmetod</a>. Termen breadcrumbs (brödsmulor eller spår av brödsmulor)
		kommer från sagan om Hans och Greta där Hans och Greta lämnade ett spår av brödsmulor efter sig 
		för att de skulle hitta tillbaka.
		
		<p>Se exempel på <a href="http://dbwebb.se/style/?id=91">breadcrumb navigering</a>.
		
		<p><a href="http://dbwebb.se/style/?id=94">Anders P. Bygg webbplats med breadcrumb navigering</a>. 
		
		<p>Du kan även se ett live-exempel på
		<a href="artikel_begravningsseder_och_bruk.php">breadcrumb navigering i artiklarna om BMO</a>.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s15">
		<h2>15. Styla en webbplats: Klar!</h2>
		
		<p>Nu får det räcka. Ander P. Bygg har fått en webbplats. Genom att städa i CSS-koden och 
		ta bort alla imports så blir det klart och tydligt vilken CSS som gäller. Det är lite av nackdelen med 
		@imports. Man måste ha koll på vad alla @imports tillför i stylen. Det gäller att ha ordning 
		och reda i sin struktur.
		
		<p><a href="http://dbwebb.se/style/?id=95">Klar. Anders P. Bygg har fått en webbplats</a>.
		<p><a href="http://dbwebb.se/style/?id=95&amp;htmlcss">Visa Anders P. Bygg utanför Style!</a>
		
		<p>När allt är klart går det att visa upp sidan för sig själv i en webbläsare och det går
		att testa att validera koden. Testa att göra detta i Style!. Validerar sidan?
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="s16">
		<h2>16. Klar</h2>
		
		<p>Detta var en liten övning i grundtekniker i CSS och i styling av en webbplats. 
		Den visar hur man kan bygga upp 
		en webbplats med ett modulärt tänkande av CSS-strukturen. Man bygger CSS-koden som återanvändbara
		delar och bygger på så sätt upp en bas av CSS-clipart.
		
		<p>Fortsätt gärna att studera de exempel som finns i Style! och testa gärna att göra egna varianter.
		
		<p>Kanske kan du använda Style! som ett verktyg när du diskuterar och utvecklar webbplatser och 
		stylesheets? Ibland vill man ha ett enkelt verktyg för att exemplifiera en viss style och be någon 
		kolla på den. Nästa gång det händer så kan du testa om Style! kan underlätta ditt arbete.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
	<?php include("byline.php"); ?>
	
</article>

</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

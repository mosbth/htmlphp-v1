<?php 
$title = "Enligt 80-20-regeln, vilka är de vanligaste HTML-elementen?";
$bodyId = "html20";
include("header.php"); 
?>

<!-- Here is the actual content of the page-->
<!-- - - - - - - - - - - - - - - - - - wrap whole content - - - - - - - - - - - - - - -->
<div id="wrap">

<!-- - - - - - - - - - - - - - - - - - aside        - - - - - - - - - - - - - - - - - -->
<aside class="right">
	<?php include("de_20_vanligaste_aside.php"); ?>
</aside>

<!-- - - - - - - - - - - - - - - - - - article      - - - - - - - - - - - - - - - - - -->
<article>

<!-- - - - - - - - - - - - - - - - - - header       - - - - - - - - - - - - - - - - - -->
	<header id="start">
		<h1>Vilka är de vanligaste HTML-elementen?</h1>
			<p class="byline">
				Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-08-17">17:e augusti 2010</time>
			</p>
			<p class="ingress">
				Vilka är de 20% HTML-element som troligtvis står för 80% av användarfallen? Det beror 
				på vem man frågar och här kommer därför min egen lista på de element som jag anser 
				<strong>borde vara</strong> de mest använda elementen. Lär dig dessa element och du
				har kommit en bit på vägen för att bemästra HTML.
			</p>
			<h4><a href="#part-I">Del I: Sidans grundstruktur</a></h4>
			<ul>
				<li><a href="#doctype">&lt;!DOCTYPE&gt;</a>
				<li><a href="#html">&lt;html&gt;</a>
				<li><a href="#head">&lt;head&gt;</a>
				<li><a href="#body">&lt;body&gt;</a>
				<li><a href="#style">&lt;style&gt;</a>
				<li><a href="#script">&lt;script&gt;</a>
			</ul>
			<h4><a href="#part-II">Del II: Struktur av sidans "verkliga" innehåll</a></h4>
			<ul>
				<li><a href="#div_id_top">&lt;div id=top&gt; eller &lt;header&gt;</a>
				<li><a href="#div_id_footer">&lt;div id=footer&gt; eller &lt;footer&gt;</a>
				<li><a href="#div_id_content">&lt;div id=content&gt;, en wrapper</a>
				<li><a href="#article">&lt;article&gt;</a>
				<li><a href="#section">&lt;section&gt;</a>
				<li><a href="#header">&lt;header&gt;</a>
				<li><a href="#aside">&lt;aside&gt;</a>
				<li><a href="#div">&lt;div&gt;</a>
			</ul>
			<h4><a href="#part-III">Del III: Bra-att-ha element</a></h4>
			<ul>
				<li><a href="#h1-h6">&lt;h1&gt; - &lt;h6&gt; och &lt;hgroup&gt;</a>
				<li><a href="#p">&lt;p&gt;</a>
				<li><a href="#nav">&lt;nav&gt;</a>
				<li><a href="#ul-li">&lt;ul&gt; - &lt;li&gt;</a>
				<li><a href="#blockquote">&lt;blockquote&gt;</a>
				<li><a href="#figure">&lt;figure&gt;</a>
				<li><a href="#form">&lt;form&gt;, &lt;fieldset&gt; och &lt;label&gt;</a>
				<li><a href="#other">Fler vanliga element</a>
			</ul>
	</header>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="part-I">
			<h2>Del I: Sidans grundstruktur</h2>
			<p class="ingress">
				Följande element bygger upp själva grundstrukturen av en html-sida och de innehåller 
				meta-information om sidan.
			</p>
	</section>
	
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="doctype"> 
		<h3>&lt;!DOCTYPE&gt;</h3>
		<p>
			Är sidan i HTML5, HTML4 eller någon variant av XHTML? Detta anges med DOCTYPE överst
			i sidan. För egen del så väljer jag att mer och mer gå över till HTML5.
		</p>
		<p>
			Exempel på DOCTYPE-deklaration för HTML5.
			<blockquote class="code">
&lt;!DOCTYPE html&gt;
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>
	
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="html"> 
		<h3>&lt;html&gt;</h3>
		<p>
			Elementet html är root-elementet till en html-sida. Det består av ett &lt;head&gt; och ett 
			&lt;body&gt; element. Det rekommenderas att använda språkattributet för att visa vilket språk
			sidan är skriven i. 
		</p>
		<p>
			Exempel på html-element med språkattributet definerat till svenska.
			<blockquote class="code">
&lt;html lang="sv"&gt;
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>
	
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="head"> 
		<h3>&lt;head&gt;</h3>
		<p>
			Sidans head-sektion innehåller information om själva html-sidan. Det är information såsom
			teckenkodning, titel och stylesheet. Det är även metainformation med nyckelord, författare 
			och meta-länkar till relaterade sidor.
		</p>
		<p>
			Exempel på en kort head-sektion.
			<blockquote class="code">
&lt;head&gt;
 &lt;meta charset="utf-8"&gt;
 &lt;title&gt;$title&lt;/title&gt;							
 &lt;link rel="stylesheet" href="style/stylesheet.css" title="Mos standard grey"&gt;
&lt;/head&gt;
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="body"> 
		<h3>&lt;body&gt;</h3>
		<p>
			Body-sektionen består av själva sidans innehåll, det som visas. Den är en självklar del av
			alla websidor. 
		</p>
		<p>
			Exempel på en body-sektion innehållande en html-kommentar.
			<blockquote class="code">
&lt;body&gt;
 &lt;!-- Här kommer själva sidans innehåll --&gt;
&lt;/body&gt;
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="style"> 
		<h3>&lt;style&gt;</h3>
		<p>
			En sidas style kan anges på flera sätt, i kombination med html-elementet, globalt för en 
			sida inom ett style element i head-sektionen eller länkad till en stylesheet i en separat fil.
			För egen del föredrar jag separata stylesheets.
		</p>
		<p>
			Exempel på style tillsammans med ett html-element.
			<blockquote class="code">
&lt;p style="font-size: smaller; font-style: italic;"&gt;Jag är en utmärkt HTML-kodare&lt;/p&gt;
			</blockquote>

		<p>
			Exempel på style specificerat för en sida inom head-elementet.
			<blockquote class="code">
&lt;head&gt;
 &lt;style&gt;
  p {
   font-size: smaller;
   font-style: italic;
  }
 &lt;/style&gt;
&lt;/head&gt;
			</blockquote>

		<p>
			Exempel på länkning till en separat stylesheet.
			<blockquote class="code">
&lt;head&gt;
 &lt;link rel="stylesheet" href="style/stylesheet.css" title="Mos standard grey"&gt;
&lt;/head&gt;
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="script"> 
		<h3>&lt;script&gt;</h3>
		<p>
			Inom script-elementet finns vanligen JavaScript-kod. Kod som exekveras i webbläsaren
			på klientsidan. Med JavaScript går det att åstakomma en mer dynamisk webbsida. 
			Script-taggar kan förekomma både i head- och i body-elementet.
		</p>
		<p>
			Exempel på ett enkelt JavaScript.
			<blockquote class="code">
&lt;script type="text/javascript"&gt;
 document.write('&lt;p&gt;Jag är en utmärkt HTML-kodare&lt;/p&gt;');
&lt;/script&gt; 
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="part-II">
		<h2>Del II: Struktur av sidans "verkliga" innehåll</h2>
		<p class="ingress">
			Inom ramen för body elementet måste en struktur finns av hur sidan skall presenteras.
			Skall det vara 1-, 2- eller 3-kolumner? Skall det finnas logo, titel, menyer, footer?
			Denna del handlar om att bygga upp strukturen för att presentera innehållet i en html-sida.
		</p>
	</section>
		
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="div_id_top"> 
		<h3>&lt;div id=top&gt; eller &lt;header&gt;</h3>
		<p>
			Varje sida har oftast en header-sektion med en logo och olika navigeringsval. Kanske 
			finns sitens namn, ett sökformulär och en inloggningslänk. 
			Samma header-sektion återkommer vanligen på alla sidor som finns
			inom webbplatsen. Det är alltså en del av webbplatsens centrala layout och återfinns 
			endast en gång på varje sida.
		</p>
		<p>
			Vanligen används en div med ett id, tex #top, för att identifiera den sektion som
			innehåller sidans header. Med HTML5 går denna div att ersätta med header-elementet.
			Rimligen kan man fortsätta att använda ett id=#top, även om man använder header-elementet.
			Det kan vara bra från stylesheet aspekter.
		</p>
		<p>
			Jag väljer att använda header-elementet, den ger lite mer semantisk mening till sektionen 
			än vad div-elemenet skulle göra.
		</p>
		<p>
			Exempel på hur sidans header-sektion kan specificeras.
			<blockquote class="code">
&lt;body&gt;

 &lt;header id="top"&gt;
  &lt;!-- Webbplatsens titel, logo, navigering, sökformulär, länk till inloggning, etc --&gt;
 &lt;/header&gt;

 &lt;!-- Här kommer sidans verkliga innehåll --&gt;

 &lt;!-- Här kommer sidans footer --&gt;

&lt;/body&gt; 
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>
	
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="div_id_footer"> 
		<h3>&lt;div id=footer&gt; eller &lt;footer&gt;</h3>
		<p>
			Liksom header-sektion så finns oftast en footer-sektion till varje sida. Footern kan innehålla
			copyright information och länkar till webbplatsens publicerare och ägare.
			Footer-sektion återkommer på alla sidor som finns
			inom webbplatsen. Det är, liksom header-sektionen, en del av webbplatsens centrala layout 
			och återfinns endast en gång på varje sida.
		</p>
		<p>
			Vanligen används en div med ett id, tex #footer eller #bottom, för att identifiera sektionen. 
			Med HTML5 bör man ersätta detta med footer-elementet.
			Rimligen kan man fortsätta att använda ett id, tex id=#bottom.
			Det kan vara bra när elementet skall stylas med stylesheeten.
		</p>
		<p>
			Exempel på hur sidans footer-sektion kan specificeras.
			<blockquote class="code">
&lt;body&gt;

 &lt;!-- Här kommer sidans header --&gt;

 &lt;!-- Här kommer sidans verkliga innehåll --&gt;

 &lt;footer id="bottom"&gt;
  &lt;!-- Webbplatsens författare, copyright, licens, länkar, etc --&gt;
 &lt;/footer&gt;

&lt;/body&gt; 
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>
	
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="div_id_content"> 
		<h3>&lt;div id=content&gt;, en wrapper</h3>
		<p>
			Sidans huvudsakliga budskap, själva dokumentet, kan omringas (wrap) av ett div-element med id satt till #content, 
			#main, #wrap eller liknande. Ofta har detta strukturell påverkan och underlättar hantering i 
			stylesheet. Det kan gälla att man vill styra sidans bredd, höger- eller vänster-kolumn med länkar,
			placering av aside-element.
		</p>
		<p>
			Sidans layout brukar bero på vilken information som presenteras. Så det är bra att ha lite 
			flexibilitet i hur presentation kan ske.
		</p>
		<p>
			Det är inte nödvändigt att wrappa sidans innehåll. Är det en liten sida så kanske det inte 
			behövs. Då kan man ta bort det. Bort med överflödiga element.
		</p>
		<p>
			Exempel på hur sidans huvud-sektion kan specificeras.
			<blockquote class="code">
&lt;body&gt;

 &lt;!-- Här kommer sidans header --&gt;

 &lt;div id="content"&gt;
  &lt;!-- Sidans "verkliga"innehåll i form av text, bilder, grafik, audio och videdo, etc. --&gt;
 &lt;/div&gt;

 &lt;!-- Här kommer sidans footer --&gt;

&lt;/body&gt; 
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="article"> 
		<h3>&lt;article&gt;</h3>
		<p>
			En sida kan bestå av en eller flera article. I en blogg är varje inlägg en article. I
			denna text du nu läser så har jag valt att lägga hela dokumentet som en article.
			Elementet article är HTML5 och ger semantisk vägledning. En article kan innehålla en egen header
			och footer. Om artikeln är stor kan den delas in i med elementet section.
		</p>
		<p>
			Exempel på hur en article kan struktureras.
			<blockquote class="code">
&lt;div id="content"&gt;

 &lt;article&gt;

  &lt;!-- header --&gt;
  &lt;!-- Det "verkliga" innehållet, indelat i section. --&gt;
  &lt;!-- footer --&gt;

 &lt;/article&gt;

&lt;/div&gt;
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="section"> 
		<h3>&lt;section&gt;</h3>
		<p>
			Detta element hjälper att dela in sidan huvudsaklig innehåll i olika fristående 
			sektioner. Jag använder detta främst inom article-elementet för att dela in "dokumentet"
			i sektioner. Ett section-element består normalt av en egen header följt av text.
		</p>
		<p>
			För mig är section ett semantiskt element som delar in en artikel, ett dokument, i sektioner.
			Jag vill inte blanda ihop det med det generella div-elementet som inte ger någon vägledning av
			innehållets art.
		</p>
		<p>
			Jag använder gärna id-attributet i dessa element, det underlättar navigering inom sidan 
			och det gör möjligt att länka direkt till en del av sidan.
		</p>
		<p>
			Exempel på hur sidans article-sektion kan byggas upp med section-element.
			<blockquote class="code">
&lt;article&gt;

 &lt;section id="part-1"&gt;
  &lt;!-- En fristående del av artikeln / dokumentet, med egen header. --&gt;
 &lt;/section&gt;

 &lt;section id="part-2"&gt;
  &lt;!-- En annan fristående del av artikeln / dokumentet, med egen header. --&gt;
 &lt;/section&gt;

&lt;/article&gt; 
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="header"> 
		<h3>&lt;header&gt;</h3>
		<p>
			Tidigare (<a href="#div_id_top">div id=top</a>) såg vi användning av elementet header 
			för att definera en sidas globala header.
			Samma element används också för att definera en header av en section. En sådan header
			innehåller vanligtvis rubrik och information om författaren eller en ingress.
		</p>
		<p>
			Exempel på hur en header för en section kan se ut.
			<blockquote class="code">
&lt;section id="part-1"&gt;

 &lt;header&gt;

  &lt;h2&gt;Rubrik&lt;/h2&gt;
  &lt;p&gt;Ingress&lt;/p&gt;

 &lt;/header&gt;

 &lt;!-- Här kommer sektionens text och innehåll. --&gt;

&lt;/section&gt;
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="aside"> 
		<h3>&lt;aside&gt;</h3>
		<p>
			Elementet aside är till för information som är relaterat till själva artikeln/dokumentet
			men bör placeras lite vid sidan om. Elementet ersätter div som tidigare används för samma syfte.
			Elementet kan också användas istället för en traditionell 2 kolumners layout. Som vanligt
			gäller att detta element ger en bättre semantisk vägledning till innehållet än vad 
			det neutrala div-elementet gör.
		</p>
		<p>
			Exempel på användning av aside-element.
			<blockquote class="code">
&lt;article&gt;

 &lt;aside&gt;
  &lt;!-- Relaterad information som kan placeras i anslutning till huvud-dokumentet --&gt;
 &lt;/aside&gt;

 &lt;section id="part-1"&gt;
  &lt;!-- En fristående del av artikeln / dokumentet, med egen header --&gt;
 &lt;/section&gt;

 &lt;section id="part-2"&gt;
  &lt;!-- En annan fristående del av artikeln / dokumentet, med egen header --&gt;
 &lt;/section&gt;

&lt;/article&gt; 
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="div"> 
		<h3>&lt;div&gt;</h3>
		<p>
			Detta element är ett av de vanligaste strukturella elementen. Flera HTML5-element
			är tänkta att ersätta en del användning av div men det kommer fortsätta vara ett
			av de mest använda elementen för att uppnå en struktur.
		</p>
		<p>
			Försök att inte överanvända det. Kan du slippa en div så är det bra. Försök att 
			ersätta div-användning med ett HTML5-element, om det passar. Var dock inte rädd 
			för att fortsätta använda div. Hittar du ingen bra matchning i HTML5 så är det
			klart bättre att använda div än att krysta till användningen av de nyare HTML5-elementen.
		</p>
		<p>
			Exempel på användning av div-element för att uppnå flera kolumner. Formattering
			i stylesheet behövs för att det skall fungera som tänkt.
			<blockquote class="code">
&lt;div id="wrap"&gt;

 &lt;div id="col1"&gt;
  &lt;!-- Innehåll i kolumnen. --&gt;
 &lt;/div&gt;

 &lt;div id="col2"&gt;
  &lt;!-- Innehåll i kolumnen. --&gt;
 &lt;/div&gt;

&lt;/div&gt; 
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="part-III">
			<h2>Del III: Bra-att-ha element</h2>
			<p class="ingress">
				Vilka är då de vanligaste elementen vi bör använda för att definera sidans innehåll, 
				själva texten i dokumentet? Här kommer mitt förslag.
			</p>
	</section>
	
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="h1-h6"> 
		<h3>&lt;h1&gt; - &lt;h6&gt; och &lt;hgroup&gt;</h3>
		<p>
			Använd rubriker för att strukturera innehållet i dokumentet. h1 bör endast användas en
			gång på sidan och den bör klart ange vad dokumentet handlar om. Ofta har h1 ett liknande 
			innehåll som sidans titel. h1 och title är viktiga element, speciellt för sökmotorer, så 
			använd dem väl.
		</p>
		<p>
			Elementet hgroup finns för att gruppera rubriker i de fall flera rubriker anges efter
			varandra. Detta är främst till för stylingskäl och användningen av hgroup rekommenderas.
			En hgroup kan bara innehålla rubriker.
		</p>
		<p>
			Exempel på rubriker och användning av elementet hgroup.
			<blockquote class="code">
&lt;h1&gt;Tydlig rubrik&lt;/h1&gt;

&lt;p&gt;Lite ingress-liknande information.&lt;/p&gt;

&lt;hgroup&gt;
 &lt;h2&gt;Rubrik nivå&lt;/h2&gt;
 &lt;h3&gt;Följt av rubrik, nivå 3&lt;/h3&gt;
&lt;/hgroup&gt;

&lt;p&gt;Löpande text.&lt;/p&gt;
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>
	
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="p"> 
		<h3>&lt;p&gt;</h3>
		<p>
			Ange löpande text inom en p-tagg, en paragraf av text. Detta är ett av de vanligaste elementen.
		</p>
			
		<p>
			Det är inte nödvändigt att ha sluttaggen, den kan utelämnas under vissa förutsättningar (läs specen).
			Rekommendationen blir att använda sluttaggen för att undvika valideringsproblem.
		</p>

		<p>Exempel på p-elementet, med och utan sluttagg.
		
		<blockquote class="code">
&lt;p&gt;Här är en paragraf utan sluttagg.
&lt;p&gt;Den följs av denna paragraf med sluttagg.&lt;/p&gt;
		</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>
	
<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="nav"> 
		<h3>&lt;nav&gt;</h3>
		<p>
			Omge navigeringslänkar med nav-elementet. Det förtydligar sektionen och underlättar
			hantering i stylesheet. Ett vanligt sätt att hantera nav-tidigare var med elementet
			ul och li. Gå över till nav-elementet om du finner det passande. För min del använder
			jag elementet mer och mer.
		</p>
		<p>
			Exempel på användning av nav-elementet tillsammans med länkar.
		<blockquote class="code">
&lt;nav&gt;
 &lt;a href="#start"&gt;Till toppen av denna sidan&lt;/a&gt;
 &lt;a href="me.php"&gt;Min me-sida, läs om mig&lt;/a&gt;
 &lt;a href="dbwebb.se"&gt;dbwebb.se&lt;/a&gt;
&lt;/nav&gt;
		</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="ul-li"> 
		<h3>&lt;ul&gt; - &lt;li&gt;</h3>
		<p>
			Listor är ett vanligt element som är bra att hantera. För min egen del så är det ofta den
			onumrerade listan (ul) men kolla även så att du kan hantera den numrerade varianten (ol).
			Listor kan stylas och används ofta för att styla menyer med länkar. Detta ger en bra organisation
			för länkarna och det är smidigt att styla dem. Just detta användningsområde kan komma att 
			ersättas mer och mer av nav-elementet.
			Men för vanliga listor så är elementen oumbärliga.
		</p>
		<p>
			Exempel på oordnad lista.
			<blockquote class="code">
&lt;ul&gt;
 &lt;li&gt;listelement
 &lt;li&gt;listelement
 &lt;li&gt;listelement
&lt;/ul&gt;
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="blockquote"> 
		<h3>&lt;blockquote&gt;</h3>
		<p>
			Elementet blockquote gillar jag och använder en hel del. Framförallt för att visa 
			källkod, exempelkod eller citat. Genom att använda class-attributet kan jag styla
			det och ge det olika utseende beroende på vad jag visar.
		</p>
		<p>
			Exempel på blockquote.
			<blockquote class="code">
&lt;blockquote class="code"&gt;
 &lt;!-- Källkod --&gt;
&lt;/blockquote&gt;

&lt;blockquote class="quote"&gt;
 &lt;!-- Citat --&gt;
&lt;/blockquote&gt;
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="figure"> 
		<h3>&lt;figure&gt;</h3>
		<p>
			Foton, bilder och grafik vill man ofta visa tillsammans med en titel eller bildtext.
			För detta använder jag elementen figure och figcaption och tillsätter style efter behag.
		</p>
		<p>
			Exempel på figure och figcaption.
			<blockquote class="code">
&lt;figure&gt;
 &lt;img src="img/mikael1.jpg" alt="Bild på Mikael vid datorn" width="300"&gt;
 &lt;figcaption&gt;
  Me vid datorn, se så glad jag är!
 &lt;/figcaption&gt;
&lt;/figure&gt;
			</blockquote>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="form"> 
		<h3>&lt;form&gt;, &lt;fieldset&gt; och &lt;label&gt;</h3>
		<p>Det är en varm rekommendation att alltid använda fieldset, legend och label när det gäller forms.
		Se följande exempel som en liten guide.
		
<?php
$code = <<<EOD
<form action="#form" class=form method=post>
  <fieldset>
    <legend>legend</legend>
    <label>text: <input type=text></label>
    <label>password: <input type=password></label>
    <label>select: 
      <select>
        <option>ett</option>
        <option>två</option>
        <option>tre</option>
      </select>
    </label>
    <input type=submit>
  </fieldset>
</form>

EOD;
?>
		
		<blockquote class="code">
<?php echo htmlspecialchars($code, ENT_NOQUOTES, "UTF-8"); ?>
		</blockquote>

		<div class="example">
			<?php echo $code; ?>
		</div>
		
		<p><a href="http://dbwebb.se/htmlphp/mom05/forms/">Studera olika typer av form-element</a>.

		<p><a href="de_20_vanligaste_css_konstruktionerna.php#form">Läs om stylning av formuläret på CSS-20</a>.

		<p><a href="20_steg_for_att_komma_igang_med_php.php#form">Läs om formulärhantering med PHP på PHP-20</a>.
		
		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - section       - - - - - - - - - - - - - - - - - -->
	<section id="other"> 
		<h3>Fler vanliga element</h3>
		<p>
			Det finns ett par element till som jag vill nämna eftersom de är vanliga när man 
			bygger upp en webbplats. Tills vidare nämner jag dem bara i en lista. Bara så jag 
			noterat dem och du ser att jag inte glömt dem. Min egen lilla kom-ihåg-lista.
			<ul>
				<li>&lt;a&gt;
				<li>&lt;img&gt;
				<li>&lt;table&gt;					
				<li>&lt;strong&gt;					
				<li>&lt;em&gt;					
				<li>&lt;code&gt;					
				<li>&lt;time&gt;					
				<li>Kommenterar i HTML görs med &lt!-- ... --&gt; 					
				<li>Verktyg för Link Checker 					
			</ul>

		<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
	</section>

<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
	<?php include("byline.php"); ?>
	
</article>

</div> <!-- wrapper -->

<?php include("footer.php"); ?>

<?php 
$title = "Enligt 80-20-regeln, vilka är de vanligaste HTML elementen?";
include("header.php"); 
?>

<!-- Here is the actual content of the page-->
<article>

	<aside class="right">
		<aside class="box">
			<h4>Pareto principen</h4>
			<p>
				Eller 80-20 regeln som innebär att 20% av funktionerna i en programvara står för 80% av 
				användarfallen. Egentligen är principen ekonomisk men det fungerar även att använda den på
				programutveckling. I detta fallet så tänker vi oss att den även fungerar på HTML element
				och försöker finna de vanligaste, de 20% av HTML elementen, som står för 80% av användarfallen.
			</p>
			<p>
				<a href="http://en.wikipedia.org/wiki/Pareto_principle">Läs om Pareto principen på Wikipedia</a>.
			</p>
		</aside>
	
		<aside class="box">
			<h4>Statistik på vanliga element</h4>
			<p>
				2005 gjorde Google en undersökning av webbsidor's uppbyggnad och studerad bland annat vilka element 
				som vanligtvis användes. De fann att det i snitt fanns 19 olika HTML-element på en sida, varken mer
				eller mindre.
			</p>
			<p>
				<a href="http://code.google.com/webstats/2005-12/pages.html">Läs om Googles undersökning</a>.
			</p>
		</aside>

		<aside class="box">
			<h4>Cheatsheet visar sanningen</h4>
			<p>
				Vill du veta mer om respektive element och dess olika varianter? Slå isåfall upp
				det i W3C's vertyg CheatSheet. Det visar specifikationen av elementet och hur det är
				tänkt att användas.
			</p>
			<p>
				<a href="http://www.w3.org/2009/cheatsheet/">Sanningen finns i CheatSheet</a>.
			</p>
		</aside>
	</aside>

	<section class="content">
		<section id="start">
			<header>
				<h1>Vilka är de vanligaste HTML elementen?</h1>
					<p class="byline">
						Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-08-17">17:e augusti 2010</time>
					</p>
					<p class="ingress">
						Vilka är de 20% HTML element som troligtvis står för 80% av användarfallen? Det beror 
						på vem man frågar och här kommer därför min egen lista på de element som jag anser 
						<strong>borde vara</strong> de mest använda elementen.
					</p>
					<h4>Del I: HTML sidans struktur</h4>
					<ul>
						<li><a href="#doctype">&lt;!DOCTYPE&gt;</a>
						<li><a href="#html">&lt;html&gt;</a>
						<li><a href="#head">&lt;head&gt;</a>
						<li><a href="#body">&lt;body&gt;</a>
					</ul>
					<h4>Del II: Struktur av sidans "verkliga" innehåll</h4>
					<ul>
						<li><a href="#div_id_top">&lt;div id=top&gt; eller &lt;header&gt;</a>
						<li><a href="#div_id_content">&lt;div id=content&gt; eller &lt;article&gt;</a>
						<li><a href="#div_id_footer">&lt;div id=footer&gt; eller &lt;footer&gt;</a>
					</ul>
					<h4>Del III: Bra-att-ha element</h4>
					<ul>
						<li><a href="#html">&lt;html&gt;</a>
						<li><a href="#html">&lt;html&gt;</a>
						<li><a href="#html">&lt;html&gt;</a>
						<li><a href="#html">&lt;html&gt;</a>
					</ul>
			</header>
		</section>

		<!-- ----------------------------- Main section ----------------------------------------- -->
		<section id="part-I">
			<header>
				<h2>Del I: HTML sidans struktur</h2>
				<p class="ingress">
					Följande element bygger upp själva grundstrukturen av en html-sida och de innehåller 
					meta-information om sidan.
				</p>
			</header>
			
			<section id="doctype">
				<h3>&lt;!DOCTYPE&gt;</h3>
				<p>
					Är sidan i HTML5, HTML4 eller någon variant av XHTML? Detta anges med DOCTYPE överst
					i sidan. För egen del så väljer jag att mer och mer gå över till HTML5.
				</p>
				<p>
					Exempel på DOCTYPE-deklaration för HTML5.
					<blockquote>
						<code>
							&lt;!DOCTYPE html&gt;
						</code>
					</blockquote>
				</p>
				<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
			</section>
		
			<section id="html">
				<h3>&lt;html&gt;</h3>
				<p>
					Elementet html är root-elementet till en html-sida. Det består av ett &lt;head&gt; och ett 
					&lt;body&gt; element. Det rekommenderas att använda språkattributet för att visa vilket språk
					sidan är skriven i. 
				</p>
				<p>
					Exempel på html-element med språkattributet definerat till svenska.
					<blockquote>
						<code>
							&lt;html lang="sv"&gt;
						</code>
					</blockquote>
				</p>
				<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
			</section>
		
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
				</p>
				<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
			</section>
		
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
				</p>
				<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
			</section>
		</section>
	
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
				</p>
				<p>
					Exempel på style specificerat för en sida inom head-elementet.
					<blockquote class="code">
&lt;style&gt;
&lt;/p&gt;
					</blockquote>
				</p>
				<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
			</section>
		</section>
	
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
				</p>
				<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
			</section>
		</section>
	
		<!-- ----------------------------- Main section ----------------------------------------- -->
		<section id="part-II">
			<header>
				<h2>Del II: Struktur av sidans "verkliga" innehåll</h2>
				<p class="ingress">
					Inom ramen för body elementet måste en struktur finns av hur sidan skall presenteras.
					Skall det vara 1-, 2- eller 3-kolumner? Skall det finnas logo, titel, menyer, footer?
					Denna del handlar om att bygga upp strukturen för att presentera innehållet i en html-sida.
				</p>
			</header>
			
		<section id="div_id_top">
			<h2>&lt;div id=top&gt; eller &lt;header&gt;</h2>
			<p>
				.
			</p>
			<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
		</section>
	
		<section id="div_id_content">
			<h2>&lt;div id=content&gt; eller &lt;article&gt;</h2>
			<p>
				.
			</p>
			<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
		</section>
	
		<section id="div_id_footer">
			<h2>&lt;div id=footer&gt; eller &lt;footer&gt;</h2>
			<p>
				.
			</p>
			<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
		</section>
	
		<section id="html">
			<h2>&lt;html&gt;</h2>
			<p>
				.
			</p>
			<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
		</section>
	
		<section id="html">
			<h2>&lt;html&gt;</h2>
			<p>
				.
			</p>
			<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
		</section>
	
		<section id="html">
			<h2>&lt;html&gt;</h2>
			<p>
				.
			</p>
			<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
		</section>
	
		<section id="html">
			<h2>&lt;html&gt;</h2>
			<p>
				.
			</p>
			<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
		</section>
	
		<section id="html">
			<h2>&lt;html&gt;</h2>
			<p>
				.
			</p>
			<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
		</section>
	
		<section id="html">
			<h2>&lt;html&gt;</h2>
			<p>
				.
			</p>
			<p class="go-to-start"><a href="#start">Gå till toppen av artikeln</a></p>
		</section>
	
	</section>

</article>

<?php include("footer.php"); ?>

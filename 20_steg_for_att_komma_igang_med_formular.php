<?php 
$title = "HTML Forms. Formulär och PHP, steg för steg";
$bodyId = "guide-forms20"; // Set id of the body to enable tracking current page and display in navbar
include("header.php"); 
include("header_guider.php"); 
?>

<!-- Here is the actual content of the page-->
<div id="wrap">

<article class=fullwidth>

	<aside class="right">
		<aside class="box">
			<h4>Trial-and-error</h4>
			<p>När man kodar nya saker, när man inte riktigt vet hur lösningen skall se ut, då är
			trial-and-error ett lysande sätt att testa sig fram. Pröva och se hur det blev. Blev det 
			inte bra så läs på, gör om och gör bättre.
			<p>Ibland funkar det helt enkelt inte med ordning och reda, analys & design. När man utforskar
			nya marker så är vanlig hederlig "testa och se hur det blir" en bra utvecklingsmetod.
			<p><a href="http://en.wikipedia.org/wiki/Trial_and_error">Läs om Trial-and-error på Wikipedia</a>.
			</p>
		</aside>
	
		<aside class="box">
			<h4>Ett intuitivt användargränssnitt</h4>
			<p>Användaren vill känna igen sig och veta var man ska klicka utan att tänka efter.
			Att skapa ett intuitivt användargränssnitt kräver att man tänker som användaren
			och funderar igenom hur användaren vill använda gränssnittet. Det är inte lätt men
			det underlättar om man själv tänker kritiskt varje gång man träffar på ett gränssnitt.
			"Vad var bra och vad kunde gjorts bättre?". Bra att tänka kritiskt. Då ser man förbättringsmöjligheterna.
			<p>Ibland funkar det helt enkelt inte med ordning och reda, analys & design. När man utforskar
			nya marker så är vanlig hederlig "testa och se hur det blir" en bra utvecklingsmetod.
			<p><a href="http://sv.wikipedia.org/wiki/Intuition">Läs om intuition på svenska Wikipedia</a>
			eller <a href="http://en.wikipedia.org/wiki/Intuition_%28knowledge%29">om intuitiv kunskap på engelska Wikipedia</a>.
			</p>
		</aside>
	</aside>
	
	<section class=w600>
		<header>
			<h1>HTML formulär och PHP</h1>

			<p class="byline">Av Mikael Roos, mos@bth.se, <time pubdate datetime="2010-09-13">13:e 
			september 2010</time></p>

			<p>Här följer en stegvis guide till hur man bygger upp ett formulär, stylar det och sparar 
			information på disk med hjälp av PHP. Informationen är samma som finns att läsa i kursmomentets instruktion, fast betydligt mer kortfattad.
			<p><a href="http://dbwebb.se/htmlphp/kmom05/instruction">Samma information finns i kursmomentet, mer utförligt förklarad</a>
			<p><a href="example/form">Här ligger alla exempel-filer som används</a>
			<p><a href="source.php?dir=example/form">Här kan du se källkoden till alla filerna</a>
			
			</p>
		</header>

		<h2>Skapa ett formulär och styla det</h2>

		<p>Innan vi kan börja så behövs ett formulär. Vi startar med ett tomt formulär med en 
		blandning av HTML4 och HTML5 element.
		
		<p><a href="example/form/form0.php">Ett tomt formulär med HTML4 och HTML5 element</a>
		
		<p>För att göra det roligare så lägger vi till en stylesheet. Allt blir så mycket trevligare 
		när det ser lite bättre ut.
		
		<p><a href="example/form/forms.css">En stylesheet för att snygga till formuläret</a>
		<p><a href="example/form/form1.php">Uppdaterat formulär, nu med stylesheet</a>

		<p>Skriv in något i formuläret och klicka på spara så ser du vad som händer.
		<p>Titta på källkoden så ser du PHP-koden som skriver ut innehållet i formuläret.
		

		<h2>En skiss över formulärets funktion</h2>
		
		<p>Vi tänker till lite extra och skissar upp vad formuläret skall klara av. Följande lista får vi ihop.
		
<?php
$theMasterPlan = <<<EOD
		<ol>
			<li>Validera innehållet i formuläret för att hindra säkerhetshål.
			<li>Spara formuläret på disk.
			<li>Läs upp ett formulär från disk och presentera i formuläret.
			<li>Visa alla filer som finns på disk.
			<li>Rensa formuläret på alla värden, visa ett tomt formulär.
			<li>Radera en fil från disk.
			<li>Skapa ett nytt tomt objekt.
		</ol>
EOD;
echo $theMasterPlan;
?>
		<p>Jag uppdaterar formuläret och lägger till kodstruktur med kommentarer om det som 
		komma skall. Studera källkoden. I fortsättningen så bör du studera källkoden för varje ny funktion som kommer till.
		
		<p><a href="example/form/form2.php">Formulär, nu med PHP-kodstubbar, enligt arbetsplanen ovan</a>


		<h2>Validera inkommande och spara på disk</h2>
		
		<p>All formulärdata valideras för att trygga säkerheten. Formulärets data sparas på disk
		i katalogen <code>objects/</code> som måste vara skrivbar för webbservern (chmod 777). Ange ett id och klicka på knappen "Spara" för att testa.
		
		<p><a href="example/form/form3.php">Formulär som sparar informationen till filer på disk (du måste ange ett id som är större än 0)</a>
		

		<h2>Läs tillbaka infon från disk</h2>
		
		<p>Nu går det ändra i formuläret, spara på disk och läsa upp från disk samt att ändringarna visas i formuläret.
		<p> Pröva att ange ett id&gt;0, spara, ändra värdet i ett fält, spara igen. Den ändrade informationen syns i formuläret.
		
		<p><a href="example/form/form4.php">Läs upp filerna från disk och visa innehållet i formuläret</a>
		
		
		<h2>Visa alla objekt på disk</h2>
		
		<p>Visa alla filerna i katalogen <code>objects/</code> och gör dem klickbara.
		Klicka på en fil för att se dess innehåll.
		
		<p><a href="example/form/form5.php">Visa alla filerna som tidigare sparats</a>
		
		
		<h2>Rensa formuläret från värden</h2>
		
		<p>Välj att visa ett objekt. Klicka sedan på knappen "Töm formulär" för att tömma formuläret.
		
		<p><a href="example/form/form6.php">Töm formuläret på data</a>
		
		
		<h2>Radera ett objekt från disk</h2>
		
		<p>Välj ett objekt och klicka på knappen radera för att ta bort det från disk.
		
		<p><a href="example/form/form7.php">Radera objekt från disk</a>
		
		
		<h2>Skapa ett nytt tomt objekt</h2>
		
		<p>Klicka på "Nytt objekt" för att skapa ett nytt tomt objekt som får ett nytt unikt id.
		Glöm inte att spara, annars sparas det inte på disk.
		
		<p><a href="example/form/form8.php">Skapa nytt tomt objekt</a>
		
		
		<h2 id='klar'>Städa koden</h2>
		
		<p>Nu börjar det bli klart. Lika bra att rensa i koden och flytta funktionerna till en egen fil
		som jag sedan inkluderar.

		<p>Testa gärna att allt fungerar som det var tänkt enligt planen:
		<?php echo $theMasterPlan; ?>
		
		<p><a href="example/form/form9.php">Formulär, nu städat i koden</a>
		<p><a href="http://dev.phpersia.org/htmlphp/source.php?dir=example/form&file=functions.php">Funktionerna är flyttade till egen fil</a>
		
		

		<?php include("byline.php"); ?>

	</section>
</article>
        
</div> <!-- wrapper -->

<?php include("footer.php"); ?>







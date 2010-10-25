<?php
$title = "20 steg för att komma igång med PHP, laboration";
$bodyId = "php20";
include("header.php");
//include("header_guider.php");
?>

<!-- - - - - - - - - - - - - - - - - - wrap whole content - - - - - - - - - - - - - - -->
<div id="wrap">

<!-- - - - - - - - - - - - - - - - - - aside        - - - - - - - - - - - - - - - - - -->
<aside class="right">
</aside>

<!-- - - - - - - - - - - - - - - - - - article      - - - - - - - - - - - - - - - - - -->
<article>

<h1>Praktisk laboration till PHP-20</h1>

<p>Denna laboration har ett antal övningar som hjälper dig att praktiskt öva på det 
som tas upp i <a href="20_steg_for_att_komma_igang_med_php.php">PHP-20</a>.

<p>Information till hur du löser uppgifterna i denna labb hittar du i PHP-20. Ett bra tips är att
ha både PHP-20 och denna labb uppe samtidigt och gå igenom båda dokumenten, steg för steg.

<p>Apropå problemlösning: om du har ett större problem så försök alltid att bryta ned det i dess beståndsdelar.
Det är enklare att lösa många små problem än ett stort.

<h2>Kom igång</h2>

<p>1. Skapa en tom sida med start och sluttag för php. Inget annat.

<p>2. Skriv ut "Hello World" med echo.

<p>3. Se till att du sätter på felrapportering överst i filen med<br>
<code>error_reporting(-1);</code>

<p>4. Kontrollera att felmeddelanden skrivs ut genom att lägga in följande kod:<br> 
<code>echo $q;</code>
<p>Ett fel av typen NOTICE skall skrivas ut.

<p>5. Skriv en kommentar i koden<br> 
<code>// detta är en en-radskommentar</code>

<p>6. Skriv ytterligare en kommentar i koden<br> 
<code>/* denna kommentar har en starttag och en sluttag, allt därimellan är kommentar */</code>


<h2>Variabler strängar</h2>

<p>1. Skapa en strängvariabel $s1 och tilldela "Hello". Skriv ut den med echo.

<p>2. Skapa en strängvariabel $s2 och tilldela "World". Skriv ut den.

<p>3. Skapa en strängvariabel $s och tilldela den $s1 kombinerad med $s2. (Konkatenera strängarna, typ + fast med strängar).
Skriv ut $s.


<h2>Variabler siffror</h2>

<p>1. Skapa en variabel $t1 och tilldela den värdet 42. Skriv ut den.

<p>2. Skapa en variabel $t2 och tilldela den värdet 4.2. Skriv ut den.

<p>3. Skapa en variabel $t3 och tilldela den summan av $t1 och $t2. Skriv ut den.

<p>4. Skapa en variabel $t4 och tilldela den summan av $t3 subtraherat med $t2. Skriv ut den.

<p>5. Skapa en variabel $t5 och tilldela den summan av $t1 dividerat med $t2. Skriv ut den.

<p>6. Skapa en variabel $t6 och tilldela den summan av $t1 multiplicerat med $t1. Skriv ut den.


<h2>If-satser</h2>

<p>1. Gör en if-sats som testar om $t1 är lika med 42. Om sant, skriv ut '$t1 == 42', annars skriv ut 'FEL'.

<p>2. Gör en if-sats som testar om $s1 är lika med "World". Om sant, skriv ut 'FEL' annars skriv ut '$s1 != "World"'.

<p>3. Gör en if-sats som testar uttrycket <code>$t1 == 42 && $t2 == 4.2</code>, skriv ut "Hej" om sant, annars kriv ut "FEL".

<p>4. Gör en if-sats som testar uttrycket <code>$t1 == 42 || $t2 == 4.2</code>, skriv ut "Hej" om sant, annars kriv ut "FEL".
Vad är skillnaden mellan && och ||?


<h2>Switch-case</h2>

<p>1. Gör en switch-sats av variabeln $t1. Gör två case, case 42 och case 4.2. Inom varje case skriver du
ut värdet av $t1.

<p>2. Tilldela värdet 1 till $t1. Ta en kopia av switch-satsen och utöka med en default-sats i switch-satsen som även den skriver
ut värdet på $t1.


<h2>Loopar</h2>

<p>1. Gör en for-loop som skriver ut talen 1-42 på en rad.

<p>2. Gör en while-loop som skriver ut talen 1-42 på en rad.

<p>3. Gör en do-while-loop som skriver ut talen 1-42 på en rad.


<h2>Arrayer</h2>

<p>1. Skapa en array, $a, som innehåller 3 värden, "Mumintrollet", "Sniff" och "Lilla My". 
Skriv ut arrayens innehåll.

<p>2. Använd funktionen array_push() för att lägga till elementen "Hemulen" och "Fröken Snork".
Skriv ut arrayens innehåll.

<p>3. Sortera arrayan med sort(). Skriv ut den.

<p>4. "Blanda" arraye med shuffle(). Skriv ut den.

<p>5. Gör en loop som går igenom arrayen och skriver ut värde fär värde, använd foreach-konstruktionen.

<p>6. Kolla om värdet "Sniff" finns i arrayen (använd in_array()). Om det finns så skriv ut "Hej", annars skriv ut "FEL".

<p>7. Räkna antalet värden i arrayen och skriv ut dem med count().


<h2>Inbyggda variabler</h2>

<p>1. $_SERVER. Skriv ut innehållet i $_SERVER med print_r(). Använd &lt;pre&gt;-taggen för att
få en bättre formattering.

<p>2. $_GET. Länka till ditt testprogram och skicka med argument i länken. Skriv ut innehållet
i $_GET på samma sätt som du gjorde med $_SERVER.
<p>Testa följande länk till ditt exempelprogram:
<ul>
<li>testprogram.php?hej=da&amp;moped=snabb
</ul>
<p>Modifiera länken och testa igen så att du känner att du har koll på argument med $_GET.


<h2>Vanliga felmeddelanden</h2>

<p>Testa att generera följande felmeddelanden.

<p>1. Använder variabel som ännu inte fått ett värde.<br>
<code>echo $q;</code>

<p>2. Glömt att ange ett semikolon.<br>
<code>echo $q</code>

<p>3. Skriv while-loop och missa att ange en slutparantes ).<br>
<code>while(1 == 2 {echo "hej";}</code>

<p>4. Skriv while-loop och missa att ange en slutblock, måsvinge }.<br>
<code>while(1 == 2) {echo "hej";</code>

<!--
<h2>Programmeringsövning</h2>

<p>Självständig progrmmeringsövning
-->

<!-- - - - - - - - - - - - - - - - - - footer         - - - - - - - - - - - - - - - - - -->
	<?php include("byline.php"); ?>
	
</article>

</div> <!-- id=wrap -->

<?php include("footer.php"); ?>

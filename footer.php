	<!-- This is the standard footer of the page -->
<?php
// Create link to current page
$refToThisPage = "http";
$refToThisPage .= (@$_SERVER["HTTPS"] == "on") ? 's' : '';
$refToThisPage .= "://";
$serverPort = ($_SERVER["SERVER_PORT"] == "80") ? '' :
(($_SERVER["SERVER_PORT"] == 443 && @$_SERVER["HTTPS"] == "on") ? '' : ":{$_SERVER['SERVER_PORT']}");
$refToThisPage .= $_SERVER["SERVER_NAME"] . $serverPort . $_SERVER["REQUEST_URI"];
?>

	<footer id="bottom">
		<nav>
			<h5>Verktyg</h5>
			<a href="http://validator.w3.org/check/referer">HTML5</a> 
			<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">CSS3</a>
			<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
			<a href="http://www.w3.org/2009/cheatsheet/">Cheatsheet</a>
			<a href="http://validator.w3.org/checklink?uri=<?php echo $refToThisPage; ?>">Link Checker</a>
			<a href="http://qa-dev.w3.org/i18n-checker/index?async=false&amp;docAddr=<?php echo $refToThisPage; ?>">i18n Checker</a>
			<a href="http://web-sniffer.net/?url=<?php echo $refToThisPage; ?>">Check header</a>
			<a href="source.php">source.php</a>
	</nav>
		
		<nav>
			<h5>Manualer</h5>
			<a href="http://dev.w3.org/html5/spec/spec.html">HTML5</a> 
			<a href="http://www.w3.org/TR/CSS2/">CSS2</a> 
			<a href="http://www.w3.org/Style/CSS/current-work#CSS3">CSS3</a> 
			<a href="http://php.net/manual/en/index.php">PHP</a> 
			<a href="http://www.sqlite.org/lang.html">SQL (SQLite)</a>
			<a href="http://www.w3schools.com/">W3Schools tutorials</a>
			<a href="http://catb.org/esr/faqs/hacker-howto.html">How to become a hacker</a>
		</nav>

		<nav class="clear-float">
			<h5>Kmom01</h5>
				<a href='http://dbwebb.se/htmlphp/kmom01/instruction'>Instruktion</a>
				<a href='http://dbwebb.se/htmlphp/install_lab_environment'>Installera labbmiljön</a>
				<a href='http://www.student.bth.se/~mos/htmlphp/mom01/me/me.php'>Me-sidan</a>
				<a href='http://github.com/mosbth/htmlphp/tree/v1.03'>Källkod</a>
		</nav>

		<nav>
			<h5>Kmom02</h5>
				<a href='http://dbwebb.se/htmlphp/kmom02/instruction'>Instruktion</a>
				<a href='http://www.student.bth.se/~mos/htmlphp/mom02/me/me.php'>Me-sidan</a>
				<a href='http://github.com/mosbth/htmlphp/tree/v2.0'>Källkod</a>
		</nav>

		<nav>
			<h5>Kmom03</h5>
				<a href='http://dbwebb.se/htmlphp/kmom03/instruction'>Instruktion</a>
				<a href='http://www.student.bth.se/~mos/htmlphp/mom03/me/me.php'>Me-sidan</a>
				<a href='http://github.com/mosbth/htmlphp/tree/v3.06'>Källkod</a>
		</nav>

		<nav>
			<h5>Kmom04</h5>
				<a href='http://dbwebb.se/htmlphp/kmom04/instruction'>Instruktion</a>
				<a href='http://dbwebb.se/htmlphp/mom04/museum'>Museum Online, mos leverans 1</a>
				<a href='http://github.com/mosbth/MuseumOnline/tree/v0.1'>Museum Online Källkod</a>
				<a href='http://www.student.bth.se/~mos/htmlphp/mom04/me/me.php'>Me-sidan</a>
				<a href='http://github.com/mosbth/htmlphp/tree/v4.01'>Källkod</a>
		</nav>

		<nav>
			<h5>Kmom05</h5>
				<a href='http://dbwebb.se/htmlphp/kmom05/instruction'>Instruktion</a>
				<a href='http://dbwebb.se/htmlphp/mom05/me/me.php'>Me-sidan</a>
				<a href='http://github.com/mosbth/htmlphp/tree/v5.02'>Källkod</a>
		</nav>

		<nav>
			<h5>Kmom06</h5>
				<a href='http://dbwebb.se/htmlphp/kmom06/instruction'>Instruktion</a>
				<a href='http://dbwebb.se/htmlphp/mom06/me/me.php'>Me-sidan</a>
				<a href='http://github.com/mosbth/htmlphp/tree/v6.01'>Källkod</a>
		</nav>

		<nav>
			<h5>Kmom07</h5>
				<a href='http://dbwebb.se/htmlphp/kmom07/instruction'>Instruktion</a>
				<a href='http://dbwebb.se/htmlphp/mom07/me/me.php'>Me-sidan</a>
				<a href='http://github.com/mosbth/htmlphp/tree/v7.01'>Källkod</a>
		</nav>

		<div class="final">
			<p>
			Innehållet på denna site är, om inte annat anges, licensierat enligt 
			<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution Share-Alike License v3.0</a>
			eller senare version.
			</p>
<pre>
 .                        
..:  &copy; 2010 Mikael Roos (mos@bth.se)
</pre>
		</div>

	</footer>
</body>
	
</html>

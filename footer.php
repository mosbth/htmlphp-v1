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
			<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
			<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
			<a href="http://www.w3.org/2009/cheatsheet/">Cheatsheet</a>
			<a href="http://validator.w3.org/checklink?uri=<?php echo $refToThisPage; ?>">Link Checker</a>
			<a href="source.php">source.php</a>

	</nav>
		
		<nav>
			<h5>Manualer</h5>
			<a href="http://dev.w3.org/html5/spec/spec.html">HTML5</a> 
			<a href="http://www.w3.org/TR/CSS2/">CSS2</a> 
			<a href="http://www.w3.org/Style/CSS/current-work#CSS3">CSS3</a> 
			<a href="http://php.net/manual/en/index.php">PHP</a> 
			<a href="http://catb.org/esr/faqs/hacker-howto.html">How to become a hacker</a>
		</nav>

		<nav>
			<h5>Kmom01</h5>
				<a href='http://dbwebb.se/htmlphp/kmom01/instruction'>Instruktion för kursmomentet</a>
				<a href='http://dbwebb.se/htmlphp/install_lab_environment'>Guide för att installera labbmiljön</a>
				<a href='http://www.student.bth.se/~mos/htmlphp/mom01/me/me.php'>Me-sidan</a>
				<a href='http://github.com/mosbth/htmlphp/tree/v1.03'>Källkod</a>
		</nav>

		<nav>
			<h5>Kmom02</h5>
				<a href='http://dbwebb.se/htmlphp/kmom02/instruction'>Instruktion för kursmomentet</a>
				<a href='http://www.student.bth.se/~mos/htmlphp/mom02/me/me.php'>Me-sidan</a>
				<a href='http://github.com/mosbth/htmlphp/tree/v2.0'>Källkod</a>
		</nav>

		<nav>
			<h5>Kmom03</h5>
				<a href='http://dbwebb.se/htmlphp/kmom03/instruction'>Instruktion för kursmomentet</a>
				<a href='http://www.student.bth.se/~mos/htmlphp/mom03/me/me.php'>Me-sidan</a>
				<a href='http://github.com/mosbth/htmlphp/tree/v3.06'>Källkod</a>
		</nav>

		<nav>
			<h5>Kmom04</h5>
				<a href='http://dbwebb.se/htmlphp/kmom04/instruction'>Instruktion för kursmomentet</a>
				<a href='http://dbwebb.se/htmlphp/mom04/museum'>Museum Online, mos leverans 1</a>
				<a href='http://github.com/mosbth/MuseumOnline/tree/v0.1'>Museum Online Källkod</a>
				<a href='http://www.student.bth.se/~mos/htmlphp/mom04/me/me.php'>Me-sidan</a>
				<a href='http://github.com/mosbth/htmlphp/tree/v4.01'>Källkod</a>
		</nav>

		<nav>
			<h5>Kmom05</h5>
				<a href='http://dbwebb.se/htmlphp/kmom05/instruction'>Instruktion för kursmomentet</a>
				<a href='http://dbwebb.se/htmlphp/mom05/me/me.php'>Me-sidan</a>
				<a href='http://github.com/mosbth/htmlphp/tree/v5.02'>Källkod</a>
		</nav>

		<nav>
			<h5>Kmom06</h5>
				<a href='http://dbwebb.se/htmlphp/kmom06/instruction'>Instruktion för kursmomentet</a>
				<a href='http://dbwebb.se/htmlphp/mom06/me/me.php'>Me-sidan</a>
				<a href='http://github.com/mosbth/htmlphp/tree/v6.0'>Källkod</a>
		</nav>

		<div class="final">
			<p>
			Except where otherwise noted, content on this site is licensed under the
			<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution Share-Alike License v3.0</a>
			or any later version.
			</p>
<pre>
 .                        
..:  &copy; 2010 Mikael Roos (mos@bth.se)
</pre>
		</div>

	</footer>
</body>
	
</html>

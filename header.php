<?php error_reporting(-1); ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<?php echo "<title>$title</title>"; ?>
	
	<link rel="stylesheet" href="style/stylesheet.css" title="Mos standard grey">
	<link rel="alternative stylesheet" href="style/stylesheet_red.css" title="Mos standard red">
	<link rel="alternative stylesheet" href="style/stylesheet_bth.css" title="Mos BTH-ish">

	<link rel="shortcut icon" href="img/favicon.ico">

	<?php if(!empty($head)) echo $head; ?>
</head>

<body<?php  if(!empty($bodyId)) echo " id='$bodyId'"; ?>>
	<!-- Top header with logo and navigation -->
	<div id="top">
		<img src="img/logo.png" alt="htmlphp me" width=200 height=100>
		<nav>
			<a id="me" href="me.php">Me</a> 
			<a id="report" href="report.php">Redovisning</a> 
			<a id="html20" href="de_20_vanligaste_html_elementen.php">HTML-20</a> 
			<a id="css20" href="de_20_vanligaste_css_konstruktionerna.php">CSS-20</a> 
		</nav>
	</div>

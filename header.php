<?php error_reporting(-1); ?>

<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">

	<!-- Use meta to ease indexing made by search engines -->
	<meta name="keywords" content="HTML, CSS, PHP, SQL">
 	<meta name="description" content="Distansundervisning av Databaser och Webb">
 	<meta name="author" content="Mikael Roos, mos@bth.se">	
 	<meta name="copyright" content="Copyright 2010">	
 		
	<!-- Stylesheets -->
	<link rel="stylesheet" media="all" href="style/stylesheet.css" title="Mos standard grey" type="text/css">
	<link rel="stylesheet" media="print" href="style/print.css" type="text/css">
	<link rel="alternative stylesheet" href="style/stylesheet_red.css" title="Mos standard red" type="text/css">
	<link rel="alternative stylesheet" href="style/stylesheet_bth.css" title="Mos BTH-ish" type="text/css">
	<link rel="alternative stylesheet" href="style/stylesheet_print.css" title="Mos to print" type="text/css">

	<!-- The small icon displayed by the browser -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<!-- Use PHP to set the page title dynamic -->
 	<?php echo "<title>$title</title>"; ?>
 	
 	<!-- Use PHP to add style information, used by the CSS-20 page to display examples -->
	<?php if(!empty($head)) echo $head; ?>
</head>

<!-- Use PHP to set id of body, used to highlight current page, together with styling information -->
<body<?php  if(!empty($bodyId)) echo " id='$bodyId'"; ?>>

	<!-- Top header with logo and navigation -->
	<header id="top">
		<img src="img/logo.png" alt="htmlphp me" width=200 height=100>
		<nav>
			<a id="me-" href="me.php">Me</a> 
			<a id="report-" href="report.php">Redovisning</a> 
			<a id="html20-" href="de_20_vanligaste_html_elementen.php">HTML-20</a> 
			<a id="css20-" href="de_20_vanligaste_css_konstruktionerna.php">CSS-20</a> 
			<a id="proj-" href="projekt.php">Projekt</a> 
			<a id="begr-" href="begravningsseder_och_bruk.php">Begravningsmuseum</a> 
		</nav>
	</header>

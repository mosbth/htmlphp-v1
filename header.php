<?php 
$sessionName = 'htmlphp_mos';
session_name($sessionName); 
session_start(); 
error_reporting(-1);
?>

<!DOCTYPE html>
<html lang="sv">

<head>
	<meta charset="utf-8">

	<!-- Use meta to ease indexing made by search engines -->
	<meta name="keywords"    content="HTML, CSS, PHP, SQL, distansundervisning, datavetenskap, programvaruteknik, programmering, webb">
 	<meta name="description" content="Distansundervisning av Databaser och Webb">
 	<meta name="author"      content="Mikael Roos, mos@bth.se">	
 	<meta name="copyright"   content="Copyright 2010">	
 		
	<!-- Stylesheets -->
	<?php include("choose_style.php"); ?>
	<link rel="stylesheet" media="all"   type="text/css" href="<?php echo $stylePath; ?>"  		title="<?php echo $styleTitle; ?>">
	<link rel="stylesheet" media="print" type="text/css" href="style/print.css">
	<link rel="alternate stylesheet"   type="text/css" href="style/stylesheet.css"       		title="Mos Standard Grey">
	<link rel="alternate stylesheet"   type="text/css" href="style/stylesheet_red.css"   		title="Mos Standard Red">
	<link rel="alternate stylesheet"   type="text/css" href="style/stylesheet_bth.css"   		title="Mos BTH-ish">
	<link rel="alternate stylesheet"   type="text/css" href="style/stylesheet_debug.css"   	title="Mos Debug">
	<link rel="alternate stylesheet"   type="text/css" href="style/stylesheet_nostyle.css"	title="Mos No Style">
	<link rel="alternate stylesheet"   type="text/css" href="style/stylesheet_print.css" 		title="Mos to print">

	<!-- The small icon displayed by the browser next to the link -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<!-- Use PHP to set the page title dynamic -->
 	<?php echo "<title>$title</title>"; ?>
 	
 	<!-- Use PHP to add style information, used by the CSS-20 page to display examples -->
	<?php if(!empty($head)) echo $head; ?>

	<!-- Help Internet Explorer understand HTML5 elements http://code.google.com/p/html5shiv/ -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<!-- Use PHP to set id of body, used to highlight current page, together with styling information -->
<body<?php  if(!empty($bodyId)) echo " id='$bodyId'"; ?>>

	<!-- Top header with logo and navigation -->
	<header id="top">

		<!-- Use PHP to print the form to choose style -->
		<?php echo $formChooseStyle; ?>

		<img src="img/logo.png" alt="htmlphp me" width=200 height=100>
		<nav>
			<a id="me-"     href="me.php">Me</a> 
			<a id="report-" href="report.php">Redovisning</a> 
			<a id="html20-" href="de_20_vanligaste_html_elementen.php">HTML-20</a> 
			<a id="css20-"  href="de_20_vanligaste_css_konstruktionerna.php">CSS-20</a> 
			<a id="php20-"  href="20_steg_for_att_komma_igang_med_php.php">PHP-20</a> 
			<a id="forms-"  href="forms.php">Formulär</a>
			<a id="sqlite20-"  href="20_steg_for_att_komma_igang_med_sqlite.php">SQLite-20</a> 
			<a id="proj-"   href="projekt.php">Projekt</a> 
			<a id="begr-"   href="begravningsseder_och_bruk.php">Begravningsmuseum</a> 
		</nav>
	</header>

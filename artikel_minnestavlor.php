<?php 
$title = "Begravningsmuseum Online: Artikel om minnestavlor";
$bodyId = "begr-minnestavla"; // Set id of the body to enable tracking current page and display in navbar
include("header.php"); 
include("header_begravning.php"); 
?>

<!-- Here is the actual content of the page-->
<div id="wrap">

<?php require("museum/artikel/minnestavlor.php"); ?>
        
</div> <!-- wrapper -->

<?php include("footer.php"); ?>







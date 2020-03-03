<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "Index"; ?></title>
    <link href="/../phpopdrachten/Style/index.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/header.php";
include "/inetpub/wwwroot/phpopdrachten/includes/menu.php";

$evenement = "Elfstedentocht";
$fries = "Alvestedetocht";
$kilometers = 200;
$actie = "schaatstocht";
$ijs = "natuurijs";
$vereniging = "Koninklijke Vereniging De Friesche Elf Steden.";
$plaatsnaam = "Leeuwarden";
$provincie = "Friesland";
$jaar = 1909;
$keer = 15;
$aantal = 1;
$verhaal = "<p> De " . $evenement . " (Fries: " . $fries . ") is een " . $kilometers . " kilometer lange " . $actie . " over " . $ijs . " die wordt georganiseerd door de " . $vereniging . ". " . $plaatsnaam . ", de hoofdstad van " . $provincie . ", is start- en aankomstplaats. De " . $evenement . " is inmidels " . $keer . " maal verreden en werd voor het eerst in " . $jaar . " gereden en wordt maximaal " . $aantal . " keer per winter gehouden.</p>";
echo $verhaal;

?>
<br>
<a href="../../index.php">terug</a>
</body>
</html>

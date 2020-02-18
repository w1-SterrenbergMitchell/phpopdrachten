<!-- /**
* User: Mitchell Strrenberg
* Date: 18/2/2020
* Time: 11:40
* File: opdracht 2.1.php
-->
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "opdracht 2.1.php"; ?></title>
    <link href="../../Style/index.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
    include "/inetpub/wwwroot/phpopdrachten/includes/header.php";
    include "/inetpub/wwwroot/phpopdrachten/includes/menu.php";
?>
<h1>Taak 2</h1>
<?php
$text1 = "Hallo";
$text2 = " een makkelijke taal";
$text3 = " toch zo'n makkelijke taal";
$text4 = " wat is";
$text5 = " PHP";
$text6 = " Nooit gedacht dat";
$text7 = " De installatie is best ingewikkeld";
$text8 = " Fijn";
$text9 = "?";
$text10 = ".";
$text11 = ",";
$text12 = "<br>";
$text13 = " is";
$text14 = " Vind je niet";
$text15 = " toch";
echo "<p>".$text1.$text11.$text4.$text5.$text3.$text10.$text7.$text10.$text8.$text15.$text9.$text6.$text5.$text3.$text13.$text10."</p>";
?>
<h1>Taak 3</h1>
<?php
echo "<p>".$text1.$text11.$text12.$text8.$text15." dat".$text5.$text3.$text13.$text10.$text12.$text7.$text10.$text14.$text9."</p>";
?>
</body>
</html>
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

$trafficlightcolor = "green";
$ambulancecoming = false;
$driveon = true;

if($trafficlightcolor == "green")
    {
        $driveon = true;
    }
elseif ($trafficlightcolor == "orange" || $trafficlightcolor == "red")
    {
        $driveon = false;
    }
else($ambulancecoming == true)
    {
        $driveon = false
    };

if($driveon == true)
    {
        echo ("<p>"."u mag doorrijden"."</p>"."<br>");
    }
else
    {
        echo ("<p>"."u moet stoppen"."</p>"."<br>");
    }

$countryname = "nederland";
$currentage = 19;

echo ("<p>"."je woont in ".$countryname." en je bent ".$currentage." jaar oud"."</p>"."<br>");

if($currentage <= 15)
    {
        echo ("<p>"."je mag hier niets drinken"."</p>");
    }
elseif ($currentage == 16 && $countryname == "belgie" || $currentage == 18 && $countryname == "zweden")
    {
        echo ("<p>"."je mag hier zwakke alcohol drinken"."</p>");
    }
elseif ($currentage >= 17 && $countryname == "cyprus" || $currentage >=18 && $countryname== "belgie" || $currentage >= 18 && $countryname == "bulgarije" || $currentage >= 18 && $countryname == "nederland" || $currentage >= 20 && $countryname == "zweden")
    {
        echo ("<p>"."je mag hier sterke alcohol drinken"."</p>");
    }
    ?>
<br>
<a href="../../index.php">terug</a>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>
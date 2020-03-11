<!-- /**
* User: Mitchell Sterrenberg
* Date: 5/2/2020
* Time: 2:53 PM
* File: opdracht 4.1.php
-->
<!DOCTYPE html><!DOCTYPE html>

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
    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");
    if($uur <= 5)
    {
        echo ("<p>"."Goedennacht"."</p>"."<br>");
    }
    else if($uur > 5 && $uur <= 12)
    {
        echo ("<p>"."Goedemorgen"."</p>"."<br>");
    }
    else if($uur > 12 && $uur <= 17)
    {
        echo ("<p>"."goedenmiddag"."</p>"."<br>");
    }
    else
    {
        echo ("<p>"."goedenavond"."</p>"."<br>");
    }

?>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>
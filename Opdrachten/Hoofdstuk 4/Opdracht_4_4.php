<!-- /**
* User: Mitchell Sterrenberg
* Date: 5/2/2020
* Time: 2:53 PM
* File: opdracht 4.2.php
-->
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
include "/inetpub/wwwroot/phpopdrachten/Opdrachten/Hoofdstuk 4/script.php";
?>
<?php
for($counter = 0; $counter <= 7; $counter++)
{
    $count = strtotime("$counter days");
    echo "<br>";
    echo "<p>"."Dag ";
    echo date('w', $count);
    echo " is ";
    echo date("l", $count);
    echo " ";
    echo date("Y-m-d", $count)."</p>";
}
?>

<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>
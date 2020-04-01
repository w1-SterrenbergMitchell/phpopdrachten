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
    echo "<p>".$task2."</p>"."<br>";
    echo "<p>".$task3."</p>"."<br>";
    echo "<p>".$task4."</p>"."<br>";
    echo "<p>".$task5."</p>"."<br>";
    echo "<p>".$task6."</p>"."<br>";
    echo "<p>".$task7."</p>"."<br>";
?>
<br>
<a href="../../index.php">terug</a>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>
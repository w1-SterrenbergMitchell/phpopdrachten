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
?>
<!--
    PHP: Dhr. Evers
    JavaScript: Dhr. Spierings
    SQL: Dhr. Spierings
    ASP: Dhr. Van der Meer
-->
<?php
$courseName = "JavaScript";
$teacherName = "";
switch ($courseName) {
    case "PHP":
        $teacherName = "Evers";
        break;
    case "JavaScript":
        $teacherName = "Spierings";
        break;
    case "ASP":
        $teacherName = "Van der Meer";
        break;
    case "SQL":
        $teacherName = "Spierings";
        break;
}
echo "<p>"."Voor het vak ".$courseName." heb je Dhr. ".$teacherName." als docent."."</p>";
?>
<br>
<a href="../../index.php">terug</a>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>

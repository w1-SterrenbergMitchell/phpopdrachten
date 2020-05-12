<?php
if (isset($_SESSION['username'])) {
$bezoeker = $_SESSION['username'] . "&nbsp; <a class='footer'
                                               href='/../phpopdrachten/Opdrachten/Hoofdstuk%206/Opdracht%206.1/loguit.php'>Loguit</a>";
} else {
$bezoeker = "onbekende bezoeker" . "&nbsp; <a class='footer'
                                              href='/../phpopdrachten/Opdrachten/Hoofdstuk%206/Opdracht%206.1/opdracht61.php'>Login</a>";
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "Index"; ?></title>
    <link href="/../phpopdrachten/Style/index.css" type="text/css" rel="stylesheet">
    <?php
    include "/inetpub/wwwroot/phpopdrachten/includes/variabelen.php";
    ?>
</head>
    <body>
        <footer>
            <?php
             echo "&copy ".$year." ".$name ." ".$bezoeker;
            ?>
        </footer>
    </body>
</html>
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
<?php
$naam = $_GET["naam"];
$snummer = $_GET["snummer"];
$datum = $_GET["datum"];
$reden = $_GET["reden"];
$leerjaar1 = $_GET["leerjaar1"];
$leerjaar2 = $_GET["leerjaar2"];
$leerjaar3 = $_GET["leerjaar3"];
$aanmelden = $_GET["aanmelden"];
$verwijder = $_GET["verwijder"];
$textbox = $_GET["textbox"];
?>
<table>
    <tr>
        <td>
            Voor en achternaam:
        </td>
        <td>
            <?php
            echo $naam;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Studentennummer:
        </td>
        <td>
            <?php
            echo $snummer
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Datum uitschrijving
        </td>
        <td>
            <?php
            echo $datum
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Reden Uitschrijving
        </td>
        <td>
            <?php
            echo $reden
            ?>
        </td>
    </tr>
    <tr>
        <td>
                Leerjaar
        </td>
        <td>
            <?php
            if (isset($leerjaar1))
            {
                echo $leerjaar1;
            }
            elseif (isset($leerjaar2))
            {
                echo $leerjaar2;
            }
            elseif (isset($leerjaar3))
            {
                echo $leerjaar3;
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Aanmelden voor de succesklas
        </td>
        <td>
            <?php
            if(isset($aanmelden))
            {
                echo "JA";
            }
            else
            {
                echo "NEE";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            verwijder gegevens
        </td>
        <td>
            <?php
            if(isset($verwijder))
            {
                echo "JA";
            }
            else
            {
                echo "NEE";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Reden uitschrijving
        </td>
        <td>
            <?php
            echo $textbox;
            ?>
        </td>
    </tr>
</table>
<br>
<a href="../../index.php">terug</a>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>
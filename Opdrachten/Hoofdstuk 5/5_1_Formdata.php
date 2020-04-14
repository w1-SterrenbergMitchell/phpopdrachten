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
<?php
$bedrijfsnaam = $_GET["bedrijfsnaam"];
$voornaam = $_GET["Voornaam"];
$achternaam = $_GET["achternaam"];
$telefoon = $_GET["telefoon"];
$email = $_GET["email"];
$bericht = $_GET["bericht"];
?>
<table>
    <tr>
        <td>
            Bedrijfsnaam:
        </td>
        <td>
            <?php
            echo $bedrijfsnaam;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Voornaam:
        </td>
        <td>
            <?php
            echo $voornaam;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Achternaam:
        </td>
        <td>
            <?php
            echo $achternaam;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Telefoon:
        </td>
        <td>
            <?php
            echo $telefoon;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            E-mail:
        </td>
        <td>
            <?php
            echo $email;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Bericht:
        </td>
        <td>
            <?php
            echo $bericht;
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
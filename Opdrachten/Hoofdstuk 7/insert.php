<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "Index"; ?>
    </title>
    <link href="/../phpopdrachten/Style/index.css" type="text/css" rel="stylesheet">
    <?php
    include "/inetpub/wwwroot/phpopdrachten/includes/header.php";
    include "/inetpub/wwwroot/phpopdrachten/includes/menu.php";
    ?>
</head>
<body>
<?php


// Inladen functies bestand
include("/inetpub/wwwroot/phpopdrachten/includes/functions.php");

// Starten van een database connectie
startConnection();


?>

<form method="post" action="insert.php">
    <h1>
        Nieuwe grap toevoegen
    </h1>
    <table>
        <tr>
            <td>
                <label for="text">joke text</label>
            </td>
            <td>
                <input type="text" name="text" id="text">
            </td>
        </tr>
        <tr>
            <td>
                <label for="clou">joke clou</label>
            </td>
            <td>
                <input type="text" name="clou" id="clou">
            </td>
        </tr>
    </table>
    <input type="submit" name="button">
</form>
<?php

if(isset($_POST["button"]))
{

    $query = "INSERT INTO dbo.joke VALUES ('".$_POST["text"]."', '".$_POST["clou"]."', GETDATE())";
    /*echo $query;*/
    executeQueryViaExec($query);
    echo "<h1>"."Grap toegevoegd"."</h1>".
        "<p>"."Bedankt voor het toevoegen van je grap. Hieronder zie je een overzicht van je grap:"."</p>".
        "<br>".
        "<p>"."joketext: ".$_POST["text"]."</p>"."<br>".
        "<p>"."jokeclou: ".$_POST["clou"]."</p>"."<br>".
        "<a href='opdracht%207.3.php'>Bekijk hier de grappen</a>"."<br>";
}
?>
<br>
<a href="../../index.php">terug</a>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>
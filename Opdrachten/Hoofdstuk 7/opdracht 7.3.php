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

// Executeren van een SQL query
$query = "SELECT * FROM joke";

if(isset($_GET["Zoeken"]))
{
    $zoeken = $_GET["Zoeken"];

    $query = "SELECT * FROM joke WHERE joketext LIKE '%$zoeken%'";
}
$jokes = executeQuery($query);
echo "<p> $query </p>";
?>

<form method="get">
    <label for="Zoeken">Zoekterm</label>
    <input type="text" id="Zoeken" name="Zoeken">
    <button type="submit">Zoeken</button><br/>
    <hr>
</form>
<table>
    <tr>
        <th>
            JokeID
        </th>
        <th>
            JokeText
        </th>
        <th>
            JokeClou
        </th>
        <th>
            JokeDate
        </th>
    </tr>
    <?php
    while($item = $jokes->fetch(PDO::FETCH_ASSOC))
    {
        echo '<tr>'.'<td>'.$item['id'].'</td>';
        echo '<td>'.$item['joketext'].'</td>';
        echo '<td>'.$item['jokeclou'].'</td>';
        echo '<td>'.$item['jokedate'].'</td>'.'</tr>';
    }
    ?>
</table>
<br>
<a href="../../index.php">terug</a>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>
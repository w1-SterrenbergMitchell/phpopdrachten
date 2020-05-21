<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "Index"; ?>
    </title>
    <link href="/../phpopdrachten/Style/index.css" type="text/css" rel="stylesheet">
</head>
<body>
<table>
    <tr>
        <th>
            ID
        </th>
        <th>
            Joketext
        </th>
        <th>
            Jokeclou
        </th>
        <th>
            Jokedate
        </th>
    </tr>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/header.php";
include "/inetpub/wwwroot/phpopdrachten/includes/menu.php";
?>
<?php
// Open de database connectie en ODBC driver
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
echo "database connectie gelukt";

// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = "SELECT * FROM joke WHERE jokedate < '2020-05-21'";
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}

// Tonen van de inhoud van aJokes
foreach ($aJokes as $item)
{
    echo '<tr>'.'<td>'.$item['id'].'</td>';
    echo '<td>'.$item['joketext'].'</td>';
    echo '<td>'.$item['jokeclou'].'</td>';
    echo '<td>'.$item['jokedate'].'</td>'.'</tr>';
}


try
{
    // Query schrijven
    $sql = "SELECT * FROM joke";
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}

// Tonen van de inhoud van aJokes
foreach ($aJokes as $item)
{
    echo '<tr>'.'<td>'.$item['id'].'</td>';
    echo '<td>'.$item['joketext'].'</td>';
    echo '<td>'.$item['jokeclou'].'</td>';
    echo '<td>'.$item['jokedate'].'</td>'.'</tr>';
}
?>
</table>
<p>
    in de opdracht stond er dat ik in mijn querry moest schrijven dat ik alleen jokes moest selecteren die voor vandaag waren ik wist niet zeker of dit in de sql manager moest of hierin dus vandaar beide opties.
</p>
<br>
<a href="../../index.php">terug</a>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>
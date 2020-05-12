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
<div id="main">
    <form id="gameFrm" method="get" action="opdracht62.php">
        <div class="float">
            <input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();"
                                  name="keuze"
                                  value="steen"
                                  id="steen"
            >
            <label for="steen">steen</label>
        </div>
        <div class="float">
            <input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();"
                                  name="keuze"
                                  value="papier"
                                  id="papier"
            >
            <label for="papier">papier</label>
        </div>
        <div class="float"><input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();"
                                  name="keuze"
                                  value="schaar"
                                  id="schaar"
            >
            <label for="schaar">schaar</label>
        </div>
    </form>
</div>
<?php
if (isset($_GET['keuze'])) {
    echo "Jij koos: " . $_GET['keuze'];
//Wat kiest de computer
//Random wordt er een getal tussen 0 en 2 gekozen
    $opties = array("steen", "papier", "schaar");
    $computerkeuzegetal = rand(0, 2);
    $computerkeuze = $opties[$computerkeuzegetal];
    echo "&nbsp;&nbsp;De computer koos: " . $computerkeuze;
}
if (!isset($_SESSION["gebruiker"]) && !isset($_SESSION["computer"])) {
    $_SESSION["gebruiker"] = 0;
    $_SESSION["computer"] = 0;
}
if (isset($_GET['keuze'])) {
    //gelijk
    if ($_GET['keuze'] == $computerkeuze) {
        echo '<br>'."de score is nu:".'<br>';
        echo "gebruiker: ".$_SESSION["gebruiker"].'<br>';
        echo "computer: ".$_SESSION["computer"];
    }
    // de gebruiker wint
    elseif ($_GET['keuze'] == "papier" && $computerkeuze == "steen" or $_GET['keuze'] == "schaar" && $computerkeuze == "papier" or $_GET['keuze'] == "steen" && $computerkeuze == "schaar") {
        $_SESSION["gebruiker"] += 1;
        echo '<br>'."de score is nu:".'<br>';
        echo "gebruiker: ".$_SESSION["gebruiker"].'<br>';
        echo "computer: ".$_SESSION["computer"];
    }
    //de computer wint
    elseif ($_GET['keuze'] == "steen" && $computerkeuze == "papier" or $_GET['keuze'] == "papier" && $computerkeuze == "schaar" or $_GET['keuze'] == "schaar" && $computerkeuze == "steen") {
        $_SESSION["computer"] += 1;
        echo '<br>'."de score is nu:".'<br>';
        echo "gebruiker: ".$_SESSION["gebruiker"].'<br>';
        echo "computer: ".$_SESSION["computer"];
    }
    if ($_SESSION["gebruiker"] == 5)
    {
        echo '<br>'."je hebt gewonnen";
        session_destroy();
    }
    elseif ($_SESSION["computer"] == 5)
    {
        echo '<br>'."De computer heeft gewonnen";
        session_destroy();
    }

}
?>

<br>
<a href="../../../index.php">terug</a>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>
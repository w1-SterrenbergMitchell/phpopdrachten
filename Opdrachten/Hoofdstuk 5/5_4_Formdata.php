
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

<form method="post" action="5_4_Formdata.php">
    <p>Komt er een ambulance aan?</p><br>
    <div class="54">
        <input type="radio" name="ja" id="ja">
        <label for="ja">Ja</label>
        <input type="radio" name="nee" id="nee">
        <label for="nee">Nee</label>
    </div>
    <br>

    <p>Stoplicht kleur?</p><br>
    <div class="54">
        <input type="radio" name="Rood" id="Rood">
        <label for="Rood">Rood</label>
        <input type="radio" name="Groen" id="Groen">
        <label for="Groen">Groen</label>
        <input type="radio" name="Oranje" id="Oranje">
        <label for="Oranje">Oranje</label>
    </div>
    <br>
    <input type="submit">
</form>
<p>
    De output is:
</p>
<?php
            $trafficlightcolor = "";
            $ambulancecoming = false;
            $driveon = true;
            $tekstambulance = "";
            if (isset($_POST["ja"])) {
                $ambulancecoming = true;
            } elseif (isset($_POST["nee"])) {
                $ambulancecoming = false;
            }

            if (isset($_POST["Groen"])) {
                $trafficlightcolor = "groen";
            } elseif (isset($_POST["Oranje"])) {
                $trafficlightcolor = "oranje";
            } elseif (isset($_POST["Rood"])) {
                $trafficlightcolor = "rood";
            }
            if ($trafficlightcolor == "groen" && $ambulancecoming == false)
            {
                $driveon = "U mag doorijden.";
            }
            else
            {
                $driveon = "U moet stoppen.";
            }

            if ($ambulancecoming == true)
            {
                $tekstambulance = " en er komt een ambulance aan ";
            }
            elseif ($ambulancecoming == false)
            {
                $tekstambulance = " en er komt geen ambulance aan ";
            }

                echo "<p> Het stoplicht staat op ".$trafficlightcolor."".$tekstambulance." dus: <br>".$driveon."</p>";
            ?>


<br>
<a href="../../index.php">terug</a>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>
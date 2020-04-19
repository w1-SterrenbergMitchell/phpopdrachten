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
include "/inetpub/wwwroot/phpopdrachten/Opdrachten/Eindopdracht/script.php"
?>
<?php
if($loginCheck == true){
    ?>
    <div id="loginInfo">
        <p>Welkom!</p><br>
        <p>Openingstijden</p>>
        <table>
            <tr>
                <td>
                    DO: 22:00
                </td>
            </tr>
            <tr>
                <td>
                    VR: ALL DAY
                </td>
            </tr>
            <tr>
                <td>
                    ZA: ALL DAY
                </td>
            </tr>
            <tr>
                <td>
                    ZO: 12:00
                </td>
            </tr>
        </table>
        <p>Adresgegevens</p>
        <table>
            <tr>
                <td>
                    Am Wriezener Bahnhof
                </td>
            </tr>
            <tr>
                <td>
                    10243 Berlin
                </td>
            </tr>
            <tr>
                <td>
                    Duitsland
                </td>
            </tr>
        </table>
    </div>
    <?php
}
else{
?>
    <p>Bergheen</p><br>
    <p>login om onze adresgegevens + openingstijden te zien</p><br>
    <?php
    echo $message
    ?>
    <form method="post" action="login.php" id="login">
        <table>
            <tr>
                <td>
                    <label for="username">Username </label>
                </td>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="wachtwoord">Password </label>
                </td>
                <td>
                    <input type="password" name="password" id="wachtwoord">
                </td>
            </tr>
        </table>
        <input name="submit" id="submit" type="submit">
    </form>
<?php
}
?>
<br>
<a href="../../index.php">terug</a>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>
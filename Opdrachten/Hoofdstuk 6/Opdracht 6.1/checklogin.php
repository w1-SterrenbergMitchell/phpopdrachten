<?php
$_SESSION["username"] = $_POST["username"];
$authUsers = Array(
    "Abu" => "bekend",
    "Mitchell" => "test",
    "Basie" => "123456",
    "Roosje" => "rozen"
);


if ($_POST['username'] == 'Abu' && $_POST['password'] == 'bekend')
{
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('location: welkom.php');
}


    foreach ($authUsers as $gebruikersnaam => $password)
    {
        $wachtwoord = $_POST["password"];
        $username = $_POST["username"];

        if($gebruikersnaam === $username && $wachtwoord === $password) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('location: welkom.php');
        }
    }

<?php
$login['mitchell'] = "test1";
$login['teun'] = "junior";
$login['daniel'] = "fifa";
$login['lucas'] = "ornn";
$login['rachel'] = "kitten";
$login['thomas'] = "test2";
$login["kees"] = "keesie";
$login["roos"] = "roosje";
$login["henk"] = "henkie";
$login["test"] = "test";
$message = "";

$loginCheck = false;
if (isset($_POST["submit"]))
{
    foreach ($login as $username => $password)
    {
        if ($_POST["username"] == $username && $_POST["password"] == $password)
        {
            $loginCheck = true;
        }
        else
        {
            if ($_POST["username"] == "" && $_POST["password"] == "")
            {
                    $message = "u heeft een vak leeggelaten";
                }
            elseif ($_POST["username"] != $username && $_POST["password"] != $password)
            {
                    $message = "incorrecte login";
                }
            }
        }
}
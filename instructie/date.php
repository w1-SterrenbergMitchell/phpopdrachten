<?php
    date_default_timezone_set("Europe/Amsterdam");

    date("d-m-Y H:i ");
    $day = date("l");
/*    if ($day == "Monday")
    {
        echo "het is vandaag ".$day." de eerste dag van de week";
    }
    elseif ($day == "Tuesday")
    {
        echo "het is vandaag ".$day;
    }*/

    switch ($day)
    {
        case "Tuesday":
            echo "het is vandaag ".$day." de tweede dag van de week";
            break;

        case "Monday":
            echo "test";
            break;
        default:
            echo "ERROR";
            break;
    }

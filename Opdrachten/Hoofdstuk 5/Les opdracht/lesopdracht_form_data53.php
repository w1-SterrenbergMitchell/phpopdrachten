<?php
//Haal de formulier gegevens op
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.
include "/inetpub/wwwroot/phpopdrachten/Opdrachten/Hoofdstuk 5/Les opdracht/lesopdracht_functions53.php"
?>
<table>
    <tr>
        <td>Voornaam</td>
        <td>
            <?php
                $name = $_POST["firstname"];
                if (empty($name))
                {
                    echo "De voornaam is niet ingevuld";
                }
                else
                {
                    echo $name;
                }
            ?>
        </td>
    </tr>
    <!-- Begin: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <?php
    $voegsel = $_POST["tussenvoegsel"];
    if (empty($voegsel))
        {
            echo"";
        }
    else
        {
            echo "<tr>
        <td>Tussenvoegsel</td>
        <td>$voegsel</td>
    </tr>";
        }
    ?>
    <!-- Einde: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Achternaam</td>
        <td>*Toon hier de ingevulde achternaam*</td>
    </tr>
    <tr>
        <td>Meer informatie</td>
        <td>*Laad hier de functie die de naam van de juiste docent toont*</td>
    </tr>
</table>
<?php
            $voegsel = $_POST["tussenvoegsel"];
            if (isset($voegsel))
            {
                echo $voegsel;
            }
            else
            {
                NULL;
            }
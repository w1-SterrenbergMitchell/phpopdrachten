<?php
$task2 = "Lancering in: ";
$counter = 19;
while($counter > 0) {
    $task2 = $task2 . $counter . ",";
    $counter = $counter - 1;
    if ($counter == 0) {
        $task2 = $task2 . $counter;
    }
}

$task3 = "Lancering in: ";
for ($counter2 = 19; $counter2 >= 0; $counter2 = $counter2 - 1)
{
    $task3 = $task3 . $counter2 . ",";
}
//voor de gebruiksvriendelijkheid van de website laat ik ze in een p staan
// ik begrijp dat ik de html tag's erbij kan zetten
$task4 = "";
$counter1 = 1;

while($counter1 <= 6)
{
    // $task4 .= "<h$counter1>" .  " Dit is de " .  $counter1 . "e " . "itteratie </h$counter1> <br>";
    $task4 .= "<p>" .  " Dit is de " .  $counter1 . "e " . "itteratie </p><br>";
    $counter1++;
}

$message3 = $task4;
//voor de gebruiksvriendelijkheid van de website laat ik ze in een p staan
// ik begrijp dat ik de html tag's erbij kan zetten
$task5 = "";

for($counter1 = 1; $counter1 <= 10; $counter1++)
{
    //$task5 .= "<tr>" . "<td>" . "Dit is de " .  $counter1 . "e " . "itteratie" . "</td>" . "<br>" . "</tr>" . "<br>";
    $task5 = "<p>". "Dit is de " .  $counter1 . "e " . "itteratie" . "</p>"."<br>";
}

$task6 = "";
$date = 2020;
while($date >= 2000)
{
    $age = $date - 2000;
    if($date == 2020)
    {
        $task6 .= "<p>" . "In " . $date . " word ik " . $age . " jaar oud </p>";
    }
    elseif($date == 2000)
    {
        $task6 .= "<p>" . "In " . $date . " ben ik geboren " . "</p>"."<br>";
    }
    else
    {
        $task6 .= "<p>" . "In " . $date .  " was ik " . $age . " jaar oud" . "</p>";
    }
    $date = $date - 1;
}

$message5 = $task6;

$task7 = "";
for ($counter6 = 2020; $counter6 >= 2000; $counter6 = $counter6 -1)
{
    switch ($counter6) {
        case 2000:
            $t31 = "In " . $counter6 . " ben ik geboren en was ik een baby.";
            break;
        case 2002:
            $t32 = "In " . $counter6 . " was ik 2 jaar oud en werd ik een peuter";
            break;
        case 2004:
            $t33 = "In " . $counter6 . " was ik 4 jaar oud en werd ik een kleuter";
            break;
        case 2008:
            $t34 = "In " . $counter6 . " was ik 8 jaar oud en werd ik een tiener";
            break;
        case 2012:
            $t34 = "In " . $counter6 . " was ik 12 jaar oud en werd ik een puber";
            break;
        case 2018:
            $t35 = "In " . $counter6 . " was ik 18 jaar oud en werd ik een adolescent";
            break;
        case 2020:
            $t36 = "In " . $counter6 . " wordt ik 20 jaar oud en word ik volwassen";
            break;
    }
    $task7 = $t36."<br>".$t35."<br>".$t34."<br>".$t33."<br>".$t32."<br>".$t31;
}
?>
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
for ($counter2 = 19; $counter > 0; $counter2 =$counter2 - 1)
{
    $task3 = $task3 . $counter2 . ",";
}

$task4 = "";
$counter3 = 1;
while($counter3 <= 6)
{
    if ($counter3 == 1)
    {
        $tekst1 = "dit is de ".$counter3."e iteratie";
    }
    elseif ($counter3 == 2)
    {
        $tekst2 = "dit is de ".$counter3."e iteratie";
    }
    $task4 = $tekst1."<br>".$tekst2;
    $counter3++;
}
?>

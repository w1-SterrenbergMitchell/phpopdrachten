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
for ($counter2 = 19; $counter2 > 0; $counter2 =$counter2 - 1)
{
    $task3 = $task3 . $counter2 . ",";
}

$task4 = "";
$counter3 = 1;
//voor de gebruiksvriendelijkheid laat ik ze in een p staan
// ik begrijp dat ik de html tag's erbij kan zetten

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
    elseif ($counter3 == 3)
    {
        $tekst3 = "dit is de ".$counter3."e iteratie";
    }
    elseif ($counter3 == 4)
    {
        $tekst4 = "dit is de ".$counter3."e iteratie";
    }
    elseif ($counter3 == 5)
    {
        $tekst5 = "dit is de ".$counter3."e iteratie";
    }
    elseif ($counter3 == 6)
    {
        $tekst6 = "dit is de ".$counter3."e iteratie";
    }
    $task4 = $tekst1."<br>".$tekst2."<br>".$tekst3."<br>".$tekst4."<br>".$tekst5."<br>".$tekst6;
    $counter3++;
}
//voor de gebruiksvriendelijkheid van de website laat ik ze in een p staan
// ik begrijp dat ik de html tag's erbij kan zetten
$task5= "";
for ($counter4 = 1; $counter4 <= 10; $counter4++)
{
    if ($counter4 == 1)
    {
        $tekst12 = "dit is de ".$counter4."e iteratie";
    }
    elseif ($counter4 == 2)
    {
        $tekst22 = "dit is de ".$counter4."e iteratie";
    }
    elseif ($counter4 == 3)
    {
        $tekst32 = "dit is de ".$counter4."e iteratie";
    }
    elseif ($counter4 == 4)
    {
        $tekst42 = "dit is de ".$counter4."e iteratie";
    }
    elseif ($counter4 == 5)
    {
        $tekst52 = "dit is de ".$counter4."e iteratie";
    }
    elseif ($counter4 == 6)
    {
        $tekst62 = "dit is de ".$counter4."e iteratie";
    }
    elseif ($counter4 == 7)
    {
        $tekst72 = "dit is de ".$counter4."e iteratie";
    }
    elseif ($counter4 == 8)
    {
        $tekst82 = "dit is de ".$counter4."e iteratie";
    }
    elseif ($counter4 == 9)
    {
        $tekst92 = "dit is de ".$counter4."e iteratie";
    }
    elseif ($counter4 == 10)
    {
        $tekst102 = "dit is de ".$counter4."e iteratie";
    }
    $task5 = $tekst12."<br>".$tekst22."<br>".$tekst32."<br>".$tekst42."<br>".$tekst52."<br>".$tekst62."<br>".$tekst72."<br>".$tekst82."<br>".$tekst92."<br>".$tekst102;
}

$task6 = "";
$counter5 = 2020;
while ($counter5 >= 2000)
{
    switch ($counter5)
    {
        case 2000:
            $t1 = "In ".$counter5." ben ik geboren";
            break;
        case 2001:
            $t2 = "In ".$counter5." was ik 1 jaar oud";
            break;
        case 2002:
            $t3 = "In ".$counter5." was ik 2 jaar oud";
            break;
        case 2003:
            $t4 = "In ".$counter5." was ik 3 jaar oud";
            break;
        case 2004:
            $t5 = "In ".$counter5." was ik 4 jaar oud";
            break;
        case 2005:
            $t6 = "In ".$counter5." was ik 5 jaar oud";
            break;
        case 2006:
            $t7 = "In ".$counter5." was ik 6 jaar oud";
            break;
        case 2007:
            $t8 = "In ".$counter5." was ik 7 jaar oud";
            break;
        case 2008:
            $t9 = "In ".$counter5." was ik 8 jaar oud";
            break;
        case 2009:
            $t10 = "In ".$counter5." was ik 9 jaar oud";
            break;
        case 2010:
            $t11 = "In ".$counter5." was ik 10 jaar oud";
            break;
        case 2011:
            $t12 = "In ".$counter5." was ik 11 jaar oud";
            break;
        case 2012:
            $t13 = "In ".$counter5." was ik 12 jaar oud";
            break;
        case 2013:
            $t14 = "In ".$counter5." was ik 13 jaar oud";
            break;
        case 2014:
            $t15 = "In ".$counter5." was ik 14 jaar oud";
            break;
        case 2015:
            $t16 = "In ".$counter5." was ik 15 jaar oud";
            break;
        case 2016:
            $t17 = "In ".$counter5." was ik 16 jaar oud";
            break;
        case 2017:
            $t18 = "In ".$counter5." was ik 17 jaar oud";
            break;
        case 2018:
            $t19 = "In ".$counter5." was ik 18 jaar oud";
            break;
        case 2019:
            $t20 = "In ".$counter5." was ik 19 jaar oud";
            break;
        case 2020:
            $t21 = "In ".$counter5." wordt ik 20 jaar oud";
            break;
    }
    $task6 = $t21."<br>".$t20."<br>".$t19."<br>".$t18."<br>".$t17."<br>".$t16."<br>".$t15."<br>".$t14."<br>".$t13."<br>".$t12."<br>".$t11."<br>".$t10."<br>".$t9."<br>".$t8."<br>".$t7."<br>".$t6."<br>".$t5."<br>".$t4."<br>".$t3."<br>".$t2."<br>".$t1;
    $counter5 = $counter5 - 1;
}
$task7 = "";
for ($counter6 = 2020; $counter6 >= 2000; $counter6 = $counter6 -1)
{
    switch ($counter6) {
        case 2000:
            $t31 = "In " . $counter6 . " ben ik geboren en was ik een baby.";
            break;
        case 2002:
            $t32 = "In " . $counter6 . "was ik 2 jaar oud en werd ik een peuter";
            break;
        case 2004:
            $t33 = "In " . $counter6 . "was ik 4 jaar oud en werd ik een kleuter";
            break;
        case 2008:
            $t34 = "In " . $counter6 . "was ik 8 jaar oud en werd ik een tiener";
            break;
        case 2012:
            $t34 = "In " . $counter6 . "was ik 12 jaar oud en werd ik een puber";
            break;
        case 2018:
            $t35 = "In " . $counter6 . "was ik 18 jaar oud en werd ik een adolescent";
            break;
        case 2020:
            $t36 = "In " . $counter6 . "wordt ik 20 jaar oud en word ik volwassen";
            break;
    }
    $task7 = $t36."<br>".$t35."<br>".$t34."<br>".$t33."<br>".$t32."<br>".$t31;
}
?>
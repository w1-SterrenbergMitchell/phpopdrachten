<?php
$vak = $_POST["subject"];
function getTeacherName($vak){
    if ($vak == "js")
    {
        $teacher = "M. Van de Wetering";
    }
    elseif ($vak == "php")
    {
        $teacher = "R.Evers";
    }
    return $teacher;
}
?>
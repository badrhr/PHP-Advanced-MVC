<?php
function afficherDate($lang)
{
    /////La date sur le serveur
    $jours["AR"] = array("الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة", "السبت");
    $jours["FR"] = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    $jours["EN"] = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    $months["AR"] = ["يناير ", "فبراير", "مارس ", "أبريل", "ماي ", "يونيو", "يوليوز", "غشت ", "شتنبر", "أكتوبر", "نونبر", "دجنبر"];

    $months["EN"] = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    $months["FR"] = ["Janvier", "Février", "Mars", "Avril", "Mai", "juin", "Juillet", "Aôut", "Septembre", "Octobre", "Novembre", "Décembre"];


    $d = getdate();

    $wj = $d["wday"];
    $mj = $d["mday"];
    $m = $d["mon"];
    $y = $d["year"];

    $d = $jours[$lang][$wj] . " " . $mj . " " . $months[$lang][$m - 1] . " " . $y;
    return $d;
}


$lang = isset($_COOKIE["lang"]) ? $_COOKIE["lang"] : "AR";
$textClr = isset($_COOKIE["textClr"]) ? $_COOKIE["textClr"] : "#000066";
$bgClr = isset($_COOKIE["bgClr"]) ? $_COOKIE["bgClr"] : "white";


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="public/style.css" />

</head>

<body bgcolor=<?= $bgClr ?>>
<div class="top">
    <a href="acceuil.php">
        <img src='public/images/phplogo.png' border='0' hspace='20' vspace='20' align='left' width="180" /></a>
    <span class="top">École Nationale Supérieure D'arts Et Métiers </span><br />
    ENSAM- Casablanca
</div>



<h4> <?= afficherDate("AR") ?></h4>
<br /><br />



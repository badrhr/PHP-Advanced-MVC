<?php 
function afficherDate($lang) {
/////La date sur le serveur
$jours["AR"] = array("الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت");
$jours["FR"] = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
$jours["EN"] = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

$months["AR"]=["يناير ", "فبراير", "مارس ", "أبريل", "ماي ", "يونيو" , "يوليوز" , "غشت ", "شتنبر" ,"أكتوبر" , "نونبر" , "دجنبر"];

$months["EN"]= ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

$months["FR"]= ["Janvier","Février","Mars", "Avril","Mai","juin","Juillet","Aôut","Septembre","Octobre","Novembre","Décembre"];


$d = getdate();

$wj = $d["wday"];
$mj = $d["mday"];
$m = $d["mon"];
$y = $d["year"];

$d= $jours[$lang][$wj]. " " . $mj . " " . $months[$lang][$m-1] . " " . $y;
return $d;
}
?>

<!-- Designed and developped by Ahmed ZINEDINE (ahmedzinedine[at]yahoo[dot]com) --> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="public/style.css" />

</head>

<body >


<div class="top">
<img src= 'public/images/fsdm.jpg' border = '0' hspace = '20' vspace = '20' align = 'left' />
<span class="top">SMI6</span><br />
Facult&eacute; des Sciences Dhar Mehraz, F&egrave;s </div>


<h4> <?= afficherDate("AR") ?></h4>
<br /><br />



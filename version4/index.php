<?php 
require ("Models/EtudiantManager.php");
require ("Controllers/EtudiantController.php");

//appel de l'action, C'est le vrai début de l'exécution

$action = $_GET["action"];

if($action=="index")
	indexAction();
elseif($action=="detail")
	detailAction($_GET["CodeE"]);
elseif($action=="liste")
	listeAction();
else
	die("cette action n'est pas autorisée");

 
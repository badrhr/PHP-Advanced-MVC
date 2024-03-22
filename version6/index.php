<?php 
require ("Models/EtudiantManager.php");
require ("Controllers/EtudiantController.php");

//appel de l'action, C'est le vrai début de l'exécution

$action = isset($_GET["action"])? $_GET["action"] : "index";

if($action=="index")
	indexAction();
elseif($action=="detail")
	detailAction($_GET["CodeE"]);
elseif($action=="liste")
	listeAction();
elseif($action=="ajouter")
	ajouterAction();
elseif($action=="modifier")
	modifierAction($_GET["CodeE"]);
elseif($action=="supprimer")
	supprimerAction($_GET["CodeE"]);
else
	die("Cette action n'est pas autorisée");

 
<?php
require("Models/EtudiantManager.php");
require("Controllers/EtudiantController.php");

//appel de l'action, C'est le vrai début de l'exécution

$action = $_GET["action"];
if ($action == "detail")
    detailAction($_GET["CodeE"]);
else die("Cette action n'est pas autorisée");

 
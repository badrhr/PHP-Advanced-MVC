<?php 
require ("Models/EtudiantManager.php");
require ("Controllers/EtudiantController.php");

//appel de l'action, C'est le vrai début de l'exécution
 detailAction($_GET["CodeE"]);
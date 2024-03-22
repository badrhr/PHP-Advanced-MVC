<?php 

//Section 1
////////////////////////////.......Modèle.........../////////////
function getDetailEtudiant($code) {
	$cn = new PDO('mysql:host=localhost;dbname=phplabs', 'root', '');
	return $cn->query("select * from Etudiant where Code='$code'")-> fetch();
}

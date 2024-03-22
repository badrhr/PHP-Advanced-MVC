<?php 

function getCn(){
	static $cn;
	if(!$cn) $cn= new PDO("mysql:host=localhost;dbname=phplabs", "root", "");
	return $cn;
}
/*Normalement, cette fonctiondoit être dans un autre module Filière ////
//Mais laissaons-la ici pour le momemnt */
function getListeFilieres(){
	return getCn()->query("select* from filiere")->fetchAll();
}

function getDetailEtudiant($code) {
	$cn = getCn();
	return $cn->query("select * from Etudiant where Code='$code'")-> fetch();
}


function getListeEtudiants(){
	return getCn()->query("select* from etudiant")->fetchAll();
}


function ajouterEtudiant($t){
	$resultat= getCn()->prepare("insert into Etudiant values (?,?,?,?,?)");
	$resultat->execute($t);	
}

function updateEtudiant($t){
	getCn()->exec("update Etudiant set Code='".$t["Code"]."', Nom='".$t["Nom"]."', Prenom='".$t["Prenom"]."',Filiere='".$t["Filiere"]."',Note=".$t["Note"]." where Code='".$t["oldCode"]."'");
}


function supprimerEtudiant($c){
	$resultat= getCn()->prepare("delete from Etudiant where Code=?");
	$resultat->execute([$c]);
}

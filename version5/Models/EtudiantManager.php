<?php 

function getCn(){
	static $cn;
	if(!$cn) $cn= new PDO("mysql:host=localhost;dbname=phplabs", "root", "");
	return $cn;
}

function getDetailEtudiant($code) {
	$cn = getCn();
	return $cn->query("select * from Etudiant where code='$code'")-> fetch();
}


function getListeEtudiants(){
	return getCn()->query("select* from etudiant")->fetchAll();
}
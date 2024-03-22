<!DOCTYPE html>
<html>
<body>

<h1>Liste des étudiants </h1>
<hr /><br /><br />
<ol>
<?php	
	foreach ($etudiants as $row) {	
		echo "<li>" . $row[1] . " " . $row[2] . "</li>";	  
	}
	
?> 

<br />
<hr />
<a href ="index.php?action=index">Acceuil</a> |
<a href ="index.php?action=liste">Liste de étudiants</a> |
<a href ="index.php?action=ajouter">Ajouter un étudiant</a> |
<a href ="index.php?action=modifier&CodeE=E1">Modifier un étudiant</a> |
<a href ="index.php?action=supprimer&CodeE=E1">Supprimer un étudiant</a> |
<a href ="index.php?action=detail&CodeE=E1">Détail d'un étudiant</a>

</body>
</html>
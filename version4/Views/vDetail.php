<!DOCTYPE html>
<html>
<body>

<h1>Détail de l'étudiant: </h1>

<hr />

<b> Code :    <?= $etudiant["code"]    ?>  </b><br />
<b> Nom :     <?= $etudiant["nom"]     ?>  </b><br />
<b> Prénom :  <?= $etudiant["prenom"]  ?>  </b><br />
<b> Filière : <?= $etudiant["filiere"] ?>  </b><br />
<b> Note :    <?= $etudiant["note"]    ?>  </b><br />

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

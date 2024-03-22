<?php include("haut.php"); ?>

<h1>Détail de l'étudiant: </h1>

<hr />

<b> Code :    <?= $etudiant["code"]    ?>  </b><br />
<b> Nom :     <?= $etudiant["nom"]     ?>  </b><br />
<b> Prénom :  <?= $etudiant["prenom"]  ?>  </b><br />
<b> Filière : <?= $etudiant["filiere"] ?>  </b><br />
<b> Note :    <?= $etudiant["note"]    ?>  </b><br />
<div align="right">
<a href ="index.php?action=modifier&CodeE=<?= $etudiant["Code"]?>">Modifier un étudiant</a> |
<a href ="index.php?action=supprimer&CodeE=<?= $etudiant["Code"]?>">Supprimer un étudiant</a>

</div>
<?php include("bas.php"); ?>

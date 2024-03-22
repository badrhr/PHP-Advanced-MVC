<?php include("haut.php"); ?>

<h1>Liste des étudiants </h1>
<hr /><br /><br />
<ol>
<?php	
	  foreach ($etudiants as $row) { ?>	
		<li>
		<a href ="index.php?action=detail&CodeE=<?= $row[0]?>"> <?= $row[1]." ".$row[2] ?>
		</li>	  

<?php } ?> 


<?php include("bas.php"); ?>
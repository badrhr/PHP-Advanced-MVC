<?php include("haut.php"); ?>

<h1>Liste des étudiants </h1>
<hr /><br /><br />
<ol>
<?php	
	foreach ($etudiants as $row) {	
		echo "<li>" . $row[1] . " " . $row[2] . "</li>";	  
	}
	
?> 

<?php include("bas.php"); ?>
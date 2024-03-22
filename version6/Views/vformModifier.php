<?php include("haut.php"); ?>

<h1>Modifier un étudiant</h1>
<hr />

<!-- l'attribut name permet d'accèder facilement au formulaire -->

<form name = "myForm" action = "" method = "post">

<pre>
<!-- chaque  élément de formulaire à un attribut name -->
<input type="hidden" name="oldCode" value="<?= isset($_POST["oldCode"])?$_POST["oldCode"]:$etudiant["Code"]?>"/>
Entrez le code:              
<input type="text" name="Code" value="<?= isset($_POST["Code"])?$_POST["Code"]:$etudiant["Code"]?>"/> <span class="Err"><?= isset($erreur["Code"])? $erreur["Code"]:"" ?> </span>


Entrez le nom:
<input  type="text"  name="Nom" value="<?= isset($_POST["Nom"])?$_POST["Nom"]:$etudiant["Nom"]?>" /> <span class="Err"><?= isset($erreur["Nom"])? $erreur["Nom"]:"" ?> </span>

Entrez le prénom:
<input type="text" name="Prenom" value="<?=isset($_POST["Prenom"])?$_POST["Prenom"]:$etudiant["Prenom"]?>" /> <span class="Err"><?= isset($erreur["Prenom"])? $erreur["Prenom"]:"" ?> </span>

Entrez la Note
<input  type="text" name ="Note" value="<?= isset($_POST["Note"])?$_POST["Note"]:$etudiant["Note"]?>" /> <span class="Err"><?= isset($erreur["Note"])? $erreur["Note"]:""?> </span>

<!-- Un seule nom pour la liste, chaque élément de la liste a une "Value" -->
<?php $selected = isset($_POST["Filiere"])?$_POST["Filiere"]:"SMI"  ?>

Filière:
<select name = "Filiere">

		<?php 

		foreach ($filieres as $f) { ?>

		<option  value =  "<?= $f['CodeF'] ?>" 

		<?php if ($f['codeF']==$selected) echo "selected"; ?>

		 ><?= $f["intituleF"] ?></option>


		<?php } ?>
			
		</select> <span class="Err"><?= isset($erreur["Filiere"]) ? $erreur["Filiere"] :"" ?> </span>

<input  type = 'submit'  value =  'Envoyer' /> <input  type = 'reset'  value =  'Annuler' />
</pre>
</form>

<?php include("bas.php"); ?>
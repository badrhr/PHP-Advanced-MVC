<?php
function detailAction($code)
{
    //validation des données fournies par l'utilisateur
    if (empty($code))
        die("Erreur: Vous n'avez pas fourni le code de l'étudiant à chercher");
    elseif (!is_string($code))
        die("Erreur: Le code fourni n'est pas valide");
    else
        $c = htmlspecialchars($code);

    //appel au modèle
    $etudiant = getDetailEtudiant($c);

    if (empty($etudiant)) {
        die("Erreur: Aucun étudiant trouvé!");
    }

    require("Views/vDetail.php");
}


function indexAction()
{
    require("Views/vIndex.php");
}

function listeAction()
{
    $etudiants = getListeEtudiants();
    require("Views/vListe.php");
}

function ajouterAction()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //valider les champs du formulaire

        //le code, le nom, le prénom et la filière doivent être non vides
        //vous pouvez ajouter d'autres contraintes
        if (empty($_POST["Code"])) $erreur["Code"] = "Le code est vide !...";
        if (empty($_POST["Nom"])) $erreur["Nom"] = "Le Nom est vide !....";
        if (empty($_POST["Prenom"])) $erreur["Prenom"] = "Le prénom est vide !...";
        if (empty($_POST["Filiere"])) $erreur["Filiere"] = "La filière est vide !...";

        // la note doit être non vide, et il doit être un nombre entre 0 et 20
        if (empty($_POST["Note"]))
            $erreur["Note"] = "La Note est vide !...";
        elseif (!is_Numeric($_POST["Note"]))
            $erreur["Note"] = "La Note doit être un un nombre !...";
        elseif ($_POST["Note"] < 0 or $_POST["Note"] > 20)
            $erreur["Note"] = "La Note doit être entre 0 et 20 !...";


        //si aucune erreur n'est détectée, on appelle le modèle pour insérer dans la BD
        //puis en reéxecute l'action liste pour afficher la liste actualisée
        if (!isset($erreur)) {
            $t = [$_POST["Code"], $_POST["Nom"], $_POST["Prenom"], $_POST["Filiere"], $_POST["Note"]];
            ajouterEtudiant($t);
            header("location: index.php?action=liste");
            //le reste du script ne sera pas exécuté, dans ce cas
        }
    }

    /*si on arrive ici, ça veut dire que la méthode n'est pas "post", donc c'est le premier affichage du formulaire, oubien, les données envoyées par post ne sont pas valide (donc le tableau $erreur est rempli (isset($erreur)==true)*/

    //dans ce cas, on affiche, ou réaffiche le formulaire
    $filieres = getListeFilieres();
    require("Views/vformAjout.php");
}


function modifierAction($c)
{


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //valider les champs du formulaire

        //le code, le nom, le prénom et la filière doivent être non vides
        //vous pouvez ajouter d'autres contraintes
        if (empty($_POST["Code"])) $erreur["Code"] = "Le code est vide !...";
        if (empty($_POST["Nom"])) $erreur["Nom"] = "Le Nom est vide !....";
        if (empty($_POST["Prenom"])) $erreur["Prenom"] = "Le prénom est vide !...";
        if (empty($_POST["Filiere"])) $erreur["Filiere"] = "La filière est vide !...";

        // la note doit être non vide, et il doit être un nombre entre 0 et 20
        if (empty($_POST["Note"]))
            $erreur["Note"] = "La Note est vide !...";
        elseif (!is_Numeric($_POST["Note"]))
            $erreur["Note"] = "La Note doit être un un nombre !...";
        elseif ($_POST["Note"] < 0 or $_POST["Note"] > 20)
            $erreur["Note"] = "La Note doit être entre 0 et 20 !...";


        //si aucune erreur n'est détectée, on appelle le modèle pour insérer dans la BD
        //puis en reéxecute l'action liste pour afficher la liste actualisée
        if (!isset($erreur)) {
            $t = [$_POST["Code"], $_POST["Nom"], $_POST["Prenom"], $_POST["Filiere"], $_POST["Note"], $_POST["oldCode"]];
            updateEtudiant($_POST);
            header("location: index.php?action=detail&CodeE=" . $_POST["Code"]);
            //le reste du script ne sera pas exécuté, dans ce cas
        }


    }

    /*si on arrive ici, ça veut dire que la méthode n'est pas "post", donc c'est le premier affichage du formulaire, oubien, les données envoyées par post ne sont pas valide (donc le tableau $erreur est rempli (isset($erreur)==true)*/

    //dans ce cas, on affiche, ou réaffiche le formulaire
    $filieres = getListeFilieres();
    $etudiant = getDetailEtudiant($c);
    require("Views/vformModifier.php");
}


function supprimerAction($code)
{

    if (empty($code))
        die("Erreur: Vous n'avez pas fourni le code de l'étudiant à supprimer");
    elseif (!is_string($code))
        die("Erreur: Le code fourni n'est pas valide");
    else
        $c = htmlspecialchars($code);

    //appel au modèle pour supprimer l'étudiant
    supprimerEtudiant($c);
    //normalement, on doit vérifier est ce que l'opération s'est bien déroulée
    //après la suppression, on affiche la liste des étudiants
    header("location: index.php?action=liste");
}

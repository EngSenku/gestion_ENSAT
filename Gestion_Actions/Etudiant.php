<?php
require_once "../Acces_BD/Etudiant.php";

if (isset($_POST['ajouter'])) {
    addEtudiant($_POST['code'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['sexe'], $_POST['filiere']);
    header("Location: ../IHM/Etudiant/affichage.php");
    exit;
}
?>

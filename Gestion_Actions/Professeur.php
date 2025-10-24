<?php
require_once "../Acces_BD/Professeur.php";

if (isset($_POST['ajouter'])) {
    addProf(
        $_POST['code'],
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['langues'],
        $_POST['specialite']
    );

    header("Location: ../IHM/Prof/affichage.php");
    exit;
}
?>

<?php
require_once "../Acces_BD/Login.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (login($email, $password)) {
        header("Location: ../IHM/accueil.php");
        exit;
    } else {
        echo "<p style='color:red;'>Email ou mot de passe incorrect.</p>";
        echo "<a href='../Index.php'>Retour</a>";
    }
}
?>

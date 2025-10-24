<?php
require_once 'connexion.php';

function login($email, $password) {
    $conn = Connect();

    // Exemple simple d’un utilisateur “admin” codé en dur
    if ($email == "admin@ecole.com" && $password == "admin123") {
        session_start();
        $_SESSION['user'] = "admin";
        return true;
    }

    // Tu pourrais aussi vérifier dans une table "users" si tu veux la rendre dynamique
    return false;
}

function logout() {
    session_start();
    session_destroy();
    header("Location: ../Index.php");
    exit;
}
?>

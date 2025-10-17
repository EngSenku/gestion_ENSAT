<?php
require_once 'connexion.php';

function getEtudiants() {
    $conn = Connect();
    $sql = "SELECT * FROM Etudiant";
    $res = $conn->query($sql);
    $etudiants = [];
    while ($row = $res->fetch_assoc()) {
        $etudiants[] = $row;
    }
    $conn->close();
    return $etudiants;
}

function addEtudiant($code, $nom, $prenom, $email, $sexe, $filiere) {
    $conn = Connect();
    $stmt = $conn->prepare("INSERT INTO Etudiant (code, nom, prenom, email, sexe, filiere) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $code, $nom, $prenom, $email, $sexe, $filiere);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>

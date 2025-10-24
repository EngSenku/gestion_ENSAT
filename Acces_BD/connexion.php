<?php
function Connect() {
    $env = parse_ini_file(__DIR__ . '/.env');
    $conn = new mysqli(
        $env['server'],
        $env['username'],
        $env['password'],
        $env['db_name']
    );
    if ($conn->connect_error) {
        die("Erreur de connexion: " . $conn->connect_error);
    }
    return $conn;
}
?>

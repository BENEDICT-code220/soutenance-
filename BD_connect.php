<?php
// Configuration de la connexion
$host = 'localhost'; // ou l'adresse de ton serveur
$dbname = 'bts_soutenance'; // nom de ta base de données
$username = 'root'; // utilisateur MySQL
$password = ''; // mot de passe MySQL

try {
    // Connexion avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    echo"Connexion réussi";
    // Mode d'erreur : exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
    // En cas d'erreur de connexion
    die("Erreur de connexion à la BDD : " . $e->getMessage());
}

?>
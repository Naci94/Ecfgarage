<?php
// Fichier de connexion à la base de données

// Paramètres de connexion à la base de données
$host = "localhost"; // Adresse du serveur de base de données
$dbname = "garage_db"; // Nom de la base de données
$username = "votre_utilisateur"; // Nom d'utilisateur de la base de données
$password = "votre_mot_de_passe"; // Mot de passe de la base de données

try {
    // Création d'une connexion PDO à la base de données
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Afficher les erreurs PDO en mode exception pour le développement
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>

<?php
// Inclusion du fichier de connexion à la base de données
include 'includes/db.php';

// Vérifier si l'administrateur est déjà connecté, sinon afficher le formulaire de connexion
session_start();
if (isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit();
}

// Traitement du formulaire de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Valider les informations de connexion (vous devrez implémenter votre propre logique de validation)
    if ($email === 'admin@example.com' && $password === 'motdepasseadmin') {
        // Authentification réussie, enregistrer l'administrateur dans la session
        $_SESSION['admin'] = true;
        header('Location: index.php');
        exit();
    } else {
        // Authentification échouée, afficher un message d'erreur
        $error_message = 'Identifiants invalides. Veuillez réessayer.';
    }
}

// Affichage du formulaire de connexion
include 'admin-templates/login-form.php';
?>

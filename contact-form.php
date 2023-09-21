<?php
// Inclusion du fichier de connexion à la base de données et des fonctions utilitaires
include 'includes/db.php';
include 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Valider et traiter les données du formulaire selon vos besoins
    // Vous pouvez envoyer le message à l'adresse e-mail du garage ou l'enregistrer dans la base de données

    // Exemple d'envoi de message par e-mail (vous devrez configurer les paramètres SMTP)
    $to = 'contact@votre-garage.com';
    $subject = 'Nouveau message de contact depuis le site web';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $message_body = "Nom : $name\n";
    $message_body .= "E-mail : $email\n";
    $message_body .= "Téléphone : $phone\n";
    $message_body .= "Message :\n$message";
    
    mail($to, $subject, $message_body, $headers);

    // Rediriger vers une page de confirmation après l'envoi du message
    header('Location: thank-you.php');
    exit();
}
?>

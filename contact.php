<?php
// Inclusion du fichier de connexion à la base de données et des fonctions utilitaires
include 'includes/db.php';
include 'includes/functions.php';

// Inclusion du fichier d'en-tête
include 'header.php';

// Traitement du formulaire de contact
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Validez et traitez les données du formulaire selon vos besoins

    // Envoyez le message à l'adresse e-mail du garage ou enregistrez-le dans la base de données
    // Vous devrez implémenter cette logique

    // Affichez un message de confirmation ou d'erreur
}
?>

<section class="contact-section">
    <h1>Contactez-nous</h1>
    <p>Si vous avez des questions ou avez besoin d'assistance, n'hésitez pas à nous contacter en utilisant le formulaire ci-dessous.</p>
    
    <form method="post" action="contact.php">
        <div class="form-group">
            <label for="name">Nom complet :</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="email">Adresse e-mail :</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Numéro de téléphone :</label>
            <input type="tel" name="phone" id="phone">
        </div>
        <div class="form-group">
            <label for="message">Message :</label>
            <textarea name="message" id="message" rows="5" required></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
</section>

<?php
// Inclusion du fichier de pied de page
include 'footer.php';
?>

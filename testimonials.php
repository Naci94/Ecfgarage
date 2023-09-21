<?php
// Inclusion du fichier de connexion à la base de données et des fonctions utilitaires
include 'includes/db.php';
include 'includes/functions.php';

// Inclusion du fichier d'en-tête
include 'header.php';

// Récupération des témoignages approuvés depuis la base de données
$query = "SELECT * FROM testimonials WHERE approved = 1";
$statement = $db->prepare($query);
$statement->execute();
$testimonials = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="testimonials-section">
    <h1>Témoignages de nos clients</h1>
    <?php
    foreach ($testimonials as $testimonial) {
        echo '<div class="testimonial">';
        echo '<p class="client-name">' . escape_data($testimonial['client_name']) . '</p>';
        echo '<p class="testimonial-text">' . escape_data($testimonial['testimonial_text']) . '</p>';
        // Ajoutez d'autres informations sur le témoignage si nécessaire
        echo '</div>';
    }
    ?>
</section>

<?php
// Inclusion du fichier de pied de page
include 'footer.php';
?>

<?php
// Inclusion du fichier de connexion à la base de données et des fonctions utilitaires
include 'includes/db.php';
include 'includes/functions.php';

// Inclusion du fichier d'en-tête
include 'header.php';
?>

<section class="vehicles-section">
    <h1>Véhicules d'occasion</h1>
    <?php
    // Récupération de la liste des véhicules d'occasion depuis la base de données
    $usedVehicles = get_used_vehicles();

    // Affichage de la liste des véhicules
    foreach ($usedVehicles as $vehicle) {
        echo '<div class="vehicle">';
        echo '<img src="' . escape_data($vehicle['image_url']) . '" alt="' . escape_data($vehicle['model']) . '">';
        echo '<h2>' . escape_data($vehicle['model']) . '</h2>';
        echo '<p>Prix : ' . escape_data($vehicle['price']) . ' €</p>';
        echo '<p>Année : ' . escape_data($vehicle['year']) . '</p>';
        echo '<p>Kilométrage : ' . escape_data($vehicle['mileage']) . ' km</p>';
        // Ajoutez d'autres informations si nécessaire
        echo '</div>';
    }
    ?>
</section>

<?php
// Inclusion du fichier de pied de page
include 'footer.php';
?>

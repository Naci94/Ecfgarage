<?php
// Inclusion du fichier de connexion à la base de données et des fonctions utilitaires
include 'includes/db.php';
include 'includes/functions.php';

// Vérification des paramètres de l'URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $vehicleId = $_GET['id'];

    // Récupération des détails du véhicule depuis la base de données
    $query = "SELECT * FROM vehicles WHERE id = :id";
    $statement = $db->prepare($query);
    $statement->bindParam(':id', $vehicleId, PDO::PARAM_INT);
    $statement->execute();
    $vehicle = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$vehicle) {
        // Rediriger vers une page d'erreur si le véhicule n'est pas trouvé
        header('Location: error.php');
        exit();
    }
} else {
    // Rediriger vers une page d'erreur si l'ID du véhicule n'est pas spécifié
    header('Location: error.php');
    exit();
}

// Inclusion du fichier d'en-tête
include 'header.php';
?>

<section class="vehicle-details-section">
    <h1>Détails du véhicule</h1>
    <h2><?php echo escape_data($vehicle['model']); ?></h2>
    <p>Prix : <?php echo escape_data($vehicle['price']); ?> €</p>
    <p>Année : <?php echo escape_data($vehicle['year']); ?></p>
    <p>Kilométrage : <?php echo escape_data($vehicle['mileage']); ?> km</p>
    <!-- Afficher d'autres détails du véhicule si nécessaire -->
</section>

<?php
// Inclusion du fichier de pied de page
include 'footer.php';
?>

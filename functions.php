<?php
// Fichier contenant des fonctions utilitaires

// Fonction pour échapper les données avant de les insérer dans la base de données
function escape_data($data) {
    global $db;
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Fonction pour obtenir la liste des véhicules d'occasion depuis la base de données
function get_used_vehicles() {
    global $db;
    $query = "SELECT * FROM vehicles WHERE is_used = 1";
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// Autres fonctions utilitaires peuvent être ajoutées ici
?>

<?php
require_once __DIR__. '/../model/model.php';

if (isset($_GET['id'])) { // Utilisez GET au lieu de POST
    $id = $_GET['id']; // Obtenez l'ID depuis la requête GET
    $trail = getTrailDetails($id);

    if ($trail) {
        // Affichez les détails de la randonnée
        echo "<h1>". htmlspecialchars($trail['name']). "</h1>";
        echo "Distance: ". htmlspecialchars($trail['distance']). " km<br>";
        echo "Durée: ". htmlspecialchars($trail['duration']). " heures<br>";
        echo "Gain en altitude: ". htmlspecialchars($trail['elevation_gain']). " m<br>";
        echo "Description:<br>". nl2br(htmlspecialchars($trail['description']));
    } else {
        echo "Aucune randonnée trouvée avec l'id: $id";
    }
}


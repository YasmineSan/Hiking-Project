<?php


//show all the trails ( Hike ) .
function getTrails() {
    // We connect to the database.
    try {
        $database = new PDO('mysql:host=188.166.24.55;dbname=hamilton-9-crazy-bears;charset=utf8', 'crazy-bears', '6GapQriAiJJEioql');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    // We retrieve the hiking trails information.
    $statement = $database->query(
        "SELECT id, name, distance, duration, elevation_gain, description FROM hikes ORDER BY name ASC"
    );
    $trails = [];
    while (($row = $statement->fetch())) {
        $trail = [
            'id' => $row['id'],
            'name' => $row['name'],
            'distance' => $row['distance'],
            'duration' => $row['duration'],
            'elevation_gain' => $row['elevation_gain'],
            'description' => $row['description'],
        ];

        $trails[] = $trail;
    }

    return $trails;
}
//Display One trail in another page.
function getTrailDetails($id) {
    //connect to database
    try {
        $database = new PDO('mysql:host=188.166.24.55;dbname=hamilton-9-crazy-bears;charset=utf8', 'crazy-bears', '6GapQriAiJJEioql');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $statement = $database->prepare(
        "SELECT name, distance, duration, elevation_gain, description FROM hikes WHERE id = :id"
    );
    $statement->execute(['id' => $id]);

    return $statement->fetch();
}

//for display test
//$trails = getTrails();
//foreach ($trails as $trail) {
//    echo 'Name: ' . htmlspecialchars($trail['name']) . '<br>';
//    echo 'Distance: ' . htmlspecialchars($trail['distance']) . ' km<br>';
//    echo 'Duration: ' . htmlspecialchars($trail['duration']) . ' hours<br>';
//    echo 'Elevation Gain: ' . htmlspecialchars($trail['elevation_gain']) . ' m<br>';
//    echo 'Description: ' . htmlspecialchars($trail['description']) . '<br><br>';
//}



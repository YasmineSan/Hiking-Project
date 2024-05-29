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
//Add a new trail.
function addTrail($name, $distance, $duration, $elevation_gain, $description, $user_id) {
    try {
        $database = new PDO('mysql:host=188.166.24.55;dbname=hamilton-9-crazy-bears;charset=utf8', 'crazy-bears', '6GapQriAiJJEioql');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }


    $sql = "INSERT INTO hikes (name, distance, duration, elevation_gain, description, user_id) VALUES (:name, :distance, :duration, :elevation_gain, :description, :user_id)";

    $stmt = $database->prepare($sql);
    $stmt->execute(['name' => $name, 'distance' => $distance, 'duration' => $duration, 'elevation_gain' => $elevation_gain, 'description' => $description, 'user_id' => $user_id]);

}
function deleteHike($id): void
{
    // Create a PDO instance for your database connection:
    try {
        $database = new PDO('mysql:host=188.166.24.55;dbname=hamilton-9-crazy-bears;charset=utf8', 'crazy-bears', '6GapQriAiJJEioql');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $sql = "DELETE FROM hikes WHERE id = :id";
    $stmt = $database->prepare($sql);
    $stmt->execute(['id' => $id]);
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



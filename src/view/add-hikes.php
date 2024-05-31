<?php
session_start(); // Start the session at the beginning of the script

require_once '../model/model.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $distance = $_POST["distance"];
    $duration = $_POST["duration"];
    $elevation_gain = $_POST["elevation_gain"];
    $description = $_POST["description"];
    $user_id = $_SESSION["user_id"]; // Get the user ID from the session

    addTrail($name, $distance, $duration, $elevation_gain, $description, $user_id);

    header("Location: view.index.php"); //Redirect to the homepage
    exit();
}
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style.css">
    </head>
    <body>
        <form class="form-item"
              method="post" action="add-hikes.php">
            <label for="name">Name of your "Metal" Hike</label>
            <input type="text" id="name" name="name" required>

            <label for="distance">Distance</label>
            <input type="number" id="distance" name="distance" required>

            <label for="duration">Duration</label>
            <input type="number" id="duration" name="duration" required>

            <label for="elevation_gain">Elevation</label>
            <input type="number" id="elevation_gain" name="elevation_gain" required>

            <label for="description">Description</label>
            <textarea id="description" name="description" required></textarea>

            <button type="submit">Add a Hike</button>
            <a href="view.index.php">Retour à la page d'accueil</a>
        </form>
    </body>
</html>
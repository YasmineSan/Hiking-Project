<?php

if (empty($_POST["username"])) {
    die("Username is required");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if (!preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

// Inclure le fichier de configuration de la base de données
$database = require __DIR__ . '/database.php';

// Requête SQL d'insertion avec des paramètres
$sql = "INSERT INTO users (firstname, lastname, username, email, password_hash)
        VALUES (?, ?, ?, ?, ?)";


// Préparer la requête avec PDO
$stmt = $database->prepare($sql);

if (!$stmt) {
    die("SQL error: " . $database->errorInfo()[2]); // Gestion des erreurs de préparation
}

// Exécute la requête préparée avec les valeurs fournies par $_POST
$result = $stmt->execute([$_POST['lastname'], $_POST['firstname'], $_POST['username'], $_POST['email'], $password_hash]);

if (!$result) {
    die("SQL error: " . $stmt->errorInfo()[2]); // Gestion des erreurs d'exécution
}

header("Location: /Hiking_project/src/view/signup-success.php?message=Your+account+has+been+created");
exit;



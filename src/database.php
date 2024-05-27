<?php

$host = "hamilton-9-crazy-bears";
$dbname = "188.166.24.55";
$username = "crazy-bears";
$password = '6GapQriAiJJEioql';

$database = new PDO('mysql:host=188.166.24.55;dbname=hamilton-9-crazy-bears;charset=utf8', 'crazy-bears', '6GapQriAiJJEioql');

try {
    // Établir la connexion à la base de données
    $database = new PDO("mysql:host=$dbname;dbname=$host;charset=utf8", $username, $password);
    // Configurer PDO pour lever des exceptions en cas d'erreur
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection error: " . $e->getMessage());
}

return $database;
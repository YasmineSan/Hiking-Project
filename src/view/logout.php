<?php
session_start();

session_destroy();

if (file_exists(__DIR__ . '/view.index.php')) {
    header("Location: view.index.php");
    exit;
} else {
    echo "Le fichier view.index.php n'existe pas.";
}
?>
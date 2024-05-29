<?php
require_once __DIR__ . '/../model/model.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteHike($id);
}

header("Location: view.index.php");
exit();
?>
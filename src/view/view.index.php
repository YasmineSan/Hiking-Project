<?php
session_start(); // Start the session if it's not already started
if (isset($_SESSION["user_id"]) && isset($_SESSION["username"])) {
    echo "User ID: " . $_SESSION["user_id"] . "<br>";
    echo "Username: " . $_SESSION["username"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>

<h1>Home</h1>
<?php if (isset($_SESSION["username"])): ?>

    <p>Hello <?= htmlspecialchars($_SESSION["username"]) ?></p>

    <p><a href="logout.php">Log out</a></p>

<?php else: ?>

    <p><a href="<?= __DIR__ . '/login.php'; ?>">Log in</a> or <a href="view.signit.php">sign up</a></p>

<?php endif; ?>

</body>
</html>
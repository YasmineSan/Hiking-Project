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
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>

<h1>Home</h1>

<nav class="desktop-nav">
    <ul>
        <li><a href="view.index.php">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="homepage.php">Our metal hikes</a></li>
        <li><a href="/Hiking_project/src/view/view.signit.php">Sign it</a></li>
        <?php if (isset($_SESSION["username"])): ?>
        <p>Hello <?= htmlspecialchars($_SESSION["username"]) ?></p>
        <p><a href="/Hiking_project/src/view/logout.php">Log out</a></p>
        <p><a href="/Hiking_project/src/view/add-hikes.php">Add a Hike</a></p>
        <?php else: ?>

            <p><a href="/Hiking_project/src/view/login.php">Log in</a></p>

        <?php endif; ?>
    </ul>
</nav>
<div class="menu-btn" onclick="toggleMenu()">
    <div class="menu-btn__burger"></div>
</div>
<?php include 'homepage.php';  ?>











</body>
</html>
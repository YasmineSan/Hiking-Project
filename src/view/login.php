<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $database = require __DIR__ . "/../database.php";

    $sql = "SELECT * FROM users WHERE email = :email";

    $stmt = $database->prepare($sql);
    $stmt->execute(['email' => $_POST["email"]]);

    $user = $stmt->fetch();

    if ($user) {
    if (password_verify($_POST["password"], $user["password_hash"])) {
        session_start();
        session_regenerate_id();
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"]; // Store the username in the session
        header("Location: view.index.php");
    }
}

    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php if ($is_invalid): ?>
    <em>Invalid login</em>
<?php endif; ?>

<img class="bag" src="images/bag.png" height="100" width="87"/>
    <h1>Login</h1>
    <h5>Create your own hikes !</h5>
    <div class="subscribe_form">
        <form action="login.php" method="post">
            <input class="form-item" type="email" name="email" id="email"
           value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
            <input class="form-item" type="password" name="password" id="password">
            <button class="form-item" type="submit">Subscribe</button>
        </form>
    </div>

</body>
</html>
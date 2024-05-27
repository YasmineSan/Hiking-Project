<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//
//    $database = require __DIR__ . '/../src/database.php';
//    $sql = "SELECT * FROM `user`
//            WHERE email = ?";
//}
//?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
        <script src="/js/validation.js" defer></script>
    </head>
    <body>
        <h1>Login</h1>
        <form method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button>Log in</button>
        </form>

    </body>
</html>
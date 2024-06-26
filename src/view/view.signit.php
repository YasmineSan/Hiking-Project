<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="../../style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Metal+Mania&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body>
        <img class="bag" src="../images/bag.png" height="100" width="87"/>
        <h1>Signup</h1>
        <div class="subscribe_form">
        <form class="subscribe_form" action="../process-signup.php" method="post" id="signup" novalidate>

                <label for="firstname">First name</label>
                <input class="form-item" type="text" id="firstname" name="firstname">

                <label for="lastname">Last Name</label>
                <input class="form-item" type="text" id="lastname" name="lastname">


                <label for="username">Username</label>
                <input class="form-item" type="text" id="username" name="username">


                <label for="email">Email</label>
                <input class="form-item" type="email" name="email" placeholder="Enter your email address" required>



                <label for="password">Password</label>
                <input class="form-item" type="password" id="password" name="password">



                <label for="password_confirmation">Repeat password</label>
                <input class="form-item" type="password" id="password_confirmation" name="password_confirmation">


            <button class="form-item" type="submit">Subscribe</button>
        </form>
        </div>

    </body>
</html>
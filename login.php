<?php

// require necessary files
require_once 'inc/config.php';

// check if user is logged in

// get prefill data

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Login User</h1>
</header>

    <main>
        <div class="center-container">
            <div class="form-card">
                <form action="authenticate.php" method="POST" id="form-login">
                    <div class="form-row">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" autofocus required>
                    </div>
                    <div class="form-row">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn-primary">Login</button>
                </form>
            </div>
        </div>
    </main>

</body>
</html>

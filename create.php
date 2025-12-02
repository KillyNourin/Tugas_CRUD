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
    <title>New Member</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>New Member</h1>
</header>

    <?php Utility::showNav(); ?>

    <main>
        <div class="center-container">
            <div class="form-card">
                <form action="save.php" method="post" id="form-user">
                    <div class="form-row">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-row">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-row">
                        <label for="confirm">Confirm Password:</label>
                        <input type="password" id="confirm" name="confirm" required>
                    </div>
                    <hr class="divider">
                    <div class="form-row">
                        <label for="fullname">Full Name:</label>
                        <input type="text" id="fullname" name="fullname" required>
                    </div>
                    <div class="form-row">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                    <hr class="divider">
                    <button type="submit" class="btn-primary">Create Member</button>
                </form>
            </div>
        </div>
    </main>

</body>
</html>

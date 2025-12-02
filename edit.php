<?php

// require necessary files
require_once 'inc/config.php';

// check if user is logged in

// get user ID from query parameter

// load user

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>

    <!-- CSS utama -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="page-header">
    <h1>Edit Member</h1>
</header>

    <?php Utility::showNav(); ?>
    
    <main class="center-container">
        <div class="card form-card">
            <form action="update.php" method="post" id="form-user">
                <div class="form-row">
                    <label for="username">Username</label>
                    <input 
                        type="text"
                        id="username"
                        name="username"
                        value="<?= htmlspecialchars($user['username']); ?>"
                        required
                    >
                </div>
                <div class="form-row">
                    <label for="password">New Password</label>
                    <input 
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Kosongkan jika tidak ingin mengubah"
                    >
                </div>
                <div class="form-row">
                    <label for="confirm">Confirm Password</label>
                    <input type="password" id="confirm" name="confirm">
                </div>
                <hr class="divider">
                <div class="form-row">
                    <label for="fullname">Full Name</label>
                    <input 
                        type="text"
                        id="fullname"
                        name="fullname"
                        value="<?= htmlspecialchars($user['fullname']); ?>"
                        required
                    >
                </div>
                <div class="form-row">
                    <label for="city">City</label>
                    <input 
                        type="text"
                        id="city"
                        name="city"
                        value="<?= htmlspecialchars($user['city']); ?>"
                        required
                    >
                </div>
                <input type="hidden" name="id" value="<?= $user['id']; ?>">
                <div class="form-row">
                    <button class="btn-primary" type="submit">Update Member</button>
                </div>
            </form>
        </div>
    </main>

</body>
</html>
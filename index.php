<?php

// require necessary files
require_once 'inc/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<header>
    <h1>Welcome to the Dashboard</h1>
</header>

<?php Utility::showNav(); ?>

<main>
<section>
    <h2>Welcome to the User Management System</h2>
    <p>On this page, you can manage member data — from creating new accounts, editing information, to deleting users.</p>

    <h3 style="margin-top:25px;">What Can You Do?</h3>
    <ul style="line-height:1.8;">
        <li>Add new members</li>
        <li>Edit user information</li>
        <li>Delete inactive users</li>
        <li>Manage users' profile pictures</li>
    </ul>

    <h3 style="margin-top:25px;">Quick Guide</h3>
    <p>
        Use the navigation menu above to access the CRUD features.  
        All changes are saved directly to the database.
    </p>
</section>
</main>

</body>
</html>

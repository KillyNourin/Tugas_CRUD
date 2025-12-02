<?php

// require necessary files
require_once 'inc/config.php';

// check if user is logged in

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
        <h2>Dashboard Overview</h2>
        <p>
            This is your dashboard where you can manage your content and view your profile data.
        </p>
        <h3>Your Data</h3>
        <ul>
            <li>ID: </li>
            <li>Username: </li>
            <li>Name: </li>
            <li>City: </li>
            <li>Join Date: </li>
            <li>Last Login: </li>
        </ul>
    </section>
</main>

</body>
</html>

<?php

// require necessary files
require_once 'inc/config.php';

// check if user is logged in

// load all members
$user = new User();
$members = $user->getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Member List</h1>
</header>

<?php Utility::showNav(); ?>

    <main>
        <div class="table-card">
            <h2>All Members</h2>
            <table class="modern-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>City</th>
                        <th>Join Date</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (empty($members)) {
                        echo '<tr><td colspan="6">Belum ada data user.</td></tr>';
                    }
                    foreach ($members as $member) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($member['id']) . '</td>';
                        echo '<td>' . htmlspecialchars($member['username']) . '</td>';
                        echo '<td>' . htmlspecialchars($member['fullname']) . '</td>';
                        echo '<td>' . htmlspecialchars($member['city']) . '</td>';
                        echo '<td>' . htmlspecialchars($member['created_at']) . '</td>';
                        echo '<td>
                        <a class="btn-action edit" href="edit.php?id=' . $member['id'] . '">Edit</a>
                        <a class="btn-action delete" href="delete.php?id=' . $member['id'] . '" onclick="return confirm(\'Hapus user ini?\')">Delete</a>
                        </td>';
                        echo '</tr>';
                    }
                    
                    ?>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>

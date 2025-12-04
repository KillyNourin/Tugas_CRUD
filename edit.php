<?php

// require necessary files
require_once 'inc/config.php';

// check if user is logged in
if (!isset($_GET['id'])) {
    die("User ID tidak ditemukan.");
}
$id = (int) $_GET['id'];

// load user
$userObj = new User();
$found = $userObj->setById($id);

if (!$found) {
    die("User tidak ditemukan.");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="page-header">
    <h1>Edit Member</h1>
</header>

<?php Utility::showNav(); ?>

<main class="center-container">
    <div class="card form-card">

        <form action="update.php" method="post" enctype="multipart/form-data" id="form-user">

            <div class="form-row">
                <label for="username">Username</label>
                <input 
                    type="text"
                    id="username"
                    name="username"
                    value="<?= htmlspecialchars($userObj->username); ?>"
                    required
                >
            </div>

            <div class="form-row">
                <label for="password">New Password</label>
                <input 
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Biarkan kosong jika tidak mengubah"
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
                    value="<?= htmlspecialchars($userObj->fullname); ?>"
                    required
                >
            </div>

            <div class="form-row">
                <label for="city">City</label>
                <input 
                    type="text"
                    id="city"
                    name="city"
                    value="<?= htmlspecialchars($userObj->city); ?>"
                    required
                >
            </div>

            <hr class="divider">

            <!-- foto sekarang -->
            <div class="form-row">
                <label>Current Photo:</label>
                <?php if (!empty($userObj->getPhoto())) : ?>
                    <img src="uploads/<?= $userObj->getPhoto() ?>" 
                        style="width:120px; border-radius:10px; margin-top:6px;">
                <?php else: ?>
                    <p style="color:#ddd;">No photo uploaded</p>
                <?php endif; ?>
            </div>

            <!-- upload foto baru -->
            <div class="form-row">
                <label for="photo">New Photo (optional)</label>
                <input type="file" id="photo" name="photo" accept="image/*">
            </div>

            <!-- simpan nama file lama -->
            <input type="hidden" name="old_photo" value="<?= $userObj->getPhoto(); ?>">

            <input type="hidden" name="id" value="<?= $userObj->getId(); ?>">

            <div class="form-row">
                <button class="btn-primary" type="submit">Update Member</button>
            </div>

        </form>

    </div>
</main>

</body>
</html>
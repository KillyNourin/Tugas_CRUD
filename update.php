<?php

// require necessary files
require_once 'inc/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Invalid request.");
}

$id       = $_POST['id'];
$username = trim($_POST['username']);
$fullname = trim($_POST['fullname']);
$city     = trim($_POST['city']);
$password = trim($_POST['password']);
$confirm  = trim($_POST['confirm']);

$user = new User();

if (!$user->setById($id)) {
    die("User tidak ditemukan.");
}

// UPDATE password kalau diisi
if (!empty($password)) {
    if ($password !== $confirm) {
        die("Password dan confirm tidak sama.");
    }
    $user->setPassword($password);
}

// UPDATE data lain
$user->username = $username;
$user->fullname = $fullname;
$user->city     = $city;

// HANDLE FOTO (optional)
if (!empty($_FILES['photo']['name'])) {

    $allowed = ['jpg','jpeg','png'];
    $ext = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));

    if (!in_array($ext, $allowed)) {
        die("Foto harus JPG, JPEG atau PNG.");
    }

    if ($_FILES['photo']['size'] > 2*1024*1024) {
        die("Foto maksimal 2MB.");
    }

    $newName = $username . "_" . time() . "." . $ext;

    move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/" . $newName);

    $user->setPhoto($newName);
}

// SIMPAN UPDATE
$user->update();

header("Location: members.php?msg=updated");
exit();

?>

<?php

// require necessary files
require_once 'inc/config.php';

// check if user is logged in

// handle form submission

// validasi form
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Invalid request.");
}

$username = trim($_POST['username']);
$password = trim($_POST['password']);
$confirm  = trim($_POST['confirm']);
$fullname = trim($_POST['fullname']);
$city     = trim($_POST['city']);

// validasi basic
if ($password !== $confirm) {
    die("Password dan Confirm Password tidak sama!");
}

if (empty($username) || empty($password) || empty($fullname) || empty($city)) {
    die("Semua field wajib diisi!");
}

// hash password
$hash = password_hash($password, PASSWORD_DEFAULT);

// handle foto upload
$photoName = null;

if (!empty($_FILES['photo']['name'])) {

    $allowed = ['jpg', 'jpeg', 'png'];
    $fileExt = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));

    if (!in_array($fileExt, $allowed)) {
        die("File foto harus JPG, JPEG, atau PNG.");
    }

    if ($_FILES['photo']['size'] > 2 * 1024 * 1024) { // max 2MB
        die("Ukuran foto maksimal 2MB.");
    }

    // rename file → username_timestamp.ext
    $photoName = $username . "_" . time() . "." . $fileExt;

    move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/" . $photoName);
}

// simpan ke database lewat class User

$user = new User();
$user->username = $username;
$user->fullname = $fullname;
$user->city     = $city;

$user->setPassword($password);
$user->setPhoto($photoName);

$user->save();

// redirect setelah berhasil
header("Location: members.php?msg=created");
exit();
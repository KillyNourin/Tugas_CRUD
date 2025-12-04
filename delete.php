<?php

// require necessary files
require_once 'inc/config.php';

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan.");
}

$id = (int) $_GET['id'];

$user = new User();

// load user
if (!$user->setById($id)) {
    die("User tidak ditemukan.");
}

// ambil nama foto sebelum delete
$oldPhoto = $user->getPhoto();

// DELETE dari database
$user->delete($id);

// Hapus foto kalau ada
if (!empty($oldPhoto) && file_exists("uploads/" . $oldPhoto)) {
    unlink("uploads/" . $oldPhoto);
}

// Redirect balik ke members
header("Location: members.php?msg=deleted");
exit;

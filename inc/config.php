<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session

// simple autoload
spl_autoload_register(function ($class_name) {
    include 'class/' . $class_name . '.php';
});

// database config
const DB_HOST = 'localhost';
const DB_USER = 'root';       
const DB_PASS = '';   
const DB_NAME = 'user_crud';   
// Define base URL

// navigasi config
const NAV_PAGES = [
    ['title' => 'Home',    'url' => 'index.php'],
    ['title' => 'Members', 'url' => 'members.php'],
    ['title' => 'New',     'url' => 'create.php'],
    ['title' => 'Logout',  'url' => 'logout.php']
];

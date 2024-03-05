<?php
require_once "./classes/User.php";
require_once "./classes/DBC.php";

if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo "Please fill out all fields.";
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

// Create a new user instance
$user = new User(null, $username, $password);

// Save the user to the database
if ($user->save()) {
    echo "Registration successful!";
} else {
    echo "Error: Registration failed.";
}

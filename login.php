<?php
require_once "./classes/User.php";
require_once "./classes/DBC.php";

if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo "Nejake prihlasovaci udaje mate prazdne!";
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

$connection = DBC::getConnection();
$sel = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $connection->query($sel);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: free.php");
} else {
    header("Location: index.php");
    
}
DBC::closeConnection();




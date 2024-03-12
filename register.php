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

    $add = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    
    if ($connection->query($add) === TRUE) {
        echo "Byl vam vytvoren uspesne ucet";
    } else {
        echo "Error: uzivatelske jmeno je obsazene ";
    }
    

DBC::closeConnection();




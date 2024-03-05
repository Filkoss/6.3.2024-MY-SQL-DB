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
$ps = $connection->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
$ps->bind_param("ss", $username, $password);

if (!$ps->execute()) {
    die("Error - " . $connection->error);
}

foreach ($ps->get_result() as $index => $row) {
    echo $index . $row;
}
DBC::closeConnection();


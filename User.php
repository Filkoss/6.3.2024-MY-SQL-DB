<?php

class User
{
    public ?int $id;
    public string $username;
    public string $password;

    public function __construct(?int $id, string $username, string $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public function save(): bool
    {
        $connection = DBC::getConnection();
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user (username, password) VALUES (?, ?)";
        $statement = $connection->prepare($query);
        $statement->bind_param("ss", $this->username, $hashedPassword);
        $result = $statement->execute();
        $statement->close();
        DBC::closeConnection();
        return $result;
    }
}

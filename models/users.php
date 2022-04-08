<?php

include __DIR__ . "/../library/get-database-connection.php";

class UserModel
{
    public static function getAll()
    {
        $connection = getDatabaseConnection();

        $getUsersQuery = $connection->query("SELECT * FROM users");

        $users = $getUsersQuery->fetchAll();

        return $users;
    }

    public static function create($user)
    {
        $name = $user["name"];
        $username = $user["username"];
        $email = $user["email"];
        $phone = $user["phone"];
        $website = $user["website"];

        $connection = getDatabaseConnection();

        $createUserQuery = $connection->query("INSERT INTO users(name, username, email, phone, website) VALUES('$name', '$username', '$email', '$phone', '$website');");
    }
}

<?php

require __DIR__ . "/../library/get-database-connection.php";

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
        $connection = getDatabaseConnection();
        $createUserQuery = $connection->prepare("INSERT INTO users(name, username, email, phone, website) VALUES(:name, :username, :email, :phone, :website);");
        $createUserQuery->execute($user);
    }

    public static function getById($id)
    {
        $connection = getDatabaseConnection();
        $getUserByIdQuery = $connection->prepare("SELECT * FROM users WHERE id = :id;");

        $getUserByIdQuery->execute(
            [
            "id" => $id
            ]
        );

        $user = $getUserByIdQuery->fetch();

        return $user;
    }

    public static function deleteById($id)
    {
        $connection = getDatabaseConnection();
        $deleteByIdQuery = $connection->prepare("DELETE FROM users WHERE id = :id;");

        $deleteByIdQuery->execute(
            [
            "id" => $id
            ]
        );
    }
}

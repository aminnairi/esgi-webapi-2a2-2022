<?php

require __DIR__ . "/../library/get-database-connection.php";

class PostModel
{
    public static function getAll()
    {
        $connection = getDatabaseConnection();
        $query = $connection->query("SELECT * FROM posts;");
        $posts = $query->fetchAll();

        return $posts;
    }

    public static function create($json)
    {
        $connection = getDatabaseConnection();
        $query = $connection->prepare("INSERT INTO posts(userId, title, body) VALUES(:userId, :title, :body);");
        $query->execute($json);
    }

    public static function deleteById($json)
    {
        $connection = getDatabaseConnection();
        $query = $connection->prepare("DELETE FROM posts WHERE id = :id;");
        $query->execute($json);
    }

    public static function updateById($json)
    {
        $allowedColumns = ["userId", "title", "body"];
        $columns = array_keys($json);
        $set = [];

        foreach ($columns as $column) {
            if (!in_array($column, $allowedColumns)) {
                continue;
            }

            $set[] = "$column = :$column";
        }

        $set = implode(", ", $set);
        $sql = "UPDATE posts SET $set WHERE id = :id";
        $connection = getDatabaseConnection();
        $query = $connection->prepare($sql);
        $query->execute($json);
    }
}

<?php

require __DIR__ . "/../library/get-database-connection.php";

class AlbumModel
{
    public static function getAll()
    {
        $connection = getDatabaseConnection();
        $query = $connection->query("SELECT * FROM albums");
        $albums = $query->fetchAll();

        return $albums;
    }

    public static function create($json)
    {
        $connection = getDatabaseConnection();
        $query = $connection->prepare("INSERT INTO albums(userId, title) VALUES(:userId, :title);");
        $query->execute($json);
    }

    public static function deleteById($json)
    {
        $connection = getDatabaseConnection();
        $query = $connection->prepare("DELETE FROM albums WHERE id = :id;");
        $query->execute($json);
    }

    public static function updateById($json)
    {
        $allowedColumns = ["userId", "title"];
        $columns = array_keys($json);
        $set = [];

        foreach ($columns as $column) {
            if (!in_array($column, $allowedColumns)) {
                continue;
            }

            $set[] = "$column = :$column";
        }

        $set = implode(", ", $set);
        $sql = "UPDATE albums SET $set WHERE id = :id";
        $connection = getDatabaseConnection();
        $query = $connection->prepare($sql);
        $query->execute($json);
    }
}

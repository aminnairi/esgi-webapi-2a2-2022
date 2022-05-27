<?php

require __DIR__ . "/../library/get-database-connection.php";

class PhotoModel
{
    public static function getAll()
    {
        $connection = getDatabaseConnection();
        $query = $connection->query("SELECT * FROM photos;");
        $albums = $query->fetchAll();

        return $albums;
    }

    public static function create($json)
    {
        $connection = getDatabaseConnection();
        $query = $connection->prepare("INSERT INTO photos(albumId, title, url, thumbnailUrl) VALUES(:albumId, :title, :url, :thumbnailUrl);");
        $query->execute($json);
    }

    public static function deleteById($json)
    {
        $connection = getDatabaseConnection();
        $query = $connection->prepare("DELETE FROM photos WHERE id = :id;");
        $query->execute($json);
    }

    public static function updateById($json)
    {
        $allowedColumns = ["albumId", "title", "url", "thumbnailUrl"];
        $columns = array_keys($json);
        $set = [];

        foreach ($columns as $column) {
            if (!in_array($column, $allowedColumns)) {
                continue;
            }

            $set[] = "$column = :$column";
        }

        $set = implode(", ", $set);
        $sql = "UPDATE photos SET $set WHERE id = :id";
        $connection = getDatabaseConnection();
        $query = $connection->prepare($sql);
        $query->execute($json);
    }
}

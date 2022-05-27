<?php

require __DIR__ . "/../library/get-database-connection.php";

class CommentModel
{
    public static function getAll()
    {
        $connection = getDatabaseConnection();
        $query = $connection->query("SELECT * FROM comments;");
        $comments = $query->fetchAll();

        return $comments;
    }

    public static function create($json)
    {
        $connection = getDatabaseConnection();
        $query = $connection->prepare("INSERT INTO comments(postId, name, email) VALUES(:postId, :name, :email);");
        $query->execute($json);
    }

    public static function updateById($json)
    {
        $allowedColumns = ["postId", "name", "email"];
        $columns = array_keys($json);
        $set = [];

        foreach ($columns as $column) {
            if (!in_array($column, $allowedColumns)) {
                continue;
            }

            $set[] = "$column = :$column";
        }

        $set = implode(", ", $set);
        $sql = "UPDATE comments SET $set WHERE id = :id";
        $connection = getDatabaseConnection();
        $query = $connection->prepare($sql);
        $query->execute($json);
    }

    public static function deleteById($json)
    {
        $connection = getDatabaseConnection();
        $query = $connection->prepare("DELETE FROM comments WHERE id = :id;");
        $query->execute($json);
    }
}

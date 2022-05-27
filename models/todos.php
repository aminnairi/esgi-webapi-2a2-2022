<?php

require __DIR__ . "/../library/get-database-connection.php";

class TodoModel
{
    public static function getAll()
    {
        $connection = getDatabaseConnection();
        $query = $connection->query("SELECT * FROM todos;");
        $todos = $query->fetchAll();

        return $todos;
    }

    public static function create($json)
    {
        $connection = getDatabaseConnection();
        $query = $connection->prepare("INSERT INTO todos(userId, title, completed) VALUES(:userId, :title, :completed);");
        $query->execute($json);
    }

    public static function deleteById($json)
    {
        $connection = getDatabaseConnection();
        $query = $connection->prepare("DELETE FROM todos WHERE id = :id;");
        $query->execute($json);
    }

    public static function updateById($json)
    {
        $allowedColumns = ["userId", "title", "completed"];
        $columns = array_keys($json);
        $set = [];

        foreach ($columns as $column) {
            if (!in_array($column, $allowedColumns)) {
                continue;
            }

            $set[] = "$column = :$column";
        }

        $set = implode(", ", $set);
        $sql = "UPDATE todos SET $set WHERE id = :id";
        $connection = getDatabaseConnection();
        $query = $connection->prepare($sql);
        $query->execute($json);
    }
}

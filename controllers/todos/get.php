<?php

require __DIR__ . "/../../library/json-response.php";
require __DIR__ . "/../../models/todos.php";

try {
    $todos = TodoModel::getAll();
    Response::json(200, [], ["success" => true, "todos" => $todos]);
} catch (PDOException $exception) {
    Response::json(500, [], ["success" => false, "error" => $exception->getMessage()]);
}

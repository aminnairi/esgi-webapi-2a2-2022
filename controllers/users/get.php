<?php

include __DIR__ . "/../../library/json-response.php";
include __DIR__ . "/../../models/users.php";

try {
    $users = UserModel::getAll();
    Response::json(200, [], [ "users" => $users ]);
} catch (PDOException $exception) {
    $errorMessage = $exception->getMessage();
    Response::json(500, [], [ "error" => "Error while accessing the database: $errorMessage" ]);
}

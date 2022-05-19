<?php

require __DIR__ . "/../../library/json-response.php";
require __DIR__ . "/../../models/users.php";
require __DIR__ . "/../../library/request.php";

try {
    $json = Request::getJsonBody();
    $user = UserModel::getById($json->id);

    if (!$user) {
        Response::json(404, [], ["success" => false, "error" => "User not found"]);
        die();
    }

    UserModel::deleteById($json->id);
    Response::json(200, [], ["success" => true]);
} catch (PDOException $exception) {
    Response::json(500, [], ["success" => false, "error" => $exception->getMessage()]);
}

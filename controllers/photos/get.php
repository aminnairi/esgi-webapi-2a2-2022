<?php

require __DIR__ . "/../../library/json-response.php";
require __DIR__ . "/../../models/photos.php";

try {
    $todos = PhotoModel::getAll();
    Response::json(200, [], ["success" => true, "photos" => $todos]);
} catch (PDOException $exception) {
    Response::json(500, [], ["success" => false, "error" => $exception->getMessage()]);
}

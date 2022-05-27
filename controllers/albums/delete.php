<?php

require __DIR__ . "/../../library/json-response.php";
require __DIR__ . "/../../library/request.php";
require __DIR__ . "/../../models/albums.php";

try {
    $json = Request::getJsonBody();
    AlbumModel::deleteById($json);
    Response::json(201, [], [ "success" => true ]);
} catch (PDOException $exception) {
    Response::json(500, [], ["success" => false, "error" => $exception->getMessage()]);
}

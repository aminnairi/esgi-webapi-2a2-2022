<?php

require __DIR__ . "/../../library/json-response.php";
require __DIR__ . "/../../models/albums.php";

try {
    $albums = AlbumModel::getAll();
    Response::json(201, [], [ "success" => true, "albums" => $albums ]);
} catch (PDOException $exception) {
    Response::json(500, [], ["success" => true,"error" => $exception->getMessage()]);
}

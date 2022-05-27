<?php

require __DIR__ . "/../../library/json-response.php";
require __DIR__ . "/../../library/request.php";
require __DIR__ . "/../../models/comments.php";

try {
    $json = Request::getJsonBody();
    CommentModel::create($json);
    Response::json(201, [], [ "comments" => true ]);
} catch (PDOException $exception) {
    Response::json(500, [], ["success" => true, "error" => $exception->getMessage()]);
}

<?php

require __DIR__ . "/../../library/json-response.php";
require __DIR__ . "/../../models/posts.php";

try {
    $posts = PostModel::getAll();
    Response::json(200, [], ["success" => true, "posts" => $posts]);
} catch (PDOException $exception) {
    Response::json(500, [], ["success" => false, "error" => $exception->getMessage()]);
}

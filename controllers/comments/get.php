<?php

require __DIR__ . "/../../library/json-response.php";
require __DIR__ . "/../../models/comments.php";

try {
    $comments = CommentModel::getAll();
    Response::json(200, [], ["success" => true, "comments" => $comments]);
} catch (PDOException $exception) {
    Response::json(500, [], ["success" => false, "error" => $exception->getMessage()]);
}

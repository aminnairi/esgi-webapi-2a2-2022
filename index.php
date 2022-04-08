<?php

ini_set("display_errors", 1);

error_reporting(E_ALL);

$route = $_REQUEST["route"] ?? "undefined";

$method = $_SERVER["REQUEST_METHOD"];

if ($route === "users") {
    if ($method === "GET") {
        include __DIR__ . "/controllers/users/get.php";
        die();
    }

    if ($method === "POST") {
        include __DIR__ . "/controllers/users/post.php";
        die();
    }

    if ($method === "PATCH") {
        include __DIR__ . "/controllers/users/patch.php";
        die();
    }

    if ($method === "DELETE") {
        include __DIR__ . "/controllers/users/delete.php";
        die();
    }
}

// À faire
// GET, POST, PATCH, DELETE /posts
// GET, POST, PATCH, DELETE /comments
// GET, POST, PATCH, DELETE /albums
// GET, POST, PATCH, DELETE /todos
// GET, POST, PATCH, DELETE /photos

include __DIR__ . "/library/json-response.php";

Response::json(404, [], [
    "error" => "Route not found"
]);

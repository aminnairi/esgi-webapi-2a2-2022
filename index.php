<?php

include "./library/json-response.php";

$route = $_REQUEST["route"];

if ($route === "users") {
    include "./controllers/users.php";
    die();
}

// GET /posts
// GET /comments
// GET /albums
// GET /todos
// GET /photos

Response::json(404, [], [
    "error" => "Route not found"
]);

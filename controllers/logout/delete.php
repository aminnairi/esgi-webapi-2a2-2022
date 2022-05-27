<?php

require __DIR__ . "/../../library/json-response.php";
require __DIR__ . "/../../library/request.php";
require __DIR__ . "/../../models/users.php";

// 1. Récupérer la requête
$json = Request::getJsonBody();

// 2. Récupérer l'utilisateur en bdd
$user = UserModel::getByToken($json["token"]);

// 3. Si l'utilisateur n'existe pas, renvoie une erreur
if (!$user) {
    Response::json(400, [], ["success" => false, "error" => "Bad request"]);
    die();
}

$user["token"] = null;

// 4. Si il existe, supprimer le token
UserModel::updateById($user);

// 5. Renvoyer une réponse de succès
Response::json(200, [], ["success" => true]);

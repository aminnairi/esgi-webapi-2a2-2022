<?php

require __DIR__ . "/../../library/json-response.php";
require __DIR__ . "/../../library/request.php";
require __DIR__ . "/../../models/users.php";

$json = Request::getJsonBody();

// 1. Vérifier que l'utilisateur existe bien en base de données

$user = UserModel::getByEmail($json["email"]);

// 2. Si il n'existe pas, renvoyer une erreur

if (!$user) {
    Response::json(400, [], ["success" => false, "error" => "Bad request"]);
    die();
}

// 3. Comparer les mots de passes
// 4. Si les mots de passes ne correspondent pas, renvoyer une erreur

if ($json["password"] !== $user["password"]) {
    Response::json(400, [], ["success" => false, "error" => "Bad request"]);
    die();
}

// 5. Créer un token

$token = bin2hex(random_bytes(16));

$user["token"] = $token;

// 6. Stocker le token pour l'utilisateur (en base de données)

UserModel::updateById($user);

// 7. Renvoyer le token dans la réponse

Response::json(200, [], ["success" => true, "token" => $token]);

<?php

require __DIR__ . "/../../library/json-response.php";

// Un algorithme qui permet de mettre à jour uniquement les données que l'utilisateur souhaite maj
// {email: "..."}

$allowedKeys = ["email"];

// boucle sur toutes les clés de mon JSON
// Récupère uniquement les clés qui sont autorisées
// UPDATE users SET email = :email, username = :username, password = :password WHERE id = :id;

Response::json(200, [], ["patch" => true]);

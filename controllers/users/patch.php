<?php

require __DIR__ . "/../../library/json-response.php";

// Un algorithme qui permet de mettre à jour uniquement les données que l'utilisateur souhaite maj

Response::json(200, [], ["patch" => true]);

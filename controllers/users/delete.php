<?php

require __DIR__ . "/../../library/json-response.php";

// Récupérer l'identifiant
// Vérifie si l'utilisateur lié à cet identifiant existe
// Requête qui permet de supprimer l'utilisateur
// Réponse de succès

Response::json(200, [], ["delete" => true]);

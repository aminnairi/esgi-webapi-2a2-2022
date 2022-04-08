<?php

include __DIR__ . "/../../library/json-response.php";
include __DIR__ . "/../../models/users.php";
include __DIR__ . "/../../library/request.php";

try {
    $json = Request::getJsonBody();

    /**
     * Vérifie si une propriété existe dans un objet
     * @see https://www.php.net/manual/en/function.property-exists
     */
    if (!property_exists($json, "name")) {
        Response::json(400, [], [ "error" => "Name is mandatory" ]);
        die();
    }

    if (!property_exists($json, "username")) {
        Response::json(400, [], [ "error" => "Username is mandatory" ]);
        die();
    }

    if (!property_exists($json, "email")) {
        Response::json(400, [], [ "error" => "Email is mandatory" ]);
        die();
    }

    if (!property_exists($json, "phone")) {
        Response::json(400, [], [ "error" => "Phone is mandatory" ]);
        die();
    }

    if (!property_exists($json, "website")) {
        Response::json(400, [], [ "error" => "Website is mandatory" ]);
        die();
    }

    UserModel::create([
        "name" => $json->name,
        "username" => $json->username,
        "email" => $json->email,
        "phone" => $json->phone,
        "website" => $json->website
    ]);

    Response::json(201, [], [ "success" => true ]);
} catch (PDOException $exception) {
    $errorMessage = $exception->getMessage();
    Response::json(500, [], [ "error" => "Error while accessing the database: $errorMessage" ]);
}

<?php

/**
 * Permet de paramétrer son moteur PHP (surcharge le fichier php.ini)
 * @see https://www.php.net/manual/en/function.ini-set.php
 */
ini_set("display_errors", 1);

/**
 * Permet de considérer tous les types d'erreurs comme des erreurs critiques
 * @see https://www.php.net/manual/en/function.error-reporting.php
 */
error_reporting(E_ALL);

/**
 * Permet de récupérer les variables de la requête (ré-écriture d'URL Apache)
 * @see https://www.php.net/manual/en/reserved.variables.request.php
 */
$route = $_REQUEST["route"] ?? "undefined";

/**
 * Permet de récupérer la méthode HTTP de la requête
 * @see https://www.php.net/manual/en/reserved.variables.server.php
 */
$method = $_SERVER["REQUEST_METHOD"];

if ($route === "users") {
    if ($method === "GET") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/users/get.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "POST") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/users/post.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "PATCH") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/users/patch.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "DELETE") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/users/delete.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }
}

if ($route === "posts") {
    if ($method === "GET") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/posts/get.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "POST") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/posts/post.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "PATCH") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/posts/patch.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "DELETE") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/posts/delete.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }
}

if ($route === "comments") {
    if ($method === "GET") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/comments/get.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "POST") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/comments/post.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "PATCH") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/comments/patch.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "DELETE") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/comments/delete.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }
}

if ($route === "albums") {
    if ($method === "GET") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/albums/get.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "POST") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/albums/post.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "PATCH") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/albums/patch.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "DELETE") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/albums/delete.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }
}

if ($route === "todos") {
    if ($method === "GET") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/todos/get.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "POST") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/todos/post.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "PATCH") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/todos/patch.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "DELETE") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/todos/delete.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }
}

if ($route === "photos") {
    if ($method === "GET") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/photos/get.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "POST") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/photos/post.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "PATCH") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/photos/patch.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }

    if ($method === "DELETE") {
        /**
         * Importe le contenu d'un fichier spécifique dans un autre
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/photos/delete.php";

        /**
         * Permet de stopper l'exécution du processus à l'endroit où est appelé cette fonction
         * @see https://www.php.net/manual/en/function.die.php
         */
        die();
    }
}

/**
 * Importe le contenu d'un fichier spécifique dans un autre
 * @see https://www.php.net/manual/en/function.include.php
 */
include __DIR__ . "/library/json-response.php";

Response::json(404, [], [
    "error" => "Route not found"
]);

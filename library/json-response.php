<?php

class Response
{

    public static function json($statusCode, $headers, $body)
    {
        /**
         * Configure le code de statut de la réponse
         * @see https://www.php.net/manual/en/function.http-response-code.php
         */
        http_response_code($statusCode);

        /**
         * Ajoute ou modifie un en-tête
         * @see https://www.php.net/manual/en/function.header.php
         */
        header("Content-Type: application/json");

        foreach ($headers as $key => $value) {
            /**
             * Ajoute ou modifie un en-tête
             * @see https://www.php.net/manual/en/function.header.php
             */
            header("$key: $value");
        }
        
        /**
         * Transforme une structure de données PHP en chaîne de caractères (sérialisation)
         * @see https://www.php.net/manual/en/function.json-encode.php
         */
        echo json_encode($body);
    }
}

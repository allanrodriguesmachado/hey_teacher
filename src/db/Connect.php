<?php

namespace Src\db;

use Exception;
use PDO;

abstract class Connect
{
    private static PDO $instance;

    public static function getInstance(): PDO|string
    {
        try {
            self::$instance = new PDO(
                'pgsql:host=localhost;dbname=postgres;port=5433',
                'postgres',
                '830314'
            );
        } catch (Exception $exception) {
            return $exception->getMessage();
        }

        return self::$instance;
    }
}
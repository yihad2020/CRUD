<?php

class Connection
{
    public static function get(): PDO
    {
        return new PDO(
            "pgsql:host=localhost;port=5432;dbname=bdventas",
            "postgres",
            "Ykelas-766",
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }
}

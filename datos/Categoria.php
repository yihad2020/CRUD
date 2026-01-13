<?php

require_once __DIR__ . '/connection.php';

class Categoria
{
    var $cod;
    var $nombre;

    // CREATE / INSERT
    function registrar($cod, $nombre)
    {
        $db = Connection::get();

        $sql = 'INSERT INTO "Categoria" (cod, nombre) VALUES (:cod, :nombre)';
        $stmt = $db->prepare($sql);

        return $stmt->execute([
            ':cod'    => $cod,
            ':nombre' => $nombre
        ]);
    }

    // UPDATE
    function modificar($cod, $nombre)
    {
        $db = Connection::get();

        $sql = 'UPDATE "Categoria" SET nombre = :nombre WHERE cod = :cod';
        $stmt = $db->prepare($sql);

        return $stmt->execute([
            ':cod'    => $cod,
            ':nombre' => $nombre
        ]);
    }

    // DELETE
    function eliminar($cod)
    {
        $db = Connection::get();

        $sql = "DELETE FROM Categoria WHERE cod = :cod";
        $stmt = $db->prepare($sql);

        return $stmt->execute([
            ':cod' => $cod
        ]);
    }

    // READ ONE
    function buscar($cod)
    {
        $db = Connection::get();

        $sql = "SELECT * FROM Categoria WHERE cod = :cod";
        $stmt = $db->prepare($sql);
        $stmt->execute([':cod' => $cod]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // READ ALL
    function listar()
    {
        $db = Connection::get();

        $sql = "SELECT * FROM Categoria ORDER BY cod";
        return $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}


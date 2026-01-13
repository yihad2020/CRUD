<?php
require_once __DIR__ . '/../datos/connection.php';

class Categoria
{
function registrar($cod, $nombre)
    {
        if ($this->buscar($cod)) {
            // Verifica si la categoria existe, si existe no nos permitira registrar
            echo "<script>alert('Error: La categoría con código $cod ya existe.');</script>";
            
            echo "Error: Categoria $cod ya existe.\n";
            return false; 
        }
        
        //Caso contrario nos registra la categoria
        $db = Connection::get();
        $sql = 'INSERT INTO "Categoria" (cod, nombre) VALUES (:cod, :nombre)';
        $stmt = $db->prepare($sql);

        return $stmt->execute([
            ':cod' => $cod,
            ':nombre' => $nombre
        ]);
    }

    function listar()
    {
        $db = Connection::get();
        return $db->query('SELECT * FROM "Categoria" ORDER BY cod')
                  ->fetchAll(PDO::FETCH_ASSOC);
    }

    function eliminar($cod)
{
    $db = Connection::get();

    $sql = 'DELETE FROM "Categoria" WHERE cod = :cod';
    $stmt = $db->prepare($sql);

    return $stmt->execute([':cod' => $cod]);
}

    function modificar($cod, $nombre)
{
    $db = Connection::get();

    $sql = 'UPDATE "Categoria" SET nombre = :nombre WHERE cod = :cod';
    $stmt = $db->prepare($sql);

    return $stmt->execute([
        ':cod' => $cod,
        ':nombre' => $nombre
    ]);
}

    function buscar($cod)
    {
        $db = Connection::get();
        $sql = 'SELECT * FROM "Categoria" WHERE cod = :cod';
        $stmt = $db->prepare($sql);
        $stmt->execute([':cod' => $cod]);

        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }

}

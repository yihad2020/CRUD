<?php
require_once __DIR__ . '/../negocios/categoria.php';
include 'header.php';

$categoria = new Categoria();
$resultado = null;
$msg = '';

if (isset($_GET['cod'])) {
    $cod = intval($_GET['cod']);
    $resultado = $categoria->buscar($cod);

    if (!$resultado) {
        $msg = "❌ No se encontraron categorias con el codigo $cod.";
    }
} else {
    $msg = "⚠️ No se proporcionaron parametros.";
}
?>

<div class="container">
    <h2 class="mb-4">Resultados de la busqueda</h2>

    <?php if ($msg): ?>
        <div class="alert alert-warning"><?= htmlspecialchars($msg) ?></div>
    <?php endif; ?>

    <?php if ($resultado): ?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= htmlspecialchars($resultado['cod']) ?></td>
                    <td><?= htmlspecialchars($resultado['nombre']) ?></td>
                </tr>
            </tbody>
        </table>

        <a href="categoria_form.php?edit=<?= $resultado['cod'] ?>" class="btn btn-warning">
            Editar Categoria
        </a>
    <?php endif; ?>

    <br><br>
    <a href="categoria_list.php" class="btn btn-secondary">
        ⬅ Volver a la lista de categorias
    </a>
</div>

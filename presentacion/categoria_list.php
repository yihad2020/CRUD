<?php
require_once __DIR__ . '/../negocios/categoria.php';
include 'header.php';

$categoria = new Categoria();
$msg = '';

// Handle deletion
if (isset($_GET['delete'])) {
    $codToDelete = intval($_GET['delete']);
    if ($categoria->eliminar($codToDelete)) {
        $msg = "✅ Categoria con el codigo $codToDelete eliminada exitosamente.";
    } else {
        $msg = "❌ Error al intentar borrar Categoria con el codigo $codToDelete.";
    }
}

// Fetch categories
$categorias = $categoria->listar();
?>

<div class="container">
    <h2 class="mb-4">Lista de Categorias</h2>

    <?php if ($msg): ?>
        <div class="alert alert-info"><?= htmlspecialchars($msg) ?></div>
    <?php endif; ?>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($categorias)): ?>
                <?php foreach ($categorias as $cat): ?>
                    <tr>
                        <td><?= htmlspecialchars($cat['cod']) ?></td>
                        <td><?= htmlspecialchars($cat['nombre']) ?></td>
                        <td>
                            <a href="categoria_form.php?edit=<?= $cat['cod'] ?>" class="btn btn-sm btn-warning">Editar</a>
                            <a href="?delete=<?= $cat['cod'] ?>" 
                            class="btn btn-sm btn-danger"
                            onclick="return confirm('Seguro que quieres borrar esta categoria?');">
                            Eliminar
                            </a>
                        </td>       
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No se encontraron categorias</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Bootstrap button to go to register form -->
    <a href="categoria_form.php" class="btn btn-success mt-3">Registrar Categoria</a>
</div>


<?php
require_once __DIR__ . '/../negocios/Categoria.php';
include 'header.php';

$categoria = new Categoria();
$msg = '';
$editing = false;
$cod = '';
$nombre = '';

// Check if editing
if (isset($_GET['edit'])) {
    $cod = intval($_GET['edit']);
    $data = $categoria->buscar($cod);
    if ($data) {
        $nombre = $data['nombre'];
        $editing = true;
    } else {
        $msg = "❌ Category not found.";
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cod = intval($_POST['cod']);
    $nombre = $_POST['nombre'] ?? '';

    if (isset($_POST['edit'])) {
        // Update
        if ($categoria->modificar($cod, $nombre)) {
            $msg = "✅ Categoria actualizada exitosamente";
        } else {
            $msg = "❌ Fallo al editar categoria.";
        }
    } else {
        // Insert
        if ($categoria->registrar($cod, $nombre)) {
            $msg = "✅ Categoria insertada exitosamente";
        } else {
            $msg = "❌ Fallo al insertar codigo.";
        }
    }
}
?>

<div class="container">
    <h2 class="mb-4"><?= $editing ? 'Edit Category' : 'Insert Category' ?></h2>

    <?php if ($msg): ?>
        <div class="alert alert-info"><?= htmlspecialchars($msg) ?></div>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <input type="number" name="cod" class="form-control" placeholder="Codigo de categoria" 
                   value="<?= htmlspecialchars($cod) ?>" <?= $editing ? 'readonly' : '' ?> required>
        </div>
        <div class="mb-3">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre de categoria" 
                   value="<?= htmlspecialchars($nombre) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary" name="<?= $editing ? 'edit' : 'save' ?>">
            <?= $editing ? 'Update' : 'Save' ?>
        </button>
        <a href="categoria_list.php" class="btn btn-secondary">Volver a la lista</a>
    </form> </br>

    <form action="categoria_buscar.php" method="GET" class="mb-4 d-flex gap-2">
    <input 
        type="number" 
        name="cod" 
        class="form-control" 
        placeholder="Search category by code"
        required
    >
    <button type="submit" class="btn btn-primary">
        Buscar
    </button>
</form>
</div>


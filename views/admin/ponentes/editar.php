<?php
$descripcion = 'Interfaz para editar ponentes o conferencistas';
?>

<h2 class="dashboard_heading"><?php echo $titulo; ?></h2>
<div class="dashboard_contenedor-boton">
    <a class="dashboard_boton" href="/admin/ponentes">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>

<div class="dashboard_formulario">
    <?php include_once __DIR__ . './../../templates/alertas.php'; ?>

    <form method="POST" class="formulario" enctype="multipart/form-data">

        <?php include_once __DIR__ . '/formulario.php'; ?>

        <input class="formulario_submit formulario_submit-registrar" type="submit" value="Editar">
    </form>
</div>
<?php
$descripcion = 'Interfaz para crear conferencias y Workshops';
?>
<h2 class="dashboard_heading"><?php echo $titulo; ?></h2>
<div class="dashboard_contenedor-boton">
    <a class="dashboard_boton" href="/admin/eventos">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>

<div class="dashboard_formulario">
    <?php include_once __DIR__ . './../../templates/alertas.php'; ?>

    <form method="POST" class="formulario">

        <?php include_once __DIR__ . '/formulario.php'; ?>

        <input class="formulario_submit formulario_submit-registrar" type="submit" value="Guardar Cambios">
    </form>
</div>
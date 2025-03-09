<?php
$descripcion = 'Interfaz para informar que se confirmo la cuenta ';
?>

<main class="registro">
    <h2 class="registro_heading"><?php echo $titulo; ?></h2>

    <?php require_once __DIR__ . '/../templates/alertas.php';?>

    <?php if(isset($alertas['exito'])){ ?>
        <div class=" acciones acciones_centrar">
            <a class="acciones_enlace" href="/login">Iniciar sesión</a>
        </div>
    <?php } ?>
</main>
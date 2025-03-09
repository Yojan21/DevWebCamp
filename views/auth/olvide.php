<?php
$descripcion = 'Interfaz para solicitar restablecer contraseña';
?>

<main class="olvide">
    <h2 class="olvide_heading"><?php echo $titulo; ?></h2>
    <p class="olvide_descripcion">Restablece tu Contraseña</p>
    <?php require_once __DIR__ . '/../templates/alertas.php';?>

    <form action="/olvide" class="formulario" method="POST">

        <div class="formulario_campo">
            <label for="email" class="formulario_label">Email</label>
            <input 
                type="email"
                class="formulario_input"
                placeholder="Tu Email"
                id="email"
                name="email"
            >
        </div>

        <input type="submit" class="formulario_submit" value="Enviar Confirmación">

        <div class="acciones">
            <a class="acciones_enlace" href="/login">¿Ya tienes una cuenta? Inicia sesión</a>
            <a class="acciones_enlace" href="/registro">¿Aún no tienes una cuenta? Crea una</a>
        </div>
    </form>
</main>
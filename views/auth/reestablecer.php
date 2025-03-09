<?php
$descripcion = 'Interfaz para solicitar restablecer contraseña';
?>

<main class="olvide">
    <h2 class="olvide_heading"><?php echo $titulo; ?></h2>
    <p class="olvide_descripcion">Agrega tu nueva contraseña</p>
    <?php require_once __DIR__ . '/../templates/alertas.php';?>

    <?php if($token_valido){ ?>
        <form class="formulario" method="POST">
            <div class="formulario_campo">
                <label for="password" class="formulario_label">Contraseña</label>
                <input 
                    type="password"
                    class="formulario_input"
                    placeholder="Tu nueva Contraseña"
                    id="password"
                    name="password"
                >
            </div>

            <input type="submit" class="formulario_submit" value="Guardar Contraseña">

            <div class="acciones">
                <a class="acciones_enlace" href="/login">¿Ya tienes una cuenta? Inicia sesión</a>
                <a class="acciones_enlace" href="/registro">¿Aún no tienes una cuenta? Crea una</a>
            </div>
        </form>
    <?php } ?>

</main>
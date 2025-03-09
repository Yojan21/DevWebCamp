<?php
$descripcion = 'Interfaz para iniciar sesión ';
?>

<main class="auth">
    <h2 class="auth_heading"><?php echo $titulo; ?></h2>
    <p class="auth_descripcion">Inicia Sesión en DevWebCamp</p>

    <?php require_once __DIR__ . '/../templates/alertas.php';?>

    <form action="/login" class="formulario" method="POST">

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

        <div class="formulario_campo">
            <label for="password" class="formulario_label">Contraseña</label>
            <input 
                type="password"
                class="formulario_input"
                placeholder="Tu Contraseña"
                id="password"
                name="password"
            >
        </div>

        <input type="submit" class="formulario_submit" value="Iniciar sesión">

        <div class="acciones">
            <a class="acciones_enlace" href="/registro">¿Aún no tienes una cuenta? Crea una</a>
            <a class="acciones_enlace" href="/olvide">¿Olvidaste tu contraseña?</a>
        </div>
    </form>
</main>
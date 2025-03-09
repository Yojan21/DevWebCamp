<?php
$descripcion = 'Interfaz para crear cuenta ';
?>

<main class="registro">
    <h2 class="registro_heading"><?php echo $titulo; ?></h2>
    <p class="registro_descripcion">Registra tu cuenta</p>

    <?php require_once __DIR__ . '/../templates/alertas.php';?>

    <form action="/registro" class="formulario" method="POST">

        <div class="formulario_campo">
            <label for="nombre" class="formulario_label">Nombre</label>
            <input 
                type="text"
                class="formulario_input"
                placeholder="Tu Nombre"
                id="nombre"
                name="nombre"
                value="<?php echo $usuario->nombre;?>"
            >
        </div>

        <div class="formulario_campo">
            <label for="apellido" class="formulario_label">Apellido</label>
            <input 
                type="text"
                class="formulario_input"
                placeholder="Tu Apellido"
                id="apellido"
                name="apellido"
                value="<?php echo $usuario->apellido;?>"
            >
        </div>

        <div class="formulario_campo">
            <label for="email" class="formulario_label">Email</label>
            <input 
                type="email"
                class="formulario_input"
                placeholder="Tu Email"
                id="email"
                name="email"
                value="<?php echo $usuario->email;?>"
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
                value=""
            >
        </div>

        <div class="formulario_campo">
            <label for="password2" class="formulario_label">Confirma tu Contraseña</label>
            <input 
                type="password"
                class="formulario_input"
                placeholder="Confirma Contraseña"
                id="password2"
                name="password2"
            >
        </div>

        <input type="submit" class="formulario_submit" value="Crear cuenta">

        <div class="acciones">
            <a class="acciones_enlace" href="/login">¿Ya tienes una cuenta? Inicia sesión</a>
            <a class="acciones_enlace" href="/olvide">¿Olvidaste tu contraseña?</a>
        </div>
    </form>
</main>
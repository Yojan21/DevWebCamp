<?php
$descripcion = 'Interfaz para el header del layout de usuario';
?>
<header class="header">
    <div class="header_contenedor">
        <nav class="header_navegacion">

        <?php if(is_auth()){ ?>
            <a class="header_enlace" href="<?php echo is_admin() ? '/admin/dashboard' : '/finalizar_registro'; ?>">Administrar</a>
            <form action="/logout" method="POST" class="header_form">
                <input class="header_submit" type="submit" value="Cerrar Sesión">
            </form>
        <?php }else { ?>
            <a class="header_enlace" href="/registro">Registro</a>
            <a class="header_enlace" href="/login">Iniciar Sesión</a>
        <?php } ?>
        </nav>

        <div class="header_contenido">
            <a href="/">
                <h1 class="header_logo">&#60;DevWebCamp/></h1>
            </a>
            <p class="header_texto">Octubre 5-6 de 2025</p>
            <p class="header_texto header_texto-modalidad">En línea - Presencial</p>

            <a href="/registro" class="header_boton">Comprar Pase</a>
        </div>
    </div>
</header>

<div class="barra">
    <div class="barra_contenido">
        <a href="/">
            <h2 class="barra_logo">&#60;DevWebCamp/></h2>
        </a>
        <nav class="navegacion">
            <a href="/devwebcamp" class="navegacion_enlace <?php echo pagina_actual('/devwebcamp') ? 'navegacion_enlace-actual' : '' ?>">Evento</a>
            <a href="/paquetes" class="navegacion_enlace <?php echo pagina_actual('/paquetes') ? 'navegacion_enlace-actual' : '' ?>">Paquetes</a>
            <a href="/workshops" class="navegacion_enlace <?php echo pagina_actual('/workshops') ? 'navegacion_enlace-actual' : '' ?>">Workshops / Conferencias</a>
            <a href="/registro" class="navegacion_enlace <?php echo pagina_actual('/registro') ? 'navegacion_enlace-actual' : '' ?>">Comprar Pase</a>
        </nav>
    </div>
</div>
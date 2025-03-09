<?php
$descripcion = 'Interfaz para el header del layout de admin';
?>
<header class="dashboard_header">
    <div class="dashboard_header-grid">
        <a href="/">
            <h2 class="dashboard_logo">
                &#60;DevWebCamp />
            </h2>
        </a>
        <nav class="dashboard_nav">
            <form action="/logout" method="POST" class="dashboard_form">
                <input class="dashboard_submit-logout" type="submit" value="Cerrar Sesión">
            </form>
        </nav>
    </div>
</header>
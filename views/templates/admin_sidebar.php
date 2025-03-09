<?php
$descripcion = 'Interfaz para el sidebar del layout de admin';
?>
<aside class="dashboard_sidebar">
    <nav class="dashboard_menu">

        <a href="/admin/dashboard" class="dashboard_enlace <?php echo pagina_actual('/dashboard') ? 'dashboard_enlace-actual' : ''; ?>">
            <i class="fa-solid fa-house-user dashboard_icono"></i>
            <span class="dashboard_menu-texto">
                Inicio
            </span>
        </a>

        <a href="/admin/ponentes" class="dashboard_enlace <?php echo pagina_actual('/ponentes') ? 'dashboard_enlace-actual' : ''; ?>">
            <i class="fa-solid fa-microphone dashboard_icono"></i>
            <span class="dashboard_menu-texto">
                Ponentes
            </span>
        </a>

        <a href="/admin/eventos" class="dashboard_enlace <?php echo pagina_actual('/eventos') ? 'dashboard_enlace-actual' : ''; ?>">
            <i class="fa-solid fa-calendar-week dashboard_icono"></i>
            <span class="dashboard_menu-texto">
                Eventos
            </span>
        </a>

        <a href="/admin/registrados" class="dashboard_enlace <?php echo pagina_actual('/registrados') ? 'dashboard_enlace-actual' : ''; ?>">
            <i class="fa-solid fa-users dashboard_icono"></i>
            <span class="dashboard_menu-texto">
                Registrados
            </span>
        </a>

        <a href="/admin/regalos" class="dashboard_enlace <?php echo pagina_actual('/regalos') ? 'dashboard_enlace-actual' : ''; ?>">
            <i class="fa-solid fa-gift dashboard_icono"></i>
            <span class="dashboard_menu-texto">
                Regalos
            </span>
        </a>
    </nav>
</aside>
<?php include_once __DIR__ . '/conferencias.php'; ?>

<section class="resumen">
    <div class="resumen_grid">
        <div class="resumen_bloque">
            <p class="resumen_texto resumen_texto-numero"><?php echo $ponentes ?></p>
            <p class="resumen_texto">Speakers</p>
        </div>

        <div class="resumen_bloque">
            <p class="resumen_texto resumen_texto-numero"><?php echo $conferencias ?></p>
            <p class="resumen_texto">Conferencias</p>
        </div>

        <div class="resumen_bloque">
            <p class="resumen_texto resumen_texto-numero"><?php echo $workshops ?></p>
            <p class="resumen_texto">Workshops</p>
        </div>

        <div class="resumen_bloque">
            <p class="resumen_texto resumen_texto-numero">500</p>
            <p class="resumen_texto">Asistentes</p>
        </div>
    </div>
</section>
<div class="evento">
    <p class="evento_hora"><?php echo $evento->hora->hora; ?></p>
    <div class="evento_informacion">
        <h4 class="evento_nombre"><?php echo $evento->nombre?></h4>
        <p class="evento_introduccion"><?php echo $evento->descripcion;?></p>
        <div class="evento_autor-info">
            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $evento->ponente->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $evento->ponente->imagen; ?>.png" type="image/png">
                <img class="evento_imagen-auto" loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'] . '/img/speakers/' . $evento->ponente->imagen; ?>.png" alt="imagen ponente">
            </picture>
            <p class="evento_auto-nombre"><?php echo $evento->ponente->nombre . " " . $evento->ponente->apellido; ?></p>
        </div>

        <button
            type="button"
            data-id="<?php echo $evento->id ?>"
            class="evento_agregar"
            <?php echo($evento->disponibles === "0") ? 'disabled' : ''; ?>
        >
        <?php echo($evento->disponibles === "0") ? 'Agotado' : 'Agregar - ' . $evento->disponibles . ' Disponibles'; ?>
        </button>

    </div>
</div>
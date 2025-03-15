<main class="pagina">
    <h2 class="pagina_heading">
        <?php echo $titulo; ?>
    </h2>
    <p class="pagina_descripcion">Tu Boleto - Te recomendamos almacenarlo, puedes compartirlo en redes sociales</p>

    <div class="boleto-virtual-final">
        <div class="boleto boleto-<?php echo strtolower($registro->paquete->nombre); ?> boleto-acceso">
            <div class="boleto_contenido">
                <h4 class="boleto_logo">&#60; DevWebCamp /></h4>
                <p class="boleto_plan"><?php echo $registro->paquete->nombre ?></p>
                <p class="boleto_nombre"><?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido ?></p>
            </div>
            <p class="boleto_codigo"><?php echo "#" . $registro->token ?></p>
        </div>
    </div>
</main>
<h2 class="dashboard_heading"><?php echo $titulo; ?></h2>

<main class="bloques">
    <div class="bloques_grid">
        <div class="bloque">
            <h3 class="bloque_heading">Ultimos registros</h3>
            <?php foreach($registros as $registro): ?>
                <p class="bloque_texto">
                    <?php echo $registro->usuario->nombre . ' ' . $registro->usuario->apellido?>
                </p>
            <?php endforeach; ?>
        </div>

        <div class="bloque">
            <h3 class="bloque_heading">Ingresos</h3>
                <p class="bloque_texto-cantidad">
                    <?php echo  '$' .$ingresos . ' USD'; ?>
                </p>
        </div>

        <div class="bloque">
            <h3 class="bloque_heading">Eventos con menos lugares disponibles</h3>
                <?php foreach($menos_disponibles as $evento): ?>
                    <div class="bloque_contenido">
                        <p class="bloque_texto">
                            <?php echo $evento->nombre . ' - ' . $evento->disponibles . ' Disponibles'; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
        </div>

        <div class="bloque">
            <h3 class="bloque_heading">Eventos con mas lugares disponibles</h3>
                <?php foreach($mas_disponibles as $evento): ?>
                    <div class="bloque_contenido">
                        <p class="bloque_texto">
                            <?php echo $evento->nombre . ' - ' . $evento->disponibles . ' Disponibles'; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
        </div>
    </div>
</main>
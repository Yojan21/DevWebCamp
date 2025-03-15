<h2 class="pagina_heading">
    <?php echo $titulo; ?>
</h2>
<p class="pagina_descripcion">Elige hasta 5 eventos para asistir de forma presencial</p>

<div class="eventos-registro">
    <main class="eventos-registro_listado">

        <h3 class="eventos-registro_heading-conferencias">&lt; Conferencias /></h3>
        <p class="eventos-registro_fecha">Viernes 5 de Octubre</p>

        <div class="eventos-registro_grid">
            <?php foreach($eventos['conferencias_v'] as $evento): ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php endforeach; ?>
        </div>


        <p class="eventos-registro_fecha">Sábado 6 de Octubre</p>
        <div class="eventos-registro_grid">
            <?php foreach($eventos['conferencias_s'] as $evento): ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php endforeach; ?>
        </div>

        <h3 class="eventos-registro_heading-workshops">&lt; WorkShops /></h3>
        <p class="eventos-registro_fecha">Viernes 5 de Octubre</p>

        <div class="eventos-registro_grid eventos-workshops">
            <?php foreach($eventos['workshops_v'] as $evento): ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php endforeach; ?>
        </div>


        <p class="eventos-registro_fecha">Sábado 6 de Octubre</p>
        <div class="eventos-registro_grid eventos-workshops">
            <?php foreach($eventos['workshops_s'] as $evento): ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php endforeach; ?>
        </div>

    </main>
    <aside class="registro">
        <h2 class="registro_heading">Tu registro</h2>

        <div id="registro-resumen" class="registro_resumen"></div>
        <div class="registro_regalo">
            <label for="regalo" class="registro_label">Seleccione un regalo</label>
            <select class="registro_select" id="regalo">
                <option value="">-Selecciona tu regalo-</option>
                <?php foreach($regalos as $regalo): ?>
                    <option value="<?php echo $regalo->id; ?>"><?php echo $regalo->nombre; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <form id="registro" class="formulario">
            <div class="formulario_campo">
                <input type="submit" class="formulario_submit formulario_submit-full" value="Registrarme">
            </div>
        </form>

    </aside>
</div>
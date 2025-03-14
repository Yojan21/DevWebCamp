<main class="agenda">
    <h2 class="agenda_heading">
        <?php echo $titulo; ?>
    </h2>
    <p class="agenda_descripcion">Talleres y conferencias dictados por expertos en Desarrollo Web</p>
    <div class="eventos">
        <h3 class="eventos_heading">&lt; Conferencias /></h3>

        <p class="eventos_fecha">Viernes 5 de Octubre</p>
        <div class="eventos_listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['conferencias_v'] as $evento): ?>
                    <?php include __DIR__ . '../../templates/eventos.php'; ?>
                <?php endforeach; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <p class="eventos_fecha">Sábado 6 de Octubre</p>
        <div class="eventos_listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['conferencias_s'] as $evento): ?>
                    <?php include __DIR__ . '../../templates/eventos.php'; ?>
                <?php endforeach; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <div class="eventos eventos-workshops">
        <h3 class="eventos_heading">&lt; WorkShops /></h3>

        <p class="eventos_fecha">Viernes 5 de Octubre</p>
        <div class="eventos_listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['workshops_v'] as $evento): ?>
                    <?php include __DIR__ . '../../templates/eventos.php'; ?>
                <?php endforeach; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <p class="eventos_fecha">Sábado 6 de Octubre</p>
        <div class="eventos_listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['workshops_s'] as $evento): ?>
                    <?php include __DIR__ . '../../templates/eventos.php'; ?>
                <?php endforeach; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</main>
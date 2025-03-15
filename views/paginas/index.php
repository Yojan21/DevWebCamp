<?php include_once __DIR__ . '/conferencias.php'; ?>

<section class="resumen">
    <div class="resumen_grid">
        <div data-aos="<?php aos_animacion() ?>" class="resumen_bloque">
            <p class="resumen_texto resumen_texto-numero"><?php echo $ponentes_total ?></p>
            <p class="resumen_texto">Speakers</p>
        </div>

        <div data-aos="<?php aos_animacion() ?>" class="resumen_bloque">
            <p class="resumen_texto resumen_texto-numero"><?php echo $conferencias_total ?></p>
            <p class="resumen_texto">Conferencias</p>
        </div>

        <div data-aos="<?php aos_animacion() ?>" class="resumen_bloque">
            <p class="resumen_texto resumen_texto-numero"><?php echo $workshops_total ?></p>
            <p class="resumen_texto">Workshops</p>
        </div>

        <div data-aos="<?php aos_animacion() ?>" class="resumen_bloque">
            <p class="resumen_texto resumen_texto-numero">500</p>
            <p class="resumen_texto">Asistentes</p>
        </div>
    </div>
</section>

<section class="speakers">
    <h2 class="speakers_heading">
        Speakers
    </h2>
    <p class="speakers_descripcion">Cono a nuestros expertos de DevWebCamp</p>

    <div class="speakers_grid">
        <?php foreach($ponentes as $ponente):?>
            <div data-aos="<?php aos_animacion() ?>" class="speaker">
            <picture data-aos="<?php aos_animacion() ?>">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" type="image/png">
                <img class="speaker_imagen loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" alt="imagen ponente">
            </picture>

                <div class="speaker_informacion">
                    <h4 class="speaker_nombre">
                        <?php echo $ponente->nombre . ' ' . $ponente->apellido ?>
                    </h4>
                    <p class="speaker_ubicacion">
                        <?php echo $ponente->ciudad . ', ' . $ponente->pais ?>
                    </p>

                    <nav data-aos="<?php aos_animacion() ?>" class="speaker-sociales">
                        <?php $redes =  json_decode($ponente->redes);

                        if(!empty($redes->facebook)): ?>
                            <a class="speaker-sociales_enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->facebook;?>">
                                <span class="speaker-sociales_ocultar">Facebook</span>
                            </a> 
                        <?php endif; ?>

                        <?php if(!empty($redes->twitter)): ?>
                            <a class="speaker-sociales_enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->twitter;?>">
                                <span class="speaker-sociales_ocultar">X</span>
                            </a> 
                        <?php endif; ?>

                        <?php if(!empty($redes->linkedin)): ?>
                            <a class="speaker-sociales_enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->linkedin; ?>">
                                <span class="speaker-sociales_ocultar">LinkedIn</span>
                            </a> 
                        <?php endif; ?>

                        <?php if(!empty($redes->instagram)): ?>
                            <a class="speaker-sociales_enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->instagram; ?>">
                                <span class="speaker-sociales_ocultar">Instagram</span>
                            </a> 
                        <?php endif; ?>

                        <?php if(!empty($redes->github)): ?>
                            <a class="speaker-sociales_enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->github;?>">
                                <span class="speaker-sociales_ocultar">GitHub</span>
                            </a>
                        <?php endif; ?>
                    </nav>

                    <ul data-aos="<?php aos_animacion() ?>" class="speaker_listado-skills">
                        <?php 
                            $tags = explode(',', $ponente->tags);
                            foreach($tags as $tag): 
                        ?>
                            <li class="speaker_skill">
                                <?php echo $tag; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<div class="mapa" id="mapa">

</div>

<section class="boletos">
    <h2 class="boletos_heading">Boletos & Precios</h2>
    <p class="boletos_descripcion">Precios para DevWebCamp</p>

    <div class="boletos_grid">

        <div data-aos="<?php aos_animacion() ?>" class="boleto boleto-presencial">
            <h4 class="boleto_logo">&#60; DevWebCamp /></h4>
            <p class="boleto_plan">Presencial</p>
            <p class="boleto_precio">$350.000</p>
        </div>

        <div data-aos="<?php aos_animacion() ?>" class="boleto boleto-virtual">
            <h4 class="boleto_logo">&#60; DevWebCamp /></h4>
            <p class="boleto_plan">Virtual</p>
            <p class="boleto_precio">$200.000</p>
        </div>

        <div data-aos="<?php aos_animacion() ?>" class="boleto boleto-gratis">
            <h4 class="boleto_logo">&#60; DevWebCamp /></h4>
            <p class="boleto_plan">Presencial</p>
            <p class="boleto_precio">Gratis - $0</p>
        </div>
    </div>

    <div class="boleto_enlace-contenedor">
        <a class="boleto_enlace" href="/paquetes">Ver Paquetes</a>
    </div>
</section>
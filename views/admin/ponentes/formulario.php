<fieldset class="formulario_fieldset">
    <legend class="formulario_legend">Información Personal</legend>

    <div class="formulario_campo">
        <label class="formulario_label" for="nombre">Nombre</label>
        <input 
            type="text"
            class="formulario_input"
            id="nombre"
            name="nombre"
            placeholder="Nombre del Ponente"
            value="<?php echo $ponente->nombre ?? ''; ?>"
        >
    </div>

    <div class="formulario_campo">
        <label class="formulario_label" for="apellido">Apellido</label>
        <input 
            type="text"
            class="formulario_input"
            id="apellido"
            name="apellido"
            placeholder="Apellido del Ponente"
            value="<?php echo $ponente->apellido ?? ''; ?>"
        >
    </div>

    <div class="formulario_campo">
        <label class="formulario_label" for="ciudad">Ciudad</label>
        <input 
            type="text"
            class="formulario_input"
            id="ciudad"
            name="ciudad"
            placeholder="Ciudad del Ponente"
            value="<?php echo $ponente->ciudad ?? ''; ?>"
        >
    </div>

    <div class="formulario_campo">
        <label class="formulario_label" for="pais">Pais</label>
        <input 
            type="text"
            class="formulario_input"
            id="pais"
            name="pais"
            placeholder="Pais del Ponente"
            value="<?php echo $ponente->pais ?? ''; ?>"
        >
    </div>

    <div class="formulario_campo">
        <label class="formulario_label" for="imagen">Imagen</label>
        <input 
            type="file"
            class="formulario_input formulario_input-file"
            id="imagen"
            name="imagen"
        >
    </div>

    <?php if(isset($ponente->imagen_actual)){ ?>
        <p class="formulario_texto">Imagen Actual:</p>
        <div class="formulario_imagen">
            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" type="image/png">
                <img src="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" alt="imagen ponente">
            </picture>
            
        </div>
    <?php } ?>
</fieldset>

<fieldset class="formulario_fieldset">
    <legend class="formulario_legend">Información Adicional</legend>
    <div class="formulario_campo">
        <label class="formulario_label" for="tags_input">Áreas de experiencia (separadas por coma)</label>
        <input 
            type="text"
            class="formulario_input"
            id="tags_input"
            placeholder="Ej. Node.js, PHP, CSS, Laravel"
        >
    </div>

    <div id="tags" class="formulario_listado"></div>
    <input type="hidden" name="tags" value="<?php echo $ponente->tags ?? ''; ?>">
</fieldset>

<fieldset class="formulario_fieldset">
    <legend class="formulario_legend">Redes Sociales</legend>

    <div class="formulario_campo">
        <div class="formulario_contenedor-icono">
            <div class="formulario_icono">
                <i class="fa-brands fa-facebook"></i>
            </div>
            <input 
                type="text"
                class="formulario_input-sociales"
                name="redes[facebook]"
                placeholder="Facebook"
                value="<?php echo $redes->facebook ?? ''; ?>"
            >
        </div>    
    </div>

    <div class="formulario_campo">
        <div class="formulario_contenedor-icono">
            <div class="formulario_icono">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <input 
                type="text"
                class="formulario_input-sociales"
                name="redes[instagram]"
                placeholder="Instagram"
                value="<?php echo $redes->instagram ?? ''; ?>"
            >
        </div>    
    </div>

    <div class="formulario_campo">
        <div class="formulario_contenedor-icono">
            <div class="formulario_icono">
                <i class="fa-brands fa-twitter"></i>
            </div>
            <input 
                type="text"
                class="formulario_input-sociales"
                name="redes[x]"
                placeholder="X"
                value="<?php echo $redes->x ?? ''; ?>"
            >
        </div>    
    </div>

    <div class="formulario_campo">
        <div class="formulario_contenedor-icono">
            <div class="formulario_icono">
                <i class="fa-brands fa-youtube"></i>
            </div>
            <input 
                type="text"
                class="formulario_input-sociales"
                name="redes[youtube]"
                placeholder="YouTube"
                value="<?php echo $redes->youtube ?? ''; ?>"
            >
        </div>    
    </div>

    <div class="formulario_campo">
        <div class="formulario_contenedor-icono">
            <div class="formulario_icono">
                <i class="fa-brands fa-github"></i>
            </div>
            <input 
                type="text"
                class="formulario_input-sociales"
                name="redes[github]"
                placeholder="GitHub"
                value="<?php echo $redes->github ?? ''; ?>"
            >
        </div>    
    </div>

    <div class="formulario_campo">
        <div class="formulario_contenedor-icono">
            <div class="formulario_icono">
                <i class="fa-brands fa-linkedin"></i>
            </div>
            <input 
                type="text"
                class="formulario_input-sociales"
                name="redes[linkedin]"
                placeholder="LinkedIn"
                value="<?php echo $redes->linkedin ?? ''; ?>"
            >
        </div>    
    </div>
</fieldset>
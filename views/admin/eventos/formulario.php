<?php
$descripcion = 'Interfaz de formulario para crear conferencias y Workshops';
?>

<fieldset class="formulario_fieldset">
    <legend class="formulario_legend">Información evento</legend>
    
    <div class="formulario_campo">
        <label class="formulario_label" for="nombre">Nombre</label>
        <input 
            type="text"
            class="formulario_input"
            id="nombre"
            name="nombre"
            placeholder="Nombre del Evento"
            value="<?php echo $evento->nombre ?? ''; ?>"
        >
    </div>

    <div class="formulario_campo">
        <label class="formulario_label" for="descripcion">Descripción</label>
        <textarea 
            class="formulario_input"
            id="descripcion"
            name="descripcion"
            placeholder="Descripción del Evento"
            value="<?php echo $evento->descripcion ?? ''; ?>"
        ></textarea>
    </div>

    <div class="formulario_campo">
        <label class="formulario_label" for="categoria">Categoria o Tipo de evento</label>
        <select class="formulario_select" id="categoria" name="categoria_id">
            <option value="" selected>--Seleccione--</option>
            <?php foreach($categorias as$categoria): ?>
                <option <?php echo ($evento->categoria_id === $categoria->id) ? 'selected' : ''; ?> value="<?php echo $categoria-> id;?>"><?php echo $categoria->nombre ?></option>
            <?php endforeach;?>
        </select>
    </div>

    <div class="formulario_campo">
        <label class="formulario_label" for="categoria">Selecciona el día</label>
        <div class="formulario_radio">
            <?php foreach($dias as $dia): ?>
                <div>
                    <label for="<?php echo strtolower($dia->nombre);?>"><?php echo $dia->nombre; ?></label>

                    <input 
                        type="radio"
                        id="<?php echo strtolower($dia->nombre);?>"
                        name="dia"
                        value="<?php echo $dia->id; ?>"
                    >
                </div>
            <?php endforeach;?>
        </div>
    </div>

    <div class="formulario_campo" id="horas">
        <label class="formulario_label">Seleccionar Hora</label>

        <ul class="horas">
            <?php foreach ($horas as $hora): ?>
                <li class="horas_hora"><?php echo $hora->hora ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</fieldset>

<fieldset class="formulario_fieldset">
    <legend class="formulario_legend">Información extra</legend>
        <div class="formulario_campo">
            <label class="formulario_label" for="ponentes">Ponente</label>
            <input 
                type="text"
                class="formulario_input"
                id="ponentes"
                placeholder="Buscar ponente"
            >
        </div>

        <div class="formulario_campo">
            <label class="formulario_label" for="disponibles">Lugares Disponibles</label>
            <input 
                type="number"
                min="1"
                class="formulario_input"
                id="disponibles"
                name="disponibles"
                placeholder="Ej. 20"
                value="<?php echo $evento->disponibles ?? ''; ?>"
            >
        </div>
</fieldset>
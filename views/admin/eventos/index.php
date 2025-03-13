<?php
$descripcion = 'Interfaz para listar conferencias y Workshops';
?>
<h2 class="dashboard_heading"><?php echo $titulo; ?></h2>

<div class="dashboard_contenedor-boton">
    <a class="dashboard_boton" href="/admin/eventos/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Agregar Evento
    </a>
</div>

<div class="dashboard_contenedor">
    <?php if(!empty($eventos)){ ?>
        <table class="table">
            <thead class="table_thead">
                <tr>
                    <th scope="col" class="table_th">Evento</th>
                    <th scope="col" class="table_th">Categoria</th>
                    <th scope="col" class="table_th">Dia</th>
                    <th scope="col" class="table_th">Hora</th>
                    <th scope="col" class="table_th">Ponente</th>
                    <th scope="col" class="table_th"></th>
                </tr>
            </thead>

            <tbody class="table_tbody">
                <?php foreach($eventos as $evento): ?>
                    <tr class="table_tr">
                        <td class="table_td">
                            <?php echo $evento->nombre; ?>
                        </td>
                        <td class="table_td">
                            <?php echo $evento->categoria->nombre; ?>
                        </td>
                        <td class="table_td">
                            <?php echo $evento->dia->nombre; ?>
                        </td>
                        <td class="table_td">
                            <?php echo $evento->hora->hora; ?>
                        </td>
                        <td class="table_td">
                            <?php echo $evento->ponente->nombre . ' ' . $evento->ponente->apellido; ?>
                        </td>
                        <td class="table_td-acciones">
                            <a class="table_accion table_accion-editar" href="/admin/eventos/editar?id=<?php echo $evento->id ?>">
                                <i class="fa-solid fa-pencil"></i>
                                Editar
                            </a>

                            <form method="POST" action="/admin/eventos/eliminar" class="table_formulario">
                                <input type="hidden" name="id" value="<?php echo $evento->id; ?>">
                                <button class="table_accion table_accion-eliminar" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php } else{ ?>
        <p class="text-center">Aún no hay Eventos</p>
    <?php } ?>
</div>

<div class="dashboard_paginacion">
    <?php echo $paginacion; ?>
</div>
<?php
$descripcion = 'Interfaz para listar ponentes o conferencistas';
?>
<h2 class="dashboard_heading"><?php echo $titulo; ?></h2>
<div class="dashboard_contenedor-boton">
    <a class="dashboard_boton" href="/admin/ponentes/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Agregar Ponente
    </a>
</div>

<div class="dashboard_contenedor">
    <?php if(!empty($ponentes)){ ?>
        <table class="table">
            <thead class="table_thead">
                <tr>
                    <th scope="col" class="table_th">Nombre</th>
                    <th scope="col" class="table_th">Ubicación</th>
                    <th scope="col" class="table_th"></th>
                </tr>
            </thead>

            <tbody class="table_tbody">
                <?php foreach($ponentes as $ponente): ?>
                    <tr class="table_tr">
                        <td class="table_td">
                            <?php echo $ponente->nombre . ' ' . $ponente->apellido ?>
                        </td>

                        <td class="table_td">
                            <?php echo $ponente->ciudad . ',' . $ponente->pais ?>
                        </td>

                        <td class="table_td-acciones">
                            <a class="table_accion table_accion-editar" href="ponentes/editar?id=<?php echo $ponente->id ?>">
                                <i class="fa-solid fa-user-pen"></i>
                                Editar
                            </a>

                            <form method="POST" action="/admin/ponentes/eliminar" class="table_formulario">
                                <input type="hidden" name="id" value="<?php echo $ponente->id; ?>">
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
        <p class="text-center">Aún no hay Ponentes</p>
    <?php } ?>
</div>

<div class="dashboard_paginacion">
    <?php echo $paginacion; ?>
</div>
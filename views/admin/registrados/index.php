<?php
$descripcion = 'Interfaz para listar los usuarios registrados';
?>

<h2 class="dashboard_heading"><?php echo $titulo; ?></h2>

<div class="dashboard_contenedor">
    <?php if(!empty($registros)){ ?>
        <table class="table">
            <thead class="table_thead">
                <tr>
                    <th scope="col" class="table_th">Nombre</th>
                    <th scope="col" class="table_th">Email</th>
                    <th scope="col" class="table_th">Plan</th>
                </tr>
            </thead>

            <tbody class="table_tbody">
                <?php foreach($registros as $registro): ?>
                    <tr class="table_tr">
                        <td class="table_td">
                            <?php echo $registro->usuario->nombre . ' ' . $registro->usuario->apellido; ?>
                        </td>

                        <td class="table_td">
                        <?php echo $registro->usuario->email; ?>
                        </td>

                        <td class="table_td">
                        <?php echo $registro->paquete->nombre;?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php } else{ ?>
        <p class="text-center">Aún no hay Registros</p>
    <?php } ?>
</div>

<div class="dashboard_paginacion">
    <?php echo $paginacion; ?>
</div>
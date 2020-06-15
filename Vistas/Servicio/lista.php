<div>
    <form action="index.php/?c=Servicio&a=llamar" method="POST">
        <input type="submit" class="btn-info" name="Agregar" value="AGREGAR">
    </form>
</div>
<form id="Form1" action="" method="POST">
    <table class="table table-light">
        <thead class="thead-dark">
            <tr>
                <th>Nombre Servicio</th>
                <th>Descripcion Servicio</th>
                <th>Cantidad Servicio</th>
                <th>Empleado</th>
            </tr>
        </thead>
        <tbody class="thead-light">
            <?php
            foreach ($resultado as $busqueda => $value) {
                ?>
                <tr>
                    <td><?php print_r($value->NombreServicio) ?></td>
                    <td><?php print_r($value->DescripcionServicio) ?></td>
                    <td><?php print_r($value->CantidadServicio) ?></td>
                    <td><?php print_r($value->FK_IDEMPLEADO) ?></td>
                    <input type="hidden" name="servicio_ID" value="<?php print_r($value->ID_SERVICIO) ?>">
                    <td><input type="submit" id="Editar" name="Editar" value="Editar"></td>
                    <td><input type="submit" id="Eliminar" name="eliminar" value="Eliminar"></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</form>
<script>
$('#Editar').click(function(){
   $('#Form1').attr('action', 'index.php/?c=Servicio&a=consultaUnica');
});
$('#Eliminar').click(function(){
   $('#Form1').attr('action', 'index.php/?c=Servicio&a=eliminar');
});
</script>
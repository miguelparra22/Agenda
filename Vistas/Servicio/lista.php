<?php
session_start();     
$Servicio;
          $this->Servicio = new ServicioController();
          ?>
<div>
    <form action="?c=Servicio&a=llamar" method="POST">
        <input type="submit" class="btn-info" name="Agregar" value="AGREGAR">
    </form>
</div>
<form id="Form1" action="" method="POST">
    <table class="table table-light">
        <thead class="thead-dark">
            <tr>
                <th>Nombre Servicio</th>
                <th>Descripcion Servicio</th>
                <?php if($_SESSION['ROL'] == 2){ ?>
                <th>Cantidad Servicio</th>
                <?php } ?>
                <?php if($_SESSION['ROL'] == 1){ ?>
                <th>Precio Servicio</th>
                <?php } ?>
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
                    <?php if($_SESSION['ROL'] == 2){ ?>
                    <td><?php print_r($value->CantidadServicio) ?></td>
                    <?php } ?>
                    <?php if($_SESSION['ROL'] == 1){ ?>
                    <td><?php print_r($value->Precio_Servicio) ?></td>
                    <?php } ?>
                    <td><?php print_r($this->Servicio->idxnombre($value->FK_IDEMPLEADO)) ?></td>
                    <input type="hidden" name="servicio_ID" value="<?php print_r($value->ID_SERVICIO) ?>">
                    <td><input type="submit" class="Editar" name="Editar" value="Editar"></td>
                    <td><input type="submit" class="Eliminar" name="eliminar" value="Eliminar"></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</form>
<script>
$('.Editar').click(function(){
   $('#Form1').attr('action', '?c=Servicio&a=consultaUnica');
});
$('.Eliminar').click(function(){
   $('#Form1').attr('action', '?c=Servicio&a=eliminar');
});
</script>
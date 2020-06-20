<?php     $Horario;
          $this->Horario = new HorarioController(); ?>
<div>
    <form action="?c=Horario&a=llamar" method="POST">
        <input type="submit" class="btn-info" name="Agregar" value="AGREGAR">
    </form>
</div>
<form id="Form1" action="" method="POST">
    <table class="table table-light">
        <thead class="thead-dark">
            <tr>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
                <th>Empleado</th>
                <th>Disponibilidad</th>
            </tr>
        </thead>
        <tbody class="thead-light">
            <?php
            foreach ($resultado as $busqueda => $value) {
                ?>
                <tr>
                    <td><?php print_r($value->Hora_inicio) ?></td>
                    <td><?php print_r($value->Hora_Fin) ?></td>
                    <td><?php print_r($this->Horario->idxnombre($value->FK_EMPLEADO)) ?></td>
                    <td><?php print_r($value->Disponibilidad) ?></td>
                    <input type="hidden" name="ID_HORARIO" value="<?php print_r($value->ID_HORARIO) ?>">
                    <td><input type="submit" class="Editar" name="Editar" value="Editar"></td>
                    <td><input type="submit" class="Eliminar" name="eliminar" value="Eliminar"></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</form>
<script>
$('.Editar').click(function(){
   $('#Form1').attr('action', '?c=Horario&a=consultaUnica');
});
$('.Eliminar').click(function(){
   $('#Form1').attr('action', '?c=Horario&a=eliminar');
});
</script>
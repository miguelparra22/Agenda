<h1>EDITAR HORARIO</h1>

<form action="?c=Horario&a=editar" method="POST">
    <div class="form-group">
        HORA INICIO
                <div class='input-group date' id="HoraInicio">
                    <input type="text" class="form-control"  name="HORAINICIO" value="<?= $resultado->getHoraInicio() ?>"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
    </div>
    <div class="form-group">
        HORA FIN
                        <div class='input-group date'  id="HoraFin">
        <input class="form-control" name="HORAFIN"  value="<?= $resultado->getHoraFinal() ?>"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>

    </div>
    <div class="form-group">
        EMPLEADO
        <select name="EMPLEADO">
            <?php
            foreach ($resultado->getEmpleado() as $busqueda => $value) {
                if($value->ID_EMPLEADO == $resultado->getId_Empleado()){ ?>
                    <option selected value="<?php print_r($value->ID_EMPLEADO) ?>" ><?php print_r($value->NombreEmpleado) ?></option>
                <?php } else { ?>
                    <option  value="<?php print_r($value->ID_EMPLEADO) ?>" ><?php print_r($value->NombreEmpleado) ?></option>
                <?php } ?>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        DISPONIBILIDAD
        <input class="form-control" name="DISPONI" value="<?= $resultado->getDisponibilidad() ?>" />
    </div>
    <div>
        <input type="hidden" class="form-control" name="ID_HORARIO" value="<?= $resultado->getId_Horario() ?>" />
        <input type="submit" class="btn btn-success" name="guardar" value="EDITAR" />
    </div>
    
</form>
        <script type="text/javascript">
            $(function () {
                $('#HoraInicio').datetimepicker({
format: 'H:m',
                });
            });
                        $(function () {
                $('#HoraFin').datetimepicker({
format: 'H:m',
                });
            });
        </script>
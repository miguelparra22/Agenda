<form action="?c=Horario&a=agregar" method="POST">
    <div class="form-group">
        HORA INICIO
                <div class='input-group date' id="HoraInicio">
                    <input type="text" class="form-control"  name="HORAINICIO" value=""/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
    </div>
    <div class="form-group">
        HORA FIN
                        <div class='input-group date'  id="HoraFin">
        <input class="form-control" name="HORAFIN"  value=""/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>

    </div>
    <div class="form-group">
        EMPLEADO
        <select class="form-control" name="EMPLEADO">
            <?php
            foreach ($resultado as $busqueda => $value) { ?>
                    <option  value="<?php print_r($value->ID_EMPLEADO) ?>" ><?php print_r($value->NombreEmpleado) ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        DISPONIBILIDAD
        <input class="form-control" name="DISPONI" value="" />
    </div>
    <div>
        <input type="submit" name="guardar" value="GUARDAR" />
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
<h1>EDITAR HORARIO</h1>

<form action="index.php/?c=Horario&a=editar" method="POST">
    <div class="form-group">
        HORA INICIO
                <div class='input-group date' id="HoraInicio">
                    <input type="text" class="form-control"  name="HORAINICIO" value="<?= $resultado->Hora_inicio ?>"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
    </div>
    <div class="form-group">
        HORA FIN
                        <div class='input-group date'  id="HoraFin">
        <input class="form-control" name="HORAFIN"  value="<?= $resultado->Hora_Fin ?>"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>

    </div>
    <div class="form-group">
        EMPLEADO
        <input class="form-control"  name="EMPLEADO" value="<?= $resultado->FK_EMPLEADO ?>" />
    </div>
    <div class="form-group">
        DISPONIBILIDAD
        <input class="form-control" name="DISPONI" value="<?= $resultado->Disponibilidad ?>" />
    </div>
    <div>
        <input type="hidden" class="form-control" name="ID_HORARIO" value="<?= $resultado->ID_HORARIO ?>" />
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
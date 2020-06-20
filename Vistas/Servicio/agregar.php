<form action="?c=Servicio&a=agregar" method="POST">
   <div class="form-group">
        NOMBRE SERVICIO
        <input type="text" class="form-control" name="NOMSERVi" value=""/>
    </div>
    <div class="form-group">
        DESCRIPCION SERVICIO
        <input class="form-control" name="DESCSERVI"  value=""/>
    </div>
    <div class="form-group">
        CANTIDAD SERVICIO
        <input class="form-control"  name="CANTSERVI" value="" />
    </div>
    <div class="form-group">
        EMPLEADO
        <select name="EMPLEADO">
            <?php
            foreach ($resultado as $busqueda => $value) { ?>
                    <option  value="<?php print_r($value->ID_EMPLEADO) ?>" ><?php print_r($value->NombreEmpleado) ?></option>
            <?php } ?>
        </select>
    </div>
    <div>
        <input type="submit" name="guardar" value="GUARDAR" />
    </div>
</form>

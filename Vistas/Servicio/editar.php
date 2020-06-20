<h1>EDITAR USUARIO</h1>

<form action="?c=Servicio&a=editar" method="POST">
    <div class="form-group">
        NOMBRE SERVICIO
        <input type="text" class="form-control" name="NOMSERVi" value="<?= $resultado->getNombreServicio() ?>"/>
    </div>
    <div class="form-group">
        DESCRIPCION SERVICIO
        <input class="form-control" name="DESCSERVI"  value="<?= $resultado->getDescripcionServicio() ?>"/>
    </div>
    <div class="form-group">
        CANTIDAD SERVICIO
        <input class="form-control"  name="CANTSERVI" value="<?= $resultado->getCantidadServicio() ?>" />
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
    <div>
        <input type="hidden" class="form-control" name="ID_SERVICIO" value="<?= $resultado->getId_Servicio() ?>" />
        <input type="submit" class="btn btn-success" name="guardar" value="EDITAR" />
    </div>
</form>
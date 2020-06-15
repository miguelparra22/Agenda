<h1>EDITAR USUARIO</h1>

<form action="index.php/?c=Servicio&a=editar" method="POST">
    <div class="form-group">
        NOMBRE SERVICIO
        <input type="text" class="form-control" name="NOMSERVi" value="<?= $resultado->NombreServicio ?>"/>
    </div>
    <div class="form-group">
        DESCRIPCION SERVICIO
        <input class="form-control" name="DESCSERVI"  value="<?= $resultado->DescripcionServicio ?>"/>
    </div>
    <div class="form-group">
        CANTIDAD SERVICIO
        <input class="form-control"  name="CANTSERVI" value="<?= $resultado->CantidadServicio ?>" />
    </div>
    <div class="form-group">
        EMPLEADO
        <input class="form-control" name="EMPLEADO" value="<?= $resultado->FK_IDEMPLEADO ?>" />
    </div>
    <div>
        <input type="hidden" class="form-control" name="ID_SERVICIO" value="<?= $resultado->ID_SERVICIO ?>" />
        <input type="submit" class="btn btn-success" name="guardar" value="EDITAR" />
    </div>
    
</form>
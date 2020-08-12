<?php
?>
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
    <?php if($_SESSION['ROL'] == 2){?>
    <div class="form-group">
        CANTIDAD SERVICIO
        <input class="form-control"  name="CANTSERVI" value="<?= $resultado->getCantidadServicio() ?>" />
    </div>
    <?php }else{ ?>
        <div style="display:none" class="form-group">
        CANTIDAD SERVICIO
        <input  class="form-control"  name="CANTSERVI" value="" />
        </div>
    <?php }?>
    <?php if($_SESSION['ROL'] == 1){?>
        <div class="form-group">
            PRECIO SERVICIO
            <input class="form-control"  name="PRECIOSERVICIO" value="<?= $resultado->getPrecioServicio() ?>" />
        </div>
    <?php } else {?>
        <div style="display:none" class="form-group">
        PRECIO SERVICIO
        <input  class="form-control"  name="PRECIOSERVICIO" value="" />
        </div>
    <?php }?>
            <div class="form-group">
            TIEMPO LIMITE SERVICIO
            <input class="form-control"  name="TIEMPOLIMITE" value="<?= $resultado->getTiempo_Limite() ?>" />
        </div>
    <div>
        <input type="hidden" class="form-control" name="ID_SERVICIO" value="<?= $resultado->getId_Servicio() ?>" />
        <input type="submit" class="btn btn-success" name="guardar" value="EDITAR" />
    </div>
</form>
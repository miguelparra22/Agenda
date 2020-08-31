<?php
session_start();     
$Servicio;
          $this->Servicio = new ServicioController();
          ?>
<section id="main">


<form id="Form1" action="" method="POST">
    <div class="container p-2">
        <div class="text-center">
            <h2>Lista de servicios en D'JANE</h2>
        </div>
    <div class="table responsive">
        <table class="table table-bordered  table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Nombre Servicio</th>
                    <th>Descripcion Servicio</th>
                    <?php if($_SESSION['ROL'] == 2){ ?>
                    <th>Cantidad Servicio</th>
                    <?php } ?>
                    <?php if($_SESSION['ROL'] == 1){ ?>
                    <th>Precio Servicio</th>
                    <?php } ?>
                    <th>Tiempo Limite</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $contador = 0;
                foreach ($resultado as $busqueda => $value) {
                $contador++;
                    ?>
                    <tr>
                        <form id="Form<?php print_r($contador)?>" action="" method="POST"> </form>
                            <td><?php print_r($value->NombreServicio) ?></td>
                            <td><?php print_r($value->DescripcionServicio) ?></td>
                            <?php if($_SESSION['ROL'] == 2){ ?>
                            <td><?php print_r($value->CantidadServicio) ?></td>
                            <?php } ?>
                            <?php if($_SESSION['ROL'] == 1){ ?>
                            <td><?php print_r($value->Precio_Servicio) ?></td>
                            <?php } ?>
                            <td><?php print_r($value->TIEMPO_LIMITE) ?></td>
                            <input type="hidden" form="Form<?php print_r($contador)?>" name="servicio_ID" value="<?php print_r($value->ID_SERVICIO) ?>">
                            <td><input type="button" class="Editar" name="Editar" onclick="$('#Form<?php print_r($contador)?>').attr('action','?c=Servicio&a=consultaUnica');$('#Form<?php print_r($contador)?>').submit();"  value="Editar"></td>
                            <td><input type="button" class="Eliminar" name="eliminar" onclick="$('#Form<?php print_r($contador)?>').attr('action', '?c=Servicio&a=eliminar');$('#Form<?php print_r($contador)?>').submit();" value="Eliminar"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
    </form>

    <div class="container p-2">
    <form action="?c=Servicio&a=LlamarAgregar" method="POST">
        <input type="submit" class="btn btn-info btn-block" name="Agregar" value="AGREGAR">
    </form>
    </div>

    
<script>
$('.Editar').click(function(){
   $('#Form1').attr('action', '?c=Servicio&a=consultaUnica');
});
$('.Eliminar').click(function(){
   $('#Form1').attr('action', '?c=Servicio&a=eliminar');
});
</script>

</section>

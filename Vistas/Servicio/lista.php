<?php
//session_start();     
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
                <th>Empleado</th>
                <th>Editar</th>
                <th>Eliminar</th>
                
            </tr>
        </thead>
        <tbody>
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


    <div>
    <form action="./?c=Servicio&a=llamar" method="POST">
        <input type="submit" class="btn btn-info btn-block" name="Agregar" value="AGREGAR">
    </form>
</div>
</div>
    

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
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

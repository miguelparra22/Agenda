<?php
$Servicio;
          $this->Servicio = new ServicioController();
          ?>
          <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Agendamiento/Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>

    <title>Servicios</title>
</head>



            <!-------Animación------>

    <div id="waitDiv" class="loadercont">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="imageloader">
                        <img src="/Agendamiento/Assets/Imagenes/djlogo.png" alt="D'JANE" width="200" height="100">


                    </div>
                    <div class="contenedorload">
                        <div class="lds-grid">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!------Contenedor menú-------->


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
<section id="main">

<style>
        .cont1 {
            width: 90%;
            height: 500px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 100px;
        }

        .contbtn1 {
            width: 90%;
        }
        </style>






        <div class="container cont1">

            <div class="p-3">
                <h2>Equipo D'JANE</h2>
                <p>Busque por medio del filtro un usuario en especifico y click en el nombre si desea más:</p>
            </div>

            <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
            <br>
            <div class="table-responsive" style="height: 50%;">
            <form id="Form1" action="" method="POST">
                <ul class="list-group" id="myList">
                    <?php
                       $contador = 0;
                       foreach($resultado as $busqueda => $value){ 
                       $contador ++;
                    ?>


                        <form id="Form<?php print_r($contador)?>" action="" method="POST"> 
                    <li class="list-group-item">

                        <div class="row">
                            <div class="col-md-9 col-sm-9">
                                <?php print_r($value->NombreServicio) ?>
                                <input type="hidden" name="servicio_ID" value="<?php print_r($value->ID_SERVICIO) ?>">
                            </div>
                            <div class="col-md-1 col-sm-3">
<input type="button" class="Editar btn btn-warning text-white" name="Editar" onclick="$('#Form<?php print_r($contador)?>').attr('action','?c=Servicio&a=consultaUnica');$('#Form<?php print_r($contador)?>').submit();"  value="Editar">
                            </div>
                            <div class="col-md-1 col-sm-3">
<input type="button" class="Eliminar btn btn-danger" name="eliminar" onclick="$('#Form<?php print_r($contador)?>').attr('action', '?c=Servicio&a=eliminar');$('#Form<?php print_r($contador)?>').submit();" value="Eliminar">
                            </div>

                        </div>

                    </li>
                    </form>

                    <?php }?>

                </ul>

            </form>
        </div>
        </div>

            <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myList li").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });


        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
        </script>

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

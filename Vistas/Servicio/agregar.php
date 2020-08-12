<section id="main">

    <div class="container">
        <div class="box">
            <h3>Registre un nuevo servicio en D'JANE</h3>
            <form action="?c=Servicio&a=agregar" method="POST">
                <div>
                    <input type="text" name="NOMSERVI" value="" required />
                    <label>Nombre del servicio</label>
                </div>

               

                <?php if ($_SESSION['ROL'] == 2) { ?>

                    <div>
                        <input type="text" required name="CANTSERVI" />
                        <label>Cantidad de servicio</label>
                    </div>
                <?php } else { ?>
                    <div style="display:none">

                        <input class="form-control" name="CANTSERVI" value="0" />
                        <label>Cantidad de Servicio</label>
                    </div>
                <?php } ?>
                                    <div>
                        <textarea name="DESCSERVI" required></textarea>
                  
                    <label>Descripción servicio</label>
                </div>
                <?php if ($_SESSION['ROL'] == 1) { ?>

                    <div>
                        <input name="PRECIOSERVICIO" value="" required />
                        <label>Precio del servicio</label>
                    </div>

                <?php } else { ?>
                    <div style="display:none">

                        <input name="PRECIOSERVICIO" value="" required />
                        <label>Precio del servicio</label>
                    </div>
                <?php } ?>
                                    <div>
                        <input name="TIEMPO_LIMITE" required></input>
                  
                    <label>Tiempo Limite del servicio</label>
                </div>

                <div>
                <input type="submit" name="guardar" value="GUARDAR" />
                </div>
            </form>
        </div>
    </div>
    
</section>
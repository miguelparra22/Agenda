<?php 


interface Idatabase{
    
    public function listar();
    public function agregar($vo);
    public function consultaUnica($id);
    public function eliminar($id);
    public function actualizar($vo);
            
}





?>
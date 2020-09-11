function validarcliente(){

    var nombre, correo, pass, telefono

    nombre = document.getElementById("nombre").value;
    correo = document.getElementById("correo").value;
    pass =  document.getElementById("con").value;
    telefono = document.getElementById("telefono").value;

    if(nombre === "" 	|| correo === "" 	|| pass === "" || telefono === "" || con === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(nombre.length>30){
        alert("El nombre es muy largo");
        return false;
   
    }
}
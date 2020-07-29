/*var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}*/

function load() {
  var elemento = document.getElementById("waitDiv");


  setTimeout(function() {
      elemento.style.display = "none";
  }, 1000);
}
window.onload = load;




function abrirM(elemento) {
  tomaropcion(elemento);
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  /*document.body.style.backgroundColor = "rgba(0,0,0,0.4)";*/

}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.body.style.backgroundColor = "white";
}

function tomaropcion(elemento) {
  switch (elemento) {

  case "citas":
      var citas = "";

     
      citas += " <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>";
      citas += "<a> <i class='fa fa-history'></i> Historial citas</a>";
      citas += "<a><i class='fa fa-calendar-times-o' ></i> Cancelar citas</a>";
      citas += "<a><i class='fa fa-eye' ></i> Ver citas</a>";

      document.getElementById("mySidenav").innerHTML = citas;
      
      break;


    case "team":
      var e = "";
       e += "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>";
       e += "<a href='?c=Empleado&a=ListaEmpleados'><i class='fa fa-users'></i> Ver Equipo</a>";
       e += "<a href='?c=Empleado&a=LlamarAgregar'><i class='fa fa-user-plus'></i> Agregar miembro</a>";
      // e += "<a><i class='fa fa-user-times'></i> Desabihilitar miembro</a>";
      e += "<a href='?c=Servicio&a=lista'><i class='fa fa-shower'></i> Servicios</a>";
      

       document.getElementById("mySidenav").innerHTML = e;
      break;

    case "con":

    var conf = "";
    conf += "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>";
    conf += "<a><i class='fa fa-cogs'></i> Actualizar</a>";


    document.getElementById("mySidenav").innerHTML = conf;
    break;

    case "citas_cliente":

    var ct = "";

    ct += "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>";
    ct += "<a><i class='fa fa-calendar-plus-o'></i> Solicitar cita</a>";
    ct += "<a><i class='fa fa-eye'></i> Ver mis citas</a>";
    ct += "<a><i class='fa fa-calendar-times-o' ></i> Cancelar cita</a>";

    document.getElementById("mySidenav").innerHTML = ct;

    break;
    

    case  "team_cliente":
    
    var tcm = "";

    tcm += "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>";
    tcm += "<a title='Ver equipo DJane'><i class='fa fa-users'></i> Ver equipo</a>";
    tcm += "<a title='Buscar miembro' ><i class='fa fa-search'></i> Buscar miembro</a>";
    tcm += "<a title='Ver nuestro canal de Youtube'><i class='fa fa-youtube'></i> Youtube</a>";
    tcm += "<a title='Ver nuestro Facebook'><i class='fa fa-facebook'></i> Facebook</a>";
    tcm += "<a title='Ver nuestro Instagram'><i class='fa fa-instagram'></i> Instagram</a>";

    document.getElementById("mySidenav").innerHTML = tcm;
    break;
    


    
      
  }


  

}
   

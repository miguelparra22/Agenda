/*var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}*/


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

      citas += "<a>Historial citas</a>";
      citas += " <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>";
      citas += "<a>Cancelar citas</a>";
      citas += "<a>Ver citas</a>";

      document.getElementById("mySidenav").innerHTML = citas;
      
      break;


    case "team":
      var e = "";
       e += "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>";
       e += "<a>Ver Equipo</a>";
       e += "<a>Agregar miembro</a>";
       e += "<a>Desabihilitar miembro</a>";

       document.getElementById("mySidenav").innerHTML = e;
      break;

    case "conf":

    var con = "";
    con += "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>";
    con += "<a>Actualizar datos</a>";



    break;
      
  }
}
   


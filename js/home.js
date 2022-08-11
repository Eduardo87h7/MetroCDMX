$(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

  $(document).ready(function(){
    $("#myInput2").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable2 tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

  $(document).ready(function(){
    $("#myInput3").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable3 tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  
  function verpassword(){
    var tipo = document.getElementById("txtpassword");
    if(tipo.type == "password")
  {
        tipo.type = "text";
    }
  else
  {
        tipo.type = "password";
    }
}
  
    
function salir(){
  window.location= 'index.php' 
  
}
function retorno(){
  window.location= 'admin.php' 
  
}

  document.getElementById("tabla2").style.display = "none";
  document.getElementById("tabla3").style.display = "none";
  document.getElementById("enviar").style.display = "none";


function tablas(){
    document.getElementById("tabla1").style.display = "block";
  document.getElementById("tabla2").style.display = "none";
  document.getElementById("tabla3").style.display = "none";
  document.getElementById("trabb").innerHTML = "Todos Los Documentos";
  document.getElementById("enviar").style.display = "none";

}
  

function tablasss(){
  document.getElementById("tabla3").style.display = "block";
  document.getElementById("tabla1").style.display = "none";
  document.getElementById("tabla2").style.display = "none";
  document.getElementById("trabb").innerHTML = "Mis Documentos";
  document.getElementById("enviar").style.display = "none";
}

function enviar(){
  document.getElementById("tabla3").style.display = "none";
  document.getElementById("tabla1").style.display = "none";
  document.getElementById("tabla2").style.display = "none";
  document.getElementById("enviar").style.display = "block";
  document.getElementById("trabb").innerHTML = "ENVIOS";
}
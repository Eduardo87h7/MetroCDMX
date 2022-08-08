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
  



  document.getElementById("tabla2").style.display = "none";
  document.getElementById("tabla3").style.display = "none";


function tablas(){
    document.getElementById("tabla1").style.display = "none";
  document.getElementById("tabla2").style.display = "block";
  document.getElementById("tabla3").style.display = "none";
  document.getElementById("trabb").innerHTML = "Todos Los Documentos";

}
  

function tablasss(){
  document.getElementById("tabla3").style.display = "block";
  document.getElementById("tabla1").style.display = "none";
  document.getElementById("tabla2").style.display = "none";
  document.getElementById("trabb").innerHTML = "Mis Documentos";
}
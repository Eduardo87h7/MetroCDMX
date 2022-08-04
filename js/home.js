$(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });


function tablas(){
    document.getElementById("tabla1").style.display = "none";

}
  
function tablass(){
    document.getElementById("tabla1").style.display = "block";
    
}
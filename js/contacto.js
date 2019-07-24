$(document).ready( function(){
  $("#contacto").submit(function(){
    var url="../controlador/enviarContacto.php";
    $.ajax({
      type:"POST",
      url:url,
      data:$("#contacto").serialize(),
      success:function(data)
      {
        $("#resultado").html(data);
      }
    });
    return false;
  });
});

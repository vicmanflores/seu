
function LlamarModal() {
    $valor = $("#frmingresarcedula-cedula").val();
$('#Creando').hide();
$('#Generando').hide();
$('#Comprobando').hide();
$('#Enviando').hide();
    if ($valor != "") {
        $('#modal-espera-envio-correo').modal('show')
        
        $("div.progress-bar").html("15%").css("width", "15%");    
        
        setTimeout("$('#Comprobando').show();", 5000);
        setTimeout('$("div.progress-bar").html("25%").css("width", "25%");', 5000);

         setTimeout("$('#Creando').show();", 9000);
         setTimeout('$("div.progress-bar").html("50%").css("width", "50%");', 9000);

         setTimeout("$('#Generando').show();", 12000);
         setTimeout('$("div.progress-bar").html("75%").css("width", "75%");', 12000);

         setTimeout("$('#Enviando').show();", 18000);
         setTimeout('$("div.progress-bar").html("99%").css("width", "99%");', 18000);
         
         
         
    }

}


/*
  $( document ).ready(function() {   
   var i = 0;
   var refreshIntervalId = setInterval(function(){ 

    if(i==100)
    {
     clearInterval(refreshIntervalId);
     return;
    }
    i++;    
    $("div.progress-bar").html(i +"%").css("width", i +"%");    
   }, 100);
  });*/
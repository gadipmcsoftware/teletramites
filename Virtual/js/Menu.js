
$(document).ready(function() {
    try {
      $('#opt_rectra').on('click', function (e){
              sessionStorage.setItem('Accion',1);
      });
      $('#opt_soltra').on('click', function (e){  
             sessionStorage.setItem('Accion',1);
        });
    } catch (e) {
        alert("error"+e);
    }
});

function CargarMenu(){
    var UsrExt=parseInt(sessionStorage.getItem('Usr_Ext'));
    if(UsrExt==0){
         var Name=sessionStorage.getItem('Descrpcion');
          document.getElementById('lbl_user').innerHTML = Name;
          $("#opt_configuracion").css('display','block');
          $("#opt_rectra").css('display','block');
          $("#opt_soltra").css('display','none');
          $("#MenReporte").css('display','block');
          var validapro=parseInt(sessionStorage.getItem('PER_VALIDA'));
                if (validapro==1) {
                     $("#optval_profe").css('display','block');
                }
          var validarepsimula=parseInt(sessionStorage.getItem('PRE_SIMULA'));
//                alert(validasimula);
                if (validarepsimula==1) {
                     $("#MenCofig").css('display','block');
                }
           var validasimula=parseInt(sessionStorage.getItem('PRE_REPSIMULA'));
//                alert(validasimula);
                if (validasimula==1) {
                     $("#MenSimula").css('display','block');
                }        
    }
    else{
            if(UsrExt==1){
                 var Name=sessionStorage.getItem('NOM_PROFE');
                  document.getElementById('lbl_user').innerHTML = Name;
                   $("#opt_configuracion").css('display','none');
                   $("#opt_rectra").css('display','none');
                   $("#opt_soltra").css('display','block');
                   $('#opt_archivo').css('display','block');
                   $("#MenReporte").css('display','none');
            }
            else{
                    if(isNaN(UsrExt)){
//                         window.location.href = "http://172.23.25.6/Virtual/error.php";
                        $("#opt_configuracion").css('display','none');
                        $("#opt_rectra").css('display','none');
                        $("#opt_soltra").css('display','none');
                        $("#opt_dash").css('display','none');
                        $('#opt_archivo').css('display','none');
                        $("#MenReporte").css('display','none');
                    }
            }
           
    }
   
}
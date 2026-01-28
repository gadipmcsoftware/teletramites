$(document).ready(function(){
  try {
          $("#btn_guaUbica").click(function(e){
         var x= $('#lbl_cordenadaX').val();
         var y=$('#lbl_cordenadaY').val();
         var Cod_pat_borra=parseInt(sessionStorage.getItem('Cod_Pat'));
         var exito=GuardaPatCataBorra(Cod_pat_borra,x,y);
          if (exito){
                       bootbox.dialog({
                                            message: '<a href="#" class="btn btn-success btn-circle"> <i class="fas fa-check"></i></a>',
                                            title: "Patente Guardada Correctamente",
                                            onEscape: function() {
                                                                                
                                                                 }
                                       });
                      $('#Frm_ubica').modal('hide');
                      var Cod_accion=sessionStorage.getItem('cod_accion');
                      document.getElementById("chck_accion_"+Cod_accion).checked = true;
                      sessionStorage.setItem('SpId',Cod_pat_borra);
                     
         }
         else{
                                            bootbox.dialog({
                                                                                title: '<a href="#" class="btn btn-danger btn-circle"> <i class="fas fa-radiation-alt"></i></a>',
                                                                                message: "Error!  al Actualizar Ubicacion Geografica ",
                                                                                onEscape: function() {

                                                                                }
                                                                            });
             }

          });
  } catch (e) {
        alert("error"+e);
  }
     
   
});
function GuardaPatCataBorra(Cod_pat_borra,x,y){
        var Data_Seterror,ex; 
    try {
           
                                       
                                        var parametros={
                                                "Cod_pat_borra":Cod_pat_borra,
                                                "x":x,
                                                "y":y,
                                                
                                            }    
        //                                   
                                        $.ajax({
                                                type: "POST",
                                                dataType: "json",
                                                async: false,
                                                cache: false,
                                                url: "http://172.23.25.6/Virtual/logica/ActualizaGeo.php",
                                                data: parametros,
                                                success: function(response){                                           
                                                        if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               Data_Seterror=response.row;
                                                        } else {
                                                                ex=0;
                                                                alert(response.message);
                                                                 
                                                        }
                                                },
                                                error: function(xhr, textStatus, errorMessage) {
                                                                alert("¡Error (ajax)!"+ errorMessage + textStatus + xhr);
                                                }
                                        });
//                                        alert(Data_Seterror);
                                        if(Data_Seterror.length==0){
                                                
                                                 
                                                  return true;
                                             
                                               
                                        }
                                        else{
                                            alert("Fallo al Guardar Actualizar Ubicacion Geografica");
                                            alert(Data_Seterror);
                                             return false;
                                        }
    } catch (e) {
        alert(e);
    }
}

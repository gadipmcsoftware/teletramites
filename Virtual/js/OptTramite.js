var DataSetNoti;
var DataSetMenu;
$(document).ready(function() {
        try {
             $('#opt_rectra').on('click', function (e){
                    sessionStorage.setItem('Accion',1);
            });
            $('#opt_soltra').on('click', function (e){  
                sessionStorage.setItem('Accion',1);
            });
            CargarMenu();
                  DatosNotificaciones();
                  var Notificaciones=DataSetNoti;
                  if(Notificaciones.length>0)
                    {
                             for(var i=0; i<Notificaciones.length; i++){
                                    $("#Frm_alertCenter").append("<a class='dropdown-item d-flex align-items-center' href='#'>\n\
                                                                      <div class='mr-3'>\n\
                                                                          <div class='icon-circle bg-primary'>\n\
                                                                              <i class='fas fa-file-alt text-white'></i>\n\
                                                                          </div>\n\
                                                                      </div>\n\
                                                                      <div><div class='small text-gray-500'>\n\
                                                                          <span>"+Notificaciones[i][6]+"</span>\n\
                                                                      </div>\n\
                                                                      <span class='font-weight-bold'>"+Notificaciones[i][5]+" Tramite: "+Notificaciones[i][0]+"</span>\n\
                                                                      </div></a>");
                               }
                        $("#Num_Noti").append(Notificaciones[0][8]+"+"); 
                    }
                    TraerMenus();
                    var Menu=DataSetMenu;
                    if(Menu.length>1)
                    {
                        for(var i=0; i<Menu.length; i++){
                              $("#cards-wrapper").append("<div class='item "+Menu[i][6]+" col-lg-4 col-6'>\n\
                                                                 <div class='item-inner'>\n\
                                                                             <div class='icon-holder'>\n\
                                                                                    <i class='icon "+Menu[i][5]+"'></i>\n\
                                                                             </div>\n\
                                                                             <h3 class='title'>"+Menu[i][3]+"</h3>\n\
                                                                             <p class='intro'>"+Menu[i][4]+"</p>\n\
                                                                             <a class='link' href='"+Menu[i][7]+"'><span></span></a>\n\
                                                                 </div>\n\
                                                           </div>");
                        }
                          
                    }
                    if(Menu.length==1)
                    {
                        window.location.href = "http://172.23.25.6/Virtual/"+Menu[0][7];
                    }
                 
        }
        catch (e) {
            alert("error"+e);
        }
});
function DatosNotificaciones(){
   
   var ex=0; 
     try {
                    
                var Usr=parseInt(sessionStorage.getItem('Usr_Ext'));
                if(Usr==0){
                    var id=sessionStorage.getItem('Name');
                }
                else{
                     if(Usr==1){
                        var id=sessionStorage.getItem('CED_PROFE');
                    }
                    else{
                         window.location.href = "http://172.23.25.6/Virtual/error.php";
                    }
                }
               
                              var parametros={
                                "id":id,
                                "usr_ext":Usr
                                }
                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraerNotificaciones.php",
					data: parametros,
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               DataSetNoti=response.row;
                                                                 

                                                } else {
                                                                ex=response.ind;
                                                                error=response.message;
                                                                query1=response.query1;
                                                }
					},
                                        error: function(xhr, textStatus, errorMessage) {
                                                                alert("¡Error (ajax)!"+ errorMessage + textStatus + xhr);
                                        }
				});
                     

    } catch (e) {
        alert("error"+e);
    }
     
                   
}
function CargarMenu(){
    var UsrExt=parseInt(sessionStorage.getItem('Usr_Ext'));
    if(UsrExt==0){
         var Name=sessionStorage.getItem('Descrpcion');
          document.getElementById('lbl_user').innerHTML = Name;
          $("#opt_configuracion").css('visibility', 'visible');
          $("#opt_rectra").css('visibility', 'visible');
          $("#opt_soltra").css('visibility', 'hidden');
          $("#MenReporte").css('visibility', 'visible');
          var validapro=parseInt(sessionStorage.getItem('PER_VALIDA'));
                if (validapro==1) {
                     $("#optval_profe").css('visibility', 'visible');
                }
    }
    else{
            if(UsrExt==1){
                 var Name=sessionStorage.getItem('NOM_PROFE');
                  document.getElementById('lbl_user').innerHTML = Name;
                   $("#opt_configuracion").css('visibility', 'hidden');
                   $("#opt_rectra").css('visibility', 'hidden');
                   $("#opt_soltra").css('visibility', 'visible');
                   $("#MenReporte").css('visibility', 'hidden');
            }
            else{
                    if(isNaN(UsrExt)){
//                         window.location.href = "http://172.23.25.6/Virtual/error.php";
                        $("#opt_configuracion").css('visibility', 'hidden');
                        $("#opt_rectra").css('visibility', 'hidden');
                        $("#opt_soltra").css('visibility', 'hidden');
                        $("#opt_dash").css('visibility', 'hidden');
                        $("#MenReporte").css('visibility', 'hidden');
                    }
            }
           
    }
   
}
function TraerMenus(){

     try {
                    
            var cod_perfil=sessionStorage.getItem('COD_PERFIL');    
            var Usr=sessionStorage.getItem('Usr_Ext');
            var cod_area=sessionStorage.getItem('COD_AREA');    

                              var parametros={
                                "cod_perfil":cod_perfil,
                                "usr_ext":Usr,
                                "cod_area":cod_area
                                }
                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraerMenus.php",
					data: parametros,
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               DataSetMenu=response.row;
                                                                 

                                                } else {
                                                                ex=response.ind;
                                                                error=response.message;
                                                                query1=response.query1;
                                                }
					},
                                        error: function(xhr, textStatus, errorMessage) {
                                                                alert("¡Error (ajax)!"+ errorMessage + textStatus + xhr);
                                        }
				});
                     

    } catch (e) {
        alert("error"+e);
    }
     
                   
}
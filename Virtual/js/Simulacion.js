// Call the dataTables jQuery plugin
var error ="";
var query1="";
var totales;
var currentTime = new Date
var Data_SetAnio;
var control;
$(document).ready(function() {
    
    try {
          var year = currentTime.getFullYear();
          Totales(parseInt(year)+1,'T');
          var formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',

                // These options are needed to round to whole numbers if that's what you want.
                //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
                //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
            });
         Cargar_Anio();
         $("#recuada_u").append(formatter.format(totales[0][0]));
         $("#arecaudar_r").append(formatter.format(totales[0][1]));
         $("#ancianato").append(totales[0][2]);
         $("#discapacidad").append(totales[0][3]);
         $('#dataTable').DataTable();
         
//         $("#Frm_Simular").validate();
         $("#Btn_simular").click(function(){
             bootbox.dialog({ message: '<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Espere por favor...</div>' })
             Simular();   
             
          });
           $("#Btn_Valorar").click(function(){
             bootbox.dialog({ message: '<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Espere por favor...</div>' })
             Valorar();   
             
          });
           $("#Btn_Generar").click(function(){
               window.location.href = "http://172.23.25.6/Simulacion/logica/ExelSimulacion.php";
               bootbox.dialog({ message: '<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Espere por favor...</div>' })
               bootbox.hideAll();
//             GenerarExcel();   
             
          });
             $("#Btn_Emitir").click(function(){
              
              bootbox.dialog({
                                                                message: '<a href="#" class="btn btn-success btn-circle"> <i class="fas fa-check"></i></a>',
                                                                title: "Se Esta Ejecutando la Emisión del Impuesto Esta Operación Podrá tardar Varias Horas",
                                                                onEscape: function() {
                                                               
                                                                }
                                                            });
          });
     $("#Btn_versimula").click(function(){
           var anio=$("#cmb_AnioSimula").val(); 
           if(anio!='Simulacion Actual')
           {
                Totales(anio,'T');
                document.getElementById("recuada_u").innerHTML= formatter.format(totales[0][0]);
                document.getElementById("arecaudar_r").innerHTML= formatter.format(totales[0][1]);
                document.getElementById("ancianato").innerHTML= totales[0][2];
                document.getElementById("discapacidad").innerHTML= totales[0][3];
           }
           else{
               var year = currentTime.getFullYear();
               Totales(parseInt(year)+1,'T');
                document.getElementById("recuada_u").innerHTML= formatter.format(totales[0][0]);
                document.getElementById("arecaudar_r").innerHTML= formatter.format(totales[0][1]);
                document.getElementById("ancianato").innerHTML= totales[0][2];
                document.getElementById("discapacidad").innerHTML= totales[0][3];
           }
           
          });
    } catch (e) {
        alert(e);
    }
});
function Simular(){    
 var ex=0;    
    try {
            var ind_form = $("#Frm_Simular").valid();
                                if(ind_form){

        //                                   
                                        $.ajax({
                                                type: "POST",
                                                dataType: "json",
                                                async: false,
                                                cache: false,
                                                url: "http://172.23.25.6/Simulacion/logica/Simular.php",
//                                                data: parametros,
                                                success: function(response){                                           
                                                        if(JSON.parse(response.ind)){
                                                               ex=1;

                                                        } else {
                                                                ex=0;
                                                        }
                                                },
                                                error: function(xhr, textStatus, errorMessage) {
                                                                alert("¡Error (ajax)!"+ errorMessage + textStatus + xhr);
                                                }
                                        });
//                                       bootbox.alert(ex);
                                        if(ex==1){
                                             bootbox.dialog({ message: '<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Refrescando Datos...</div>' })
                                             window.location.href = "http://172.23.25.6/Simulacion/tables.php";
                                             bootbox.alert("Simulación Ejecutda Correctamente");
                                        }
                                        else{
                                            bootbox.alert("Fallo al Ejecutar Simulación");
                                        }
                                      

                    } 
    } catch (e) {
        alert(e);
    }

            
}
function Valorar(){    
 var ex=0;    
    try {
            var ind_form = $("#Frm_Simular").valid();
                                if(ind_form){         
                                        $.ajax({
                                                type: "POST",
                                                dataType: "json",
                                                async: false,
                                                cache: false,
                                                url: "http://172.23.25.6/Simulacion/logica/Valorar.php",
//                                                data: parametros,
                                                success: function(response){                                           
                                                        if(response.ind){
                                                               ex=1;

                                                        } else {
                                                                ex=0;
                                                        }
                                                },
                                                error: function(xhr, textStatus, errorMessage) {
                                                                alert("¡Error (ajax)!"+ errorMessage + textStatus + xhr);
                                                }
                                        });
//                                       bootbox.alert(ex);
                                        if(ex==1){
                                             bootbox.dialog({ message: '<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Refrescando Datos...</div>' })
                                             window.location.href = "http://172.23.25.6/Simulacion/tables.php";
                                              bootbox.alert("Valoración Ejecutda Correctamente");
                                        }
                                        else{
                                            bootbox.alert("Fallo al Ejecutar Valoración");
                                        }
                                      

                    } 
    } catch (e) {
        alert(e);
    }

            
}
function GenerarExcel(){    
 var ex=0;    
    try {
            var ind_form = $("#Frm_Simular").valid();
                                if(ind_form){
                                        
        //                                   
                                        $.ajax({
                                                type: "POST",
                                                dataType: "json",
                                                async: false,
                                                cache: false,
                                                url: "http://172.23.25.6/Simulacion/logica/ExelSimulacion.php",
//                                                data: parametros,
                                                success: function(response){                                           
                                                        if(JSON.parse(response.ind)){
                                                               ex=response.ind;

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
//                                       bootbox.alert(ex);message
                                        if(ex){
                                            bootbox.dialog({
                                                                message: '<a href="#" class="btn btn-success btn-circle"> <i class="fas fa-check"></i></a>',
                                                                title: "Excel Generada Correctamente",
//                                                                onEscape: function() {
//                                                                window.location.href = "http://172.23.25.6/Simulacion/BandaImpositiva.php";
//                                                                }
                                                            });
                                                            //                                            
//                                              bootbox.alert("Registro Guardado Correctamente");
                                              
                                        }
                                        else{
                                            bootbox.alert("Fallo al Generar Ecxel");
                                            alert(error+" "+ex);
                                            alert(query1);
                                        }
                                      

                    } 
    } catch (e) {
        alert("!Error "+e);
    }
 }
 function Totales(anio,tip_bus){ 
    var ex=0; 
     try {
                              var parametros={
                                "anio":anio,
                                "tip_bus":tip_bus
                                }
                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraeDatosTotales.php",
					data: parametros,
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               totales=response.row;
                                                                 

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
 function Cargar_Anio() {
TraeAnios();
  for(var i in Data_SetAnio)
            { 
               
                    document.getElementById("cmb_AnioSimula").innerHTML += "<option value='"+Data_SetAnio[i][0]+"'>"+Data_SetAnio[i][0]+"</option>"; 

            }
 
}
 function TraeAnios(){
   
   var ex=0; 
     try {

                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/Treaniosimula.php",
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               Data_SetAnio=response.row;
                                                                 

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
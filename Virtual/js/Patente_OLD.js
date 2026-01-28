var rowProvincias=[];
var rowCantones=[];
var rowParroquias=[];
var row=[];
var rowTipEsta=[];
var rowTamEsta=[];
var rowActividades;
var tbl_act_prin;
var tbl_act_sec;
var tbl_call_pri;
var tbl_call_sec;
var tbl_valores;
var rowDataActPri=[];
var rowDataActSec=[];
var rowTipActi=[];
var rowCalle_pri=[];
var rowDataCallePri=[];
var rowDataCalleSec=[];
var rowDataInfnoConta=[];
var rowDataInfConta=[];
var index=0;
var avaluo;
$(document).ready(function(){
//var number = 123456.789;
//
//// En el alemán la coma se utiliza como separador decimal y el punto para los millares
//alert(new Intl.NumberFormat("de-US").format(number));
    ActiEcono();
    tbl_act_prin = $('#Tbl_ActPri').DataTable({
                                                                                     data:rowActividades,
                                                                                     language: {
                                                                                     "decimal": "",
                                                                                     "emptyTable": "No hay información",
                                                                                     "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                                                                                     "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                                                                                     "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                                                                                     "infoPostFix": "",
                                                                                     "thousands": ",",
                                                                                     "lengthMenu": "Mostrar _MENU_ Entradas",
                                                                                     "loadingRecords": "Cargando...",
                                                                                     "processing": "Procesando...",
                                                                                     "search": "Buscar:",
                                                                                     "zeroRecords": "Sin resultados encontrados",
                                                                                     "paginate": {
                                                                                         "first": "Primero",
                                                                                         "last": "Ultimo",
                                                                                         "next": "Siguiente",
                                                                                         "previous": "Anterior"
                                                                                     }
                                                                                 }

                                                                             });
    tbl_act_sec = $('#Tbl_ActSec').DataTable({
                                                                                     data:rowActividades,
                                                                                     language: {
                                                                                     "decimal": "",
                                                                                     "emptyTable": "No hay información",
                                                                                     "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                                                                                     "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                                                                                     "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                                                                                     "infoPostFix": "",
                                                                                     "thousands": ",",
                                                                                     "lengthMenu": "Mostrar _MENU_ Entradas",
                                                                                     "loadingRecords": "Cargando...",
                                                                                     "processing": "Procesando...",
                                                                                     "search": "Buscar:",
                                                                                     "zeroRecords": "Sin resultados encontrados",
                                                                                     "paginate": {
                                                                                         "first": "Primero",
                                                                                         "last": "Ultimo",
                                                                                         "next": "Siguiente",
                                                                                         "previous": "Anterior"
                                                                                     }
                                                                                 }

                                                                             });
    tbl_call_pri = $('#Tbl_CallPri').DataTable({
                                                                                     language: {
                                                                                     "decimal": "",
                                                                                     "emptyTable": "No hay información",
                                                                                     "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                                                                                     "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                                                                                     "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                                                                                     "infoPostFix": "",
                                                                                     "thousands": ",",
                                                                                     "lengthMenu": "Mostrar _MENU_ Entradas",
                                                                                     "loadingRecords": "Cargando...",
                                                                                     "processing": "Procesando...",
                                                                                     "search": "Buscar:",
                                                                                     "zeroRecords": "Sin resultados encontrados",
                                                                                     "paginate": {
                                                                                         "first": "Primero",
                                                                                         "last": "Ultimo",
                                                                                         "next": "Siguiente",
                                                                                         "previous": "Anterior"
                                                                                     }
                                                                                 }

                                                                             });
    tbl_call_sec = $('#Tbl_CallSec').DataTable({
                                                                                     language: {
                                                                                     "decimal": "",
                                                                                     "emptyTable": "No hay información",
                                                                                     "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                                                                                     "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                                                                                     "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                                                                                     "infoPostFix": "",
                                                                                     "thousands": ",",
                                                                                     "lengthMenu": "Mostrar _MENU_ Entradas",
                                                                                     "loadingRecords": "Cargando...",
                                                                                     "processing": "Procesando...",
                                                                                     "search": "Buscar:",
                                                                                     "zeroRecords": "Sin resultados encontrados",
                                                                                     "paginate": {
                                                                                         "first": "Primero",
                                                                                         "last": "Ultimo",
                                                                                         "next": "Siguiente",
                                                                                         "previous": "Anterior"
                                                                                     }
                                                                                 }

                                                                             });
    tbl_valores = $('#Tbl_Valores').DataTable({
                                                                                     language: {
                                                                                     "decimal": "",
                                                                                     "emptyTable": "No hay información",
                                                                                     "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                                                                                     "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                                                                                     "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                                                                                     "infoPostFix": "",
                                                                                     "thousands": ",",
                                                                                     "lengthMenu": "Mostrar _MENU_ Entradas",
                                                                                     "loadingRecords": "Cargando...",
                                                                                     "processing": "Procesando...",
                                                                                     "search": "Buscar:",
                                                                                     "zeroRecords": "Sin resultados encontrados",
                                                                                     "paginate": {
                                                                                         "first": "Primero",
                                                                                         "last": "Ultimo",
                                                                                         "next": "Siguiente",
                                                                                         "previous": "Anterior"
                                                                                     }
                                                                                 }

                                                                             });
    Cargar();
     $('.quantity-right-plus').click(function(e){

                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity').val());

                    // If is not undefined
                        if(quantity<100){
                            $('#quantity').val(quantity + 1);
                        }



                        // Increment

                });

                 $('.quantity-left-minus').click(function(e){
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity').val());

                    // If is not undefined

                        // Increment
                        if(quantity>0){
                        $('#quantity').val(quantity - 1);
                        }
                });
                    $("#Btn_act_prin").click(function(e){
                        $('#BusActEcoPrin').modal('show');
                    });
                    $("#btn_cerra_act_pri").click(function(e){
                        $('#BusActEcoPrin').modal('hide');
                    });
                    $('#Tbl_ActPri tbody').on( 'dblclick', 'tr', function () {
                        rowDataActPri = tbl_act_prin.row( this ).data();
                         $("#Txt_act_prin").val(rowDataActPri[1]);
                         $('#BusActEcoPrin').modal('hide');
                     });
                    $("#Btn_act_sec").click(function(e){
                        $('#BusActEcoSec').modal('show');
                    });
                    $("#Btn_busCallPri").click(function(e){
                        $('#BusCallePrin').modal('show');
                    });
                    $("#btn_cerra_call_pri").click(function(e){
                        $('#BusCallePrin').modal('hide');
                    });
                    $("#Btn_busCallSec").click(function(e){
                        $('#BusCalleSec').modal('show');
                    });
                    $("#btn_cerra_call_sec").click(function(e){
                        $('#BusCalleSec').modal('hide');
                    });
                     $("#cmb_pat_parroquia").change(function(e){
                             var provincia='17';
                             var canton= '02';
                             var parroquia=$("#cmb_pat_parroquia").val();
                             Cargar_Calles_pri(provincia,canton,parroquia);
                             Cargar_Calles_sec(provincia,canton,parroquia);
                             Cargar_Calles_pri_TBL(provincia,canton,parroquia);
                             Cargar_Calles_sec_TBL(provincia,canton,parroquia);
                    });
                    $("#btn_cerra_act_sec").click(function(e){
                        $('#BusActEcoSec').modal('hide');
                    });
                    $('#Tbl_ActSec tbody').on( 'dblclick', 'tr', function () {
                        rowDataActSec = tbl_act_sec.row( this ).data();
                         $("#Txt_act_sec").val(rowDataActSec[1]);
                         $('#BusActEcoSec').modal('hide');
                     });
                     $('#Tbl_CallPri tbody').on( 'dblclick', 'tr', function () {
                         rowDataCallePri = tbl_call_pri.row( this ).data();
                         $("#cmb_pat_calle_pri").val(rowDataCallePri[0]);
                         $('#BusCallePrin').modal('hide');
                     });
                      $('#Tbl_CallSec tbody').on( 'dblclick', 'tr', function () {
                         rowDataCalleSec = tbl_call_sec.row( this ).data();
                         $("#cmb_pat_calle_sec").val(rowDataCalleSec[0]);
                         $('#BusCallSec').modal('hide');
                     });
                      $("#chb_terc").click(function(e){
                         
                            var check=document.getElementById('chb_terc');
                            if (check.checked){
                                document.getElementById("chb_terc").checked = false;
                            }
                            else{
                                 document.getElementById("chb_terc").checked = true;
                            }
                    });
                    $("#chb_art").click(function(e){
                         
                            var check=document.getElementById('chb_art');
                            if (check.checked){
                                document.getElementById("chb_art").checked = false;
                            }
                            else{
                                 document.getElementById("chb_art").checked = true;
                            }
                    });
//                     $("#chb_cont").click(function(e){
//                         
//                            var check=document.getElementById('chb_cont');
//                            if (check.checked){
//                               $("#obli_conta").css('display','block');
//                               $("#noobli_conta").css('display','none');
//                            }
//                            else{
//                               $("#noobli_conta").css('display','block');
//                               $("#obli_conta").css('display','none');
//                            }
//                    });
                    $("#qua_pro_plus").click(function(e){

                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity_por').val());

                    // If is not undefined
                        if(quantity<100){
                            $('#quantity_por').val(quantity + 1);
                            CalculaLLevaConta();
                        }



                        // Increment

                });

                 $("#qua_pro_minus").click(function(e){
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity_por').val());

                    // If is not undefined

                        // Increment
                        if(quantity>0){
                            $('#quantity_por').val(quantity - 1);
                            CalculaLLevaConta();
                        }
                });
                $("#Txt_pat_capi_pro").blur(function(e){
                      CalculanoLLevaConta();
                      
                });
                $("#Txt_pat_Ajeno").blur(function(e){
                       CalculanoLLevaConta();
                      
                });
                 $("#Txt_pat_ingre").blur(function(e){
                       CalculanoLLevaConta();
                      
                });
                $("#Txt_pat_gastos").blur(function(e){
                      CalculanoLLevaConta();
                      
                });
                $("#Txt_pat_actcorr").blur(function(e){
                     CalculaLLevaConta();
                      
                });
                $("#Txt_pat_actfijo").blur(function(e){
                      CalculaLLevaConta();
                      
                });
                $("#Txt_pat_noCorr").blur(function(e){
                      CalculaLLevaConta();
                      
                });
                $("#Txt_pat_pas_corr").blur(function(e){
                      CalculaLLevaConta();
                      
                });
                $("#Txt_pat_totIng").blur(function(e){
                      CalculaLLevaConta();
                      
                });
                $("#Txt_pat_cosVen").blur(function(e){
                      CalculaLLevaConta();
                      
                });
                $("#Txt_pat_GasVen").blur(function(e){
                      CalculaLLevaConta();
                      
                });
                $("#Txt_pat_Gto_OPer").blur(function(e){
                      CalculaLLevaConta();
                      
                });
                 $("#Btn_Generar").click(function(e){
                      $("#div_geaño").css('display','block');
                      $("#lbl_anio").text("Generar Año "+$('#cmb_pat_año').val());
                     var check=document.getElementById('chb_cont');
                    if (check.checked){
                         $("#obli_conta").css('display','block');
                         $("#noobli_conta").css('display','none');
                    }
                    else{
                         $("#noobli_conta").css('display','block');
                         $("#obli_conta").css('display','none');
                    }
                 });
                 $("#Btn_geaño").click(function(e){
                     var check=document.getElementById('chb_cont');
                    if (check.checked){
                        InfoContaPate();
                    }
                    else{
                         InfonoContaPate();
                    }
                     
                 });
});
function Cargar_Provincias() {
    $("#cmb_pat_provincia").empty();
    Provincias();
  for(var i in rowProvincias)
            { 
               
                    document.getElementById("cmb_pat_provincia").innerHTML += "<option value='"+rowProvincias[i][0]+"'>"+rowProvincias[i][1]+"</option>"; 

            }
}
function Provincias(){
   
   var ex=0; 
     try {

                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraerProvincia.php",
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               rowProvincias=response.row;
                                                                 

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
function Cargar_Cantones() {
  $("#cmb_pat_canton").empty();
  for(var i in rowCantones)
            { 
               
                    document.getElementById("cmb_pat_canton").innerHTML += "<option value='"+rowCantones[i][1]+"'>"+rowCantones[i][2]+"</option>"; 

            }
}
function TraerCantones(id){
   var ex=0; 
     try {
                    var idcons=id;
                              var parametros={
                                "id":idcons
                                }
                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraerCantones.php",
					data: parametros,
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               rowCantones=response.row;
                                                                 

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
function Cargar_Parroquia() {
  $("#cmb_pat_parroquia").empty();
  document.getElementById("cmb_pat_parroquia").innerHTML += "<option value='0'>Seleccione su Parroquia</option>";
  for(var i in rowParroquias)
            { 
               
                    document.getElementById("cmb_pat_parroquia").innerHTML += "<option value='"+rowParroquias[i][2]+"'>"+rowParroquias[i][3]+"</option>"; 

            }
}
function Cargar_anios() {
  index=0;
  $("#cmb_pat_año").empty();
  document.getElementById("cmb_pat_año").innerHTML += "<option value='0'>Seleccione el año a Declarar:</option>";
  var DataSetAnios=JSON.parse(sessionStorage.getItem('Anios'));
  for(var i in DataSetAnios)
            { 
               
                    document.getElementById("cmb_pat_año").innerHTML += "<option value='"+DataSetAnios[i][0]+"'>"+"Declaración del año "+DataSetAnios[i][0]+"</option>"; 

            }
}
function TraerParroquias(provincia,canton){
   var ex=0; 
     try {

                              var parametros={
                                "provincia":provincia,
                                "canton":canton
                                }
                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraeParroquia.php",
					data: parametros,
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               rowParroquias=response.row;
                                                                 

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
function DatosContribu(id){ 
   var ex=0; 
     try {
                    var idcons=id;
                              var parametros={
                                "id":idcons
                                }
                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/ConsPropie.php",
					data: parametros,
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               row=response.row;
                                                                 

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
function Cargar(){ 
    var Cod_pro=sessionStorage.getItem('cod_pro');
    DatosContribu(Cod_pro);
    TraeAvalauo(Cod_pro);
    $('#quantity').val(1);
    TraerParroquias('17','02');
    Cargar_Parroquia();
//    $("#cmb_pat_parroquia").val(row[0][8]);
    $("#indenti_contri").val(row[0][17]);
    $("#Nom_contri").val(row[0][1]);
    $("#Apelli_contri").val(row[0][2]);
    $("#codi_contri").val(row[0][0]);
    $("#tele_contri").val(row[0][3]);
    $("#Txt_pat_avaluo").val(avaluo);
    $("#Txt_pat_avaluoconta").val(avaluo);
     Cargar_TipActivi();
     Cargar_TipEsta();
     if(row[0][9]==6){
          $("#fil_arte").css('display','block');
          $("#fec_arte").css('display','block');
           $("#chec_arte").css('display','block');
          document.getElementById("chb_art").checked = true;
      }
      if(row[0][10]=='S'){
          $("#div_apl_ter").css('display','block');
          $("#div_chb_ter").css('display','block');
          document.getElementById("chb_terc").checked = true;
      }
      Cargar_TamEsta();
//      var check=document.getElementById('chb_cont');
//      if (check.checked){
//           $("#obli_conta").css('display','block');
//           $("#noobli_conta").css('display','none');
//      }
//      else{
//           $("#noobli_conta").css('display','block');
//           $("#obli_conta").css('display','none');
//      }
//     var provincia='17';
//     var canton= '02';
//     var parroquia=$("#cmb_pat_parroquia").val();
//     Cargar_Calles_pri(provincia,canton,parroquia);
}

function ActiEcono(){
   var ex=0; 
     try {

                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraeActiEcono.php",
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               rowActividades=response.row;
                                                                 

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
function Cargar_TipActivi() {
    $("#cmb_pat_tip_act").empty();
    document.getElementById("cmb_pat_tip_act").innerHTML += "<option value='0'>Tipo Actividad</option>";
    TipActividad();
  for(var i in rowTipActi)
            { 
               
                    document.getElementById("cmb_pat_tip_act").innerHTML += "<option value='"+rowTipActi[i][0]+"'>"+rowTipActi[i][1]+"</option>"; 

            }
}
function TipActividad(){
   var ex=0; 
     try {

                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraeTipAct.php",
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               rowTipActi=response.row;
                                                                 

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
function Cargar_Calles_pri(provincia,canton,parroquia) {
    $("#cmb_pat_calle_pri").empty();
    document.getElementById("cmb_pat_calle_pri").innerHTML += "<option value='0'>Calle Pricipal</option>";
   TraerCalles(provincia,canton,parroquia);
  for(var i in rowCalle_pri)
            { 
               
                    document.getElementById("cmb_pat_calle_pri").innerHTML += "<option value='"+rowCalle_pri[i][3]+"'>"+rowCalle_pri[i][4]+"</option>"; 

            }
}
function Cargar_Calles_pri_TBL(provincia,canton,parroquia) {
    tbl_call_pri.clear();
    var Calles_principales=rowCalle_pri;
    if(Calles_principales.length>0)
        {
            for(var i=0; i<Calles_principales.length; i++){
                              tbl_call_pri.row.add([
                                                     Calles_principales[i][3],
                                                     Calles_principales[i][4],
                                                     
                                                   ]).draw();
            }
        }
  
}
function Cargar_Calles_sec_TBL(provincia,canton,parroquia) {
    tbl_call_sec.clear();
    var Calles_secundaria=rowCalle_pri;
    if(Calles_secundaria.length>0)
        {
            for(var i=0; i<Calles_secundaria.length; i++){
                              tbl_call_sec.row.add([
                                                     Calles_secundaria[i][3],
                                                     Calles_secundaria[i][4],
                                                     
                                                   ]).draw();
            }
        }
  
}
function Cargar_Calles_sec(provincia,canton,parroquia) {
    $("#cmb_pat_calle_sec").empty();
    document.getElementById("cmb_pat_calle_sec").innerHTML += "<option value='0'>Calle Secundaria</option>";
   TraerCalles(provincia,canton,parroquia);
  for(var i in rowCalle_pri)
            { 
               
                    document.getElementById("cmb_pat_calle_sec").innerHTML += "<option value='"+rowCalle_pri[i][3]+"'>"+rowCalle_pri[i][4]+"</option>"; 

            }
}
function TraerCalles(provincia,canton,parroquia){
   var ex=0; 
     try {

                              var parametros={
                                "provincia":provincia,
                                "canton":canton,
                                "parroquia":parroquia
                                }
                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraeCalles.php",
					data: parametros,
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               rowCalle_pri=response.row;
                                                                 

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
function Cargar_TipEsta() {
    $("#cmb_pat_loper").empty();
    document.getElementById("cmb_pat_loper").innerHTML += "<option value='0'>Lugar de Operaciones</option>";
   TraeTipEsta();
  for(var i in rowTipEsta)
            { 
               
                    document.getElementById("cmb_pat_loper").innerHTML += "<option value='"+rowTipEsta[i][0]+"'>"+rowTipEsta[i][1]+"</option>"; 

            }
}
function TraeTipEsta(){
   
   var ex=0; 
     try {

                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraerTipEstable.php",
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               rowTipEsta=response.row;
                                                                 

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
function Cargar_TamEsta() {
    $("#cmb_pat_tam_esta").empty();
    document.getElementById("cmb_pat_tam_esta").innerHTML += "<option value='0'>Tamaño de Establecimiento</option>";
   TraeTamEsta();
  for(var i in rowTamEsta)
            { 
               
                    document.getElementById("cmb_pat_tam_esta").innerHTML += "<option value='"+rowTamEsta[i][0]+"'>"+rowTamEsta[i][1]+"</option>"; 

            }
}
function TraeTamEsta(){
   
   var ex=0; 
     try {

                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraeTamEstable.php",
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               rowTamEsta=response.row;
                                                                 

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
function CalculanoLLevaConta(){
    var capi_pro=$('#Txt_pat_capi_pro').val();
    var cap_ajeno=$('#Txt_pat_Ajeno').val();
    if (capi_pro==''){
                capi_pro='0';
    }
    if (cap_ajeno==''){
            cap_ajeno='0';
    }
    var cap_giro=parseFloat(capi_pro)-parseFloat(cap_ajeno);
    $('#Txt_pat_giro').val(parseFloat(cap_giro).toFixed(2));
    var ingresos=$('#Txt_pat_ingre').val();
    var gastos=$('#Txt_pat_gastos').val();
    if (ingresos==''){
              ingresos='0';
    }
    if (gastos==''){
           gastos='0';
    }
    var perdida=parseFloat(ingresos)-parseFloat(gastos);
    $('#Txt_pat_perdida').val(parseFloat(perdida).toFixed(2));
}
function CalculaLLevaConta(){
                      var activo_corr=$('#Txt_pat_actcorr').val();
                      var activo_fijo=$('#Txt_pat_actfijo').val();
                      var activo_nocorr=$('#Txt_pat_noCorr').val();
                      var pasivo_corr=$('#Txt_pat_pas_corr').val();
                      var tot_ingreso=$('#Txt_pat_totIng').val();
                      var cos_venta=$('#Txt_pat_cosVen').val();
                      var gas_venta=$('#Txt_pat_GasVen').val();
                      var gas_opera=$('#Txt_pat_Gto_OPer').val();
                      var por_canto=$('#quantity_por').val();
                      if (activo_corr==''){
                          activo_corr='0';
                      }
                      if (activo_fijo==''){
                          activo_fijo='0';
                      }
                      if (activo_nocorr==''){
                          activo_nocorr='0';
                      }
                      if (pasivo_corr==''){
                          pasivo_corr='0';
                      }
                      if (tot_ingreso==''){
                          tot_ingreso='0';
                      }
                      if (cos_venta==''){
                          cos_venta='0';
                      }
                      if (gas_venta==''){
                          gas_venta='0';
                      }
                      if (gas_opera==''){
                          gas_opera='0';
                      }
                      if (por_canto==''){
                          por_canto='0';
                      }
                      var tot_activos=parseFloat(activo_corr)+parseFloat(activo_fijo)+parseFloat(activo_nocorr);
                      $('#Txt_pat_TolAct').val(parseFloat(tot_activos).toFixed(2));
                      var patri_neto=parseFloat(tot_activos)-parseFloat(pasivo_corr);
                      $('#Txt_pat_neto').val(parseFloat(patri_neto).toFixed(2));
                      var uti_perdida=parseFloat(tot_ingreso)-parseFloat(cos_venta)-parseFloat(gas_venta)-parseFloat(gas_opera);
                      $('#Txt_pat_utl_per').val(parseFloat(uti_perdida).toFixed(2));
                      var base_ipo=(parseFloat(patri_neto)*parseInt(por_canto))/100;
                      $('#Txt_pat_Bas_Impo').val(parseFloat(base_ipo).toFixed(2));
}
function filterFloat(evt,input){
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;    
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    if(key >= 48 && key <= 57){
        if(filter(tempValue)=== false){
            return false;
        }else{       
            return true;
        }
    }else{
          if(key == 8 || key == 13 || key == 46 || key == 0) {            
              return true;              
          }else{
              return false;
          }
    }
}
function filter(__val__){
    var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
    if(preg.test(__val__) === true){
        return true;
    }else{
       return false;
    }
    
}
function InfonoContaPate(){ 
    var rowInfonoContable=new Array ();
     var anio=$('#cmb_pat_año').val();
     rowInfonoContable.push(anio);
     var capi_pro=$('#Txt_pat_capi_pro').val();
     rowInfonoContable.push(capi_pro);
     var cap_ajeno=$('#Txt_pat_Ajeno').val();
     rowInfonoContable.push(cap_ajeno);
     var cap_giro=$('#Txt_pat_giro').val();
     rowInfonoContable.push(cap_giro);
     var ingresos=$('#Txt_pat_ingre').val();
     rowInfonoContable.push(ingresos);
     var gastos=$('#Txt_pat_gastos').val();
     rowInfonoContable.push(gastos);
     var perdida=$('#Txt_pat_perdida').val();
     rowInfonoContable.push(perdida);
     var avaluo=$('#Txt_pat_avaluo').val();
     rowInfonoContable.push(avaluo);
//     alert(rowInfonoContable);
     rowDataInfnoConta[index] = rowInfonoContable;
     index=index+1;
     sessionStorage.setItem('PatentesNoConta',JSON.stringify(rowDataInfnoConta));
//     alert(rowDataInfnoConta);
    var sel = document.getElementById("cmb_pat_año");
    sel.remove(sel.selectedIndex);
     limpiar();
}
function InfoContaPate(){
      var rowInfoContable=new Array ();
      var anio=$('#cmb_pat_año').val();
      rowInfoContable.push(anio);
      var activo_corr=$('#Txt_pat_actcorr').val();
      rowInfoContable.push(activo_corr);
      var activo_fijo=$('#Txt_pat_actfijo').val();
      rowInfoContable.push(activo_fijo);
      var activo_nocorr=$('#Txt_pat_noCorr').val();
      rowInfoContable.push(activo_nocorr);
      var pasivo_corr=$('#Txt_pat_pas_corr').val();
      rowInfoContable.push(pasivo_corr);
      var tot_ingreso=$('#Txt_pat_totIng').val();
      rowInfoContable.push(tot_ingreso);
      var cos_venta=$('#Txt_pat_cosVen').val();
      rowInfoContable.push(cos_venta);
      var gas_venta=$('#Txt_pat_GasVen').val();
      rowInfoContable.push(gas_venta);
      var gas_opera=$('#Txt_pat_Gto_OPer').val();
      rowInfoContable.push(gas_opera);
      var por_canto=$('#quantity_por').val();
      rowInfoContable.push(por_canto);
      var tot_activos=$('#Txt_pat_TolAct').val();
      rowInfoContable.push(tot_activos);
      var patri_neto=$('#Txt_pat_neto').val();
      rowInfoContable.push(patri_neto);
      var uti_perdida=$('#Txt_pat_utl_per').val();
      rowInfoContable.push(uti_perdida);
      var base_ipo=$('#Txt_pat_Bas_Impo').val();
      rowInfoContable.push(base_ipo);
      rowDataInfConta[index] = rowInfoContable;
      index=index+1;
      sessionStorage.setItem('PatentesConta',JSON.stringify(rowDataInfConta));
      var sel = document.getElementById("cmb_pat_año");
      sel.remove(sel.selectedIndex);
     limpiar();
      
}
function limpiar(){
    $('#cmb_pat_año').val(0);
    $('#Txt_pat_capi_pro').val('');
    $('#Txt_pat_Ajeno').val('');
    $('#Txt_pat_giro').val('');
    $('#Txt_pat_ingre').val('');
    $('#Txt_pat_gastos').val('');
    $('#Txt_pat_perdida').val('');
    $('#Txt_pat_actcorr').val('');
    $('#Txt_pat_actfijo').val('');
    $('#Txt_pat_noCorr').val('');
    $('#Txt_pat_pas_corr').val('');
    $('#Txt_pat_totIng').val('');
    $('#Txt_pat_cosVen').val('');
    $('#Txt_pat_GasVen').val('');
    $('#Txt_pat_Gto_OPer').val('');
    $('#quantity_por').val(100);
    $('#Txt_pat_TolAct').val('');
    $('#Txt_pat_neto').val('');
    $('#Txt_pat_utl_per').val('');
    $('#Txt_pat_Bas_Impo').val('');
    $("#noobli_conta").css('display','none');
    $("#div_geaño").css('display','none');
    $("#obli_conta").css('display','none');
//    alert(rowDataInfnoConta.length);
}
function TraeAvalauo(id){ 
   var ex=0; 
     try {
                    var idcons=id;
                              var parametros={
                                "id":idcons
                                }
                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraeAvaluo.php",
					data: parametros,
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               avaluo=response.row;
                                                                 

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
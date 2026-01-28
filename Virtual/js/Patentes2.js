var rowProvincias=[];
var rowCantones=[];
var rowParroquias=[];
var row=[];
var rowTipEsta=[];
var rowTamEsta=[];
var rowActividades;
var rowActividad;
var tbl_act_prin;
var tbl_act_sec;
var tbl_call_pri;
var tbl_call_sec;
var tbl_valores;
var tbl_anioConta;
var rowDataActPri=[];
var rowDataActSec=[];
var rowTipActi=[];
var rowTipRotulo=[];
var rowCalle_pri=[];
var rowDataCallePri=[];
var rowDataCalleSec=[];
var rowDataInfnoConta=[];
var rowDataInfConta=[];
var rowDataInfEstab=[];
var rowDataActivEco=[];
var index=0;
var index_esta=0;
var index_actv=0;
var j=0;
var avaluo;
var anio;
var Cod_conta_boora=0;
var conta_princi=0;
var rowAnios=[];
var actua_infoCon=0;
var actua_infonoCon=0;
sessionStorage.setItem('Latitud',0);
sessionStorage.setItem('Longitud',0);
$(document).ready(function(){
   try {
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
    tbl_actividades = $('#Tbl_Actividades').DataTable({
//                                                                                   data:rowActividades,
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
    tbl_estab = $('#Tbl_Establecimientos').DataTable({
//                                                                                   data:rowActividades,
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
    tbl_anioConta = $('#Tbl_AnioConta').DataTable({
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
                         $("#Acti_prin").val(rowDataActPri[0]);
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
                     $('#Tbl_CallPri tbody').on( 'dblclick', 'tr', function () {
                         rowDataCallePri = tbl_call_pri.row( this ).data();
                         $("#cmb_pat_calle_pri").val(rowDataCallePri[0]);
                         $('#BusCallePrin').modal('hide');
                     });
                      $('#Tbl_CallSec tbody').on( 'dblclick', 'tr', function () {
                         rowDataCalleSec = tbl_call_sec.row( this ).data();
                         $("#cmb_pat_calle_sec").val(rowDataCalleSec[0]);
                         $('#BusCalleSec').modal('hide');
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
                     $("#InfoGene").click(function(e){
                            $('#ficInfogen').collapse('show');
                            $('#FicDeclara').collapse('hide');
                            $('#ficha_Activi').collapse('hide');
                            $('#ficha_InfoCon').collapse('hide');

                    });
                     $("#InfoEco").click(function(e){
                            $('#ficInfogen').collapse('hide');
                            $('#FicDeclara').collapse('show');
                            $('#ficha_Activi').collapse('hide');
                            $('#ficha_InfoCon').collapse('hide');
                    });
                     $("#ActivEconom").click(function(e){
                            $('#ficInfogen').collapse('hide');
                            $('#FicDeclara').collapse('hide');
                            $('#FicEstable').collapse('hide');
                            $('#ficha_Activi').collapse('show');
                            $('#ficha_InfoCon').collapse('hide');
                            

                            
                    });
                    $("#InfoEsta").click(function(e){
                            $('#ficInfogen').collapse('hide');
                            $('#FicDeclara').collapse('hide');
                            $('#FicEstable').collapse('show');
                            $('#ficha_Activi').collapse('hide');
                            $('#ficha_InfoCon').collapse('hide');

                            
                    });
                   $("#InfContab").click(function(e){
                            $('#ficInfogen').collapse('hide');
                            $('#FicDeclara').collapse('hide');
                            $('#FicEstable').collapse('hide');
                            $('#ficha_Activi').collapse('hide');
                            $('#ficha_InfoCon').collapse('show');
//                            alert($("#dp4").val());

                            
                    });                    
                     $("#Btn_agregar").click(function(e){
                         var desc=$("#Txt_act_prin").val();
                         var cod_ciuu=$("#Acti_prin").val();
                         var check_prin=document.getElementById('chb_prin');
                         if (check_prin.checked){
                              var act_prin='Principal';
                              conta_princi=1;
                          }
                          else{
                              var act_prin='Secundaria';
                          }
//                         alert(cod_ciuu+","+desc+","+act_prin);
                           tbl_actividades.row.add([
                                                                         cod_ciuu,
                                                                         desc,
                                                                         act_prin,
                                                                         '<div id="Btn_elimi_act" class="input-group-append"><button  class="btn btn-warning  btn-circle" type="button"><a><i class="fas fa-trash-alt"></i></a></button></div>'
                                                                         ]).draw();
                                                                         
                                if (conta_princi==1){
                                  document.getElementById("chb_prin").checked = false;
                              }
                              $("#Txt_act_prin").val('');
                              $("#Acti_prin").val('');
                              cod_ciuu='';
                              desc='';
                     });
                     $("#Tbl_Actividades tbody").on( 'click', 'div', function () {
                             if($(this).attr('id')=="Btn_elimi_act"){
                                  try {
                                        var cod_estable=$('#txt_Esta').val();
                                        var rowDataActividad = tbl_actividades.row( $(this).parents('tr') ).data();
                                        for(var h=0; h<rowDataActivEco.length; h++){
                                           if(rowDataActivEco[h][0]==cod_estable&&rowDataActivEco[h][1]==rowDataActividad[0])
                                                {
//                                                      alert(rowDataActivEco[h][0]+' ,'+rowDataActivEco[h][1]+' ,'+rowDataActividad[0]+' SE ELIMINA LA TUPLA')
                                                      rowDataActivEco.splice(h,1)
                                                }
                                        }
                                         var tip_activi=rowDataActividad[2];
                                         if (tip_activi=='Principal'){
                                              conta_princi=0;
                                              document.getElementById("chb_prin").checked = true;
                                         }
                                        tbl_actividades.row( $(this).parents('tr') ).remove().draw();
                                } catch (e) {
                                    alert("error"+e);
                                }        
                             }
                         
                     });
                     $("#Tbl_Establecimientos tbody").on( 'click', 'div', function () {
                            
                             if($(this).attr('id')=="Btn_edi_est"){
                                  var rowDataEstaci = tbl_estab.row( $(this).parents('tr') ).data();
                                  CargarEstable(rowDataEstaci[0]);
                                 
                             }
                         
                     });
                     $("#Tbl_AnioConta tbody").on( 'click', 'div', function () {
                             if($(this).attr('id')=="Btn_edi_anio"){
                                  try {
                                       
                                        var check=document.getElementById('chb_cont');
                                        var rowDataiInfoConta = tbl_anioConta.row( $(this).parents('tr') ).data();
                                         
                                        if (check.checked){
                                            Cargar_ContaPate(rowDataiInfoConta[0],rowDataiInfoConta[1]);
                                            actua_infoCon=rowDataiInfoConta[1];
                                        }
                                        else{
                                             Cargar_noContaPate(rowDataiInfoConta[0],rowDataiInfoConta[1]);
                                             actua_infonoCon=rowDataiInfoConta[1];
                                        }
                                } catch (e) {
                                    alert("error"+e);
                                }        
                             }
                         
                     });
                      $("#chb_prin").click(function(e){
                          if (conta_princi==1){
                              document.getElementById("chb_prin").checked = false;
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
                       var UsrExt=parseInt(sessionStorage.getItem('Usr_Ext'));
                       var Accion=parseInt(sessionStorage.getItem('Accion'));
                       
                      
                     var check=document.getElementById('chb_cont');
                    if (check.checked){
                         $("#obli_conta").css('display','block');
                         $("#noobli_conta").css('display','none');
                    }
                    else{
                         $("#noobli_conta").css('display','block');
                         $("#obli_conta").css('display','none');
                    }
                    if(Accion==1){
                           $("#div_geaño").css('display','block');
                           $("#lbl_anio").text("Generar Año "+$('#cmb_pat_año').val());
                       }
                       else{
                             if (check.checked==false){
                                  
                                 VerInfonoContaPate($('#cmb_pat_año').val())
                             }
                             else{
//                                 alert("paso");
                                  VerInfoContaPate($('#cmb_pat_año').val())
                             }
                       }
                 });
                 $("#Btn_geaño").click(function(e){
//                     alert("prueba")
                     var Accion=parseInt(sessionStorage.getItem('Accion'));
                     var check=document.getElementById('chb_cont');
                    if (check.checked){
                         if(Accion==1){
                              anio=$('#cmb_pat_año').val();
                         }
//                        alert(anio)
                        InfoContaPate();
                    }
                    else{
                          if(Accion==1){
                               anio=$('#cmb_pat_año').val();
                          }
//                         alert(anio)
                         InfonoContaPate();
                    }
                     
                 });
                 $("#chb_cont").click(function(e){
                     var Accion=parseInt(sessionStorage.getItem('Accion'));
                     var check=document.getElementById('chb_cont');
                    if (check.checked){
                         if(Accion==1){
                             $('#spl_porsen').css('display','block');
                         }

                    }
                    else{
                          if(Accion==1){
                              $('#spl_porsen').css('display','none');
                          }
                    }
                     
                 });
                 $("#Btn_EstDecla").click(function(e){
                    $('#divInfoEsta').css('display','block');
                    $('#divActivEconom').css('display','block');
                    $('#divInfoContaf').css('display','block');
                    $('#Btn_GuaEsta').css('display','block');
                    var estableci=$('#cmb_estable').val();
                    document.getElementById("titInfEsta").innerHTML = "3. Información del Establecimiento "+estableci;
                    document.getElementById("titActiEco").innerHTML = "4. Actividad Económica del Establecimiento "+estableci
                    document.getElementById("titInfoCont").innerHTML ="5. Información Contable del Establecimiento "+estableci;
                     $("#txt_Esta").val('Est '+estableci);
                 });
                 $("#Btn_GuaEsta").click(function(e){
                     InfoEstableci();
                     
                 });
                 $("#nav-profile-tab").click(function(e){
                    
                     var Latitud=sessionStorage.getItem('Latitud');
                     var Longitud=sessionStorage.getItem('Longitud');
//                     if(Latitud==null&&Longitud==null){
                                $('#nav-profile').load('http://172.23.25.6/Virtual/Ubicacion.php',function(){});
//                        }
                   
                 });
              $('#dp4').datepicker(
                {
                        onHide: function(dp, animationCompleted)
                        {
                            if (animationCompleted) 
                            {
                                    var fecha_inioper=$('#dp4').val();
                                    if(fecha_inioper!=''){
                                        GeneraAnios(fecha_inioper);
                                        sessionStorage.setItem('Anios',JSON.stringify(rowAnios));
                                        Cargar_anios();
                                    }
                                    
                            }
                        }
                });
 
    } catch (e) {
        alert("error"+e);
    }
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
function Cargar_Nestable() {
  
  $("#cmb_estable").empty();
  document.getElementById("cmb_estable").innerHTML += "<option value='0'>Seleccione el Establecimiento a Declarar:</option>";
   var estable = parseInt($('#quantity').val());
 for(var i=1; i<=estable; i++){
               
                    document.getElementById("cmb_estable").innerHTML += "<option value='"+i+"'>"+"Información del Establecimiento "+i+"</option>"; 

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
    var UsrExt=parseInt(sessionStorage.getItem('Usr_Ext'));
    var Accion=parseInt(sessionStorage.getItem('Accion'));
    
//    alert($("#id").val());
var id=$("#id").val();
if(id==1){
    if(Accion==1){
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
                     sessionStorage.setItem('Personeria',row[0][9]);
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
                      Cargar_TipRotulo();
        }
        else{
                     CargaFIcha(0);

        }
}
        
    
    
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
function CargaFIcha(indice){

                 var RowDatosGen=JSON.parse(sessionStorage.getItem('Datos_generales'));
                 if(indice==0){
                     TraerParroquias('17','02');
                     Cargar_Parroquia();
                     Cargar_TipActivi();
                     Cargar_TipEsta();
                     Cargar_TamEsta();
                     Cargar_TipRotulo();
                     $("#cmb_pat_parroquia").val(RowDatosGen[0][9]);
//                     alert($("#cmb_pat_parroquia").val())
                     $("#dp2").val(RowDatosGen[0][18]);
                     $("#Nom_comer").val(RowDatosGen[0][19]);
                     $("#quantity").val(RowDatosGen[0][10]);
                     BusActiEcono(parseInt(RowDatosGen[0][4]))
                     $("#Acti_prin").val(rowActividad[0][0]);
                     $("#Txt_act_prin").val(rowActividad[0][1]);
                     BusActiEcono(parseInt(RowDatosGen[0][20]))
                     $("#Acti_Secu").val(rowActividad[0][0]);
                     $("#Txt_act_sec").val(rowActividad[0][1]);
                     var Cod_pro=sessionStorage.getItem('cod_pro');
                     DatosContribu(Cod_pro);
                     $("#indenti_contri").val(row[0][17]);
                     $("#Nom_contri").val(row[0][1]);
                     $("#Apelli_contri").val(row[0][2]);
                     $("#codi_contri").val(row[0][0]);
                     $("#tele_contri").val(RowDatosGen[0][14]);
                     $("#cmb_pat_loper").val(RowDatosGen[0][3]);
                      var provincia='17';
                      var canton= '02';
                      var parroquia=$("#cmb_pat_parroquia").val();
                      Cargar_Calles_pri(provincia,canton,parroquia);
                      Cargar_Calles_sec(provincia,canton,parroquia);
                      Cargar_Calles_pri_TBL(provincia,canton,parroquia);
                      Cargar_Calles_sec_TBL(provincia,canton,parroquia);
                      $("#cmb_pat_calle_pri").val(RowDatosGen[0][2]);
                      $("#cmb_pat_calle_sec").val(RowDatosGen[0][17]);
                      $("#Num_casa").val(RowDatosGen[0][13]);
                      $("#Txt_barrio").val(RowDatosGen[0][11]);
                      $("#cmb_pat_tip_act").val(RowDatosGen[0][6]);
                      $("#tip_rotulo").val(RowDatosGen[0][1]);

                 }
                  if(indice==1){
//                      alert($("#cmb_pat_parroquia").val())
                      $("#cmb_pat_tam_esta").val(RowDatosGen[0][3]);
                      if(RowDatosGen[0][8]){
                        document.getElementById("chbx_ren").checked = true;  
                      }
                      else{
                          document.getElementById("chbx_ren").checked = false;  
                      }
                      if(RowDatosGen[0][4]){
                        document.getElementById("chb_iva").checked = true;  
                      }
                      else{
                          document.getElementById("chb_iva").checked = false;  
                      }
                       if(RowDatosGen[0][5]){
                            document.getElementById("chb_cont").checked = true;  
                      }
                      else{
                           document.getElementById("chb_cont").checked = false;  
                      }
                       if(RowDatosGen[0][10]){
                            $("#div_apl_ter").css('display','block');
                            $("#div_chb_ter").css('display','block');
                            document.getElementById("chb_terc").checked = true;
                        }
                        else{
                            $("#div_apl_ter").css('display','none');
                            $("#div_chb_ter").css('display','none');
                            document.getElementById("chb_terc").checked = false;
                        }
                        if(RowDatosGen[0][9]){
                            $("#fil_arte").css('display','block');
                            $("#fec_arte").css('display','block');
                            $("#chec_arte").css('display','block');
                            document.getElementById("chb_art").checked = true;
                            $("#dp3").val(RowDatosGen[0][6]);
                        }
                        else{
                            $("#fil_arte").css('display','none');
                            $("#fec_arte").css('display','none');
                            $("#chec_arte").css('display','none');
                            document.getElementById("chb_art").checked = false;
 
                        }
                      
                  }
                  if(indice==2){
//                      alert($("#cmb_pat_parroquia").val())
                      $("#cmb_pat_año").empty();
                       document.getElementById("cmb_pat_año").innerHTML = "<option value='-1'>Selecione el año declarado</option>"; 
                       document.getElementById("Btn_Generar").innerText="Ver Informacion";
//                       alert(RowDatosGen)
                        for(var i=0; i<RowDatosGen.length; i++){
                             document.getElementById("cmb_pat_año").innerHTML += "<option value='"+i+"'>Declaración año "+RowDatosGen[i][21]+"</option>";
                        }
                  }
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
function BusActiEcono(id){
   var ex=0; 
     try {
                              
                              var parametros={
                                "id":id
                                }
                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraeActividadEco.php",
                                        data: parametros,
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               rowActividad=response.row;
                                                                 

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
function Cargar_TipRotulo() {
    $("#tip_rotulo").empty();
    document.getElementById("tip_rotulo").innerHTML += "<option value='0'>Tipo Rotulo</option>";
    TipRotulo();
  for(var i in rowTipRotulo)
            { 
               
                    document.getElementById("tip_rotulo").innerHTML += "<option value='"+rowTipRotulo[i][0]+"'>"+rowTipRotulo[i][1]+"</option>"; 

            }
}
function TipRotulo(){
   var ex=0; 
     try {

                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraerTipRotu.php",
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               rowTipRotulo=response.row;
                                                                 

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
   try {
            if (actua_infonoCon==0)
            {
                        var rowInfonoContable=new Array ();
                    //     alert("paso2"+anio)
                         var anio=$('#cmb_pat_año').val();
                         rowInfonoContable.push(anio);
                         var cod_estable=$('#txt_Esta').val();
                          rowInfonoContable.push(cod_estable);
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
                         rowInfonoContable.push(Cod_conta_boora);
                         rowDataInfnoConta[index] = rowInfonoContable;
                         index=index+1;
                        var sel = document.getElementById("cmb_pat_año");
                        sel.remove(sel.selectedIndex);
                         limpiar();
                         tbl_anioConta.row.add([
                                                                                                                    cod_estable,
                                                                                                                    anio,
                                                                                                                    capi_pro,
                                                                                                                    cap_ajeno,
                                                                                                                    cap_giro,
                                                                                                                    perdida,
                                                                                                                    cap_giro,
                                                                                                                    '<div id="Btn_edi_anio" class="input-group-append"><button  class="btn btn-success  btn-circle" type="button"><a><i class="fas fa-edit"></i></a></button></div>'
                                                                                                                    ]).draw();
                        $("#noobli_conta").css('display','none');
                        $("#obli_conta").css('display','none');
                        $("#div_geaño").css('display','none');                                                                                       
//                        alert(rowDataInfnoConta);
            }
            else if(actua_infonoCon!=0)
            {
                var cod_estable =$('#txt_Esta').val();
                var capi_pro    =$('#Txt_pat_capi_pro').val();
                var cap_ajeno   =$('#Txt_pat_Ajeno').val();
                var perdida     =$('#Txt_pat_perdida').val();
                var cap_giro    =$('#Txt_pat_giro').val();
                for(var i=0; i<=rowDataInfnoConta.length-1; i++){
                    if(rowDataInfnoConta[i][1]==cod_estable&&rowDataInfnoConta[i][0]==actua_infonoCon)
                    {
                          rowDataInfnoConta[i][2]=$('#Txt_pat_capi_pro').val();
                          rowDataInfnoConta[i][3]=$('#Txt_pat_Ajeno').val();
                          rowDataInfnoConta[i][4]=$('#Txt_pat_giro').val();
                          rowDataInfnoConta[i][5]=$('#Txt_pat_ingre').val();
                          rowDataInfnoConta[i][6]=$('#Txt_pat_gastos').val();
                          rowDataInfnoConta[i][7]=$('#Txt_pat_perdida').val();
                          rowDataInfnoConta[i][8]=$('#Txt_pat_avaluo').val();
                    }
                    
                }
                var filas=tbl_anioConta.rows().count();
                for(var k=0; k<=filas-1; k++){
                        var rowInfonoConEdit=new Array ();
                        rowInfonoConEdit = tbl_anioConta.row(k).data();
                        if(rowInfonoConEdit[0]==cod_estable&&rowInfonoConEdit[1]==actua_infonoCon)
                        { 
                            tbl_anioConta.row( k ).remove().draw();
                          tbl_anioConta.row.add([
                                                        cod_estable,
                                                        actua_infonoCon,
                                                        capi_pro,
                                                        cap_ajeno,
                                                        cap_giro,
                                                        perdida,
                                                        cap_giro,
                                                        '<div id="Btn_edi_anio" class="input-group-append"><button  class="btn btn-success  btn-circle" type="button"><a><i class="fas fa-edit"></i></a></button></div>'
                                                 ]).draw();
                        }
                }
                $("#noobli_conta").css('display','none');
                $("#obli_conta").css('display','none');
                $("#div_geaño").css('display','none');   
            }
        sessionStorage.setItem('PatentesNoConta',JSON.stringify(rowDataInfnoConta));
      } catch (e) {
        alert("error"+e);
    }  
}
function Cargar_noContaPate(cod_esta,anio){
    $("#noobli_conta").css('display','block');
    $("#obli_conta").css('display','none');
    $("#div_geaño").css('display','block');
    $("#lbl_anio").text("Actualizar Año "+anio);
    limpiar_InfonoConta();
    for(var h=0; h<rowDataInfnoConta.length; h++){
        if(rowDataInfnoConta[h][1]==cod_esta&&rowDataInfnoConta[h][0]==anio)
        {
             $('#Txt_pat_capi_pro').val(rowDataInfnoConta[h][2]);
             $('#Txt_pat_Ajeno').val(rowDataInfnoConta[h][3]);
             $('#Txt_pat_giro').val(rowDataInfnoConta[h][4]);
             $('#Txt_pat_ingre').val(rowDataInfnoConta[h][5]);
             $('#Txt_pat_gastos').val(rowDataInfnoConta[h][6]);
             $('#Txt_pat_perdida').val(rowDataInfnoConta[h][7]);
             $('#Txt_pat_avaluo').val(rowDataInfnoConta[h][8]);
             
        }
    }
}
function Cargar_ContaPate(cod_esta,anio){
      $("#obli_conta").css('display','block');
      $("#noobli_conta").css('display','none');
      $("#div_geaño").css('display','block');
      $("#lbl_anio").text("Actualizar Año "+anio);
      limpiar_InfoConta();
       for(var h=0; h<rowDataInfConta.length; h++){
           if(rowDataInfConta[h][1]==cod_esta&&rowDataInfConta[h][0]==anio)
            {
                  $('#Txt_por_esta').val(rowDataInfConta[h][2]);
                  $('#Txt_pat_actcorr').val(rowDataInfConta[h][3]);
                  $('#Txt_pat_actfijo').val(rowDataInfConta[h][4]);
                  $('#Txt_pat_noCorr').val(rowDataInfConta[h][5]);
                  $('#Txt_pat_pas_corr').val(rowDataInfConta[h][6]);
                  $('#Txt_pat_totIng').val(rowDataInfConta[h][7]);
                  $('#Txt_pat_cosVen').val(rowDataInfConta[h][8]);
                  $('#Txt_pat_GasVen').val(rowDataInfConta[h][9]);
                  $('#Txt_pat_Gto_OPer').val(rowDataInfConta[h][10]);
                  $('#quantity_por').val(rowDataInfConta[h][11]);
                  $('#Txt_pat_TolAct').val(rowDataInfConta[h][12]);
                  $('#Txt_pat_neto').val(rowDataInfConta[h][13]);
                  $('#Txt_pat_utl_per').val(rowDataInfConta[h][14]);
                  $('#Txt_pat_Bas_Impo').val(rowDataInfConta[h][15]);
                  $('#Txt_pat_avaluoconta').val(rowDataInfConta[h][16]);
            }
       }
}
function limpiar_InfonoConta(){
    $('#Txt_pat_capi_pro').val('');
    $('#Txt_pat_Ajeno').val('');
    $('#Txt_pat_giro').val('');
    $('#Txt_pat_ingre').val('');
    $('#Txt_pat_gastos').val('');
    $('#Txt_pat_perdida').val('');
    $('#Txt_pat_avaluo').val('');
}
function limpiar_InfoConta(){
    $('#Txt_pat_actcorr').val('');
    $('#Txt_pat_actfijo').val('');
    $('#Txt_pat_noCorr').val('');
    $('#Txt_pat_pas_corr').val('');
    $('#Txt_pat_totIng').val('');
    $('#Txt_pat_cosVen').val('');
    $('#Txt_pat_GasVen').val('');
    $('#Txt_pat_Gto_OPer').val('');
    $('#Txt_pat_TolAct').val('');
    $('#Txt_pat_neto').val('');
    $('#Txt_pat_Bas_Impo').val('');
    $('#Txt_pat_avaluo').val('');
    $('#Txt_por_esta').val('');
    $('#Txt_pat_avaluoconta').val('');
    
    
}
function InfoContaPate(){
 try {   
    if (actua_infoCon==0)
    {
        //    alerfunction limpiar_InfonoConta(){t("paso1")
              var rowInfoContable=new Array ();
              var anio=$('#cmb_pat_año').val();
              rowInfoContable.push(anio);
              var cod_estable=$('#txt_Esta').val();
              rowInfoContable.push(cod_estable);
              var por_estable=$('#Txt_por_esta').val();
              rowInfoContable.push(por_estable);
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
              var avaluo=$('#Txt_pat_avaluoconta').val();
              rowInfoContable.push(avaluo);
              rowDataInfConta[index] = rowInfoContable;
              index=index+1;
              var sel = document.getElementById("cmb_pat_año");
              sel.remove(sel.selectedIndex);
              limpiar();
              tbl_anioConta.row.add([
                                                                                                        cod_estable,
                                                                                                        anio,
                                                                                                        tot_activos,
                                                                                                        pasivo_corr,
                                                                                                        patri_neto,
                                                                                                        uti_perdida,
                                                                                                        base_ipo,
                                                                                                        '<div id="Btn_edi_anio" class="input-group-append"><button  class="btn btn-success  btn-circle" type="button"><a><i class="fas fa-edit"></i></a></button></div>'
                                                                                                        ]).draw();
  
          //  alert(rowDataInfConta)
    }
    else if(actua_infoCon!=0)
    {
         var cod_estable    =$('#txt_Esta').val();
         var anio           =$('#cmb_pat_año').val();
         var tot_activos    =$('#Txt_pat_TolAct').val();
         var pasivo_corr    =$('#Txt_pat_pas_corr').val();
         var patri_neto     =$('#Txt_pat_neto').val();
         var uti_perdida    =$('#Txt_pat_utl_per').val();
         var base_ipo       =$('#Txt_pat_Bas_Impo').val();
        for(var i=0; i<=rowDataInfConta.length-1; i++){
             if(rowDataInfConta[i][1]==cod_estable&&rowDataInfConta[i][0]==actua_infoCon)
            {
                rowDataInfConta[i][2]   =$('#Txt_por_esta').val();
                rowDataInfConta[i][3]   =$('#Txt_pat_actcorr').val();
                rowDataInfConta[i][4]   =$('#Txt_pat_actfijo').val();
                rowDataInfConta[i][5]   =$('#Txt_pat_noCorr').val();
                rowDataInfConta[i][6]   =$('#Txt_pat_pas_corr').val();
                rowDataInfConta[i][7]   =$('#Txt_pat_totIng').val();
                rowDataInfConta[i][8]   =$('#Txt_pat_cosVen').val();
                rowDataInfConta[i][9]   =$('#Txt_pat_GasVen').val();
                rowDataInfConta[i][11]  =$('#quantity_por').val();
                rowDataInfConta[i][12]  =$('#Txt_pat_TolAct').val();
                rowDataInfConta[i][13]  =$('#Txt_pat_neto').val();
                rowDataInfConta[i][14]  =$('#Txt_pat_utl_per').val();
                rowDataInfConta[i][15]  =$('#Txt_pat_Bas_Impo').val();
                rowDataInfConta[i][16]  =$('#Txt_pat_avaluoconta').val();
                
            }
        }
        var filas=tbl_anioConta.rows().count();
        for(var k=0; k<=filas-1; k++){
              var rowInfoConEdit=new Array ();
              rowInfoConEdit = tbl_anioConta.row(k).data();
               if(rowInfoConEdit[0]==cod_estable&&rowInfoConEdit[1]==actua_infoCon)
                {    
                    tbl_anioConta.row( k ).remove().draw();
                         tbl_anioConta.row.add([
                                                    cod_estable,
                                                    actua_infoCon,
                                                    tot_activos,
                                                    pasivo_corr,
                                                    patri_neto,
                                                    uti_perdida,
                                                    base_ipo,
                                                    '<div id="Btn_edi_anio" class="input-group-append"><button  class="btn btn-success  btn-circle" type="button"><a><i class="fas fa-edit"></i></a></button></div>'
                                                ]).draw();
                
                }
        }
    }
    sessionStorage.setItem('PatentesConta',JSON.stringify(rowDataInfConta));
    $("#noobli_conta").css('display','none');
    $("#obli_conta").css('display','none');
    $("#div_geaño").css('display','none');   
    } catch (e) {
                 alert("error"+e);
    }    
}
function InfoEstableci(){ 
         try {

                    var rowInfoEstableci=new Array ();
                    var cod_estable=$('#txt_Esta').val();
                    var Num_estable=rowDataInfEstab.length;
                    var Actualiza=0;
                    if (Num_estable>0){
                                     for(var i=0; i<=rowDataInfEstab.length-1; i++){
                                         if(rowDataInfEstab[i][0]==cod_estable){
                                             Actualiza=1;
                                             rowDataInfEstab[i][1]  =$('#cmb_pat_parroquia').val()
                                             rowDataInfEstab[i][2]  =$('#tele_contri').val()
                                             rowDataInfEstab[i][3]  =$('#cmb_pat_loper').val();
                                             rowDataInfEstab[i][4]  =$('#cmb_pat_calle_pri').val();
                                             rowDataInfEstab[i][5]  =$('#cmb_pat_calle_sec').val();
                                             rowDataInfEstab[i][6]  =$('#Num_casa').val();
                                             rowDataInfEstab[i][7]  =$('#Txt_barrio').val();
                                             rowDataInfEstab[i][8]  =$('#tip_rotulo').val();
                                             rowDataInfEstab[i][9]  =$('#Nom_comer').val();
                                             rowDataInfEstab[i][10] =sessionStorage.getItem('Latitud');
                                             rowDataInfEstab[i][11] =sessionStorage.getItem('Longitud')
                                            var filas=tbl_actividades.rows().count();
                                            var valida=0;
 
                                         }
                                     }
                                     for(var K=0; K<filas; K++){
                                                  try {
                                                     
                                                      valida=0;
                                                      var rowActividad_edit=new Array ();
                                                      rowActividad_edit = tbl_actividades.row(K).data();
                                                      for(var h=0; h<rowDataActivEco.length; h++){
//                                                          alert("PARAMETRO 1, "+rowDataActivEco[h][0]+" PARAMETRO 2 "+rowDataActivEco[h][1]+" PARAMETRO 3 "+rowActividad_edit[0])
                                                          if(rowDataActivEco[h][0]==cod_estable&&rowDataActivEco[h][1]==rowActividad_edit[0])
                                                          {
//                                                               alert('LOCALIZADO');
                                                                valida++;
                                                          }

                                                     }
 
                                                  } catch (e) {
                                                           alert("error"+e);
                                                 } 
                                             
                                            }
                                            if(valida==0)
                                            {
//                                                                alert('CREO');
                                                                var rowActi_esta=new Array ();
                                                                rowActi_esta.push(cod_estable);
                                                                rowActi_esta.push(rowActividad_edit[0]);
                                                                rowActi_esta.push(rowActividad_edit[1]);
                                                                rowActi_esta.push(rowActividad_edit[2]);
                                                                if(rowActividad_edit[2]=='Principal'){
                                                                  act_prin=rowActividad_edit[0];
                                                                }
                                                              rowDataActivEco[rowDataActivEco.length]=rowActi_esta; 
                                            }
//                                    limpiar_estable(); 

                    }
                    if(Actualiza==0){
                                            rowInfoEstableci.push(cod_estable);
                                            var parroquia=$('#cmb_pat_parroquia').val();
                                            rowInfoEstableci.push(parroquia);
                                            var Telefono=$('#tele_contri').val();
                                            rowInfoEstableci.push(Telefono);
                                            var lug_opera=$('#cmb_pat_loper').val();
                                            rowInfoEstableci.push(lug_opera);
                                            var call_pri=$('#cmb_pat_calle_pri').val();
                                            rowInfoEstableci.push(call_pri);
                                            var call_sec=$('#cmb_pat_calle_sec').val();
                                            rowInfoEstableci.push(call_sec);
                                            var Num_casa=$('#Num_casa').val();
                                            rowInfoEstableci.push(Num_casa);
                                            var barrio=$('#Txt_barrio').val();
                                            rowInfoEstableci.push(barrio);
                                            var tip_rotulo=$('#tip_rotulo').val();
                                            rowInfoEstableci.push(tip_rotulo);
                                            var Nom_comer=$('#Nom_comer').val();
                                            rowInfoEstableci.push(Nom_comer);
                                            var Latitud=sessionStorage.getItem('Latitud');
                                            rowInfoEstableci.push(Latitud);
                                            var Longitud=sessionStorage.getItem('Longitud');
                                            rowInfoEstableci.push(Longitud);
                                            rowDataInfEstab[rowDataInfEstab.length] = rowInfoEstableci;
//                                            index_esta=index_esta+1;
                                            var act_prin;
                       //                     alert(tbl_actividades.rows().count());
                                             for(var i=0; i<=tbl_actividades.rows().count()-1; i++){
                                                 var rowActividad=new Array ();
                                                try { 
                       //                                alert(i);
                                                         rowActividad = tbl_actividades.row(i).data();
                                                         var rowActi_esta=new Array ();
                                                          rowActi_esta.push(cod_estable);
                                                          rowActi_esta.push(rowActividad[0]);
                                                          rowActi_esta.push(rowActividad[1]);
                                                          rowActi_esta.push(rowActividad[2]);
                                                          if(rowActividad[2]=='Principal'){
                                                              act_prin=rowActividad[0];
                                                          }
                                                          rowDataActivEco[rowDataActivEco.length]=rowActi_esta;
//                                                          j=j+1;
//                                                          alert(rowDataActivEco);
                                                  } catch (e) {
                                                           alert("error"+e);
                                                  }   
                                             }                       //                      alert(rowDataActivEco);
                                   var sel = document.getElementById("cmb_estable");
                                   sel.remove(sel.selectedIndex);
                                   tbl_estab.row.add([
                                                        cod_estable,
                                                        Nom_comer,
                                                        barrio,
                                                        act_prin,
                                                        '<div id="Btn_edi_est" class="input-group-append"><button  class="btn btn-success  btn-circle" type="button"><a><i class="fas fa-edit"></i></a></button></div>'
                                                     ]).draw();
//                                  limpiar_estable();                                                              
                       //            alert(rowDataInfEstab);
                       //            alert(rowDataActivEco);
                    }
                    limpiar_estable(); 
        } catch (e) {
                 alert("error"+e);
        }
    
     sessionStorage.setItem('Activi_Econom',JSON.stringify(rowDataActivEco));
     sessionStorage.setItem('InfoEstable',JSON.stringify(rowDataInfEstab));
//     alert(rowDataInfnoConta);
//    var sel = document.getElementById("cmb_pat_año");
//    sel.remove(sel.selectedIndex);
//     limpiar();
//    alert(rowDataInfEstab)
}
function CargarEstable(cod_esta){
    try {
                limpiar_estable();
                $('#divInfoEsta').css('display','block');
                $('#divActivEconom').css('display','block');
                $('#divInfoContaf').css('display','block');
                $('#Btn_GuaEsta').css('display','block');
                 for(var i=0; i<=rowDataInfEstab.length-1; i++){
                     if(rowDataInfEstab[i][0]==cod_esta){
            //             alert(rowDataInfEstab[i][0]);
                         $('#txt_Esta').val(rowDataInfEstab[i][0]);
                         $('#cmb_pat_parroquia').val(rowDataInfEstab[i][1]);
                         $('#tele_contri').val(rowDataInfEstab[i][2]);
                         $('#cmb_pat_loper').val(rowDataInfEstab[i][3]);
                         $('#cmb_pat_calle_pri').val(rowDataInfEstab[i][4]);
                         $('#cmb_pat_calle_sec').val(rowDataInfEstab[i][5]);
                         $('#Num_casa').val(rowDataInfEstab[i][6]);
                         $('#Txt_barrio').val(rowDataInfEstab[i][7]);
                         $('#tip_rotulo').val(rowDataInfEstab[i][8]);
                         $('#Nom_comer').val(rowDataInfEstab[i][9]);
                         sessionStorage.setItem('Latitud',rowDataInfEstab[i][10]);
                         sessionStorage.setItem('Longitud',rowDataInfEstab[i][11]);
                         tbl_actividades.clear().draw()
                         for(var j=0; j<=rowDataActivEco.length-1; j++){
                               if(rowDataActivEco[j][0]==cod_esta){
                                            var cod_ciuu=rowDataActivEco[j][1];
                                            var desc=rowDataActivEco[j][2];
                                            var act_prin=rowDataActivEco[j][3];
                                                                   tbl_actividades.row.add([
                                                                                                 cod_ciuu,
                                                                                                 desc,
                                                                                                 act_prin,
                                                                                                 '<div id="Btn_elimi_act" class="input-group-append"><button  class="btn btn-warning  btn-circle" type="button"><a><i class="fas fa-trash-alt"></i></a></button></div>'
                                                                                                 ]).draw();
                               }


                         }
                        //alert(rowDataInfConta.length);
                        var check=document.getElementById('chb_cont'); 
                        if (check.checked){
                            for(var k=0; k<= rowDataInfConta.length-1; k++){
                                     if(rowDataInfConta[k][1]==cod_esta){
                                                   tbl_anioConta.row.add([
                                                                            cod_esta,
                                                                            rowDataInfConta[k][0],
                                                                            rowDataInfConta[k][12],
                                                                            rowDataInfConta[k][13],
                                                                            rowDataInfConta[k][14],
                                                                            rowDataInfConta[k][15],
                                                                            rowDataInfConta[k][16],
                                                                            '<div id="Btn_edi_anio" class="input-group-append"><button  class="btn btn-success  btn-circle" type="button"><a><i class="fas fa-edit"></i></a></button></div>'
                                                                        ]).draw();
                                         
                                     }
                              }

                        }
                        else{
                                for(var k=0; k<= rowDataInfnoConta.length-1; k++){
                                          if(rowDataInfnoConta[k][1]==cod_esta){
                                              tbl_anioConta.row.add([
                                                                                                                    cod_esta,
                                                                                                                    rowDataInfnoConta[k][0],
                                                                                                                    rowDataInfnoConta[k][2],
                                                                                                                    rowDataInfnoConta[k][3],
                                                                                                                    rowDataInfnoConta[k][4],
                                                                                                                    rowDataInfnoConta[k][7],
                                                                                                                    rowDataInfnoConta[k][4],
                                                                                                                    '<div id="Btn_edi_anio" class="input-group-append"><button  class="btn btn-success  btn-circle" type="button"><a><i class="fas fa-edit"></i></a></button></div>'
                                                                                                                    ]).draw();
                                          }
                                }
                        }


                     }
            //         
                 }
        } catch (e) {
                 alert("error"+e);
        }             
}
function VerInfonoContaPate(indice){ 
    try {  
//            limpiar();
             var RowDatosGen=JSON.parse(sessionStorage.getItem('Datos_generales'));
             $('#Txt_pat_capi_pro').val(RowDatosGen[indice][2]);
             $('#Txt_pat_Ajeno').val(RowDatosGen[indice][3]);
             $('#Txt_pat_giro').val(RowDatosGen[indice][4]);
             $('#Txt_pat_ingre').val(RowDatosGen[indice][5]);
             $('#Txt_pat_gastos').val(RowDatosGen[indice][6]);
              CalculanoLLevaConta();
             $('#Txt_pat_avaluo').val(RowDatosGen[indice][17]);
             $("#div_geaño").css('display','block');
             $("#lbl_anio").text("Aprobar Año "+RowDatosGen[indice][21]);
             anio=RowDatosGen[indice][21];
             Cod_conta_boora=RowDatosGen[indice][0];
//             $('#Txt_pat_perdida').val(RowDatosGen[indice][7]);
//             $('#Txt_pat_avaluo').val();
     } catch (e) {
        alert("error"+e);
    }
//     rowInfonoContable.push(capi_pro);
//     var cap_ajeno=$('#Txt_pat_Ajeno').val();
//     rowInfonoContable.push(cap_ajeno);
//     var cap_giro=$('#Txt_pat_giro').val();
//     rowInfonoContable.push(cap_giro);
//     var ingresos=$('#Txt_pat_ingre').val();
//     rowInfonoContable.push(ingresos);
//     var gastos=$('#Txt_pat_gastos').val();
//     rowInfonoContable.push(gastos);
//     var perdida=$('#Txt_pat_perdida').val();
//     rowInfonoContable.push(perdida);
//     var avaluo=$('#Txt_pat_avaluo').val();
//     rowInfonoContable.push(avaluo);
////     alert(rowInfonoContable);
//     rowDataInfnoConta[index] = rowInfonoContable;
//     index=index+1;
//     sessionStorage.setItem('PatentesNoConta',JSON.stringify(rowDataInfnoConta));
////     alert(rowDataInfnoConta);
//    var sel = document.getElementById("cmb_pat_año");
//    sel.remove(sel.selectedIndex);

}
function VerInfoContaPate(indice){ 
    try {  
//            limpiar();
             var RowDatosGen=JSON.parse(sessionStorage.getItem('Datos_generales'));
             $('#Txt_pat_actcorr').val(RowDatosGen[indice][7]);
             $('#Txt_pat_actfijo').val(RowDatosGen[indice][8]);
             $('#Txt_pat_noCorr').val(RowDatosGen[indice][9]);
             $('#Txt_pat_pas_corr').val(RowDatosGen[indice][16]);
             $('#Txt_pat_totIng').val(RowDatosGen[indice][22]);
             $('#Txt_pat_cosVen').val(RowDatosGen[indice][10]);
             $('#Txt_pat_GasVen').val(RowDatosGen[indice][11]);
             $('#Txt_pat_Gto_OPer').val(RowDatosGen[indice][12]);
             $('#quantity_por').val(RowDatosGen[indice][18]);
             $('#Txt_pat_TolAct').val(RowDatosGen[indice][23]);
             $('#Txt_pat_neto').val(RowDatosGen[indice][14]);
             $('#Txt_pat_Bas_Impo').val(RowDatosGen[indice][15]);
             $('#Txt_pat_avaluo').val(RowDatosGen[indice][17]);
             $('#Txt_pat_avaluoconta').val(RowDatosGen[indice][17]);
             CalculaLLevaConta();
             $("#div_geaño").css('display','block');
             $("#lbl_anio").text("Aprobar Año "+RowDatosGen[indice][21]);
             anio=RowDatosGen[indice][21];
             Cod_conta_boora=RowDatosGen[indice][0];
     } catch (e) {
        alert("error"+e);
    }


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
function limpiar_estable(){
    $('#txt_Esta').val('');
    $('#cmb_pat_parroquia').val(0);
    $('#tele_contri').val('');
    $('#cmb_pat_loper').val(0);
    $('#cmb_pat_calle_pri').val(0);
    $('#cmb_pat_calle_sec').val(0);
    $('#Num_casa').val('');
    $('#Txt_barrio').val('');
    $('#cmb_pat_tip_act').val(0);
    $('#tip_rotulo').val('');
    $('#Nom_comer').val('');
    tbl_actividades.clear().draw()
    conta_princi=0;
    document.getElementById("chb_prin").checked = true;
    $('#FicEstable').collapse('show');
    $('#ficha_Activi').collapse('hide');
    $('#divInfoEsta').css('display','none');
    $('#divActivEconom').css('display','none');
    $('#Btn_GuaEsta').css('display','none');
    $('#ficInfogen').collapse('hide');
    tbl_anioConta.clear().draw();
    $('#divActivEconom').css('display','none');
    $('#divInfoContaf').css('display','none');
    $('#ficha_InfoCon').collapse('hide');
//       for(var i=0; i<=tbl_actividades.rows().count(); i++){
//             var rowDataActividad = tbl_actividades.row(i).data();
//             tbl_actividades.row(i).remove().draw();
//       }
       

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
function GeneraAnios(fecha_inioper){
    var ex=0; 
     try {
                              var parametros={
                                "fecha_inioper":fecha_inioper
                                }
                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/TraeAnios.php",
					data: parametros,
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               rowAnios=response.row;
                                                                 

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
// Call the dataTables jQuery plugin
var rowDataSetEscr=[];
var error ="";
var sel=1;
var row;
var error ="";
var query1="";
var tip_pred;
var idconsult;
var rowData=[];
var cadena="";
var Data_SetAreas;
var Data_SetPredio;
var DataSetPropi=[];
var Data_Seterror=[];
var DataSetNombres=[];
var fin;
var dir_ip;
var tokenid="3231a5ad-2d24-4dc2-b0f3-a791a8ff5eee";
$(document).ajaxStart(function(){
   if (fin==1){
          alert("Este proceso tardara unos segundos espere por favor")

   } 
 
           


});
//$(document).ajaxStop(function(){
////bootbox.alert('pasoo fin');
////    alert("pasoo fin")
//bootbox.hideAll();
//
//});
$(document).ready(function() {
    
    try {
        Cargar();
const formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 0
    })
        $("#Frm_Consulta").validate();
//        $('#Tbl_Consulta').DataTable();
         var table = $('#Tbl_RegPropie').DataTable({
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
                                                        },
                                                    });
        var table_linderos = $('#Tbl_Linderos').DataTable({
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
                                                        },
                                                    });
         var table_nombres = $('#Tbl_ConsultaNombres').DataTable({
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
                                                        },
                                                    });
         var table_compa = $('#Tbl_comaprece').DataTable({
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
                                                        },
                                                    });
     
        $('#Btn_cedu').click(function() { 
                     $("#div_cedu").css('display','block');
                     $("#div_nom").css('display','none');
                     var select=1;
                     sel=select;       
                    $("#Cmb_bus").val("Cédula o Ruc");
                    $("#Txt_Ced").attr("placeholder", "Ingrese Cédula o Ruc").placeholder();
                   
                  
        });
         $('#Btn_ClavCas').click(function() {
             
              bootbox.dialog({
                                                                                                      message: 'El registro de la Propiedad no lleva un Catastro de todas las Claves Catastrales por lo que es posible que no se localice la información solicitada',
                                                                                                      title: '<a href="#" class="btn btn-warning btn-circle"> <i class="fas fa fa-warning"></i> </a> Advertencia',
                                                                                                      onEscape: function() {
                                      //                                                                
                                                                                                      }
                                                                                                  });
                    $("#div_cedu").css('display','block');
                    $("#div_nom").css('display','none');
                   var select=3;
                    sel=select;   
                   $("#Cmb_bus").val("Clave Catastral");
                   $("#Txt_Ced").attr("placeholder", "Ingrese Clave Catastral").placeholder();
                   
                  
                  
               
        });
         $('#Btn_NomApe').click(function() { 
                var select=1;
                sel=select;
                 table_nombres.clear().draw();
                $('#Form_Nombres').modal('show');
      
        });  
          $('#Btn_buscar').click(function() { 
//              alert("pasoooo");
              
                  table.clear().draw();
                   var id=$("#Txt_Ced").val();
////                    alert(id);
                   buscar(sel,id);
//                   alert(rowDataSetEscr[0].NUM_IDENTIFICACION);
                var desc_bien;
                var clave_catastral
              for(var i=0; i<=rowDataSetEscr.length; i++){
                   try {
                        desc_bien=rowDataSetEscr[i].DESCRIP_BIEN.toString();
                    } catch (e) {
                             desc_bien="Sin descripción"
                    }
                    try {
                        clave_catastral=rowDataSetEscr[i].CLAVE_CATASTRAL.toString();
                    } catch (e) {
                             clave_catastral="Sin clave catastral"
                    }
//                  alert(clave_catastral);
                    table.row.add([
                                    rowDataSetEscr[i].NUM_IDENTIFICACION,
                                    rowDataSetEscr[i].NOMBRES,
                                    desc_bien,
                                    rowDataSetEscr[i].ESTADO_INSCRIPCION,
                                    rowDataSetEscr[i].FECHA_INSCRIPCION,
                                    rowDataSetEscr[i].ACTO_CONTRATO,
                                    "<a id='Btn_VerDetalle' href='#' class='btn btn-success btn-circle'><i class='fa fa-eye'></i>",
                                    rowDataSetEscr[i].NUMERO_TRAMITE,
                                    rowDataSetEscr[i].TIP_DOCUMENTO,
                                    rowDataSetEscr[i].CALI_COMPARECE,
                                    clave_catastral,
                                    rowDataSetEscr[i].NUM_FOLIO,
                                    rowDataSetEscr[i].NUM_INSCRPCION,
                                    rowDataSetEscr[i].NUM_REPERTORIO,
                                    rowDataSetEscr[i].FECHA_INSCRIPCION,
                                    rowDataSetEscr[i].TIP_BIEN,
                                    rowDataSetEscr[i].SECTOR,
                                    rowDataSetEscr[i].ACTO_CONTRATO,
                                    rowDataSetEscr[i].CUANTIA,
                                    rowDataSetEscr[i].FECHA_ESCRITURA,
                                    rowDataSetEscr[i].CANTON_NOTARIA,
                                    rowDataSetEscr[i].PARROQUIA,
                                    rowDataSetEscr[i].NOTARIA,
                                    rowDataSetEscr[i].SUP_CONSTRUCCION,
                                    rowDataSetEscr[i].SUP_ORIGINAL,
                                    rowDataSetEscr[i].TIPO_SUPERFICIE,
                                    rowDataSetEscr[i].LINDEROS,
                                    rowDataSetEscr[i].COMPARECIENTES,
                                  ]).draw();
                              }
            });
      $('#Btn_GuaClave').click(function() { 
           try {  
             var acto = $("#txt_ActoContra").val();
             var cali_compa=$("#Txt_CaliCompa").val();
             var lugar_inscr=$("#lugar_inscr").val();
             var canton=$("#txt_CantoNot").val();
             var notaria=$("#txt_notaria").val();
             var lugar_inscr=canton;
             var fecha_inscrip=FormatoFecha($("#txt_FechInc").val().toString().split('-'));
//             alert(fecha_inscrip);
             var superficie=$("#Txt_suporig").val();
             if (superficie==''){
                 superficie='0';              
             }
             var lugar_regis=canton;
             var libro=$("#txt_numtra").val();
             var registro_pro=$("#Txt_Incrip").val();
             var fecha_regi=FormatoFecha($("#txt_FecEscri").val().toString().split('-'));
             var sector=$("#txt_Sector").val();
             var folio=$("#Txt_numFolio").val();
             var foja=$("#txt_numRep").val();
             var clave_catastral=$("#Cmb_Predio").val();
             var cuantia=$("#Txt_cuantia").val();
             if (cuantia==''){
                 cuantia='0';              
             }
             var nombres=$("#txt_nombre").val().toString();
             var arrayNombres = nombres.split(' ');
             var apellidos=arrayNombres[0].toString()+' '+arrayNombres[1].toString();
             var nombres=arrayNombres[2].toString()+' '+arrayNombres[3].toString();
             var name=sessionStorage.getItem('Name');
             TraerIP();
             var cedula=$("#txt_identifi").val();
//             alert(acto+","+cali_compa+","+lugar_inscr+","+notaria+","+fecha_inscrip+","+superficie+","+lugar_regis+","+libro+","+registro_pro+","+fecha_regi+","+sector+","+folio+","+foja+","+clave_catastral+","+apellidos+","+nombres+","+cuantia+","+name+","+dir_ip+","+cedula)
//             $("#txt_nombre").val(acto+","+cali_compa+","+lugar_inscr+","+notaria+","+fecha_inscrip+","+superficie+","+lugar_regis+","+libro+","+registro_pro+","+fecha_regi+","+sector+","+folio+","+foja+","+clave_catastral+","+apellidos+","+nombres+","+cuantia+","+name+","+dir_ip+","+cedula)
           
                        fin=1;
                        var ValGuarTra=GuardarInfLega(acto,cali_compa,lugar_inscr,notaria,fecha_inscrip,superficie,lugar_regis,libro,registro_pro,fecha_regi,sector,folio,foja,clave_catastral,apellidos,nombres,cuantia,name,dir_ip,cedula)
                        var  valida=0
                          if(ValGuarTra){
                                 fin=0;
                                                  for(var i=0; i<=table_linderos.rows().count()-1; i++){ 
                                                       var rowLindero = table_linderos.row(i).data();
                                                       var ValGuarLinde=GuardarLinderios(rowLindero[0].toString(),rowLindero[1].toString(),sector,clave_catastral);
                                                       if(!ValGuarLinde){                     
                                                          valida=valida+1;
                                                       }
                                                   }
                                                   if (valida==0){
                                                          $('#Form_DetalleREg').modal('hide');
                                                           bootbox.dialog({
                                                                                                      message: '<a href="#" class="btn btn-success btn-circle"> <i class="fas fa-check"></i></a>',
                                                                                                      title: "Registro Guardado Correctamente",
                                                                                                      onEscape: function() {
                                      //                                                                
                                                                                                      }
                                                                                                  });

                                                   }   
                                       }
            } catch (e) {
                    alert("error"+e);
            }

             
        });
$('#Btn_buscarNOm').click(function () {

            table_nombres.clear().draw();
            nombresvar = $("#Txt_BusqueNom").val();
            // alert(idconsult);

            DatosNombres(nombresvar);
            for (var i = 0; i <= DataSetNombres.length; i++) {
                $("#dv_consultaNom").css('visibility', 'visible');
                table_nombres.row.add([
                    "<a id='Btn_persona' href='#' class='btn btn-primary btn-circle'><i class='fas fa-user-check'></i>",
                    DataSetNombres[i][0],
                    DataSetNombres[i][2]

                ]).draw();
            }
        });

       
       
      $('#Tbl_RegPropie tbody').on( 'click', 'a', function () {
            try {
                       if ($(this).attr('id') == "Btn_VerDetalle") {
                           var per_propie=sessionStorage.getItem('PER_PROPIE');
                           if (per_propie==0){
                                $("#div_clave").css('display','none');
                           }
                           else{
                                 $("#div_clave").css('display','block');
                           }
                            $('#Form_DetalleREg').modal('show');
                            var rowDataVerDetalle = table.row($(this).parents('tr')).data();
                            $("#txt_identifi").attr("value", rowDataVerDetalle[0]);
                            $("#txt_numtra").attr("value", rowDataVerDetalle[7]);
                            $("#Txt_tipDoc").attr("value", rowDataVerDetalle[8]);
                            $("#Txt_CaliCompa").attr("value", rowDataVerDetalle[9]);
                            $("#Txt_numFolio").attr("value", rowDataVerDetalle[11]);
                            $("#Txt_Incrip").attr("value", rowDataVerDetalle[12]);
                            $("#txt_numRep").attr("value", rowDataVerDetalle[13]);
                            $("#txt_FechInc").attr("value", rowDataVerDetalle[14]);
                            $("#txt_TipBien").attr("value", rowDataVerDetalle[15]);
                            $("#txt_Sector").attr("value", rowDataVerDetalle[16]);
                            $("#txt_ActoContra").attr("value", rowDataVerDetalle[17]);
                            $("#txt_FecEscri").attr("value", rowDataVerDetalle[19]);
                            $("#txt_CantoNot").attr("value", rowDataVerDetalle[20]);
                            $("#txt_Parro").attr("value", rowDataVerDetalle[21]);
                            $("#txt_notaria").attr("value", rowDataVerDetalle[22]);
                            $("#txt_nombre").attr("value", rowDataVerDetalle[1]);
                            $("#Txt_superCons").attr("value", rowDataVerDetalle[23]);
                            $("#Txt_suporig").attr("value", rowDataVerDetalle[24]);
                            $("#Txt_cuantia").attr("value", rowDataVerDetalle[18]);
                            $("#Txt_claveref").attr("value", rowDataVerDetalle[10]);
                            table_compa.clear().draw();
                            try {
                                let compa =rowDataVerDetalle[27].toString(),
                                comparecientes=compa.split('|');
//                                 alert(rowcompa[0].toString());
                                for(var c=0; c<comparecientes.length; c++){
                                     let rowcompa=comparecientes[c].toString(),
                                     rowcomparecientes=rowcompa.split('/');
                                     table_compa.row.add([
                                                               rowcomparecientes[0],
                                                               rowcomparecientes[1],
                                                               rowcomparecientes[2]
                                                         ]).draw();
                                }
                            } catch (e) {
                                console.log("error"+e);
                            }
                            table_linderos.clear().draw();
                            try {    
                                let linderos =rowDataVerDetalle[26].toString(),
                                veclindero=linderos.split('|');
                                        for(var i=0; i<veclindero.length; i++){
                                            let rowlinde=veclindero[i].toString(),
                                                rowtotlindero=rowlinde.split(':');
                                                    table_linderos.row.add([
                                                               rowtotlindero[0],
                                                               rowtotlindero[1]
                                                         ]).draw();



                                        } 
                             } catch (e) {
                                console.log("error"+e);
                            }
                           
                             DatosCotacto(rowDataVerDetalle[0]);
//                             alert(DataSetPropi.length)
                            if(DataSetPropi.length>0)
                            {
                                DatosPredio(DataSetPropi[0][0]);
                                Cargar_Predios();
                            }
                            
                             

                            
                       }
                } catch (e) {
                    alert("error"+e);
                }
           });
           $('#Tbl_ConsultaNombres tbody').on('click', 'a', function () {
                    try {
               
                                 table.clear().draw();
                                    if ($(this).attr('id') == "Btn_persona") {
//                                     alert("pasoooooooooo");
                                     var rowDataNombres = table_nombres.row($(this).parents('tr')).data();
//                                     alert(rowDataNombres)
                                      $('#Form_Nombres').modal('hide');
                                      table_nombres.clear();
                                 $("#Txt_Ced1").attr("placeholder", rowDataNombres[1]);
                                 var cedula = rowDataNombres[2];
                 //                alert(sel+" "+cedula);
                                 if (cedula==''){
//                                     var nombres=[];
                                     let nom =rowDataNombres[1].toString(),
                                       nombres=nom.split(' ');
//                                     alert(nombres);
                                     if(nombres.length==3)
                                     {
                                         buscar(2,nombres[1]+' '+nombres[2]+'%'+' '+nombres[0]+'%');
                                     }
                                     else
                                     {
                                         if(nombres.length==4){
                                             buscar(2,nombres[2]+' '+nombres[3]+'%'+' '+nombres[0]+' '+nombres[1]+'%');
                                         }
                                         else{
                                              buscar(2,nombres[1]+'%'+' '+nombres[0]+'%');
                                         }

                                     }

                                 }
                                 else{
                                      buscar(sel,cedula);
                                 }


                                 var desc_bien;
                                 var clave_catastral
                               for(var i=0; i<=rowDataSetEscr.length-1; i++){
                                    try {
                                         desc_bien=rowDataSetEscr[i].DESCRIP_BIEN.toString();
                                     } catch (e) {
                                              desc_bien="Sin descripción"
                                     }
                                     try {
                                         clave_catastral=rowDataSetEscr[i].CLAVE_CATASTRAL.toString();
                                     } catch (e) {
                                              clave_catastral="Sin clave catastral"
                                     }
//                                   alert(rowDataSetEscr);
                                     table.row.add([
                                                     rowDataSetEscr[i].NUM_IDENTIFICACION,
                                                     rowDataSetEscr[i].NOMBRES,
                                                     desc_bien,
                                                     rowDataSetEscr[i].ESTADO_INSCRIPCION,
                                                     rowDataSetEscr[i].FECHA_INSCRIPCION,
                                                     rowDataSetEscr[i].ACTO_CONTRATO,
                                                     "<a id='Btn_VerDetalle' href='#' class='btn btn-success btn-circle'><i class='fa fa-eye'></i>",
                                                     rowDataSetEscr[i].NUMERO_TRAMITE,
                                                     rowDataSetEscr[i].TIP_DOCUMENTO,
                                                     rowDataSetEscr[i].CALI_COMPARECE,
                                                     clave_catastral,
                                                     rowDataSetEscr[i].NUM_FOLIO,
                                                     rowDataSetEscr[i].NUM_INSCRPCION,
                                                     rowDataSetEscr[i].NUM_REPERTORIO,
                                                     rowDataSetEscr[i].FECHA_INSCRIPCION,
                                                     rowDataSetEscr[i].TIP_BIEN,
                                                     rowDataSetEscr[i].SECTOR,
                                                     rowDataSetEscr[i].ACTO_CONTRATO,
                                                     rowDataSetEscr[i].CUANTIA,
                                                     rowDataSetEscr[i].FECHA_ESCRITURA,
                                                     rowDataSetEscr[i].CANTON_NOTARIA,
                                                     rowDataSetEscr[i].PARROQUIA,
                                                     rowDataSetEscr[i].NOTARIA,
                                                     rowDataSetEscr[i].SUP_CONSTRUCCION,
                                                     rowDataSetEscr[i].SUP_ORIGINAL,
                                                     rowDataSetEscr[i].TIPO_SUPERFICIE,
                                                     rowDataSetEscr[i].LINDEROS,
                                                     rowDataSetEscr[i].COMPARECIENTES,
                                                   ]).draw();
                                               }
                                 }
                    } catch (e) {
                            alert("error"+e);
                    }
           });
    } catch (e) {
        alert("error"+e);
    }
});
function buscar(id, identificacion) {
    var ex = 0;
    try {
       
    
            var parametros = {
                "op": id,
                "param": identificacion
            };
            $.ajax({
                type: "POST",
                dataType: "json",
                async: false,
                cache: false,
                url: "https://api.ac.rpcayambe.gob.ec/api/WsAvalCat.php",
                data: parametros,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('T-Api-Id', '3231a5ad-2d24-4dc2-b0f3-a791a8ff5eee');
                },
                success: function(data) {
                    if (data.status == 'OK') {
                        rowDataSetEscr = data.results;
                    } else {
                        alert("Se ha presentado un problema al Consumir los datos por favor comunicarse con el administrador del Sistema ");
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
       var area=$("#area").val();
        if(isNaN(UsrExt)){
                window.location.href = "http://172.23.25.6/Virtual/error.php";
        }
        else{
               if (area!=0) {
                        TraerAreas(area);
                     $('.bg-gradient-primary').removeClass("bg-gradient-primary").addClass(Data_SetAreas[0][2]);
                     $('.fa-mobile-alt').removeClass("fa-mobile-alt").addClass(Data_SetAreas[0][4]);
                     document.getElementById("div_tit").innerHTML = Data_SetAreas[0][3];
                }
        }
   }
   function TraerAreas(id){
   
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
					url: "http://172.23.25.6/Virtual/logica/TraeAreas.php",
                                        data: parametros,
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                              Data_SetAreas=response.row;
                                                                 

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
function DatosPredio(id){
   
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
					url: "http://172.23.25.6/Virtual/logica/ConsPredio.php",
					data: parametros,
					success: function(response){                                           
						 if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               Data_SetPredio=response.row;
                                                                 

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
function DatosCotacto(id){ 
//     $('#Esperar').modal('show');
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
                                                               DataSetPropi=response.row;
                                                                 

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
function Cargar_Predios() {
 $("#Cmb_Predio").empty();
 document.getElementById("Cmb_Predio").innerHTML += "<option value='-1'>Seleccione una Opción</option>";
  for(var i in Data_SetPredio)
            { 
               
                    document.getElementById("Cmb_Predio").innerHTML += "<option value='"+Data_SetPredio[i][0]+"'>"+Data_SetPredio[i][0]+"</option>"; 

            }
// sessionStorage.setItem('Predios',JSON.stringify(Data_SetPredio));
}
function FormatoFecha(fecha) {
    
    var fecha_forma;
    switch (fecha[1].toString()){
        case "JAN":
                var mes = "01";
                break;
        case "FEB":
                var mes = "02";
                break;
        case "MAR":
                var mes = "03";
                break;
        case "APR":
                var mes = "04";
                break;
        case "MAY":
                var mes = "05";
                break;
         case "JUN":
                var mes = "06";
                break;
        case "JUL":
                var mes = "07";
                break;
        case "AUG":
                var mes = "08";
                break;
        case "SEP":
                var mes = "09";
                break;
        case "OCT":
                var mes = "10";
                break;
        case "NOV":
                var mes = "11";
                break;
        case "DEC":
                var mes = "12";
                break;

    }
    var anio=20;
    var dateObj = new Date();
    var year = dateObj.getUTCFullYear().toString();
    const year_cor = year.substring(2,year.length);
    if (parseInt(fecha[2].toString())>parseInt(year_cor)){
        anio=anio-1;
    }
    fecha_forma=fecha[0].toString()+'/'+mes+'/'+anio.toString()+fecha[2].toString();
    return fecha_forma;
}
function GuardarInfLega(acto,cali_compa,lugar_inscr,notaria,fecha_inscrip,superficie,lugar_regis,libro,registro_pro,fecha_regi,sector,folio,foja,clave_catastral,apellidos,nombres,cuantia,name,ip_actualiza,ced_actualiza){    

    var ex,Data_error;    
    try {
           
                          
                                        var parametros={
                                                "acto":acto,
                                                "cali_compa":cali_compa,
                                                "lugar_inscr":lugar_inscr,
                                                "notaria":notaria,                                                
                                                "fecha_inscrip":fecha_inscrip,
                                                "superficie":superficie,
                                                "lugar_regis":lugar_regis,
                                                "libro":libro,
                                                "registro_pro":registro_pro,
                                                "fecha_regi":fecha_regi,
                                                "sector":sector,
                                                "folio":folio,
                                                "foja":foja,
                                                "clave_catastral":clave_catastral,
                                                "apellidos":apellidos,
                                                "nombres":nombres,
                                                "cuantia":cuantia,
                                                "name":name,
                                                "ip_actualiza":ip_actualiza,
                                                "ced_actualiza":ced_actualiza,
                                            }    
        //                                   
                                        $.ajax({
                                                type: "POST",
                                                dataType: "json",
                                                async: false,
                                                cache: false,
                                                url: "http://172.23.25.6/Virtual/logica/GuardaRegPro.php",
                                                data: parametros,
//                                                 beforeSend: function ()
//                                                {
//                                                    $("#Esperar").modal('show');
//
//                                                },
                                                success: function(response){                                           
                                                        if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               Data_error=response.row;
                                                        } else {
                                                                ex=0;
                                                                alert(response.message);
                                                                 
                                                        }
//                                                        callback(response, ex);
                                                
                                                },
//                                                complete: function ()
//                                                                {
//                                                                    setTimeout(function ()
//                                                                    {
//                                                                        $('#Esperar').modal('hide');
////                                                                        document.getElementById("dataInfo").style.display = "block";
//                                                                    }, 10000);
//
//                                                                    onComplete();
//                                                                    return true;
//                                                                },
                                                error: function(xhr, textStatus, errorMessage) {
                                                                alert("¡Error (ajax)!"+ errorMessage + textStatus + xhr);
//                                                                alert("Fallo al Guardar Tramite");
//                                                                alert(Data_error);
//                                                                 return false;
//                                                                 $('#Esperar').modal('hide');
                                                }
                                        });
                                       if(Data_error.length==0){
                                                
                                                
                                                  return true;
                                             
                                               
                                        }
                                        else{
                                            alert("Fallo al Guardar Tramite");
                                            alert(Data_error);
                                             return false;
                                        }
//                                      

                 
    } catch (e) {
        alert(e);
    }

            
}
function GuardarLinderios(lin_nombre,lin_descripcion,sector,clave_catastral){    

    var ex,Data_error;    
    try {
           
                          
                                        var parametros={
                                                "lin_nombre":lin_nombre,
                                                "lin_descripcion":lin_descripcion,
                                                "sector":sector,
                                                "clave_catastral":clave_catastral
                                            }    
        //                                   
                                        $.ajax({
                                                type: "POST",
                                                dataType: "json",
                                                async: false,
                                                cache: false,
                                                url: "http://172.23.25.6/Virtual/logica/GuardaLinderos.php",
                                                data: parametros,
//                                                 beforeSend: function ()
//                                                {
//                                                    $("#Esperar").modal('show');
//
//                                                },
                                                success: function(response){                                           
                                                        if(JSON.parse(response.ind)){
                                                               ex=response.ind; 
                                                               Data_error=response.row;
                                                        } else {
                                                                ex=0;
                                                                alert(response.message);
                                                                 
                                                        }
//                                                        callback(response, ex);
                                                },
//                                                complete: function ()
//                                                                {
//                                                                    setTimeout(function ()
//                                                                    {
//                                                                        $('#Esperar').modal('hide');
////                                                                        document.getElementById("dataInfo").style.display = "block";
//                                                                    }, 10000);
//
//                                                                    onComplete();
//                                                                    return true;
//                                                                },
                                                error: function(xhr, textStatus, errorMessage) {
                                                                alert("¡Error (ajax)!"+ errorMessage + textStatus + xhr);
//                                                                alert("Fallo al Guardar Tramite");
//                                                                alert(Data_error);
//                                                                 return false;
//                                                                 $('#Esperar').modal('hide');
                                                }
                                        });
                                        if(Data_error.length==0){
                                                
                                                
                                                  return true;
                                             
                                               
                                        }
                                        else{
                                            alert("Fallo al Guardar Tramite");
                                            alert(Data_error);
                                             return false;
                                        }
                                        

                 
    } catch (e) {
        alert(e);
    }

            
}
function DatosNombres(id) {

    var ex = 0;
    try {
        var idcons = id;
        var parametros = {
            "id": idcons
        }
        $.ajax({
            type: "POST",
            dataType: "json",
            async: false,
            cache: false,
            url: "http://172.23.25.6/Virtual/logica/BuscaPersona.php",
            data: parametros,
            success: function (response) {
                if (JSON.parse(response.ind)) {
                    ex = response.ind;
                    DataSetNombres = response.row;


                } else {
                    ex = response.ind;
                    error = response.message;
                    query1 = response.query1;
                }
            },
            error: function (xhr, textStatus, errorMessage) {
                alert("¡Error (ajax)!" + errorMessage + textStatus + xhr);
            }
        });
//                                try {
//                                         cod_pro=row[0][0]; 
//                                    } catch (e) {
//                                       cod_pro=0;
//                                    }


    } catch (e) {
        alert("error" + e);
    }

}
function TraerIP(){
   
   var ex=0; 
     try {

                              $.ajax({
					
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/ObtenerIP.php",
					success: function(response){                                           
                                                               dir_ip=response.ip_cliente     
					},
                                        error: function(xhr, textStatus, errorMessage) {
                                                                alert("¡Error (ajax)!"+ errorMessage + textStatus + xhr);
                                        }
				});

    } catch (e) {
        alert("error"+e);
    }
     
                   
}
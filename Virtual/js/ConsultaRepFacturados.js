// Call the dataTables jQuery plugin
var rowData = [];
var error = "";
var sel = 1;
var row;
var rown;
var error = "";
var query1 = "";
var tip_pred;
var idconsult;
var nombresvar;
var rowData = [];
var DataSetRecorrido = [];
var DataSetNombres;
var tbl_recorrido;
var tbl_nombres;
var sumatotal;
var sumasubtotal = 0.0;
$(document).ready(function () {

    try {
        
        var res
        var pathname = window.location.pathname;
   
     try {
         
         
           var user =  sessionStorage.getItem('Name');
     
      } catch (e) {
        alert("error" + e);
    }
     
 buscarPermiso(user, pathname);
            for (var i = 0; i < row.length; i++) {
                  res = row[i][0]
            }
            
            if (res=="NO"){
            alert("Su usuario no cuenta con los permisos para acceder a esta pantalla. Consulte con su Administrador del Sistema.");
            window.location.href = "http://172.23.25.6/Virtual/index.php";
            }
            





        
        
        const formatter = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
            minimumFractionDigits: 0
        })
        var UsrExt = parseInt(sessionStorage.getItem('Usr_Ext'));
        if (isNaN(UsrExt)) {
            $("#opt_configuracion").css('visibility', 'hidden');
            $("#opt_rectra").css('visibility', 'hidden');
            $("#opt_soltra").css('visibility', 'hidden');
        }

        $("#Frm_Consulta").validate();
        var table = $('#Tbl_Consulta').DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando: _TOTAL_ Registros",
                "infoEmpty": "Mostrando 0 to 0 of 0 Registros",
                "infoFiltered": "(Filtrado de _MAX_ Total Registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando..",
                "processing": "Procesando..",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });


        $('#Btn_GuaProExt').click(function () {
            sumatotal = 0;
            sumasubtotal = 0;
            table.clear().draw();
            f_ini = $("#fecha_inicial").val();
             f_fin = $("#fecha_final").val();
             
              $("#filaexportar").css('visibility', 'visible');
            
            buscar(f_ini, f_fin);
            for (var i = 0; i <= row.length; i++) {
                $("#dv_consulta").css('visibility', 'visible');
                table.row.add([
                    row[i][0],
                    row[i][1],
                    row[i][2],
                    row[i][3],
                    row[i][4],
                    row[i][5],
                    row[i][6],
                    row[i][7],
                    row[i][8],
                    row[i][9],
                    row[i][10],
                    row[i][11],
                    row[i][12],
                     row[i][13]
                ]).draw();
            }
        });



    } catch (e) {
        alert("error" + e+"xDxD");
    }
});


$("#Btn_exportart").click(function(){
    
      f_ini = $("#fecha_inicial").val();
      f_fin = $("#fecha_final").val();
    
    
               if(row.length>0){
                   window.location.href = "http://172.23.25.6/Virtual/logica/ExelRepFacturados.php?f_inicial="+f_ini+"&f_final="+f_fin;
               }
               else{
                    bootbox.dialog({
                                                                title: '<a href="#" class="btn btn-warning btn-circle"> <i class="fas fa-radiation-alt"></i></a>',
                                                                message: "No hay Datos que Exportar ",
                                                                onEscape: function() {
                                                               
                                                                }
                                                            });
               }
            
        
    });




function buscar(f_incio, f_final) {
    var ex = 0;
    try {

          idcons = f_incio;
         Tipo_cons = f_final;
         
        var ind_form = $("#Frm_Consulta").valid();
        if (ind_form) {

            var parametros = {
                "f_inicial": idcons,
                "f_final": Tipo_cons
            }
            $.ajax({
                type: "POST",
                dataType: "json",
                async: false,
                cache: false,
                url: "http://172.23.25.6/Virtual/logica/ConsultaRepFacturados.php",
                data: parametros,
                success: function (response) {
                    if (JSON.parse(response.ind)) {
                        ex = response.ind;
                        row = response.row;

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



//                     alert(row);
        }
    } catch (e) {
        alert("error" + e);
    }


}


function buscarPermiso(usuario, pathname) {
    var ex = 0;
    try {

        var ind_form = $("#Frm_Consulta").valid();
        if (ind_form) {

            var parametros = {
                "usuario": usuario,
                "pathname": pathname
            }
            $.ajax({
                type: "POST",
                dataType: "json",
                async: false,
                cache: false,
                url: "http://172.23.25.6/Virtual/logica/ConsultaUsuarioPantalla.php",
                data: parametros,
                success: function (response) {
                    if (JSON.parse(response.ind)) {
                        ex = response.ind;
                        row = response.row;

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



//                     alert(row);
        }
    } catch (e) {
        alert("error" + e);
    }


}
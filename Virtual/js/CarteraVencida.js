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


            var user = sessionStorage.getItem('Name');

        } catch (e) {
            alert("error" + e);
        }


    } catch (e) {
        alert("error" + e + "xDxD");
    }
});
// buscarPermiso(user, pathname);
//            for (var i = 0; i < row.length; i++) {
//                  res = row[i][0]
//            }
//            
//            if (res=="NO"){
//            alert("Su usuario no cuenta con los permisos para acceder a esta pantalla. Consulte con su Administrador del Sistema.");
//            window.location.href = "http://172.23.25.6/Virtual/index.php";
//            }








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

        $("#Frm_Consulta").validate();
        var tableAC = $('#Tbl_ConsultaAcum').DataTable({
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
        
        
//        Por fechas

 $("#Frm_Consulta").validate();
        var table2 = $('#Tbl_Consulta2').DataTable({
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

        $("#Frm_Consulta").validate();
        var tableAC2 = $('#Tbl_ConsultaAcum2').DataTable({
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
            tableAC.clear().draw();

            f_fin = $("#fecha_final").val();
//             tipo=document.getElementById("#ComboTipo");

            var combo = document.getElementById("ComboTipo");
            var selected = combo.options[combo.selectedIndex].text;
            var cod_combo = $("#ComboTipo").val();

            var comboReporte = document.getElementById("ComboGeneral");
            var selected2 = comboReporte.options[comboReporte.selectedIndex].text;
            var cod_comboReporte = $("#ComboGeneral").val();
            
            
             var comboRango = document.getElementById("ComboRango");
            var selected3 = comboRango.options[comboRango.selectedIndex].text;
            var cod_comboRango = $("#ComboRango").val();


            var dato = parseInt(cod_combo);
            if (cod_combo == "Seleccione un reporte en el menu") {
                alert("Por favor seleccione un reporte en el Menú");
            }

            if (cod_comboReporte == "G") {


                $("#dv_consulta").css('display', 'none');

                if (dato == 1 || dato == 3 || dato == 5 || dato == 6 || dato == 7) {

                    buscar(cod_comboRango,cod_comboReporte, cod_combo, f_fin);
                    for (var i = 0; i < row.length; i++) {

                        $("#dv_consultaC").css('display', 'block');
                        tableAC.row.add([
                            row[i][0],
                            row[i][1],
                            row[i][2],
                            row[i][3],
                            row[i][4],
                            row[i][5]


                        ]).draw();
                    }

                }
            } else if (cod_comboReporte == "D") {

                $("#dv_consultaC").css('display', 'none');


                if (dato == 1 || dato == 3 || dato == 5 || dato == 6 || dato == 7) {

                    buscar(cod_comboRango,cod_comboReporte, cod_combo, f_fin);
                    for (var i = 0; i < row.length; i++) {
                        $("#dv_consulta").css('display', 'block');

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
                            row[i][11]

                        ]).draw();
                    }

                }
            }

            $("#filaexportar").css('visibility', 'visible');
              $(".pais").hide();

        });





  $('#Btn_BuscarFechas').click(function () {
      
       $("#filaexportar2").css('visibility', 'visible');
            sumatotal = 0;
            sumasubtotal = 0;
      
            table2.clear().draw();
            tableAC2.clear().draw();
            
            f_ini = $("#fecha_i").val();
            f_fin = $("#fecha_f").val();
//             tipo=document.getElementById("#ComboTipo");

            var combo = document.getElementById("ComboTipo2");
            var selected = combo.options[combo.selectedIndex].text;
            var cod_combo = $("#ComboTipo2").val();

            var comboReporte = document.getElementById("ComboGeneral2");
            var selected2 = comboReporte.options[comboReporte.selectedIndex].text;
            var cod_comboReporte = $("#ComboGeneral2").val();
            
            

            var dato = parseInt(cod_combo);
            if (cod_combo == "Seleccione un reporte en el menu") {
                alert("Por favor seleccione un reporte en el Menú");
            }

            if (cod_comboReporte == "G") {

                $("#dv_consulta2").css('display', 'none');

                if (dato == 1 || dato == 3 || dato == 5 || dato == 6 || dato == 7) {

                    buscar2(cod_comboReporte, cod_combo,f_ini, f_fin);
                    for (var i = 0; i < row.length; i++) {

                        $("#dv_consultaC2").css('display', 'block');
                        tableAC2.row.add([
                            row[i][0],
                            row[i][1],
                            row[i][2],
                            row[i][3],
                            row[i][4],
                            row[i][5]


                        ]).draw();
                    }

                }
            } else if (cod_comboReporte == "D") {

                $("#dv_consultaC2").css('display', 'none');


                if (dato == 1 || dato == 3 || dato == 5 || dato == 6 || dato == 7) {

                   buscar2(cod_comboReporte, cod_combo,f_ini, f_fin);
                    for (var i = 0; i < row.length; i++) {
                        $("#dv_consulta2").css('display', 'block');

                        table2.row.add([
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
                            row[i][11]

                        ]).draw();
                    }

                }
            }

            $("#filaexportar2").css('visibility', 'visible');
              $(".pais").hide();

        });



$("#Btn_exportart").click(function () {


    f_fin = $("#fecha_final").val();

    var combo = document.getElementById("ComboTipo");
    var selected = combo.options[combo.selectedIndex].text;
    var cod_combo = $("#ComboTipo").val();


    var comboReporte = document.getElementById("ComboGeneral");
    var selected2 = comboReporte.options[comboReporte.selectedIndex].text;
    var cod_comboReporte = $("#ComboGeneral").val();


    row = 1;


    try {
        window.location.href = "http://172.23.25.6/Virtual/logica/ExelCarteraVencida.php?reporte=" + cod_comboReporte + "&tipo=" + cod_combo + "&f_final=" + f_fin;
    } catch (e) {

        alert("No hay datos que exportar" + e + "xDxD");
    }

//    if (row.length >= 0) {
//        window.location.href = "http://172.23.25.6/Virtual/logica/ExelCarteraVencida.php?tipo=" + cod_combo + "&f_inicial=" + f_ini + "&f_final=" + f_fin;
//    } else {
//        bootbox.dialog({
//            title: '<a href="#" class="btn btn-warning btn-circle"> <i class="fas fa-radiation-alt"></i></a>',
//            message: "No hay Datos que Exportar ",
//            onEscape: function () {
//
//            }
//        });
//    }


});

$("#Btn_exportart2").click(function () {



  f_ini = $("#fecha_i").val();
            f_fin = $("#fecha_f").val();
            


    var combo = document.getElementById("ComboTipo2");
    var selected = combo.options[combo.selectedIndex].text;
    var cod_combo = $("#ComboTipo2").val();


    var comboReporte = document.getElementById("ComboGeneral2");
    var selected2 = comboReporte.options[comboReporte.selectedIndex].text;
    var cod_comboReporte = $("#ComboGeneral2").val();


    row = 1;


    try {
        window.location.href = "http://172.23.25.6/Virtual/logica/ExelCarteraVencida_2.php?reporte=" + cod_comboReporte + "&tipo=" + cod_combo+ "&f_inicial=" + f_ini + "&f_final=" + f_fin;
    } catch (e) {

        alert("No hay datos que exportar" + e + "xDxD");
    }

//    if (row.length >= 0) {
//        window.location.href = "http://172.23.25.6/Virtual/logica/ExelCarteraVencida.php?tipo=" + cod_combo + "&f_inicial=" + f_ini + "&f_final=" + f_fin;
//    } else {
//        bootbox.dialog({
//            title: '<a href="#" class="btn btn-warning btn-circle"> <i class="fas fa-radiation-alt"></i></a>',
//            message: "No hay Datos que Exportar ",
//            onEscape: function () {
//
//            }
//        });
//    }


});



$("#btn_Fcorte").click(function () {
  $("#fcorte").css('display', 'block');
    $("#porfechas").css('display', 'none');
    

});
$("#btn_Finifin").click(function () {
  $("#porfechas").css('display', 'block');
    $("#fcorte").css('display', 'none');

});


function buscar(anio,reporte, tipo, f_final) {
    var ex = 0;
    try {

        row = 0;
        Tipo_cons = f_final;

        var ind_form = $("#Frm_Consulta").valid();
        if (ind_form) {

            var parametros = {
                "anio":anio,
                "reporte": reporte,
                "tipo": tipo,
                "f_final": Tipo_cons
            }
            $.ajax({
                type: "POST",
                dataType: "json",
                async: false,
                cache: false,
                url: "http://172.23.25.6/Virtual/logica/CarteraVencida.php",
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

function buscar2(reporte, tipo,f_inicial, f_final) {
    var ex = 0;
    try {

        row = 0;
        Tipo_cons = f_final;

        var ind_form = $("#Frm_Consulta").valid();
        if (ind_form) {

            var parametros = {
                "reporte": reporte,
                "tipo": tipo,
                "f_inicial": f_inicial,
                "f_final": Tipo_cons
            }
            $.ajax({
                type: "POST",
                dataType: "json",
                async: false,
                cache: false,
                url: "http://172.23.25.6/Virtual/logica/CarteraVencida_2.php",
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
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var error ="";
var query1="";
$(document).ready(function() {
    var dp1 = $('#fech_nac').datepicker().data('datepicker');
    dp1.selectDate(new Date());
    $("#Btn_enviar").click(function(){
               
              bootbox.dialog({
                                                                message: '<a href="#" class="btn btn-success btn-circle"> <i class="fas fa-check"></i></a>',
                                                                title: "Se Esta Ejecutando la Emisión del Impuesto Esta Operación Podrá tardar Varias Horas",
                                                                onEscape: function() {
                                                               
                                                                }
                                                            });
        
    });
});


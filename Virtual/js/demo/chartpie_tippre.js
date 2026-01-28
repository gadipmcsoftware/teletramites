// Set new default font family and font color to mimic Bootstrap's default styling
var row;
var valores =  new Array();
var tipos   =  new Array();
var currentTime = new Date;
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';
var year = currentTime.getFullYear();
Distribucion(1,parseInt(year)+1,'');
// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: tipos,
    datasets: [{
      data: valores,
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
 $(document).ready(function() {
    
    try {
          
//         $('#dataTable').DataTable();
         $("#Frm_Dash").validate();
         $("#Mbx_urba_pie").click(function(){
            $("#divPie2").css("display", "block");
            $("#divPie").css("display", "none");
            $("#divPie3").css("display", "none");
            $("#lbl_distot").text("Distribución Urbana");
//            alert("paso")
             Distribucion_urbana();
          });
          $("#Mbx_rural_pie").click(function(){
                $("#divPie3").css("display", "block");
                $("#divPie").css("display", "none");
                $("#divPie2").css("display", "none");
                $("#lbl_distot").text("Distribución Anual Rural");
                      Distribucion_rural();
          });
          $("#Mbx_total_pie").click(function(){
                $("#divPie").css("display", "block");
                $("#divPie1").css("display", "none");
                $("#divPie2").css("display", "none");
                $("#divPie3").css("display", "none");
                $("#lbl_distot").text("Distribución Anual Total");
                    Distribucion_total()
          });
         
    } catch (e) {
        alert(e);
    }
});
function Distribucion(id,anio,tip_predio){
  valores=[];
   var ex=0; 
     try {
                    
                    var idcons=id;
//                    var ind_form = $("#Frm_Dash").valid();
//                        if(ind_form){
                              var parametros={
                                "id":idcons,
                                "anio":anio,
                                "tip_predio":tip_predio
                                }
                              $.ajax({
					type: "POST",
					dataType: "json",
					async: false,
					cache: false,
					url: "http://172.23.25.6/Virtual/logica/ConsDistri.php",
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
                                
                              
//                     alert(row);
//                      }
               for(var i=0; i<=row.length-1; i++){
                   
                   valores.push (row[i][1].toString());
                   tipos.push (row[i][0].toString());
               }
    } catch (e) {
        alert("error"+e);
    }
     
                   
}
function Distribucion_urbana(){
    valores=[];
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';
    Distribucion(2,parseInt(year)+1,'U');
// Pie Chart Example
    var ctx = document.getElementById("myPieChart2");
    var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
    labels: tipos,
    datasets: [{
      data: valores,
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
}
function Distribucion_rural(){
    valores=[];
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';
    Distribucion(2,parseInt(year)+1,'R');;
// Pie Chart Example
    var ctx = document.getElementById("myPieChart3");
    var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
    labels: tipos,
    datasets: [{
      data: valores,
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
}
function Distribucion_total(){
    valores=[];
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';
    Distribucion(1);
// Pie Chart Example
    var ctx = document.getElementById("myPieChart3");
    var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
    labels: tipos,
    datasets: [{
      data: valores,
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
}
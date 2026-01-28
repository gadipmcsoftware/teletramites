<!DOCTYPE html>
<?php 	
	
	//ESTABLECE CONEXION
	require_once('logica/Conexion.php');
	$link = conectarse();
        require_once('logica/funciones.php');

?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simulación - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<!--=============================INICIO DE HEAD===============================================-->
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
<!--===============================================================================================-->
     <!--Mapas--> 
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <!--<link rel="stylesheet" href="css/MapaEstilo.css"/>-->
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

<!--===============================================================================================-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet-src.js'></script>
  <link href='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css' rel='stylesheet' />
  <!-- Latest minified bootstrap css -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
 <script src="//code.tidio.co/hmc50vup1wwdiaeigjsgkkqo6jfxkm3s.js" async></script>
  <link rel="stylesheet" href="css/map.css">
 <link href="css/component-custom-switch.css" rel="stylesheet">
<!--===============================================================================================-->
</head>

<body id="page-top">


<?php include 'menu.php';?>
        <!-- Begin Page Content -->
<form method="POST" id="Frm_Dash">
     
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard Totales</h1>
<!--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
          </div>
          <div class="form-group row">
                        <div class="col-xl-6 col-lg-8">        
                                    <div class="wrap-input100 input100-select bg1" data-validate="Seleccione una Opción">
					<span class="label-input100">Seleccione el año Simular</span>
					<div>
						<select class="js-select2" name="cmb_AnioSimula" id="cmb_AnioSimula">
							<option>Simulacion Actual</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
                       </div>
                         <div class="col-xl-8 col-lg-8"> 
                                    <div class="input-group-append">
                                        <button id="Btn_versimula" class="btn btn-primary" type="button">
                                                Ver Simulación     
                                        </button>
                                    </div>
                         </div>  
            </div>
          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4" >
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Impuesto Urbano</div>
                      <div id="recuada_u" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-hotel fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Impuesto Rural</div>
                      <div id="arecaudar_r" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fab fa-sticker-mule fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tercera Edad</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div id="ancianato" class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-blind fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Discapacidad</div>
                      <div id="discapacidad" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wheelchair fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Variación Anual Total</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Visualizar Varianza :</div>
                      <a id="Mbx_urba" class="dropdown-item" href="#">Urbana</a>
                      <a id="Mbx_rural" class="dropdown-item" href="#">Rural</a>
                      <div class="dropdown-divider"></div>
                      <a id="Mbx_total" class="dropdown-item" href="#">Valores Totales</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div id="divChar" class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                   <div  id="divChar2" style = "display:none" class="chart-area" >
                        <canvas id="myAreaChart2"></canvas>
                  </div>
                  <div  id="divChar3" style = "display:none" class="chart-area" >
                        <canvas id="myAreaChart3"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 id="lbl_distot" class="m-0 font-weight-bold text-primary">Distrubución Totales</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Visualizar Distrubución :</div>
                      <a id="Mbx_urba_pie" class="dropdown-item" href="#">Urbana</a>
                      <a id="Mbx_rural_pie" class="dropdown-item" href="#">Rural</a>
                      <div class="dropdown-divider"></div>
                      <a id="Mbx_total_pie" class="dropdown-item" href="#">Valores Totales</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div id="divPie" class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                   <div id="divPie2" style = "display:none" class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart2"></canvas>
                  </div>
                   <div id="divPie3" style = "display:none" class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart3"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Privado
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Publico
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Comunitario
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-gray-300"></i> Otros
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

           

            </div>

<!--       
          </div>

        </div>
        <!-- /.container-fluid -->

<!--      </div>-->
      <!-- End of Main Content -->

      <!-- Footer -->
     <?php include 'PienPagina.php';?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script type="text/javascript" src="js/global/jquery-1.4.4.min.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!--Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <!--Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
 
   <!--Page level plugins--> 
  <script type="text/javascript" src="js/global/jquery.validate.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
  <script type="text/javascript" src="js/global/jquery-ui-1.8.11.custom.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
  <script src = 'js/bootbox.js'></script>
<script type="text/javascript">
    jQuery.browser = {};
    (function () {
        jQuery.browser.msie = false;
        jQuery.browser.version = 0;
        if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
            jQuery.browser.msie = true;
            jQuery.browser.version = RegExp.$1;
        }
    })();
</script>
  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart_varianza.js"></script>
  <script src="js/demo/chartpie_tippre.js"></script>
  <script src = 'js/Simulacion.js'></script>
</form>
</body>

</html>

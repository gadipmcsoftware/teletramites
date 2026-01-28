<!DOCTYPE html>

<html lang="en">

<head>
<!--<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--  <meta charset="utf-8">
-->  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
  <!--<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui' />-->
  <meta name="description" content="">
  <meta name="author" content="">
<script>
  setTimeout(function(){ map.invalidateSize()}, 500);
</script>
  <title>Emergencia Covid19</title>
<!--  ===============================================================================================
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
===============================================================================================
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
===============================================================================================
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
===============================================================================================
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
===============================================================================================
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
===============================================================================================
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
===============================================================================================
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
===============================================================================================
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
===============================================================================================
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
===============================================================================================
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
===============================================================================================
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
===============================================================================================
   Custom fonts for this template
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   Custom styles for this template
  <link href="css/sb-admin-2.min.css" rel="stylesheet">-->
<!--  <script src='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet-src.js'></script>-->
  <!--<link href='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css' rel='stylesheet' />-->
  <!--===============================================================================================-->
    <!-- Mapas -->
<!--    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <link rel="stylesheet" href="css/map.css">
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>-->

<!--===============================================================================================-->
 
</head>

<body id="page-top">

        
     <form class="contact100-form validate-form" method="POST" id="Frm_Dash" >
        <div class="container-fluid">
        
        
          <div class="col-xl-12 col-lg-8">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Datos de Ubicación</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <h8 id="lbl_varan" class="m-0 font-weight-bold text-danger">Seleccione su ubicación dando doble clic en ella</h8>
                    <div id="divChar" class="chart-area">
                    
                      <div id='map'>
                          
                          <input id="lbl_cordenadaX" name="lbl_cordenadaX" type="hidden" >
                          <input id="lbl_cordenadaY" name="lbl_cordenadaY" type="hidden" >
                      </div>
                  </div>
              </div>
            </div>
          </div>
<!--            <div class="form-group row row justify-content-center h-100">
                <div class="col-xl-4 col-lg-8">
                       <div class="container-contact100-form-btn">
                            <a href="#" class="btn btn-primary btn-user btn-block" id="btn_guaUbica">
                   <i class="fas fa-paper-plane"></i> Guardar
                </a>
					<button class="contact100-form-btn btn btn-primary" id="Btn_enviar">
						<span>
							Guardar
							<i class="fas fa-paper-plane" aria-hidden="true"></i>
						</span>
					</button>
                        </div>
                        
                        
                </div>
            </div>-->
         
         </div>
       </form>  
  
  <!-- Bootstrap core JavaScript-->
<!--   <script type="text/javascript" src="js/global/jquery-1.4.4.min.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   Core plugin JavaScript
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   Custom scripts for all pages
  <script src="js/sb-admin-2.min.js"></script>-->
 
  <!-- Page level plugins -->
<!--  <script type="text/javascript" src="js/global/jquery.validate.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
  <script type="text/javascript" src="js/global/jquery-ui-1.8.11.custom.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

   Page level custom scripts 
   <script type="text/javascript" src="js/global/jquery.validate.js"></script>
  <script src = 'js/bootbox.js'></script>

   Page level plugins 
  <script src="vendor/chart.js/Chart.min.js"></script>

   Page level custom scripts 
 
  ===============================================================================================
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
===============================================================================================
	<script src="vendor/animsition/js/animsition.min.js"></script>
===============================================================================================
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
===============================================================================================
	
===============================================================================================
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
===============================================================================================
	<script src="vendor/countdowntime/countdowntime.js"></script>
===============================================================================================
	<script src="vendor/noui/nouislider.min.js"></script>
	
===============================================================================================-->
        <!--<script src="js/PatUbica.js"></script>-->
        <script src="js/map.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>-->



</body>

</html>

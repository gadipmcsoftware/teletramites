<!DOCTYPE html>
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

</head>

<body id="page-top">


<?php include 'menu.php';?>
        <!-- Begin Page Content -->
<form method="POST" id="Frm_CharU">
     
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard Urbano</h1>
<!--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Impuesto Urbano</div>
                         <?php
                                    $query1="select SUM(s6.TOTAL_PAGAR) ARECAUDAR,(select COUNT(*) from TBL_SIMULACIONV6 s1 where s1.TERCERA_EDAD='S') Totat_ancianato,(select COUNT(*) from TBL_SIMULACIONV6 s1 where s1.DISCAPACIDAD='S') Totat_Discapacidad from TBL_SIMULACIONV6 s6";
                                    $result1=sqlsrv_query( $link, $query1 );
                                    if( $result1 === false) {
                                        die( print_r( sqlsrv_errors(), true) );
                                    }
                                    while ( $row = sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC))
                                    {                                                                                                                            
//                                     
                                        
                                        $arecaudar=toMoney($row['ARECAUDAR']);
                                        $ancianato=$row['Totat_ancianato'];
                                        $discapacidad=$row['Totat_Discapacidad'];
                                                                                                                       
                                    }
                                    sqlsrv_free_stmt($result1);
                        ?>    
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $arecaudar;?></div>
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
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tercera Edad</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $ancianato;?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $discapacidad;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wheelchair fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 id="lbl_Impac" class="m-0 font-weight-bold text-primary">Impacto Impositivo Predios</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Visualizar Impacto :</div>
                      <a id="Mbx_predio" class="dropdown-item" href="#">Pedios</a>
                            <div class="dropdown-divider"></div>
                      <a id="Mbx_Valor" class="dropdown-item" href="#">Valores</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div id="divBarBand" class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                  </div>
                 <div id="divBarBand2" style = "display:none" class="chart-bar">
                    <canvas id="myBarChart2"></canvas>
                 </div>
                </div>
            </div>
          
<!--          <div class="col-lg-6 mb-4">-->
          <!-- Project Card Example -->
              <div class="card shadow mb-4">
               <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 id="lbl_Exone" class="m-0 font-weight-bold text-primary">Exoneración por Tercera Edad</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Visualizar Exoneración :</div>
                      <a id="Mbx_predioex" class="dropdown-item" >Pedios</a>
                            <div class="dropdown-divider"></div>
                      <a id="Mbx_Valorex" class="dropdown-item" >Valores Exonerados</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h4  class="small font-weight-bold">Exoneración 100% <span id="Spn_Exo100" class="float-right">2500</span></h4>
                  <div class="progress mb-4">
                    <div id="Pgb_exo100" class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4  class="small font-weight-bold">Exoneración 50% <span id="Spn_Exo50" class="float-right">40%</span></h4>
                  <div class="progress mb-4">
                    <div id="Pgb_exo50" class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Exoneración 0% <span id="Spn_Exo0" class="float-right">60%</span></h4>
                  <div class="progress mb-4">
                    <div id="Pgb_exo0" class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Otros Porcentajes <span id="Spn_Exot" class="float-right">80%</span></h4>
                  <div class="progress mb-4">
                    <div id="Pgb_exot" class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                 
                </div>
              </div>
          
<!--           </div>
             -->
          
              
              
              
           </div>
    
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

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
 
  <!-- Page level plugins -->
  <script type="text/javascript" src="js/global/jquery.validate.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
  <script type="text/javascript" src="js/global/jquery-ui-1.8.11.custom.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  
  <script src = 'js/bootbox.js'></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart_bar_band.js"></script>
</form>
</body>

</html>

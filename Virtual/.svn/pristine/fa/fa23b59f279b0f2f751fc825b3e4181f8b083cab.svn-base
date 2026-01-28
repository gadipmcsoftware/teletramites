
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

  <title>Tramites Virtuales</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


<?php include 'menu.php';?>
        <!-- Begin Page Content -->
<form method="POST" id="Frm_Dash">
     
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Validación de Profesionales</h1>
<!--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
          </div>

          <!-- Content Row -->
         
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Profesionales</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>

                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                                      <table class="table table-bordered" id="Tbl_Profesionales" width="100%" cellspacing="0">
                                          <thead>
                                              <tr>
                                                  <th>Identificación</th> 
                                                  <th>Nombres</th>
                                                  <th>Teléfono</th> 
                                                  <th>Email</th>
                                                  <th>Dirección</th>
                                                  <th>Número senescyt</th>
                                                  <th>Acción</th>
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                  <th>Identificación</th> 
                                                  <th>Nombres</th>
                                                  <th>Teléfono</th> 
                                                  <th>Email</th>
                                                  <th>Dirección</th>
                                                  <th>Número senescyt</th>
                                                  <th>Acción</th>
                                              </tr>
                                          </tfoot>
                                          <tbody>
                                      </tbody>
                                      </table>
                                  </div>

                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

           

            </div>


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
<!--  <script src="vendor/chart.js/Chart.min.js"></script>

   Page level custom scripts 
  <script src="js/demo/chart_varianza.js"></script>
  <script src="js/demo/chartpie_tippre.js"></script>-->
  <script src="js/Profesionales.js?%=Guid.NewGuid()%"></script>
</form>
</body>

</html>
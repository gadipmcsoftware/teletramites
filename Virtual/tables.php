<!DOCTYPE html>
<?php 	
	
	//ESTABLECE CONEXION
	require_once('logica/Conexion.php');
	$link = conectarse();
        require_once('logica/funciones.php');

?>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Tramites Virtuales</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<!-- <script src="js/Simulacion.js"></script>-->
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->

<?php include 'menu.php';?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Reportes de Trámites Realizados</h1>
          <p class="mb-4">Reporte de Trámites Realizados por Usuario.</p>
       <form method="POST" id="Frm_Simular">
          <!-- DataTales Example -->
          <div class="card shadow mb-5">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tramites Realizados</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="Tbl_repo" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Numero Tramite</th>
                      <th>Cedula</th>
                      <th>Nombre Profesional</th>
                      <th>Tramite</th>
                      <th>Nombre Propietario</th>
                      <th>Estado Tramite</th>
                      <th>Funcionario</th>
                      <th>Clave Catastral</th>
                      <th>Observación</th>
                      <th>Recorrido</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Numero Tramite</th>
                      <th>Cedula</th>
                      <th>Nombre Profesional</th>
                      <th>Tramite</th>
                      <th>Nombre Propietario</th>
                      <th>Estado Tramite</th>
                      <th>Funcionario</th>
                      <th>Clave Catastral</th>
                      <th>Observación</th>
                      <th>Recorrido</th>
                    </tr>
                  </tfoot>
                  <tbody>

                      
                    
                  </tbody>
                </table>
                  
              </div>
               <div class="card-body">                      
                   <a id="Btn_Generar" href="#" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="far fa-file-excel"></i>
                    </span>
                    <span class="text">Exportar a Excel</span>
                  </a>
               </div>
                
                  
                
            </div>
          </div>
       </form>           
        </div>
        <!-- /.container-fluid -->

<!--      </div>-->
      <!-- End of Main Content -->

      <!-- Footer -->
       <?php include 'PienPagina.php';?>
      <!-- End of Footer -->

<!--    </div>-->
    <!-- End of Content Wrapper -->

<!--  </div>-->
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
 <div class="modal fade" id="Form_Recorrido" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">

                            <h8 class="modal-title" id="myModalLabel"> <i class="fas fa-motorcycle"></i>  Recorrido del Tramite</h8>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>

                        </div>

                        <!-- Modal Body -->
                        <div class="modal-body">
                            <p class="statusMsg"></p>
                            <form role="form">
                                <div class="table-responsive">
                                                  <table class="table table-bordered" id="Tbl_recor" width="100%" cellspacing="0">
                                                      <thead>
                                                          <tr>

                                                              <th>Asignado A</th> 
                                                              <th>Detalle</th>
                                                              <th>Fecha</th> 
                                                              <th>Recorrido</th>
                                                              
                                                          </tr>
                                                      </thead>
                                                      <tfoot>
                                                          <tr>
                                                               <tr>
                                                                        <th>Asignado A</th> 
                                                                        <th>Detalle</th>
                                                                        <th>Fecha</th> 
                                                                        <th>Recorrido</th>
                                                              </tr> 
                                                          </tr>
                                                      </tfoot>
                                                      <tbody>


                                                      </tbody>
                                                  </table>
                                              </div>
                            </form>
                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                                 
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
  <script src="js/Reporte.js?%=Guid.NewGuid()%"></script>
  <script src = 'js/bootbox.js'></script>
</body>

</html>

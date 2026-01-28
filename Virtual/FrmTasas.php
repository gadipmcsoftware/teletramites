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

  <title>SB Admin 2 - Buttons</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
<?php include 'menu.php';?>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Tasas</h1>
            <p class="mb-4">Actualice o Ingrese las Tasas para el cálculo de Impuestos..</p>
            <form method="POST" id="Frm_Tasas">
                <div class="row">
                    <div class="col-lg-3">

                    </div>
                  <div class="col-lg-6">
                    <!-- Circle Buttons -->
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tasas par el Calculo de Impuestos</h6>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-bordered" id="Tbl_tasas" width="100%" cellspacing="0">
                                  <thead>
                                      <tr>
                                           <th>Código</th> 
                                          <th>Descripción</th>
                                          <th>Valor</th> 
                                          <th>Factor</th> 

                                      </tr>
                                  </thead>
                                  <tfoot>
                                      <tr>
                                          <th>Código</th> 
                                          <th>Descripción</th>
                                          <th>Valor</th> 
                                          <th>Factor</th> 
                                      </tr>
                                  </tfoot>
                                  <tbody>
                                       <?php
                                          $query1="SELECT t.cod_tasa,t.Descrip_tasa,t.Valor_tasa,t.Factor FROM Tbl_tasas t WHERE t.Estado='A'";
                                          $result1=sqlsrv_query( $link, $query1 );
                                          if( $result1 === false) {
                                              die( print_r( sqlsrv_errors(), true) );
                                          }
                                          while ( $row = sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC))
                                          {                                                                                                                            
      //                                        echo "<option value=".$row1['COD_TIP_EVE']."> ".$row1['DESC_TIP_EVE']." </option>";
                                              echo "<tr>";
                                              echo "<td>".$row['cod_tasa']."</td>";
                                              echo "<td>".$row['Descrip_tasa']."</td>";
                                              echo "<td>";
                                              echo "<div class='col-sm-10 mb-2 mb-sm-0'>";
                                              echo "<input type='text' class='form-control form-control-user' id='Txt_valtasa".$row['cod_tasa']."' name ='Txt_valtasa".$row['cod_tasa']."' placeholder='". round($row['Valor_tasa'],2)."'>";
                                              echo "</div>";
                                              echo "</td>";
                                              echo "<td>".$row['Factor']."</td>";
                                              echo "</tr>";

                                          }
                                          sqlsrv_free_stmt($result1);
                              ?>      


                                  </tbody>
                              </table>
                          </div>

                          <a id="Btn_GuarTasa" href="#" class="btn btn-success btn-icon-split">
                              <span class="icon text-white-50">
                                <i class="fas fa-save"></i>
                              </span>
                              <span class="text">Guardar</span>
                          </a>
                      </div>
                    </div>
                    <!-- Brand Buttons -->
                  </div>
                </div>
         </form>
        </div>
        <!-- /.container-fluid -->

     
      <!-- End of Main Content -->
 <?php include 'PienPagina.php';?>
      <!-- Footer -->
  
      <!-- End of Footer -->

 
    <!-- End of Content Wrapper -->

 
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
  <script src="vendor/datatables/jquery.dataTables.min.js"></script><!--
-->  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/Tasas.js?%=Guid.NewGuid()%"></script>
  <script src = 'js/bootbox.js'></script>

</body>

</html>


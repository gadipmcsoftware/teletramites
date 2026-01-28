<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Reporte Mercados</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">


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
        <!-- DATE-PICKER -->
        <link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">


        <!--===============================================================================================-->

        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->

        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/noui/nouislider.min.js"></script>

        <!--===============================================================================================-->
        <script src="js/main.js"></script>





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
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>

        </script>
        <script src="vendor/date-picker/js/datepicker.js"></script>
        <script src="vendor/date-picker/js/datepicker.en.js"></script>
        <!-- Page level custom scripts -->


    </head>

    <body class="bg-gray-200">

        <?php
        require_once('Menu.php');
        ?>

        <div class="container">
            <form method="POST" id="Frm_Consulta">

                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">Reporte Cartera Vencida</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseCardExample" >
                        
                        
                         <div class="card-body" >
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    
                                   
                                                                                                 
                                    <button type="button" class="contact100-form-btn btn btn-success" id="btn_Fcorte">
                                        <span>
                                            FECHA DE CORTE
                                            <i class="fas fa-search" aria-hidden="true"></i>
                                        </span>
                                    </button>
                              
                                    
                                    
                                </div>
                                 <div class="col-md-4 mb-2">
                                     
                                      <button type="button" class="contact100-form-btn btn btn-warning" id="btn_Finifin">
                                        <span>
                                            FECHA INICIO - FECHA FIN
                                            <i class="fas fa-search" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                    
                                    
                                </div>
                            </div>
                         </div>
                        
                        <!--FECHA CORTE -->
                        
                        <div class="card-body" id="fcorte" style="display: none">
                            <!--                            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">-->

                            <!-- Topbar Navbar -->

                            <div class="row">
                                <div class="col-md-4 mb-2">

                                    <select class="form-select" aria-label="Default select example" id="ComboTipo">
                                        <option selected>Seleccione un reporte en el menu</option>
                                        <option value="1">PATENTES</option>
                                        <option value="3">ACTIVO</option>
                                        <option value="5">VARIOS</option>
                                        <option value="6">MERCADO</option>
                                        <option value="7">ALCABALA</option>
                                        <option value="2">URBANO</option>
                                        <option value="4">RURAL</option>
                                    </select>

                                </div>
                                <div class="col-md-4 mb-2">

                                    <select class="form-select" aria-label="Default select example" id="ComboGeneral">
                                        <option value="G" selected>CONSOLIDADO</option>
                                        <option value="D">DETALLADO</option>
                          
                                    </select>

                                </div>
                                 <div class="col-md-4 mb-2">

                                    <select class="form-select" aria-label="Default select example" id="ComboRango">
                                        <option value="2018" selected>A partir del 2018</option>
                                        <option value="2017">Hasta el año 2017</option>
                          
                                    </select>

                                </div>
                            </div>

                            <div class="row">
                        
                                <div class="col-md-4 mb-2">
                                    <span class="label-input100">Fecha corte <span class="text-danger">*</span></span>
                                    <i class="zmdi zmdi-calendar "></i>
                                    <div class="card-body">
                                        <div class="card border-success mb-3 mb-3" >
                                            <input type="text"class="input100  datepicker-here pl-85" data-language='es' data-date-format="dd-mm-yyyy" id="fecha_final" >      
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 mb-2">
                                    <br>                                                                   
                                    <button type="button" class="contact100-form-btn btn btn-primary" id="Btn_GuaProExt">
                                        <span>
                                            Consultar
                                            <i class="fas fa-search" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-2 mb-2" id="filaexportar" style="visibility:hidden">
                                    <br>                                                                   
                                    <button type="button" class="contact100-form-btn btn btn-success" id="Btn_exportart" >
                                        <span>
                                            Descargar
                                            <i class="fas fa-file-excel" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>


                            <!--                            </nav>-->
                            <div id="dv_consulta" class="table-responsive"  style="display: none">
                                
                                <h1>Detallado</h1>
                                
                                <table class="table table-bordered" id="Tbl_Consulta" width="100%" cellspacing="0"  >
                                    <thead>
                                        <tr>
                                            <th>NUMERO REGISTRO</th> 
                                            <th>FECHA</th>
                                            <th>APELLIDOS Y NOMBRES</th> 
                                            <th>ANCIANATO</th> 
                                            <th>DIRECCION</th>
                                            <th>CEDULA</th>
                                            <th>RUC</th>
                                            <th>DER. ANUAL</th>
                                            <th>ESPECIE</th>
                                            <th>IMP. ANUAL</th>
                                            <th>MULTA</th>
                                            <th>TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>NUMERO REGISTRO</th> 
                                            <th>FECHA</th>
                                            <th>APELLIDOS Y NOMBRES</th> 
                                            <th>ANCIANATO</th> 
                                            <th>DIRECCION</th>
                                            <th>CEDULA</th>
                                            <th>RUC</th>
                                            <th>DER. ANUAL</th>
                                            <th>ESPECIE</th>
                                            <th>IMP. ANUAL</th>
                                            <th>MULTA</th>
                                            <th>TOTAL</th>
                                        </tr>

                                    </tfoot>
                                    <tbody> 
                                    </tbody>
                                </table>

                            </div>
                            
                            <br>
                            <!--                            </tabla acumulada>-->
                            <div id="dv_consultaC" class="table-responsive"  style="display: none">
                                 <h1>Consolidado</h1>
                                
                                <table class="table table-bordered" id="Tbl_ConsultaAcum" width="100%" cellspacing="0"  >
                                    <thead>
                                        <tr>
                                            <th>AÑO</th> 
                                            <th>DER. ANUAL </th>
                                            <th>ESPECIE</th> 
                                            <th>IMP. ANUAL</th> 
                                            <th>MULTA</th>
                                            <th>TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>AÑO</th> 
                                            <th>DER. ANUAL </th>
                                            <th>ESPECIE</th> 
                                            <th>IMP. ANUAL</th> 
                                            <th>MULTA</th>
                                            <th>TOTAL</th>
                                        </tr>

                                    </tfoot>
                                    <tbody> 
                                    </tbody>
                                </table>

                            </div>
                            
                            
                            
                        </div>
                        
                        
                        <!--POR FECHAS -->
                        
                         <div class="card-body" id="porfechas" style="display: none">
                            <!--                            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">-->

                            <!-- Topbar Navbar -->

                            <div class="row">
                                <div class="col-md-4 mb-2">

                                    <select class="form-select" aria-label="Default select example" id="ComboTipo2">
                                        <option selected>Seleccione un reporte en el menu</option>
                                        <option value="1">PATENTES</option>
                                        <option value="3">ACTIVO</option>
                                        <option value="5">VARIOS</option>
                                        <option value="6">MERCADO</option>
                                        <option value="7">ALCABALA</option>
                                        <option value="2">URBANO</option>
                                        <option value="4">RURAL</option>
                                    </select>

                                </div>
                                <div class="col-md-4 mb-2">

                                    <select class="form-select" aria-label="Default select example" id="ComboGeneral2">
                                        <option value="G" selected>CONSOLIDADO</option>
                                        <option value="D">DETALLADO</option>
                          
                                    </select>

                                </div>
                                
                            </div>

                            <div class="row">
                        
                                <div class="col-md-4 mb-2">
                                    <span class="label-input100">Fecha inicio <span class="text-danger">*</span></span>
                                    <i class="zmdi zmdi-calendar "></i>
                                    <div class="card-body">
                                        <div class="card border-success mb-3 mb-3" >
                                            <input type="text"class="input100  datepicker-here pl-85" data-language='es' data-date-format="dd-mm-yyyy" id="fecha_i" >      
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <span class="label-input100">Fecha fin <span class="text-danger">*</span></span>
                                    <i class="zmdi zmdi-calendar "></i>
                                    <div class="card-body">
                                        <div class="card border-success mb-3 mb-3" >
                                            <input type="text"class="input100  datepicker-here pl-85" data-language='es' data-date-format="dd-mm-yyyy" id="fecha_f" >      
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 mb-2">
                                    <br>                                                                   
                                    <button type="button" class="contact100-form-btn btn btn-primary" id="Btn_BuscarFechas">
                                        <span>
                                            Consultar
                                            <i class="fas fa-search" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-2 mb-2" id="filaexportar2" style="visibility:hidden">
                                    <br>                                                                   
                                    <button type="button" class="contact100-form-btn btn btn-success" id="Btn_exportart2" >
                                        <span>
                                            Descargar
                                            <i class="fas fa-file-excel" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>


                            <!--                            </nav>-->
                            <div id="dv_consulta2" class="table-responsive"  style="display: none">
                                
                                <h1>Detallado</h1>
                                
                                <table class="table table-bordered" id="Tbl_Consulta2" width="100%" cellspacing="0"  >
                                    <thead>
                                        <tr>
                                            <th>NUMERO REGISTRO</th> 
                                            <th>FECHA</th>
                                            <th>APELLIDOS Y NOMBRES</th> 
                                            <th>ANCIANATO</th> 
                                            <th>DIRECCION</th>
                                            <th>CEDULA</th>
                                            <th>RUC</th>
                                            <th>DER. ANUAL</th>
                                            <th>ESPECIE</th>
                                            <th>IMP. ANUAL</th>
                                            <th>MULTA</th>
                                            <th>TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>NUMERO REGISTRO</th> 
                                            <th>FECHA</th>
                                            <th>APELLIDOS Y NOMBRES</th> 
                                            <th>ANCIANATO</th> 
                                            <th>DIRECCION</th>
                                            <th>CEDULA</th>
                                            <th>RUC</th>
                                            <th>DER. ANUAL</th>
                                            <th>ESPECIE</th>
                                            <th>IMP. ANUAL</th>
                                            <th>MULTA</th>
                                            <th>TOTAL</th>
                                        </tr>

                                    </tfoot>
                                    <tbody> 
                                    </tbody>
                                </table>

                            </div>
                            
                            <br>
                            <!--                            </tabla acumulada>-->
                            <div id="dv_consultaC2" class="table-responsive"  style="display: none">
                                 <h1>Consolidado</h1>
                                
                                <table class="table table-bordered" id="Tbl_ConsultaAcum2" width="100%" cellspacing="0"  >
                                    <thead>
                                        <tr>
                                            <th>AÑO</th> 
                                            <th>DER. ANUAL </th>
                                            <th>ESPECIE</th> 
                                            <th>IMP. ANUAL</th> 
                                            <th>MULTA</th>
                                            <th>TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>AÑO</th> 
                                            <th>DER. ANUAL </th>
                                            <th>ESPECIE</th> 
                                            <th>IMP. ANUAL</th> 
                                            <th>MULTA</th>
                                            <th>TOTAL</th>
                                        </tr>

                                    </tfoot>
                                    <tbody> 
                                    </tbody>
                                </table>

                            </div>
                            
                            
                            
                        </div>
                        
                        </form>
                    </div>

                    <!-- model buscar nombre -->


                    <script type="text/javascript" src="js/global/jquery.validate.js"></script>
                    <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
<!--                            <script type="text/javascript" src="js/global/jquery-ui-1.8.11.custom.min.js"></script>-->
                    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>





                    <script src = 'js/bootbox.js'></script>
                    <script src="js/CarteraVencida.js?%=Guid.NewGuid()%"></script>




                    </body>

                    </html>

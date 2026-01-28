<!DOCTYPE html>
<html lang="en">
         <!--<mtest"> 
    
<head>
<!--<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--  <meta charset="utf-8">
-->  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui' />
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tramites Virtuales</title>
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

  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet-src.js'></script>
  <link href='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css' rel='stylesheet' />
  <!-- Latest minified bootstrap css -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/map.css">
 <link href="css/component-custom-switch.css" rel="stylesheet">
</head>

<body class="bg-gray-200">
   
<?php require_once('Menu.php');

$AREA = $_REQUEST["area"];

?>
<div class="container">
 <form method="POST" id="Frm_Consulta">
     <input id="area" name="area" type="hidden" value=<?php echo ($AREA)?>>
    <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Integración registro de la propiedad </h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample" >
                  <div class="card-body">
                       <div class="row">
               <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                         <ul class="navbar-nav ml-auto">
                           <!-- Nav Item - Search Dropdown (Visible Only XS) -->
<!--                           <li class="nav-item dropdown no-arrow d-sm-none">
                             <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="fas fa-search fa-fw"></i>
                             </a>
                              Dropdown - Messages 
                             <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                 <div class="form-inline mr-auto w-100 navbar-search">
                                 <div class="input-group">
                                   <input id="Txt_Ced2" type="text" class="form-control bg-light border-0 small" placeholder="Ingrese Cédula o Ruc" aria-label="Search" aria-describedby="basic-addon2">
                                   <div class="input-group-append">
                                       <button id="Btn_buscar1" class="btn btn-primary" type="button">
                                       <i class="fas fa-search fa-sm"></i>
                                     </button>
                                   </div>
                                 </div>
                                 </div>
                             </div>
                           </li>-->
                           <li class="nav-item dropdown no-arrow mx-1">
                             
                             <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <h6 class="dropdown-header">
                                 Buscar Por
                              </h6>
                                 <input id="Cmb_bus" type="text" class="form-control bg-light border-0 small" placeholder="Cédula o Ruc" aria-label="Search" aria-describedby="basic-addon2" readonly="readonly">
                               <i class="fa fa-arrow-circle-down"></i>
                             </a>
                             <!-- Dropdown - Alerts -->
                             <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                               <h6 class="dropdown-header">
                                 Buscar Por
                               </h6>
                               <a id="Btn_cedu" class="dropdown-item d-flex align-items-center">
                                 <div class="mr-3">
                                     <div  class="icon-circle bg-primary">
                                        <i class="fas fa-address-card text-white"></i>
                                    </div>
                                 </div>
                                 <div>
                                   Cédula o Ruc
                                 </div>
                               </a>
                               <a id="Btn_ClavCas" class="dropdown-item d-flex align-items-center" >
                                 <div class="mr-3">
                                   <div class="icon-circle bg-success">
                                     <i class="fas fa-donate text-white"></i>
                                   </div>
                                 </div>
                                 <div>
                                   Clave Catastral
                                 </div>
                               </a>
                                 <a id="Btn_NomApe" class="dropdown-item d-flex align-items-center" >
                                 <div class="mr-3">
                                   <div class="icon-circle bg-warning">
                                     <i class="fas fa-donate text-white"></i>
                                   </div>
                                 </div>
                                 <div>
                                   Nombre Y Apellido
                                 </div>
                               </a>

                               <a class="dropdown-item text-center small text-gray-500" href="#">Seleccione una Opción</a>
                             </div>
                           </li>                           
                         </ul>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-search fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                           <div class="col-xl-8 col-md-6 mb-4" id="div_cedu"  style="display: block">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a>Datos del Compareciente</a></div>
                        <div class="input-group">
                               <input id="Txt_Ced" type="text" class="form-control bg-light border-0 small" placeholder="Ingrese Cédula o Ruc" aria-label="Search" aria-describedby="basic-addon2">
                             <div class="input-group-append">
                               <button id="Btn_buscar" class="btn btn-primary" type="button">
                                 <i class="fas fa-search fa-sm"></i>
                               </button>
                             </div>
                           </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-xl-8 col-md-6 mb-4" id="div_nom" style="display: none">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a>Datos del Compareciente</a></div>
                        <div class="input-group">
                            <div class="col-xl-6 col-md-6 mb-4">
                                  <input id="Txt_Apellido" type="text" class="form-control bg-light border-0 small" placeholder="Ingrese Apellido" aria-label="Search" aria-describedby="basic-addon2">
                            </div>
                            <div class="col-xl-6 col-md-6 mb-4">
                                     <div class="input-group-append">
                                         <input id="Txt_Nombre" type="text" class="form-control bg-light border-0 small" placeholder="Ingrese Nombre" aria-label="Search" aria-describedby="basic-addon2">
                                        <button id="Btn_buscarNomApe" class="btn btn-primary" type="button">
                                          <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                            </div>
                                
                               
                         </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>
              <div class="row">
                          <div class="col-xl-12 col-md-6 mb-4" >
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                      <div id="cargando" style="display:none; color: green;">Cargando...</div>
                  <div id="dv_consulta" class="table-responsive"  >
                          <table class="table table-bordered" id="Tbl_RegPropie" width="100%" cellspacing="0"  >
                              <thead>
                                  <tr>
                                          <th>Identificación</th>
                                          <th>Nombres</th> 
                                          <th>Descripción de Bien</th> 
                                          <th>Estado</th>
                                          <th>Fecha Inscripción</th>
                                          <th>Acto Contrato</th>
                                          <th>Ver</th>
                                  </tr>
                              </thead>
                             <tfoot>
                                  <tr>
                                         <th>Identificación</th>
                                          <th>Nombres</th> 
                                          <th>Descripción de Bien</th> 
                                          <th>Estado</th>
                                          <th>Fecha Inscripción</th>
                                          <th>Acto Contrato</th>
                                          <th>Ver</th>
                                  </tr>
                              </tfoot>
                              <tbody> 
                              </tbody>
                          </table>
                      </div>
                </div>
              </div>
            </div>
                          
                      </div>
                  </div>
                </div>
                
</div>

</form>
  </div>
 <div class="modal fade" id="Form_DetalleREg" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h8 class="modal-title" id="myModalLabelNombre" style="color:#0B2F3A"> <i class="far fa-file-alt"></i> <b>  Información de Gravámenes </b>  </h8>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                </div>
                                <br>


                                <div class="collapse show" id="collapseCardExample" >
                                    <div class="card-body">
                                        <div class="card border-primary mb-3" >
                                            <div class="card-header">Información Predio</div>
                                            <div class="card-body text-primary">


                                                <div class="row">
                                                    <div class="col-md-3 mb-2">

                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Identificación: 
                                                            </b>
                                                        </h6>
                                                        <div class="input-group-append">
                                                            <input id="txt_identifi" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Número Tramite: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="txt_numtra" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Tipo Documento: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="Txt_tipDoc" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3 mb-2">

                                                        <h6 class="dropdown-header"> <b>
                                                                Calidad Compareciente: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="Txt_CaliCompa" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>


                                                    </div>
<!--                                                    <div class="col-md-6 mb-2">

                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Clave Catastral: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="Txt_nombress" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>-->

                                                    <div class="col-md-3 mb-2">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Número Folio: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="Txt_numFolio" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                     <div class="col-md-3 mb-2">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Número Inscripción: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="Txt_Incrip" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                     <div class="col-md-3 mb-2">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Número Repertorio: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="txt_numRep" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Fecha Inscripción: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="txt_FechInc" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                     <div class="col-md-3 mb-2">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Tipo del Bien: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="txt_TipBien" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Sector: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="txt_Sector" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Acto Contrato: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="txt_ActoContra" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Fecha Escritura: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="txt_FecEscri" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Cantón Notaria: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="txt_CantoNot" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Parroquia: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="txt_Parro" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Notaria: 
                                                            </b>
                                                        </h6>

                                                        <div class="input-group-append">
                                                            <input id="txt_notaria" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                 
                                                <div class="row" id="filadirecc">
                                                    <div class="col-md-12 mb-2">
                                                        <h6 class="dropdown-header">
                                                            <b>
                                                                Nombres: 
                                                            </b>

                                                        </h6>

<!--                                                                                                                <div class="input-group-append">
                                                                                                                    <input id="txt_nombre" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                                                                                </div>-->

                                                        <div class="input-group">

                                                            <textarea class="form-control" id="txt_nombre" aria-label="With textarea" disabled="true"></textarea>
                                                        </div>


                                                    </div>
                                                </div>
                                                
                                               


                                            </div>
                                        </div>
                                         <div class="card border-warning mb-3 mb-3" >
                                            <div class="card-header">Comparecientes</div>
                                            <div class="card-body text-primary">
                                                <div class="row">
                                                    <div id="dv_linderos" class="table-responsive"  >
                                                        <table class="table table-bordered" id="Tbl_comaprece" width="100%" cellspacing="0"  >
                                                            <thead>
                                                                <tr>
                                                                        <th>Calidad</th> 
                                                                        <th>Identificación</th>
                                                                        <th>Nombres</th> 
                                                                        
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                    <tr>
                                                                        <th>Calidad</th> 
                                                                        <th>Identificación</th>
                                                                        <th>Nombres</th> 
                                                                    </tr>
                                                             </tfoot>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-success mb-3 mb-3" >
                                            <div class="card-header">Valores</div>
                                            <div class="card-body text-primary">
                                                <div class="row">
                                                    <div class="col-md-5 mb-2">
                                                        <h6 class="dropdown-header" style="color:#FFBF00">
                                                            <b>
                                                                Superficie Construcción: 
                                                            </b>
                                                        </h6>
                                                        <div class="input-group-append">
                                                            <input id="Txt_superCons" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <h6 class="dropdown-header" style="color:#FFBF00">
                                                            <b>
                                                                Superficie Original: 
                                                            </b>
                                                        </h6>
                                                        <div class="input-group-append">
                                                            <input id="Txt_suporig" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <h6 class="dropdown-header" style="color:#FFBF00">
                                                            <b>
                                                                Cuantia:
                                                            </b>
                                                        </h6>
                                                        <div class="input-group-append">
                                                            <input id="Txt_cuantia" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <h6 class="dropdown-header" style="color:#FFBF00">
                                                            <b>
                                                                Clave Catastral Ref.:
                                                            </b>
                                                        </h6>
                                                        <div class="input-group-append">
                                                            <input id="Txt_claveref" type="text" class="form-control bg-light border-0 small" placeholder="" aria-label="Search" aria-describedby="basic-addon2" disabled="true">
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-success mb-3 mb-3" >
                                            <div class="card-header">Información de Linderos</div>
                                            <div class="card-body text-primary">
                                                <div class="row">
                                                    <div id="dv_linderos" class="table-responsive"  >
                                                        <table class="table table-bordered" id="Tbl_Linderos" width="100%" cellspacing="0"  >
                                                            <thead>
                                                                <tr>
                                                                        <th>Nombre</th> 
                                                                        <th>Descripción</th> 
                                                                        
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                    <tr>
                                                                        <th>Nombre</th> 
                                                                        <th>Descripción</th> 
                                                                    </tr>
                                                             </tfoot>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="card border-primary mb-3" id="div_clave">
                                            <div class="card-body text-primary" >
                                                <div class="row">
                                                     <div class="col-xl-6 col-lg-8">        
                                                                <div class="wrap-input100 input100-select bg1" data-validate="Seleccione una Opción">
                                                                    <span class="label-input100">Clave Catastral</span>
                                                                    <div>
                                                                            <select class="js-select2"  name="Cmb_Predio" id="Cmb_Predio">
                                                                                    <option>Seleccione una Opción</option>
                                                                            </select>
                                                                            <div class="dropDownSelect2"></div>
                                                                    </div>
                                                                </div>
                                                    </div>
                                                        <div class="col-xl-6 col-lg-8">
                                                            <div class="container-contact100-form-btn">
                                                                <button class="contact100-form-btn btn btn-warning" id="Btn_GuaClave">
                                                                    <span>
                                                                        Actualizar Catastro
                                                                        <i class="fas fa-save" aria-hidden="true"></i>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    </nav>
                                </div>
                            </div>
                         </div> 
     </div>
<div class="modal fade" id="Esperar" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center"><i class="fa fa-spin fa-spinner"></i> Transfiriendo Archivos Espere Por Favor...</div>
                 <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body" id="Modal_body">
                <div align="center">
                    <img src="imagenes/trabajando.gif" width="400" height="200">
                </div>
            </div>
             
        </div>
       
    </div>
</div>
<div class="modal fade" id="Form_Nombres" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h8 class="modal-title" id="myModalLabelNombre"> <i class="fas fa-male"></i>  Búsqueda de Nombres </h8>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                </div>
                                <br>

                                <div class="collapse show" id="collapseCardExample" >
                                    <div class="card-body">
                                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                                            <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-200 navbar-search">
                                                <div class="input-group">
                                                    <h6 class="dropdown-header">
                                                        Buscar: 
                                                    </h6>
                                                    <input id="Txt_BusqueNom" type="text" class="form-control bg-light border-0 small" placeholder="Ingrese el Nombre y Apellido" aria-label="Search" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button id="Btn_buscarNOm" class="btn btn-primary" type="button">
                                                            <i class="fas fa-search fa-sm"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </nav>
                                    </div>
                                </div>



                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <p class="statusMsg"></p>
                                    <form role="forma">
                                        <div id="dv_consultaNom" class="table-responsive" style="visibility:hidden">
                                            <table class="table table-bordered" id="Tbl_ConsultaNombres" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>NOMBRES</th>
                                                        <th>CEDULA</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
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
  <!-- Page level custom scripts -->
  <script src="js/RegiPropie.js?%=Guid.NewGuid()%"></script>
  <script src = 'js/bootbox.js'></script>

</body>

</html>
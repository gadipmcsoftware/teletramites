
<!DOCTYPE html>
<?php 	
	
	//ESTABLECE CONEXION
	require_once('logica/Conexion.php');
	$link = conectarse();
        require_once('logica/funciones.php');
//prueba
?>
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
</head>

<body id="page-top" onload="Cargar()">
<?php require_once('Menu.php');

$AREA = $_REQUEST["area"];

?>
	

        <!-- Begin Page Content -->
        
            
            
        
     <form class="contact100-form validate-form" method="POST" id="Frm_Regis" >
        <div class="container-fluid">
         <input id="area" name="area" type="hidden" value=<?php echo ($AREA)?>>
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Registro de Tramites</h1>
<!--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
          </div>
<!--          <div class="row">-->
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-8">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Datos Generales</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-5 mb-3 mb-sm-0">
                         <div class="input-group">
                                <div class="wrap-input100 validate-input bg1" data-validate="No se Asigno Nro. Tramite">
                                    <span class="label-input100">Nro. Tramite <span class="text-danger">*</span></span>
                                    <input class="input100" type="text" name="Txt_Tramite" id="Txt_Tramite" placeholder="Nro. Tramite" readonly="readonly" style="color: red">
                                </div>
                         </div>   
                         
                    </div>
                    </div>
                    <div class="form-group row">
                     <div class="col-sm-5 mb-3 mb-sm-0">
                         <div class="input-group">
                                <div class="wrap-input100 validate-input bg1" data-validate="Ingrese Cedula">
                                    <span class="label-input100">Cedula Propietario<span class="text-danger">*</span></span>
                                    <input class="input100" type="text" name="Txt_identicacionCiu" id="Txt_identicacionCiu" placeholder="Nro. Identificación CC/Pasaporte">
                                    <input id="prodId" name="prodId" type="hidden">
                                    <input id="SpId" name="SpId" type="hidden" value="0">
                                </div>
                         </div>   
                         
                    </div>
                    <div class="col-sm-1 mb-3 mb-sm-0">
                            
                         <div class="container-contact100-form-btn">
                             <a href="#" class="btn btn-outline-info btn-circle btn-block" data-toggle="modal" data-target="#Form_BusPro" id="Btn_buspro">
                                    <i class="fas fa-search"></i>
                                </a>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                          <div class="wrap-input100 validate-input bg1" data-validate="Por favor Ingrese Propietario">
                                    <span class="label-input100">Nombre y Apellidos Propietario<span class="text-danger">*</span></span>
                                    <input class="input100" type="text" name="Txt_NombreCiu" id="Txt_NombreCiu" placeholder="APELLLIDOS NOMBRES COMPLETOS" readonly="readonly">
                          </div>   
                         
                    </div>
                  </div>
                    <div class="form-group row">
                       <div class="col-sm-6 mb-3 mb-sm-0">
                          <div class="wrap-input100 bg1" >
                                    <span class="label-input100">Teléfono Propietario</span>
                                    <input class="input100" type="text" name="Txt_TelefonoCiu" id="Txt_TelefonoCiu" placeholder="Teléfono">
                          </div>      
                    </div>
                     <div class="col-sm-6 mb-3 mb-sm-0">
                          <div class="wrap-input100 validate-input bg1" data-validate="Por favor Ingrese un email correcto">
                                    <span class="label-input100">Correo electrónico Propietario</span>
                                    <input class="input100" type="email" name="Txt_emailCui" id="Txt_emailCui" placeholder="Correo electrónico">
                          </div>      
 
                         
                    </div>
                        
                    </div>
                    <div id="div_formprofe" class="form-group row">
                         
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-6 col-lg-8">        
                                    <div class="wrap-input100 input100-select bg1" data-validate="Seleccione una Opción">
					<span class="label-input100">Tipo de Tramite<span class="text-danger">*</span></span>
					<div>
						<select class="js-select2" name="cmb_TipTramite" id="cmb_TipTramite">
							<option>Seleccione una Opción</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
                       </div>
                       <div class="col-xl-6 col-lg-8" id="div_subtra" style="visibility:hidden">        
                                    <div class="wrap-input100 input100-select bg1" data-validate="Seleccione una Opción">
					<span class="label-input100">SubTramite<span class="text-danger">*</span></span>
					<div>
						<select class="js-select2" name="cmb_SubTramite" id="cmb_SubTramite">
							<option>Seleccione una Opción</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
                       </div>
                    </div>
                </div>
              </div>
            </div>
           
             <div class="col-xl-12 col-lg-8">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Datos de Tramite</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group row" id="div_claves">
                        <div class="col-xl-8 col-lg-8">        
                                    <div class="wrap-input100 input100-select bg1" data-validate="Seleccione una Opción">
					<span class="label-input100">Estado del Tramite <span class="text-danger">*</span></span>
					<div>
						<select class="js-select2"  name="Cmb_Estado" id="Cmb_Estado">
							<option>Seleccione una Opción</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
                       </div>
                         <div class="col-xl-4 col-lg-8" id="div_cmb_clave" style="visibility:hidden">        
                                    <div class="wrap-input100 input100-select bg1" data-validate="Seleccione una Opción">
					<span class="label-input100">Clave Catastral <span class="text-danger">*</span></span>
					<div>
						<select class="js-select2"  name="Cmb_Predio" id="Cmb_Predio">
							<option>Seleccione una Opción</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
                       </div>
                    </div>
                     
                    <div class="form-group row">
                                <div class="col-xl-12 col-lg-8"> 
                                                    <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Ingrese sus Necesidades">
                                                            <span class="label-input100">Detalle de sus Observaciones</span>
                                                            <textarea class="input100" name="Txt_detalle" id="Txt_detalle" placeholder="Detalle de sus necesidades y uso"></textarea>
                                                    </div>
                                </div> 
                    </div>
                   
                    
                    
                  
              </div>
            </div>
          </div>
          <div class="col-xl-12 col-lg-8">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Carga de Archivos</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                     <div class="table-responsive">
                                      <table class="table table-bordered" id="TBL_BANDASU" width="100%" cellspacing="0">
                                          <thead>
                                              <tr>
                                                  <th>Nombre</th>
                                                  <th>Descripción</th> 
                                                  <th>Fecha</th>
                                                  <th>Archivo</th>
                                                  <th>Acción</th>
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                  <th>Nombre</th>
                                                  <th>Descripción</th> 
                                                  <th>Fecha</th>
                                                  <th>Archivo</th> 
                                                  <th>Acción</th>
                                              </tr>
                                          </tfoot>
                                          <tbody>
                                      </tbody>
                                      </table>
                                  </div>
                    <div class="form-group row row justify-content-center h-100">
                            <div class="col-xl-3 col-lg-8">
                                   <div class="container-contact100-form-btn">
                                       <a href="#" class="btn btn-outline-success btn-user btn-block" data-toggle="modal"  id="Btn_agrega">
                                                <i class="fas fa-download"></i> Agregar Archivo
                                       </a>
                                    </div>


                            </div>
                       
                    </div>
                   
              </div>
            </div>
          </div>
          <div class="col-xl-12 col-lg-8"  id="Frm_Acciones"  style="display: none">
             <div class="card shadow mb-4" id="tbl_accion">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Acciones a Completar</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="TBL_ACCION" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                              <th>Acción a Completar</th>
                                              <th>Descripción Acción</th> 
                                              <th>Validación</th>
                                               <th>Accion_sql</th>
                                               <th>Accion_html</th>
                                               <th>Nom_modal</th>
                                               <th>Nom_body</th>
                                               <th>TIT_ACCI</th>
                                               <th>COD_ACCION</th>
                                </tr>
                            </thead>
                            <tfoot>
                                    <tr>
                                        <th>Acción a Completar</th>
                                        <th>Descripción Acción</th>
                                        <th>Validación</th>
                                        <th>Accion_sql</th>
                                       <th>Accion_html</th>
                                       <th>Nom_modal</th>
                                       <th>COD_ACCION</th>
<!--                                       <th>Nom_body</th>
                                       <th>TIT_ACCI</th>-->
                                    </tr>
                            </tfoot>
                                 <tbody>
                                                
                                 </tbody>
                            
                        </table>
                    </div>
                   
              </div>
            </div>
          </div>
            <div class="form-group row row justify-content-center">
                <div class="col-xl-4 col-lg-8">
                       <div class="container-contact100-form-btn">
					<button class="contact100-form-btn btn btn-dark" id="Btn_enviar">
						<span>
							Guardar
							<i class="fas fa-save" aria-hidden="true"></i>
						</span>
					</button>
                                      
                                        
                        </div> 
                      
                </div>
                
            </div>
            <div class="col-xl-12 col-lg-8" style="visibility:hidden" id="Frm_reasig">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Reasignación de Tramites</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-xl-4 col-lg-8"> 
                       
                      <h8 id="lbl_varan" class="m-0 font-weight-bold text-gray-800">Seleccione el usuario que se va a reasignar:</h8>
                       </div>
                    <div class="col-xl-8 col-lg-8">        
                                    <div class="wrap-input100 input100-select bg1" data-validate="Seleccione una Opción">
					<span class="label-input100">Funcionarios<span class="text-danger">*</span></span>
					<div>
						<select class="js-select2"  name="Cmb_reacc" id="Cmb_reacc">
							<option>Seleccione una Opción</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
                       </div>
                    </div>   
                    
                    <div class="form-group row row justify-content-center h-100">
                            <div class="col-xl-3 col-lg-8">
                                   <div class="container-contact100-form-btn">
                                       <a href="#" class="btn btn-outline-warning btn-user btn-block"  id="Btn_Reacc">
                                                <i class="fas fa-clipboard-check"></i> Reasignar Tramite
                                        </a>
                                    </div>

                            </div>
                       
                    </div>
                   
              </div>
            </div>
          </div>
         </div> 
       </form> 

<div class="modal fade" id="Form_Propie" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                 <h8 class="modal-title" id="myModalLabel"><i class="fas fa-pencil-ruler"></i>   Ingreso de Profesionales</h8>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        
                         <div class="col-sm-11 mb-3 mb-sm-0">
                          <div class="wrap-input100 validate-input bg1" data-validate="Por favor Ingrese Cedula">
                                    <span class="label-input100">Nro. Cedula<span class="text-danger">*</span></span>
                                    <input class="input100" type="text" name="Txt_IngCed" id="Txt_IngCed" placeholder="CEDULA PROFESIONAL">
                          </div>      
                    </div>
                    </div>
                    <div class="form-group">
                        
                         <div class="col-sm-11 mb-3 mb-sm-0">
                            <div class="wrap-input100 validate-input bg1" data-validate="Por favor Ingrese Nombres">
                                      <span class="label-input100">Nombres y Apellidos<span class="text-danger">*</span></span>
                                      <input class="input100" type="text" name="Txt_IngNom" id="Txt_IngNom" placeholder="NOMBRES Y APELLDOS COMPLETOS">
                            </div>      
                        </div>
                    </div>
                    <div class="form-group">
                        
                         <div class="col-sm-11 mb-3 mb-sm-0">
                            <div class="wrap-input100 validate-input bg1" data-validate="Por Favor Ingrese Dirección">
                                      <span class="label-input100">Dirección<span class="text-danger">*</span></span>
                                      <input class="input100" type="text" name="Txt_IngDir" id="Txt_IngDir" placeholder="DIRECCIÓN COMPLETA ">
                            </div>      
                        </div>
                    </div>
                    <div class="form-group">
                        
                         <div class="col-sm-11 mb-3 mb-sm-0">
                            <div class="wrap-input100 bg1" >
                                      <span class="label-input100">Telefono</span>
                                      <input class="input100" type="text" name="Txt_IngTel" id="Txt_IngTel" placeholder="TELÉFONO">
                            </div>      
                        </div>
                    </div>
                    <div class="form-group">
                         <div class="col-sm-11 mb-3 mb-sm-0">
                            <div class="wrap-input100 validate-input bg1" data-validate="Por Favor Ingrese Dirección">
                                      <span class="label-input100">Correo Electrónico</span>
                                      <input class="input100" type="email" name="Txt_IngEmail" id="Txt_IngEmail" placeholder="EMAIL PROFESIONAL">
                            </div>      
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-11 mb-3 mb-sm-0">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="Chk_Noti" >
                                 <label class="custom-control-label" for="Chk_Noti">Notificar Por Email</label>
                            </div>
                        </div>
                    </div>
                     
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                     <div class="col-xl-4 col-lg-8">
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn btn btn-danger" data-dismiss="modal">
                                <span>
                                    Cerrar
                                    <i class="far fa-window-close" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-8">
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn btn btn-primary" id="Btn_GuaPro">
                                <span>
                                    Guardar
                                    <i class="fas fa-save" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </div>
               
<!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>-->
            </div>
        </div>
    </div>
</div>
        
<div class="modal fade" id="Form_BusPro" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                 
                <h8 class="modal-title" id="myModalLabel"> <i class="fas fa-search"></i>  Busqueda de Propietarios</h8>
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
                                      <table class="table table-bordered" id="Tbl_Propie" width="100%" cellspacing="0">
                                          <thead>
                                              <tr>
                                                  <th>Código</th> 
                                                  <th>Identificación</th> 
                                                  <th>Nombres</th>
                                                  <th>Teléfono</th> 
                                                  <th>Email</th>
                                                  <th>Dirección</th> 
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                   <tr>
                                                            <th>Código</th> 
                                                            <th>Identificación</th> 
                                                            <th>Nombres</th>
                                                            <th>Teléfono</th> 
                                                            <th>Email</th>
                                                            <th>Dirección</th> 
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
                     <div class="col-xl-4 col-lg-8">
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn btn btn-danger" data-dismiss="modal">
                                <span>
                                    Cerrar
                                    <i class="far fa-window-close" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>        
        
<div class="modal fade" id="Form_BusProfe" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                 
                <h8 class="modal-title" id="myModalLabel"> <i class="fas fa-hard-hat"></i>  Busqueda de Profesionales</h8>
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
                                      <table class="table table-bordered" id="Tbl_Profe" width="100%" cellspacing="0">
                                          <thead>
                                              <tr>
                                                 
                                                  <th>Identificación</th> 
                                                  <th>Nombres</th>
                                                  <th>Teléfono</th> 
                                                  <th>Email</th>
                                                  <th>Dirección</th>
                                                  <th>Notificacion</th>
                                                  <th>Número senescyt</th> 
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                   <tr>
                                                            
                                                            <th>Identificación</th> 
                                                            <th>Nombres</th>
                                                            <th>Teléfono</th> 
                                                            <th>Email</th>
                                                            <th>Dirección</th>
                                                            <th>Notificacion</th>
                                                            <th>Número senescyt</th> 
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
                     <div class="col-xl-4 col-lg-8">
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn btn btn-danger" data-dismiss="modal">
                                <span>
                                    Cerrar
                                    <i class="far fa-window-close" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                    
               
            </div>
        </div>
    </div>
</div>                


            </div>
        </div>
    </div>
</div>
                  
                    
 <div class="modal fade" id="Form_Adjun" name="Form_Adjun" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                 <h8 class="modal-title" id="myModalLabel"><i class="fas fa-cloud-upload-alt"></i>   Ingreso de Adjuntos</h8>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="FormChi_Adjun" name="FormChi_Adjun" enctype="multipart/form-data" action="logica/Subir.php">
                    
                    <div class="form-group">
                        
                         <div class="col-sm-11 mb-3 mb-sm-0">
                            <div class="wrap-input100 validate-input bg1" data-validate="Por favor Ingrese Nombre">
                                      <span class="label-input100">Nombres de Adjunto<span class="text-danger">*</span></span>
                                      <input class="input100" type="text" name="Txt_IngNomAdj" id="Txt_IngNomAdj" placeholder="NOMBRE ARCHIVO ADJUNTO">
                            </div>      
                        </div>
                                <div class="col-xl-12 col-lg-8"> 
                                                    <div class="wrap-input100 validate-input bg1" data-validate = "Ingrese sus Descripcion">
                                                            <span class="label-input100">Descripción del Archivo<span class="text-danger">*</span></span> </span>
                                                            <textarea class="input100" name="Txt_IngDesc" id="Txt_IngDesc" placeholder="Describa el adjunto Ingresado"></textarea>
                                                    </div>
                                </div> 
                    </div>
<!--                    <div class="form-group row">
                               
                    </div>-->
                    <div class="form-group row row justify-content-center h-100">
                        <div class="container">
                                <div class="col-md-12 col-md-offset-2">

                                        <div class="form-group">
                                                <div class="input-group input-file" name="Fichier1">
                                                        <span class="input-group-btn">
                                                        <button class="btn btn-outline-info btn-choose" type="button"><i class="fas fa-file-upload"></i> Selecionar</button>
                                                </span>
                                                <input type="text" class="form-control" placeholder='Seleccione un Archivo...' id="Txt_archivo" name="Txt_archivo">
                                                <span class="input-group-btn">
                                                         <button class="btn btn-warning btn-reset" type="button">Borrar</button>
                                                </span>
                                                </div>
                                        </div>




                                    </div>
                            </div>
                            <div class="col-sm-11 mb-3 mb-sm-0">
                              <h8 id="lbl_varan" class="m-0 font-weight-bold text-danger">Por favor el tamaño de los archivos no debe superar los 60MB y su nombre debe ser corto y sin espacios en blanco.</h8>   
                            </div>
                    </div>
 
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                     <div class="col-xl-4 col-lg-8">
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn btn btn-danger" data-dismiss="modal">
                                <span>
                                    Cerrar
                                    <i class="far fa-window-close" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-8">
                        <div class="container-contact100-form-btn">
                            <button type="button" class="contact100-form-btn btn btn-primary" id="Btn_Cargar">
                                <span>
                                    Guardar
                                    <i class="fas fa-save" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>
</div>                        

 
<div class="modal fade" id="WRequi" role="dialog" style="overflow-y: scroll;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                 
                <h8 class="modal-title" id="myModalLabel"> <i class="fas fa-magic"></i>  Asistente de Requisitos</h8>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body" id="Modal_body">
                
            </div>
        </div>
    </div>
</div> 
<div class="modal fade" id="Frm_tecer" role="dialog" style="overflow-y: scroll;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                 
                <h8 class="modal-title" id="myModalLabel"> <i class="fas fa-blind"></i>  Generación de Tercera Edad</h8>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body" id="Tercera_body">
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Frm_disca" role="dialog" style="overflow-y: scroll;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                 
                <h8 class="modal-title" id="myModalLabel"> <i class="fab fa-accessible-icon"></i> Exoneracion por Discapacidad</h8>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body" id="Dica_body">
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Frm_pate" role="dialog" style="overflow-y: scroll;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                 
                <h8 class="modal-title" id="myModalLabel"> <i class="fas fa-business-time"></i>  Declaración de Patente Municipal</h8>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body" id="Pate_body">
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Frm_ubica" role="dialog" style="overflow-y: scroll;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                 
                <h8 class="modal-title" id="myModalLabel"> <i class="fas fa-street-view"></i>  Ubicación Geográfica Negocio</h8>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body" id="Pate_ubica">
                
            </div>
        </div>
    </div>
</div> 
<div class="modal fade" id="Wait" role="dialog" data-backdrop="static" data-keyboard="false">
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
            <!-- Pie Chart -->
            
            
            
<!--          </div>-->

<!--           Content Row 
          <div class="row">

             Content Column 
            <div class="col-lg-6 mb-4">

           

            </div>

       
          </div>

        </div>
         /.container-fluid 

      </div>
       End of Main Content 

       Footer 
     <?php  include 'PienPagina.php';?>
       
    </div>
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

  <script type="text/javascript" src="js/global/jquery.validate.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
  <script type="text/javascript" src="js/global/jquery-ui-1.8.11.custom.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src = 'js/bootbox.js'></script>

  <!--===============================================================================================-->
<!--	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>-->
        <script src="js/jquery-3.3.1.min.js"></script>
<!--        <script src="js/jquery.steps.js"></script>-->
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script><!--
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
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
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!--        <script src="js/map.js"></script>-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 <script src="vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script type="text/javascript" src="js/global/jquery.validate.js"></script>
 <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
 <!--  
 <!-- Custom scripts for all pages-->
<!-- <script src="js/principal.js"></script>-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="js/regitramite.js?%=Guid.NewGuid()%"></script>
   <script src = 'js/bootbox.js'></script>
 <!--<script src="js/Menu.js?%=Guid.NewGuid()%"></script>-->
 <script src="js/jquery.pasos.js"></script>
</body>

</html>

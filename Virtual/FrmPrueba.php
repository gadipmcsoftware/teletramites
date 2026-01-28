<!DOCTYPE html>
<html>
	<head lang="en">
		<!--<meta charset="utf-8">-->
		<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
		<meta name="author" content="colorlib.com">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <!--  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
                  <!--<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui' />-->
                  <meta name="description" content="">
                  <meta name="author" content="">
<!--                 <script>
                    setTimeout(function(){ map.invalidateSize()}, 500);
                </script>-->
               <title>FormWizard_v8</title>
		 <!--MATERIAL DESIGN ICONIC FONT--> 
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
                <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
                 <!--LINEARICONS--> 
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		 <!--DATE-PICKER--> 
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style2.css">
                <style>
                    .datepicker{z-index:1151 !important;}
                 </style>
<!--                 <script src='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet-src.js'></script>
                <link href='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css' rel='stylesheet' />-->
                <!--<link rel="stylesheet" href="css/map.css">-->
	</head>
	<body id="page-top">
<?php 

$ID = $_REQUEST["id"];

?>
		<!--<div class="wrapper">-->
        <form action="" id="wizard">

                 <input id="id" name="id" type="hidden" value=<?php echo ($ID)?>>
        		 <!--SECTION 1--> 
                <h4></h4>
                <section>
                    <div class="col-xl-12 col-lg-8"  id="Frm_Acciones" >
            <div class="card shadow mb-4" id="tbl_accion">

                <a href="#ficInfogen" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample" id="InfoGene">
                        <h6 class="m-0 font-weight-bold text-primary">1. Información General</h6>
                </a>
                    <div class="collapse show" id="ficInfogen">
                          <div class="card-body">
                                        <div class="form-fila" style="display: none" >
                                            <div class="form-group">
                                                <div class="form-holder">
                                                    <i class="zmdi zmdi-chevron-down"></i>
                                                        <label for="exampleFormControlSelect1">Example select</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                          <option>Seleccione una Patente</option>
                                                        </select>

                                                </div>
                                                <div class="form-holder">

                                                        <div class="input-group">
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                          <option>Seleccione año</option>
                                                        </select>
                                                        <div class="input-group-append">
                                                            <button id="Btn_buscar1" class="btn btn-primary" type="button">
                                                                    Buscar     
                                                            </button>
                                                        </div>

                                                        </div>
                                                </div>       
                                            </div>
                                        </div>
                                        <div class="form-fila">
                                                <div class="form-holder">
                                                    <i class="zmdi zmdi-calendar "></i>
                                                    <input type="text"class="form-control datepicker-here pl-85" data-language='es' data-date-format="dd-mm-yyyy" id="dp2" placeholder="Fecha de Inicio de Actividades">
                                                    <!--<span class="placeholder">Fecha de Inicio de Actividades:</span>-->                                     
                                                </div>
                                                <div class="form-group">
                                                     <div class="form-holder">   
                                                        <span class="placeholder">Número Establecimientos:</span> 
                                                    </div>
                                                    <div class="form-holder">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn">
                                                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                                                                <span class="glyphicon glyphicon-minus"><h8>-</h8></span>
                                                                            </button>
                                                                        </span>
                                                                        <input type="number" id="quantity" name="quantity" class="form-control input-number" value="0" min="1" max="100" title="Porcentaje de Exoneración" onchange="handleChange(this);">
                                                                        <span class="input-group-btn">
                                                                            <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                                                                <span class="glyphicon glyphicon-plus"><h8>+</h8></span>
                                                                            </button>
                                                                        </span>
                                                                   </div>

                                                    </div>
                                            </div> 
                                        </div>
                                        <div class="form-fila" id='exo_imp'>

                                            <div class="form-group">
                                                <div class="form-holder">
                                                        <i class="zmdi zmdi-account-box-o"></i>
                                                        <input type="text" class="form-control" placeholder="Identificación" id="indenti_contri" readonly="readonly">
                                               </div>
                                                <div class="form-holder">
                                                        <i class="zmdi zmdi-eye"></i>
                                                        <input type="text" class="form-control" placeholder="Código" id="codi_contri" readonly="readonly">
                                               </div>
                                            </div>
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-account"></i>
                                                <input type="text" class="form-control" placeholder="Nombres" id="Nom_contri" readonly="readonly">
                                            </div>
                                        </div>
                                        <div class="form-fila">
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-account"></i>
                                                <input type="text" class="form-control" placeholder="Apellidos" id="Apelli_contri" readonly="readonly">
                                            </div>
                                             <div class="form-holder">   
                                                        <i class="zmdi zmdi-local-store"></i>
                                                        <select class="form-control" id="cmb_pat_tip_act">
                                                              <option>Tipo Actividad</option>
                                                        </select>
                                                    </div>

                                </div>
                            </div>

                     </div>
        </div>
 <div class="card shadow mb-4">
        <a href="#FicDeclara" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="FicDeclara" id="InfoEco">
                  <h6 class="m-0 font-weight-bold text-primary">2. Información Económica</h6>
        </a>
     <div class="collapse hide" id="FicDeclara">
         <div class="card-body">
                 <div class="form-group row">
                           <div class="col-sm-5 mb-3 mb-sm-0">
                               <div class="form-group">
                                    <div class="form-holder">
                                        <span><h8>¿Declara Impuesto de la Renta?</h8></span>
                                    </div>
                                    <div class="form-holder">
                                         <div class="custom-switch custom-switch-label-yesno pl-0">
                                            <input class="custom-switch-input" id="chbx_ren" type="checkbox">
                                            <label class="custom-switch-btn" for="chbx_ren"></label>
                                          </div>
                                    </div>

                                </div>
                            </div>
                           <div class="col-sm-5 mb-3 mb-sm-0">
                                <div class="form-group">
                                    <div class="form-holder">
                                        <span><h8>¿Declara I.V.A?</h8></span>
                                    </div>
                                    <div class="form-holder">
                                         <div class="custom-switch custom-switch-label-yesno pl-0">
                                            <input class="custom-switch-input" id="chb_iva" type="checkbox">
                                            <label class="custom-switch-btn" for="chb_iva"></label>
                                          </div>
                                    </div>

                                </div>   
                            </div>
                            <div class="col-sm-5 mb-3 mb-sm-0">
                                <div class="form-group">
                                    <div class="form-holder" style="display: none" id="fil_arte">
                                        <span><h8>Artesano con Calificación</h8></span>
                                    </div>
                                    <div class="form-holder" style="display: none" id="chec_arte">
                                         <div class="custom-switch custom-switch-label-yesno pl-0">
                                            <input class="custom-switch-input" id="chb_art" type="checkbox">
                                            <label class="custom-switch-btn" for="chb_art"></label>
                                          </div>
                                    </div>
                            </div>    
                          </div>
                          <div class="col-sm-5 mb-3 mb-sm-0">
                               <div class="form-group" style="display: none" id="fec_arte">
                                    <div class="form-holder">
                                        <i class="zmdi zmdi-calendar "></i>
                                        <input type="text"class="form-control datepicker-here pl-85" data-language='es' data-date-format="dd-mm-yyyy" id="dp3" placeholder="Fecha Vencimiento Artesano:">                                   
                                    </div>

                                </div>
                          </div>
                          <div class="col-sm-5 mb-3 mb-sm-0">
                              <div class="form-group">
                                      <div class="form-holder">
                                            <i class="zmdi zmdi-nature"></i>
                                            <select class="form-control" id="cmb_pat_tam_esta">
                                                         <option>Tamaño de Establecimiento</option>
                                            </select>
                                       </div>
                                  </div>
                          </div>
                          <div class="col-sm-5 mb-3 mb-sm-0">
                               <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>¿Lleva Contabilidad?</h8></span>
                                          </div>
                                          <div class="form-holder">
                                               <div class="custom-switch custom-switch-label-yesno pl-0">
                                                  <input class="custom-switch-input" id="chb_cont" type="checkbox">
                                                  <label class="custom-switch-btn" for="chb_cont"></label>
                                                </div>
                                          </div>
                                  </div>  
                          </div>
                          <div class="col-sm-5 mb-3 mb-sm-0">
                                       <div class="form-holder" style="display: block" id="div_apl_ter">
                                              <span><h8>Aplica Tercera Edad</h8></span>
                                          </div>
                                          <div class="form-holder" style="display: block" id="div_chb_ter">
                                               <div class="custom-switch custom-switch-label-yesno pl-0">
                                                  <input class="custom-switch-input" id="chb_terc" type="checkbox">
                                                  <label class="custom-switch-btn" for="chb_terc"></label>
                                                </div>
                                          </div>
                            </div>
                            <div class="col-sm-5 mb-3 mb-sm-0">
                                     <div class="form-group" id="spl_porsen" style="display: none">
                                          <div class="form-holder">
                                              <span><h8>Porcentaje Canton:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                               <div class="col-lg-12">
                                                            <div class="input-group" >
                                                                <span class="input-group-btn">
                                                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="" id="qua_pro_minus">
                                                                        <!--<i class="fas fa-plus"></i>-->
                                                                        <span class="glyphicon glyphicon-minus"><h8>-</h8></span>
                                                                    </button>
                                                                </span>
                                                                <input type="number" id="quantity_por" name="quantity_por" class="form-control input-number" value="100" min="1" max="100" title="Porcentaje de Exoneración" onchange="handleChange(this);">
                                                                <span class="input-group-btn">
                                                                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="" id="qua_pro_plus">
                                                                        <span class="glyphicon glyphicon-plus"><h8>+</h8></span> 
                                                                    </button>
                                                                </span>
                                                           </div>
                                                </div>
                                           </div>
                                    </div> 
                            </div>
                     </div>
         </div>
     </div>
</div>

</section>

				 <!--SECTION 2--> 
                <h4></h4>
                <section>
                     <div class="col-xl-12 col-lg-8">
                         <div class="form-fila">
                                <div class="form-holder">
                                        <div class="col-sm-12 mb-4 mb-sm-0">
                                            <div class="input-group">
                                                    <select class="form-control" id="cmb_estable">
                                                      <option>Establecimientos  a Declarar:</option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <button id="Btn_EstDecla" class="btn btn-warning" type="button">
                                                                Declarar    
                                                        </button>
                                                    </div>
                                            </div>
                                        </div>
                        </div>    
                    </div>
                        <div class="card shadow mb-4" style="display: none" id="divInfoEsta">
                            
                           <!--Card Header - Dropdown--> 
                           <a href="#FicEstable" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="FicEstable" id="InfoEsta">
                                     <h6 class="m-0 font-weight-bold text-primary" id="titInfEsta">3. Información de Establecimientos</h6>
                           </a>
                           <!--Card Body--> 
                           <div class="collapse show" id="FicEstable">
                               <div class="card-body">
                              <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Información Establecimientos</a>
                                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Ubicación Establecimiento</a>
                                      <!--<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>-->
                                    </div>
                              </nav>
                              <div class="tab-content space2" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="form-group row">
                                        
                                    </div>
                              <div class="form-group row">
                                  <div class="col-sm-2 mb-4 mb-sm-0">
                                       <div class="form-holder">
                                            <i class="zmdi zmdi-balance"></i>
                                            <input type="text" class="form-control" placeholder="Establecimiento" id="txt_Esta" readonly="readonly">
                                     </div>
                                  </div>
                                  <div class="col-sm-4 mb-4 mb-sm-0">
                                    <div class="form-holder">
                                            <i class="zmdi zmdi-pin-drop"></i>
                                           <select class="form-control" id="cmb_pat_parroquia">
                                                  <option>Parroquia</option>
                                            </select>
                                    </div>
                                  </div>
                                  <div class="col-sm-3 mb-4 mb-sm-0">
                                      <div class="form-holder">
                                            <i class="zmdi zmdi-collection-image"></i>
                                            <input type="text" class="form-control" placeholder="Teléfono" id="tele_contri" >
                                     </div>
                                  </div>
                                  <div class="col-sm-3 mb-4 mb-sm-0">
                                        <div class="form-holder">
                                               <i class="zmdi zmdi-nature"></i>
                                               <select class="form-control" id="cmb_pat_loper">
                                                            <option>Lugar de Operaciones</option>
                                               </select>
                                        </div>
                                  </div>  
                              </div>
                              <div class="form-group row">
                                   <div class="col-sm-6 mb-4 mb-sm-0">
                                      <div class="form-holder">
                                                <div class="input-group">
                                                <select class="form-control" id="cmb_pat_calle_pri">
                                                  <option>Calle Pricipal</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <script src="js/Patente.js" type="text/javascript"></script>
                                                    <button id="Btn_busCallPri" class="btn btn-primary" type="button">
                                                            Buscar     
                                                    </button>
                                                </div>

                                                </div>
                                        </div> 
                                  </div>
                                  <div class="col-sm-6 mb-4 mb-sm-0">
                                      <div class="form-holder">
                                            <div class="input-group">
                                                    <select class="form-control" id="cmb_pat_calle_sec">
                                                      <option>Calle Secundaria</option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <button id="Btn_busCallSec" class="btn btn-success" type="button">
                                                                Buscar     
                                                        </button>
                                                    </div>

                                            </div>
                                    </div> 
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-4 mb-4 mb-sm-0">
                                        <div class="form-holder">
                                           <i class="zmdi zmdi-local-hotel"></i>
                                           <input type="text" class="form-control" placeholder="Numero de casa" id="Num_casa" >
                                       </div>
                                  </div>
                                  <div class="col-sm-4 mb-4 mb-sm-0">
                                      <div class="form-holder">
                                            <i class="zmdi zmdi-collection-image"></i>
                                            <input type="text" class="form-control" placeholder="Barrio/Cuidadela" id="Txt_barrio" >
                                        </div>
                                  </div>
                                  <div class="col-sm-4 mb-4 mb-sm-0">
                                        <div class="form-holder">   
                                         <i class="zmdi zmdi-local-store"></i>
                                         <select class="form-control" id="cmb_pat_tip_act">
                                               <option>Tipo Actividad</option>
                                         </select>
                                     </div>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-6 mb-4 mb-sm-0">
                                      <div class="form-holder">   
                                                <i class="zmdi zmdi-local-store"></i>
                                                <select class="form-control" id="tip_rotulo">
                                                      <option>Tipo Rotulo</option>
                                                </select>
                                   </div>
                                  </div>
                                  <div class="col-sm-6 mb-4 mb-sm-0">
                                    <div class="form-holder">
                                        <i class="zmdi zmdi-local-grocery-store"></i>
                                        <input type="text" class="form-control" placeholder="Nombre del Comercio" id="Nom_comer">
                                    </div>
                                  </div>
 
                                    
                              </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-4 mb-sm-0">
                                                <div class="form-holder">
                                                    <i class="zmdi zmdi-calendar "></i>
                                                    <input type="text"class="form-control datepicker-here pl-85" data-language='es' data-date-format="dd-mm-yyyy" id="dp4" placeholder="Fecha de Apertura del Establecimiento">                                    
                                                </div>
                                        </div>
 
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                              </div>                   
                         </div>
                        </div>
                           </div>
                          
                      </div>
   <div class="card shadow mb-4" id="divActivEconom" style="display: none">
        <a href="#ficha_Activi" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="ficha_Activi" id="ActivEconom">
                  <h6 class="m-0 font-weight-bold text-primary" id="titActiEco">4. Actividad Económica</h6>
        </a>
    <div class="collapse hide" id="ficha_Activi">
        <div class="card-body">
            <div class="form-group row">
                <div class="col-sm-8 mb-3 mb-sm-0">
                     <div class="form-holder">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Actividad Económica" id="Txt_act_prin" readonly="readonly">
                                        <input id="Acti_prin" name="Acti_prin" type="hidden">
                                        <input id="Cod_Pat_borra" name="Cod_Pat_borra" type="hidden">
                                        <div class="input-group-append">
                                            <button id="Btn_act_prin" class="btn btn-primary" type="button">
                                                    Buscar     
                                            </button>
                                        </div>
                                      
                                    </div>
                      </div> 
                </div>
                <div class="col-sm-2 mb-4 mb-sm-0">
                     <div class="form-holder"  id="chec_principal">
                                         <div class="custom-switch custom-switch-label-principal pl-0">
                                            <input class="custom-switch-input" id="chb_prin" type="checkbox" checked>
                                            <label class="custom-switch-btn" for="chb_prin"></label>
                                          </div>
                    </div>
                </div>
                <div class="col-sm-2 mb-3 mb-sm-0">
                                       <a href="#" class="btn btn-outline-warning btn-user btn-block" data-toggle="modal"  id="Btn_agregar">
                                               <i class="far fa-plus-square"></i>Agregar
                                       </a>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <div class="form-holder">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="Tbl_Actividades" width="100%" cellspacing="0">
                                          <thead>
                                              <tr>
                                                  <th>Código CIIU</th> 
                                                  <th>Decripcion </th>
                                                  <th>Tipo</th>
                                                  <th>Eliminar</th>
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                   <tr>
                                                        <th>Código CIIU</th> 
                                                        <th>Decripcion </th>
                                                        <th>Tipo</th>
                                                         <th>Eliminar</th>
                                                  </tr> 
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
<div class="card shadow mb-4" id="divInfoContaf" style="display: none">
        <a href="#ficha_InfoCon" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="ficha_InfoCon" id="InfContab">
                  <h6 class="m-0 font-weight-bold text-primary" id="titInfoCont">5. Información Contable</h6>
        </a>
    <div class="collapse hide" id="ficha_InfoCon">
        <div class="card-body">
            <div class="form-group row">
                <div class="col-sm-8 mb-3 mb-sm-0">
                   <div class="form-holder">
                        <div class="col-sm-12 mb-4 mb-sm-0">
                            <div class="input-group">
                                <select class="form-control" id="cmb_pat_año">
                                    <option>Seleccione el año a Declarar:</option>
                                </select>
                                <div class="input-group-append">
                                    <button id="Btn_Generar" class="btn btn-warning" type="button">
                                           Generar    
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="form-group row">
              <div class="container-fluid">
                  <div class="col-xl-12 col-lg-8" style="display: none" id="noobli_conta">
                      <div class="card shadow mb-4">
                           <!--Card Header - Dropdown--> 
<!--                           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                               <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Información Contable no obligado a llevar contabilidad</h6
                               <div class="dropdown no-arrow">
                                   <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                   </a>
                            </div>-->
                               <div class="card-body">
                                   <div class="form-fila">
                                       <div class="form-group">
                                           <div class="form-holder">
                                                <span><h8>Capital Propia (activos)</h8></span>
                                           </div>
                                           <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_capi_pro" onkeypress="return filterFloat(event,this);">
                                              </div>
                                                
                                           </div>
                                       </div>
                                        <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>Ingresos</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_ingre" onkeypress="return filterFloat(event,this);">
                                              </div>
                                                
                                           </div>
                                        </div>
                                   </div>
                                   <div class="form-fila">
                                        <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>Capital Ajeno (pasivos)</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_Ajeno" onkeypress="return filterFloat(event,this);">
                                              </div>
                                                
                                           </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-holder">
                                                <span><h8>- Gastos</h8></span>
                                            </div>
                                            <div class="form-holder">
                                                <div class="col-xl-10 col-lg-8">
                                                    <i class="zmdi zmdi zmdi-polymer"></i>
                                                  <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_gastos" onkeypress="return filterFloat(event,this);">
                                                </div>
                                             </div>
                                        </div>
                                   </div>
                                    <div class="form-fila">
                                        <div class="form-group">
                                              <div class="form-holder">
                                                  <span><h8 class="text-danger">CAPITAL EN GIRO</h8></span>
                                               </div>
                                              <div class="form-holder">
                                                          <div class="col-xl-10 col-lg-8">
                                                              <i class="zmdi zmdi zmdi-polymer"></i>
                                                            <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_giro" readonly="readonly" >
                                                          </div>

                                              </div>
                                        </div>
                                        <div class="form-group">
                                              <div class="form-holder">
                                                  <span><h8 class="text-danger">UTILIDAD / PERDIDA</h8></span>
                                               </div>
                                               <div class="form-holder">
                                                          <div class="col-xl-10 col-lg-8">
                                                              <i class="zmdi zmdi zmdi-polymer"></i>
                                                            <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_perdida" readonly="readonly">
                                                          </div>

                                                </div>
                                        </div>
                                    </div>
                                   <div class="form-fila">
                                        <div class="form-group">
                                             <div class="form-holder">
                                                 <span><h8 class="text-primary">AVALUO PROPIEDADES</h8></span>
                                             </div>
                                             <div class="form-holder">
                                                         <div class="col-xl-10 col-lg-8">
                                                             <i class="zmdi zmdi zmdi-polymer"></i>
                                                           <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_avaluo" readonly="readonly">
                                                         </div>

                                             </div>
                                        </div>
                                    </div>
                               </div>
                        </div>
                      </div>
                    <div class="col-xl-12 col-lg-8" style="display: none" id="obli_conta">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="form-fila">
                                    <div class="form-group">
                                        <div class="form-holder">
                                            <span><h8 class="text-success">Porcentaje Establecimiento:</h8></span>
                                        </div>
                                        <div class="form-holder">
                                            <div class="col-xl-10 col-lg-8">
                                                <i class="zmdi zmdi zmdi-toys"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_por_esta" onkeypress="return filterFloat(event,this);">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-fila">
                                        <div class="form-group">
                                                  <div class="form-holder">
                                                      <span><h8 class="text-primary">Activo Corriente:</h8></span>
                                                  </div>
                                                  <div class="form-holder">
                                                      <div class="col-xl-10 col-lg-8">
                                                          <i class="zmdi zmdi zmdi-polymer"></i>
                                                        <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_actcorr" onkeypress="return filterFloat(event,this);">
                                                      </div>

                                                   </div>
                                        </div>
                                         <div class="form-group">
                                                  <div class="form-holder">
                                                      <span><h8>Total de Ingresos:</h8></span>
                                                  </div>
                                                  <div class="form-holder">
                                                      <div class="col-xl-10 col-lg-8">
                                                          <i class="zmdi zmdi zmdi-polymer"></i>
                                                        <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_totIng" onkeypress="return filterFloat(event,this);">
                                                     </div>

                                                   </div>
                                        </div>         
                                </div>
                                <div class="form-fila">
                                   <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>Activo Fijo:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_actfijo" onkeypress="return filterFloat(event,this);">
                                             </div>
                                                
                                           </div>
                                    </div>
                                    <div class="form-group">
                                              <div class="form-holder">
                                                  <span><h8>- Costo de Ventas:</h8></span>
                                              </div>
                                              <div class="form-holder">
                                                  <div class="col-xl-10 col-lg-8">
                                                      <i class="zmdi zmdi zmdi-polymer"></i>
                                                    <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_cosVen" onkeypress="return filterFloat(event,this);">
                                                 </div>

                                               </div>
                                    </div>
                                </div>
                                <div class="form-fila">
                                    <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>Activo no Corriente:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_noCorr" onkeypress="return filterFloat(event,this);">
                                             </div>
                                                
                                           </div>
                                    </div>
                                    <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>-Gtos. Adm. y Ventas:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_GasVen" onkeypress="return filterFloat(event,this);">
                                             </div>
                                                
                                           </div>
                                    </div>
                              </div>
                              <div class="form-fila">
                                  <div class="form-group">
                                        <div class="form-holder">
                                            <span><h8 class="text-danger">TOTAL DE ACTIVOS</h8></span>
                                         </div>
                                         <div class="form-holder">
                                                    <div class="col-xl-10 col-lg-8">
                                                        <i class="zmdi zmdi zmdi-polymer"></i>
                                                      <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_TolAct" readonly="readonly">
                                                    </div>

                                          </div>
                                  </div>
                                  <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>-Gtos.No Operacionales:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_Gto_OPer" onkeypress="return filterFloat(event,this);">
                                             </div>
                                                
                                           </div>
                                 </div>
                              </div>
                              <div class="form-fila">
                                  <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8 class="text-primary">Pasivos Corriente:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_pas_corr" onkeypress="return filterFloat(event,this);">
                                              </div>
                                                
                                           </div>
                                </div>
                                <div class="form-group">
                                        <div class="form-holder">
                                            <span><h8 class="text-danger">UTILIDAD / PERDIDA</h8></span>
                                         </div>
                                         <div class="form-holder">
                                                    <div class="col-xl-10 col-lg-8">
                                                        <i class="zmdi zmdi zmdi-polymer"></i>
                                                      <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_utl_per" readonly="readonly">
                                                    </div>

                                          </div>
                                </div>
                              </div>
                              <div class="form-fila">
                                        <div class="form-group">
                                                <div class="form-holder">
                                                    <span><h8 class="text-success">Patrimonio Neto:</h8></span>
                                                </div>
                                                <div class="form-holder">
                                                    <div class="col-xl-10 col-lg-8">
                                                        <i class="zmdi zmdi zmdi-polymer"></i>
                                                        <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_neto" readonly="readonly">
                                                    </div>

                                                 </div>
                                      </div>
                                      <div class="form-group">
                                                <div class="form-holder">
                                                    <span><h8 class="text-success">Base Imponible:</h8></span>
                                                </div>
                                                <div class="form-holder">
                                                    <div class="col-xl-10 col-lg-8">
                                                        <i class="zmdi zmdi zmdi-polymer"></i>
                                                        <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_Bas_Impo" readonly="readonly">
                                                    </div>

                                                 </div>
                                      </div>  
                              </div>
                              <div class="form-fila">
                                   <div class="form-group">
                                        <div class="form-holder">
                                            <span><h8 class="text-primary">AVALUO PROPIEDADES</h8></span>
                                         </div>
                                         <div class="form-holder">
                                                    <div class="col-xl-10 col-lg-8">
                                                        <i class="zmdi zmdi zmdi-polymer"></i>
                                                      <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_avaluoconta" readonly="readonly">
                                                    </div>

                                          </div>
                                  </div>
                              </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-8" style="display: none" id="div_geaño">
                        <a href="#" class="btn btn-info btn-user btn-block" id="Btn_geaño">
                            <i class="fas fa-history"></i><span id="lbl_anio">Generar Año</span>
                        </a>
                    </div>
                  </div>
              </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <div class="form-holder">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="Tbl_AnioConta" width="100%" cellspacing="0">
                                     <thead>
                                              <tr>
                                                  <th>Establecimiento</th> 
                                                  <th>Año</th>
                                                  <th>Total Activos</th>
                                                  <th>Pasivos Corrientes</th>
                                                  <th>Patrimonio Neto</th>
                                                  <th>Utilidad </th>
                                                  <th>Base Imponible </th>
                                                  <th>Editar</th>
                                              </tr>
                                     </thead>
                                     <tfoot>
                                              <tr>
                                                   <tr>
                                                        <th>Establecimiento</th> 
                                                         <th>Año</th>
                                                         <th>Total Activos</th>
                                                         <th>Pasivos Corrientes</th>
                                                         <th>Patrimonio Neto</th>
                                                         <th>Utilidad </th>
                                                         <th>Editar</th>
                                                  </tr> 
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
</div>
    <div class="form-group row row justify-content-center">
                <div class="col-xl-4 col-lg-8">
                       <div class="container-contact100-form-btn">
					<div class="contact100-form-btn btn btn-info" id="Btn_GuaEsta" style="display: none">
						<span>
							Guardar Establecimiento
							<i class="fas fa-save" aria-hidden="true"></i>
						</span>
					</div>
                                      
                                        
                        </div> 
                      
                </div>
                
      </div>                         
<div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Establecimientos Declarados</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                        </div>
                        <div class="card-body">
                        <div class="form-holder">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="Tbl_Establecimientos" width="100%" cellspacing="0">
                                          <thead>
                                              <tr>
                                                  <th>Establecimiento</th> 
                                                  <th>Nombre </th>
                                                  <th>Barrio</th>
                                                  <th>Código CIIU</th>
                                                   <th>Editar</th>
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                   <tr>
                                                        <th>Establecimiento</th> 
                                                        <th>Nombre </th>
                                                        <th>Barrio</th>
                                                        <th>Código CIIU</th>
                                                         <th>Editar</th>
                                                  </tr> 
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
                </section>
                 <!--SECTION 3--> 
<!--                <h4></h4>
                <section>
                    <div class="form-fila">
                                <div class="form-holder">
                                        <div class="col-sm-12 mb-4 mb-sm-0">
                                            <div class="input-group">
                                                    <select class="form-control" id="cmb_pat_año">
                                                      <option>Seleccione el año a Declarar:</option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <button id="Btn_Generar" class="btn btn-warning" type="button">
                                                                Generar    
                                                        </button>
                                                    </div>
                                            </div>
                                        </div>
                        </div>    
                    </div>
                    <div class="container-fluid">
                     <div class="col-xl-12 col-lg-8" style="display: none" id="noobli_conta">
                        <div class="card shadow mb-4">
                           Card Header - Dropdown 
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Información Contable no obligado a llevar contabilidad</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                          </div>
                           Card Body 
                          <div class="card-body">
                              <div class="form-fila">
                                    <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>Capital Propia (activos)</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_capi_pro" onkeypress="return filterFloat(event,this);">
                                              </div>
                                                
                                           </div>
                                    </div>
                                  <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>Ingresos</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_ingre" onkeypress="return filterFloat(event,this);">
                                              </div>
                                                
                                           </div>
                                    </div>
                              
                            </div>
                            <div class="form-fila">
                                  <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>Capital Ajeno (pasivos)</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_Ajeno" onkeypress="return filterFloat(event,this);">
                                              </div>
                                                
                                           </div>
                                    </div>
                                    <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>- Gastos</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_gastos" onkeypress="return filterFloat(event,this);">
                                              </div>
                                                
                                           </div>
                                    </div>
                            </div>
                              <div class="form-fila">
                                  <div class="form-group">
                                        <div class="form-holder">
                                            <span><h8 class="text-danger">CAPITAL EN GIRO</h8></span>
                                         </div>
                                        <div class="form-holder">
                                                    <div class="col-xl-10 col-lg-8">
                                                        <i class="zmdi zmdi zmdi-polymer"></i>
                                                      <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_giro" readonly="readonly" >
                                                    </div>

                                          </div>
                                  </div>
                                  <div class="form-group">
                                        <div class="form-holder">
                                            <span><h8 class="text-danger">UTILIDAD / PERDIDA</h8></span>
                                         </div>
                                         <div class="form-holder">
                                                    <div class="col-xl-10 col-lg-8">
                                                        <i class="zmdi zmdi zmdi-polymer"></i>
                                                      <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_perdida" readonly="readonly">
                                                    </div>

                                          </div>
                                  </div>   
                              </div>
                                <div class="form-fila">
                                   <div class="form-group">
                                        <div class="form-holder">
                                            <span><h8 class="text-primary">AVALUO PROPIEDADES</h8></span>
                                         </div>
                                         <div class="form-holder">
                                                    <div class="col-xl-10 col-lg-8">
                                                        <i class="zmdi zmdi zmdi-polymer"></i>
                                                      <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_avaluo" readonly="readonly">
                                                    </div>

                                          </div>
                                  </div>
                                </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12 col-lg-8" style="display: none" id="obli_conta">
                        <div class="card shadow mb-4">
                           Card Header - Dropdown 
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Información Contable obligado a llevar contabilidad</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                          </div>
                           Card Body 
                          <div class="card-body">
                              <div class="form-fila">
                                    <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>Porcentaje Canton:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                               <div class="col-lg-12">
                                                            <div class="input-group">
                                                                <span class="input-group-btn">
                                                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="" id="qua_pro_minus">
                                                                        <i class="fas fa-plus"></i>
                                                                        <span class="glyphicon glyphicon-minus"><h8>-</h8></span>
                                                                    </button>
                                                                </span>
                                                                <input type="number" id="quantity_por" name="quantity_por" class="form-control input-number" value="100" min="1" max="100" title="Porcentaje de Exoneración" onchange="handleChange(this);">
                                                                <span class="input-group-btn">
                                                                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="" id="qua_pro_plus">
                                                                        <span class="glyphicon glyphicon-plus"><h8>+</h8></span> 
                                                                    </button>
                                                                </span>
                                                           </div>
                                                </div>
                                                
                                           </div>
                                    </div> 
                            </div>
                            <div class="form-fila">
                                <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8 class="text-primary">Activo Corriente:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_actcorr" onkeypress="return filterFloat(event,this);">
                                              </div>
                                                
                                           </div>
                                </div>
                                 <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>Total de Ingresos:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_totIng" onkeypress="return filterFloat(event,this);">
                                             </div>
                                                
                                           </div>
                                </div>
                                         
                            </div>
                            <div class="form-fila">
                                   <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>Activo Fijo:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_actfijo" onkeypress="return filterFloat(event,this);">
                                             </div>
                                                
                                           </div>
                                </div>
                                <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>- Costo de Ventas:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_cosVen" onkeypress="return filterFloat(event,this);">
                                             </div>
                                                
                                           </div>
                                </div>
                            </div>
                              <div class="form-fila">
                                  <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>Activo no Corriente:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_noCorr" onkeypress="return filterFloat(event,this);">
                                             </div>
                                                
                                           </div>
                                </div>
                                <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>-Gtos. Adm. y Ventas:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_GasVen" onkeypress="return filterFloat(event,this);">
                                             </div>
                                                
                                           </div>
                                </div>
                              </div>
                              <div class="form-fila">
                                  <div class="form-group">
                                        <div class="form-holder">
                                            <span><h8 class="text-danger">TOTAL DE ACTIVOS</h8></span>
                                         </div>
                                         <div class="form-holder">
                                                    <div class="col-xl-10 col-lg-8">
                                                        <i class="zmdi zmdi zmdi-polymer"></i>
                                                      <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_TolAct" readonly="readonly">
                                                    </div>

                                          </div>
                                  </div>
                                  <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8>-Gtos.No Operacionales:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_Gto_OPer" onkeypress="return filterFloat(event,this);">
                                             </div>
                                                
                                           </div>
                                </div>
                              </div>
                              <div class="form-fila">
                                  <div class="form-group">
                                          <div class="form-holder">
                                              <span><h8 class="text-primary">Pasivos Corriente:</h8></span>
                                          </div>
                                          <div class="form-holder">
                                              <div class="col-xl-10 col-lg-8">
                                                  <i class="zmdi zmdi zmdi-polymer"></i>
                                                <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_pas_corr" onkeypress="return filterFloat(event,this);">
                                              </div>
                                                
                                           </div>
                                </div>
                                <div class="form-group">
                                        <div class="form-holder">
                                            <span><h8 class="text-danger">UTILIDAD / PERDIDA</h8></span>
                                         </div>
                                         <div class="form-holder">
                                                    <div class="col-xl-10 col-lg-8">
                                                        <i class="zmdi zmdi zmdi-polymer"></i>
                                                      <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_utl_per" readonly="readonly">
                                                    </div>

                                          </div>
                                </div>
                              </div>
                              <div class="form-fila">
                                        <div class="form-group">
                                                <div class="form-holder">
                                                    <span><h8 class="text-success">Patrimonio Neto:</h8></span>
                                                </div>
                                                <div class="form-holder">
                                                    <div class="col-xl-10 col-lg-8">
                                                        <i class="zmdi zmdi zmdi-polymer"></i>
                                                        <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_neto" readonly="readonly">
                                                    </div>

                                                 </div>
                                      </div>
                                      <div class="form-group">
                                                <div class="form-holder">
                                                    <span><h8 class="text-success">Base Imponible:</h8></span>
                                                </div>
                                                <div class="form-holder">
                                                    <div class="col-xl-10 col-lg-8">
                                                        <i class="zmdi zmdi zmdi-polymer"></i>
                                                        <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_Bas_Impo" readonly="readonly">
                                                    </div>

                                                 </div>
                                      </div>  
                              </div>
                              <div class="form-fila">
                                   <div class="form-group">
                                        <div class="form-holder">
                                            <span><h8 class="text-primary">AVALUO PROPIEDADES</h8></span>
                                         </div>
                                         <div class="form-holder">
                                                    <div class="col-xl-10 col-lg-8">
                                                        <i class="zmdi zmdi zmdi-polymer"></i>
                                                      <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_avaluoconta" readonly="readonly">
                                                    </div>

                                          </div>
                                  </div>
                              </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-8" style="display: none" id="div_geaño">
                        <a href="#" class="btn btn-info btn-user btn-block" id="Btn_geaño">
                            <i class="fas fa-history"></i><span id="lbl_anio">Generar Año</span>
                        </a>
                    </div>
                 </div>
                </section>-->
                                <!--SECTION 3--> 
                <h4></h4>
                <section>
                     <div class="col-xl-12 col-lg-8">
                        <div class="card shadow mb-4">
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Valores a pagar de Patentes</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                          </div>
                           <!--Card Body--> 
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-bordered" id="Tbl_Valores" width="100%" cellspacing="0">
                                        <thead>
                                              <tr>
                                                  <th>Año</th> 
                                                  <th>Patrimonio Neto</th>
                                                  <th>Base Imponible</th>
                                                  <th>Impuesto a Pagar</th>
                                                  <th>Servicio Administrativo</th>
                                                  <th>Multa</th>
                                                  <th>Total a Pagar</th>
                                              </tr>
                                        </thead>
                                  </table>
                              </div>
                              <div class="table-responsive">
                                  <table class="table table-bordered" id="Tbl_Valores" width="100%" cellspacing="0">
                                      <thead>
                                              <tr>
                                                  <th class="text-danger">Total A Pagar</th> 
                                                  <th><div class="col-xl-8 col-lg-8">
                                                      <input type="text" class="form-control" placeholder="0.00" id="Txt_pat_totpag" readonly="readonly">
                                                    </div></th>
                                              </tr>
                                        </thead>
                                  </table>
                              </div>
                        </div>
                      </div>
                </section>
            </form><!--
                
--><div class="modal fade" id="BusActEcoPrin" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
             <!--Modal Header--> 
            <div class="modal-header">
                 
                <h8 class="modal-title" id="myModalLabel"> <i class="fas fa-chart-bar"></i>Actividad Económica</h8>
                <button type="button" class="close" id="btn_cerra_act_pri">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               
            </div>
            
             <!--Modal Body--> 
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <h8 id="lbl_varan" class="m-0 font-weight-bold text-danger">Seleccione su Actividad Económica dando doble clic sobre ella</h8>
                    <div class="col-xl-12 col-lg-8" >
                        <div class="card shadow mb-4">
                           <!--Card Header - Dropdown--> 
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">  Actividad Económica</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                          </div>
                           <!--Card Body--> 
                          <div class="card-body">
                              <div class="table-responsive">
                                      <table class="table table-bordered" id="Tbl_ActPri" width="100%" cellspacing="0">
                                          <thead>
                                              <tr>
                                                  <th>Código CIIU</th> 
                                                  <th>Decripcion </th>
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                   <tr>
                                                        <th>Código CIIU</th> 
                                                        <th>Decripcion </th>
                                                  </tr> 
                                              </tr>
                                          </tfoot>
                                          <tbody>
                                          </tbody>
                                      </table>
                                  </div>
                              
                        </div>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
<!--<div class="modal fade" id="BusActEcoSec" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
             Modal Header 
            <div class="modal-header">
                 
                <h8 class="modal-title" id="myModalLabel"> <i class="fas fa-chart-bar"></i>Actividad Económica Secundaria</h8>
                <button type="button" class="close" id="btn_cerra_act_sec">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               
            </div>
            
             Modal Body 
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <h8 id="lbl_varan" class="m-0 font-weight-bold text-danger">Seleccione su Actividad Económica dando doble clic sobre ella, llenar esta opción no es obligatoria </h8>
                    <div class="col-xl-12 col-lg-8" >
                        <div class="card shadow mb-4">
                           Card Header - Dropdown 
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">  Actividad Económica</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                          </div>
                           Card Body 
                          <div class="card-body">
                              <div class="table-responsive">
                                      <table class="table table-bordered" id="Tbl_ActSec" width="100%" cellspacing="0">
                                          <thead>
                                              <tr>
                                                  <th>Código</th> 
                                                  <th>Decripcion </th>
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                   <tr>
                                                        <th>Código</th> 
                                                        <th>Decripcion </th>
                                                  </tr> 
                                              </tr>
                                          </tfoot>
                                          <tbody>
                                          </tbody>
                                      </table>
                                  </div>
                              
                        </div>
                      </div>
                    </div>
                </form>
            </div>
            
 
        </div>
    </div>
</div> -->
<div class="modal fade" id="BusCallePrin" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                 
                <h8 class="modal-title" id="myModalLabel"> <i class="fas fa-bacon"></i>  Calle Principal</h8>
                <button type="button" class="close" id="btn_cerra_call_pri">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <h8 id="lbl_varan" class="m-0 font-weight-bold text-danger">Seleccione su Calle Principal dando doble clic sobre ella</h8>
                    <div class="col-xl-12 col-lg-8" >
                        <div class="card shadow mb-4">
                          <!-- Card Header - Dropdown -->
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">  Calle Principal</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                          </div>
                          <!-- Card Body -->
                          <div class="card-body">
                              <div class="table-responsive">
                                      <table class="table table-bordered" id="Tbl_CallPri" width="100%" cellspacing="0">
                                          <thead>
                                              <tr>
                                                  <th>Código</th> 
                                                  <th>Decripcion </th>
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                   <tr>
                                                        
                                                        <th>Código</th> 
                                                        <th>Decripcion </th>
                                                  </tr> 
                                              </tr>
                                          </tfoot>
                                          <tbody>
                                          </tbody>
                                      </table>
                                  </div>
                              
                        </div>
                      </div>
                    </div>
                    
                    
                </form>
            </div>
        </div>
    </div>
</div> 
<div class="modal fade" id="BusCalleSec" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                 
                <h8 class="modal-title" id="myModalLabel"> <i class="fas fa-bacon"></i>  Calle Secundaria</h8>
                <button type="button" class="close" id="btn_cerra_call_sec">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <h8 id="lbl_varan" class="m-0 font-weight-bold text-danger">Seleccione su Calle Secundaria dando doble clic sobre ella</h8>
                    <div class="col-xl-12 col-lg-8" >
                        <div class="card shadow mb-4">
                          <!-- Card Header - Dropdown -->
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">  Calle Secundaria</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                          </div>
                          <!-- Card Body -->
                          <div class="card-body">
                              <div class="table-responsive">
                                      <table class="table table-bordered" id="Tbl_CallSec" width="100%" cellspacing="0">
                                          <thead>
                                              <tr>
                                                  <th>Código</th> 
                                                  <th>Decripcion </th>
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                   <tr>
                                                        
                                                        <th>Código</th> 
                                                        <th>Decripcion </th>
                                                  </tr> 
                                              </tr>
                                          </tfoot>
                                          <tbody>
                                          </tbody>
                                      </table>
                                  </div>
                        </div>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--        <script src="js/PatUbica.js"></script>
        <script src="js/map.js"></script>-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>              
     
		<!--</div>-->

		<!--<script src="js/jquery-3.3.1.min.js"></script>-->
		
		 <!--JQUERY STEP--> 
                <script src="js/jquery.pate.js"></script>
                
                <script src="js/main_pate2.js"></script>
                <script src="js/Patentes2.js"></script>
                <script>
                        function handleChange(input) {
                          if (input.value < 0) input.value = 0;
                          if (input.value > 100) input.value = 100;
                        }
                </script>
               <script src="vendor/date-picker/js/datepicker.js"></script>
               <script src="vendor/date-picker/js/datepicker.en.js"></script><!--
               <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
-->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
  

<!-- Template created and distributed by Colorlib -->
</body>
</html>
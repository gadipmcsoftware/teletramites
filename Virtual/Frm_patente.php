<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FormWizard_v8</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
                <!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style2.css">
                <style>
                    .datepicker{z-index:1151 !important;}
                 </style>
 
	</head>
	<body>
<?php 

$ID = $_REQUEST["id"];

?>
		<!--<div class="wrapper">-->
            <form action="" id="wizard">
                 <input id="id" name="id" type="hidden" value=<?php echo ($ID)?>>
        		<!-- SECTION 1 -->
                <h4></h4>
                <section>
                    <!--<h3>Información General </h3>-->
                    <div class="col-xl-12 col-lg-8"  id="Frm_Acciones" >
             <div class="card shadow mb-4" id="tbl_accion">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Información General</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                    <div class="form-fila" style="display: none" >
                        <div class="form-group">
                            <div class="form-holder">
                                <i class="zmdi zmdi-chevron-down"></i>
                                <!--    <label for="exampleFormControlSelect1">Example select</label>-->
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Seleccione una Patente</option>
                                    </select>
  
                            </div>
                            <div class="form-holder">
                                
<!--                                <div class="col-lg-12">-->
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
                                <!--</div>-->
                            </div>       
                        </div>
                    </div>
                    <div class="form-fila">
                            <div class="form-holder">
                                <i class="zmdi zmdi-pin-drop"></i>
                               <select class="form-control" id="cmb_pat_parroquia">
                                      <option>Parroquia</option>
                                </select>
                            </div>
                            <div class="form-holder">
				<i class="zmdi zmdi-calendar "></i>
                                <input type="text"class="form-control datepicker-here pl-85" data-language='es' data-date-format="dd-mm-yyyy" id="dp2" placeholder="Fecha de Inicio de Actividades">
                                <!--<span class="placeholder">Fecha de Inicio de Actividades:</span>-->                                     
                            </div>
                    </div>
                    <div class="form-fila">
                            <div class="form-holder">
                                <i class="zmdi zmdi-local-grocery-store"></i>
                                <input type="text" class="form-control" placeholder="Nombre del Comercio" id="Nom_comer">
                            </div>
                         <div class="form-group">
                                 <div class="form-holder">   
                                    <span class="placeholder">Número Establecimientos:</span> 
                                </div>
                            <div class="form-holder">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
    <!--                                                    <i class="fas fa-plus"></i>-->
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
                        <!--</div>-->
                        
                    </div>
                    <div class="form-fila">
                            <div class="form-holder">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Actividad principal" id="Txt_act_prin" readonly="readonly">
                                        <input id="Acti_prin" name="Acti_prin" type="hidden">
                                        <input id="Cod_Pat_borra" name="Cod_Pat_borra" type="hidden">
                                        <div class="input-group-append">
                                            <button id="Btn_act_prin" class="btn btn-primary" type="button">
                                                    Buscar     
                                            </button>
                                        </div>
                                      
                                    </div>
                            </div> 
                            <div class="form-holder">
<!--                                <div class="col-lg-12">-->
                                    <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Actividad Secundaria" id="Txt_act_sec" readonly="readonly">
                                    <input id="Acti_Secu" name="Acti_Secu" type="hidden">
                                    <div class="input-group-append">
                                        <button id="Btn_act_sec" class="btn btn-success" type="button">
                                                Buscar     
                                        </button>
                                    </div>
                                      
                                    </div>
                                <!--</div>-->
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
                         <div class="form-group">
                            <div class="form-holder">
                                    <i class="zmdi zmdi-collection-image"></i>
                                    <input type="text" class="form-control" placeholder="Teléfono" id="tele_contri" >
                            </div>
                            <div class="form-holder">
                                 <i class="zmdi zmdi-nature"></i>
                                 <select class="form-control" id="cmb_pat_loper">
                                              <option>Lugar de Operaciones</option>
                                 </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-fila">
                        <div class="form-holder">
<!--                                <div class="col-lg-12">-->
                                    <div class="input-group">
                                    <select class="form-control" id="cmb_pat_calle_pri">
                                      <option>Calle Pricipal</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button id="Btn_busCallPri" class="btn btn-primary" type="button">
                                                Buscar     
                                        </button>
                                    </div>
                                      
                                    </div>
                                <!--</div>-->
                            </div> 
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
                                <!--</div>-->
                            </div> 
                        <!--</div>-->
                    </div>
                    <div class="form-fila">
                        <div class="form-group">
                            <div class="form-holder">
                                <i class="zmdi zmdi-local-hotel"></i>
                                <input type="text" class="form-control" placeholder="Numero de casa" id="Num_casa" >
                            </div>
                            <div class="form-holder">
                                <i class="zmdi zmdi-collection-image"></i>
                                <input type="text" class="form-control" placeholder="Barrio/Cuidadela" id="Txt_barrio" >
                            </div>
                        </div>
                        <div class="form-holder">   
                                    <i class="zmdi zmdi-local-store"></i>
                                    <select class="form-control" id="cmb_pat_tip_act">
                                          <option>Tipo Actividad</option>
                                    </select>
                                </div>
                       
                       
                    </div>
                    <div class="form-fila">
                        <div class="form-holder">   
                                    <i class="zmdi zmdi-local-store"></i>
                                    <select class="form-control" id="tip_rotulo">
                                          <option>Tipo Rotulo</option>
                                    </select>
                       </div>
                    </div>
            </div>
          </div>
                    
                </section>

				<!-- SECTION 2 -->
                <h4></h4>
                <section>
                     <div class="col-xl-12 col-lg-8">
                        <div class="card shadow mb-4">
                          <!-- Card Header - Dropdown -->
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Información Económica</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                          </div>
                          <!-- Card Body -->
                          <div class="card-body">
                              <div class="form-fila">
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
                              <div class="form-fila"  >
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
                                <div class="form-group" style="display: none" id="fec_arte">
                                    <div class="form-holder">
                                        <i class="zmdi zmdi-calendar "></i>
                                        <input type="text"class="form-control datepicker-here pl-85" data-language='es' data-date-format="dd-mm-yyyy" id="dp3" placeholder="Fecha Vencimiento Artesano:">                                   
                                    </div>

                                </div>
                              </div>
                              <div class="form-fila">
                                  <div class="form-group">
                                      <div class="form-holder">
                                            <i class="zmdi zmdi-nature"></i>
                                            <select class="form-control" id="cmb_pat_tam_esta">
                                                         <option>Tamaño de Establecimiento</option>
                                            </select>
                                       </div>
                                  </div>
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
                              <div class="form-fila">
                                  <div class="form-group">
                                          <div class="form-holder" style="display: none" id="div_apl_ter">
                                              <span><h8>Aplica Tercera Edad</h8></span>
                                          </div>
                                          <div class="form-holder" style="display: none" id="div_chb_ter">
                                               <div class="custom-switch custom-switch-label-yesno pl-0">
                                                  <input class="custom-switch-input" id="chb_terc" type="checkbox">
                                                  <label class="custom-switch-btn" for="chb_terc"></label>
                                                </div>
                                          </div>
                                  </div> 
                              </div>
                         </div>
                        </div>
                      </div>
                </section>
                <!-- SECTION 3 -->
                <h4></h4>
                <section>
                    <div class="form-fila">
                            <div class="form-holder">
                                <div class="col-lg-12">
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
                        
                        <!--</div>-->
                    </div>
                    <div class="container-fluid">
                     <div class="col-xl-12 col-lg-8" style="display: none" id="noobli_conta">
                        <div class="card shadow mb-4">
                          <!-- Card Header - Dropdown -->
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Información Contable no obligado a llevar contabilidad</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                          </div>
                          <!-- Card Body -->
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
                          <!-- Card Header - Dropdown -->
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Información Contable obligado a llevar contabilidad</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                          </div>
                          <!-- Card Body -->
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
                    <!--                                                    <i class="fas fa-plus"></i>-->
                                                                        <span class="glyphicon glyphicon-minus"><h8></h8></span>
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
                </section>
                               <!-- SECTION 3 -->
                <h4></h4>
                <section>
                     <div class="col-xl-12 col-lg-8">
                        <div class="card shadow mb-4">
                          <!-- Card Header - Dropdown -->
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">Valores a pagar de Patentes</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                          </div>
                          <!-- Card Body -->
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
            </form>
                
<div class="modal fade" id="BusActEcoPrin" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                 
                <h8 class="modal-title" id="myModalLabel"> <i class="fas fa-chart-bar"></i>Actividad Económica Principal</h8>
                <button type="button" class="close" id="btn_cerra_act_pri">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <h8 id="lbl_varan" class="m-0 font-weight-bold text-danger">Seleccione su Actividad Económica dando doble clic sobre ella</h8>
                    <div class="col-xl-12 col-lg-8" >
                        <div class="card shadow mb-4">
                          <!-- Card Header - Dropdown -->
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">  Actividad Económica</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                          </div>
                          <!-- Card Body -->
                          <div class="card-body">
                              <div class="table-responsive">
                                      <table class="table table-bordered" id="Tbl_ActPri" width="100%" cellspacing="0">
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
<div class="modal fade" id="BusActEcoSec" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                 
                <h8 class="modal-title" id="myModalLabel"> <i class="fas fa-chart-bar"></i>Actividad Económica Secundaria</h8>
                <button type="button" class="close" id="btn_cerra_act_sec">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <h8 id="lbl_varan" class="m-0 font-weight-bold text-danger">Seleccione su Actividad Económica dando doble clic sobre ella, llenar esta opción no es obligatoria </h8>
                    <div class="col-xl-12 col-lg-8" >
                        <div class="card shadow mb-4">
                          <!-- Card Header - Dropdown -->
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 id="lbl_varan" class="m-0 font-weight-bold text-primary">  Actividad Económica</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                            </div>
                          </div>
                          <!-- Card Body -->
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
            
            <!-- Modal Footer -->
<!--            <div class="modal-footer">
                     <div class="col-xl-4 col-lg-8">
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn btn btn-primary" id="Btn_cerraHisto">
                                <span>
                                    Aceptar
                                    <i class="fas fa-user-check" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </div>
            </div>-->
        </div>
    </div>
</div> 
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
                
     
		<!--</div>-->

		<!--<script src="js/jquery-3.3.1.min.js"></script>-->
		
		<!-- JQUERY STEP -->
                <script src="js/jquery.pate.js"></script>
                
                <script src="js/main_pate.js"></script>
                <script src="js/Patente.js"></script>
                <script>
                        function handleChange(input) {
                          if (input.value < 0) input.value = 0;
                          if (input.value > 100) input.value = 100;
                        }
                </script>
               <script src="vendor/date-picker/js/datepicker.js"></script>
               <script src="vendor/date-picker/js/datepicker.en.js"></script>
               <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<!-- Template created and distributed by Colorlib -->
</body>
</html>
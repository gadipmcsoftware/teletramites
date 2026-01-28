<!DOCTYPE html>
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
<!-- DATE-PICKER -->
  <link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
  <!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style2.css">
                <style>
                    .datepicker{z-index:1151 !important;}
                 </style>
</head>

<body class="bg-gray-200">
   



<div class="container">
 <form method="POST" id="Frm_Consulta">
<!--     <input id="tip_predio" name="prodId" type="hidden" >-->
     <div class="card shadow mb-4">
          <a href="#ficInfogen" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">1. Información General</h6>
          </a>
         <div class="collapse hide" id="ficInfogen">
             <div class="card-body">
                  <div class="form-group row">
                     <div class="col-sm-3 mb-3 mb-sm-0">
                          <div class="form-holder">
                                    <i class="zmdi zmdi-account-box-o"></i>
                                    <input type="text" class="form-control" placeholder="Identificación" id="indenti_contri" readonly="readonly">
                           </div>
                         
                    </div>
                   
                    <div class="col-sm-2 mb-3 mb-sm-0">
                         <div class="form-holder">
                                    <i class="zmdi zmdi-eye"></i>
                                    <input type="text" class="form-control" placeholder="Código" id="codi_contri" readonly="readonly">
                           </div>  
                         
                    </div>
                     <div class="col-sm-7 mb-3 mb-sm-0">
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text" class="form-control" placeholder="Nombres" id="Nom_contri" readonly="readonly">
                        </div>
                     </div>
                  </div>
                 <div class="form-group row">
                     <div class="col-sm-5 mb-3 mb-sm-0">
                          <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text" class="form-control" placeholder="Apellidos" id="Apelli_contri" readonly="readonly">
                        </div>
                     </div>
                     <div class="col-sm-3 mb-3 mb-sm-0">
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
                         
                     </div>
                     <div class="col-sm-3 mb-3 mb-sm-0">
                          <div class="form-holder">
				<i class="zmdi zmdi-calendar "></i>
                                <input type="text"class="form-control datepicker-here pl-85" data-language='es' data-date-format="dd-mm-yyyy" id="dp2" placeholder="Fecha de Inicio de Actividades">
                                <!--<span class="placeholder">Fecha de Inicio de Actividades:</span>-->                                     
                            </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">2. Información Económica</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse hide" id="collapseCardExample">
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
                     </div>
<!--                     <div class="form-fila">
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
                              </div>-->
                      
                  </div>
                    
                </div>
</div>
     <div class="card shadow mb-4">
          <a href="#ficDeclaVal" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">3. Declaración de Valores </h6>
          </a>
         <div class="collapse hide" id="ficDeclaVal">
             <div class="card-body">
                 <div class="form-group row">
                      <div class="form-holder">
<!--                                <span><h8>Seleccione el año a Declarar:</h8></span>-->
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
                     
                 </div>
             </div>
         </div>
         
     </div>
</form>
  </div>
  <!-- Large modal -->
           
            
        
  <!-- Bootstrap core JavaScript-->
  <script type="text/javascript" src="js/global/jquery-1.4.4.min.js"></script>
  <!--<script src="vendor/jquery/jquery.min.js"></script>-->  
<!--  libreria debe ser comentada par integracion formulario-->
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
 <!--<link href="css/component-custom-switch.css" rel="stylesheet">-->
  <!-- Page level custom scripts -->
    <script src="js/Patente.js"></script>
  <script src = 'js/bootbox.js'></script>
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

</body>

</html>

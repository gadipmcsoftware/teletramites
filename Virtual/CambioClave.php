<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Plataforma TeleTramites</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" onload="Cargar()">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block" style="background-image: url(imagenes/cayambe.jpg);"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Actualización de Datos</h1>
              </div>
              <form class="user" method="POST" id="Frm_CamClave">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="Txt_cedulaUsr" placeholder="Cedula o Ruc" readonly="readonly">
                  </div>
                </div>
                 <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="Txt_Titulo" placeholder="Titulo">
                    </div>
                    <div class="col-sm-8 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="Txt_NombresUsr" placeholder="Nombres Completos">
                    </div>          
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="Txt_Cuidad" placeholder="Cuidad">
                    </div>
                    <div class="col-sm-8 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="Txt_Direcc" placeholder="Dirección Completa">
                    </div>          
                </div>
                 <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="Txt_EmailUsr" placeholder="Correo Electrónico">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="Txt_clave" placeholder="Contraseña Nueva">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="Txt_repclave" placeholder="Repetir Contraseña">
                  </div>
                </div>
                <a href="#" class="btn btn-primary btn-user btn-block" id="Btn_Cambio">
                   <i class="fas fa-user-edit"></i> Actualizar Datos
                </a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="js/CambContraseña.js?%=Guid.NewGuid()%"></script>
   <script src = 'js/bootbox.js'></script>
</body>

</html>

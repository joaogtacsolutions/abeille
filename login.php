<?php 
session_start();

  if (isset($_SESSION['login']) && $_SESSION['login'] != null)
    header('Location: ./index.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>Abeille</title>
  
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="scripts/login.js"></script>
</head>

<body class="bg-gradient-primary">
  
  <div class="container">
    
    <!-- Outer Row -->
    <div class="row justify-content-center">
      
      <div class="col-xl-10 col-lg-12 col-md-9">
        
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <div class="bg-login-image"></div>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bem-Vindo!</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user logininput" id="login_field" aria-describedby="Login" placeholder="Digite suas credenciais..">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user logininput" id="password_field" placeholder="Senha">
                    </div>
                    <a id="btn_login" class="btn btn-primary btn-user btn-block">
                      Login
                    </a>
                    <div class="form-group">
                      <span id="result_answer" class="text-danger mt-1"></span>
                    </div>                    
                  </form>
                </div>
              </div>
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
  
</body>

</html>
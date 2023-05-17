<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link id="pagestyle" href="../NexTech/assets/LoginNext/css/LayoutLoginFinal.css" rel="stylesheet" />
   
    <title>Login Funcionario</title>

</head>

<body>
<?php
    $mensagem = "";

    if($_POST)
    {
        include_once('Conexao.php');

        $loginFuncionario = $_POST['txtLogin'];
        $senhaFuncionario = $_POST['txtSenha'];
        $id_Departamento_Funcionario = $_POST['txtIDepart'];

        $sql = $conn->query(
        "select * from Funcionario where
        login_Funcionario = '$loginFuncionario' and
        senha_Funcionario = '$senhaFuncionario' and
        id_departamento_Funcionario ='$idDepartamento'
        ");

        if($sql->rowCount()==1)
        {
            session_start();
            foreach($sql as $linha)
            {
                $_SESSION['idFuncionario'] = $linha[0];
                $_SESSION['nomeFuncionario'] = $linha[3];
                $_SESSION['loginFuncionario'] = $linha[9];
                $_SESSION['idDepartamentoFuncionario'] = $linha[15];
            }
            header('Location:NexTech_Sistema.php');
        }
        else
        {
            $mensagem = '<div class="col-sm-12 p-2"><p>Usuário ou senha inválido</p></div>';
        }
    }
?>
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="index.html">
        <img src="../NexTech/assets/img/freeze/logo-transp.png" width="235px" height="65px" class="logo">
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="index.html">
              <i class="fa fa-chart-pie opacity-6  me-1"></i>
              Voltar a home Page
            </a>
          </li>
        </ul>
        <ul class="navbar-nav d-lg-block d-none">
          <li class="nav-item">
            <a href="#" class="btn btn-sm mb-0 me-1 bg-gradient-light">Area de Funcionario</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Bem-vindo!</h1>
            <p class="text-lead text-white"> Nextech technology - Centralizando soluções.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5><img src="../NexTech/assets/LoginNext/logo login2.png" width="200px" height="150px" class="logo"></h5>
            </div>
            <div class="card-body">
              <form role="form"  style="font-family: 'Open Sans', sans-serif; " method="post">
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Login" aria-label="Name" name="txtLogin">
                </div>
                <div class="mb-3"class="form-control">
                    <select name="txtIDepart"id="txtIDepart">
                        <?php 
                        include_once('DepartamentoPuxar.php');
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" name="txtSenha" placeholder="Senha" aria-label="Password">
                </div>
                <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    Eu concordo com <a href="javascript:;" class="text-dark font-weight-bolder">Os Termos e Condições</a>
                  </label>
                </div>
                <div class="text-center">
                  <button type="sumit" class="btn bg-gradient-dark w-100 my-4 mb-2">Entrar</button>
                </div>
                <p class="text-sm mt-3 mb-0">Não tem uma conta? <a href="FuncionarioCadastre-Se.php" class="text-dark font-weight-bolder"> Inscrever-se</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center">
          
        </div>
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Soft by Nextech technology.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <script src="../NexTech/assets/LoginNext/js/core/popper.min.js"></script>
  <script src="../NexTech/assets/LoginNext/js/core/bootstrap.min.js"></script>
  <script src="../NexTech/assets/LoginNext/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../NexTech/assets/LoginNext/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

</body>

</html>
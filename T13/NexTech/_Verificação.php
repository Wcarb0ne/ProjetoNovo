<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="../NexTech/assets/LoginNext/css/LayoutLoginFinal.css" rel="stylesheet" />

    <title>Nextech</title>

</head>
<?php
    $mensagem = "";

    if($_POST)
    {
        include_once('Conexao.php');

        $emailFuncionario = $_POST['txtEmail'];
        $senhaFuncionario = $_POST['txtSenha'];

        $sql = $conn->query(
        "select * from Funcionario where
        email_Funcionario = '$emailFuncionario' and
        senha_Funcionario = '$senhaFuncionario' 
        ");

        if($sql->rowCount()==1)
        {
            session_start();
            foreach($sql as $linha)
            {
                $_SESSION['idFuncionario'] = $linha[0];
                $_SESSION['nomeFuncionario'] = $linha[3];
                $_SESSION['emailFuncionario'] = $linha[12];
            }
            header('Location:_Login.php');
        }
        else
        {
            $mensagem = '<div class="col-sm-12 p-2"><p>Usuário ou senha inválido</p></div>';
        }
    }
?>

    <body >

     
    <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Verificação</h4>
                  <p class="mb-0">Digite seu e-mail e senha para entrar</p>
                </div>
                <div class="card-body">
                  <form role="form" method="post" action="#">
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg"name="txtEmail" placeholder="E-mail">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" name="txtSenha" placeholder="Senha">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe"> Lembre-Me</label>
                    </div>
                    <div class="text-center">
                      <button type="sumit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0"value="Verificação"formaction="_Verificação.php">Verificar</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('../NexTech/assets/LoginNext/chefinho.png');
                background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
    </body>
</html>
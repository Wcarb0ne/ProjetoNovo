<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500&display=swap"rel="stylesheet" />
    <link rel="stylesheet" href="./Cadastro-Parceiro/styles.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">



  <script src="js/bootstrap.js"></script>
  <script src="js/jquery-3.6.4.js"></script>

  <script src="script.js"></script>
  <script src="./Cadastro-Parceiro/ParceiroScript.js"></script>

    <link rel="stylesheet" href="T13/_Projeto/css/faleconosco.css">

   
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

        $sql = $conn->query(
        "select * from Funcionario where
        login_Funcionario = '$loginFuncionario' and
        senha_Funcionario = '$senhaFuncionario'
        ");

        if($sql->rowCount()==1)
        {
            session_start();
            foreach($sql as $linha)
            {
                $_SESSION['idFuncionario'] = $linha[0];
                $_SESSION['nomeFuncionario'] = $linha[3];
                $_SESSION['loginFuncionario'] = $linha[9];
            }
            header('Location:NexTech_Sistema.php');
        }
        else
        {
            $mensagem = '<div class="col-sm-12 p-2"><p>Usuário ou senha inválido</p></div>';
        }
    }
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="" class="form-control" method="POST">
                <div class="row">
                    <div class="col-sm-12 p-3">
                        <div class="card imgLogin bg-dark">
                                
                        </div>
                    </div>

                    <div class="col-sm-12 p-2">
                        <input type="text" name="txtLogin" id="txtLogin"placeholder="Informe seu Login" class="form-control">
                    </div>

                    <!-- <div class="col-sm-12 p-2">
                    <select class="form-control" id="txtIDC">
                        <php 
                            include_once('DepartamentoPuxar.php');
                            ?>
                        </select>
                    </div> -->

                    <div class="col-sm-12 p-2">
                        <input type="password" name="txtSenha" id="txtSenha" placeholder="Informe seu Login" class="form-control">
                    </div>
                        
                    <?=$mensagem?>
                        
                    <div class="col-sm-4 p-2"></div>
                    <div class="col-sm-4 p-2">
                        <button name="btoOK" id="btoOK" class="btn btn-primary form-control" formaction="index.php">Entrar</button>
                    </div>
                    <div class="col-sm-4 p-2"></div>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>        
</div>

<script src="js/jquery.js"></script>
<script src=""></script>

</body>

</html>
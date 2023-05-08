<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/LoginIndex.css"><!-- design pagina login -->

   
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
<main class="main_content container">
        <div class="container mt-4">
            <div class="row">
                <div class="col-10">

                    <div class="content">
                        <center>
                            <div class="box-artigo">

                                <form class="frmLogin" style="font-family: 'Open Sans', sans-serif; " method="post">
                                        
                                    <div class="login-box">

                                            <div class="user-box">
                                                <img src="./assets/img/freeze/logo outra.png" width="288px" height="88px" class="logo">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="user-box">
                                                <input type="text" name="txtLogin" class="form-control" placeholder="  Login  ">
                                            </div>

                                                <div class="user-box">
                                                    <select class="text55"name="txtIDepart"id="txtIDepart">
                                                            <?php 
                                                            include_once('DepartamentoPuxar.php');
                                                            ?>
                                                    </select>
                                                </div>

                                            <div class="user-box">
                                                <input type="password" name="txtSenha" placeholder="  Senha  ">
                                            </div>
                                            <button type="text" class="oxi3 mb-4" formaction="_Login.php">Entrar</button>

                                            <p> ------------------ ou ------------------ </p>

                                            <div class="col-sm-10">
                                                <p><a class="oxi4 mb-2" href="FuncionarioCadastre-Se.php">Cadastre-se</a>  <a class="oxi5 mb-2" href="index.html">Sair</a></p>
                                            </div>

                                            
                                        
                                    </div>

                                </form>
                            </div>

                        </center>

                    </div>

                </div>

            </div>
        </div>
        </div>
        </div>
    </main>

    <script src=""></script>
    <script src=""></script>

</body>

</html>
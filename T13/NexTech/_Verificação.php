<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/Verificacao.css">

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

        <div class="wrapper fadeInDown">
        
            <div class="content-login">
                <h2 class="active"><img src="./assets/img/Sistema img/step1.jpg" width="" height="100px" alt=""></h2>

                <form class="box-login" method="post" action="#">
                    <label for=""></label>
                    <input type="email" id="email" class="campo" name="txtEmail" placeholder="E-mail">
                    <label for=""></label>
                    <input type="password" id="password" class="campo" name="txtSenha" placeholder="Senha">
                    <input type="submit" class="botao" value="Verificação"formaction="_Verificação.php">
                </form>

            </div>
        </div>
    </body>
</html>
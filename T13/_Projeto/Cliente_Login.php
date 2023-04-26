<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/FUNCIONAAAA.css">



    <title>Login</title>

</head>

<body>
    <?php
    $mensagem = "";
    if ($_POST) {
        include_once('conexao.php');

        $loginCliente = $_POST['txtLogin'];
        $senhaCliente = $_POST['txtSenha'];

        $sql = $conn->query(
            "select * from Cliente where
                login_Cliente = '$loginCliente' and
                senha_Cliente = '$senhaCliente'
            "
        );

        if ($sql->rowCount() == 1) {
            session_start();
            foreach ($sql as $linha) {
                $_SESSION['idCliente'] = $linha[0];
                $_SESSION['nomeCliente'] = $linha[1];
                $_SESSION['loginCliente'] = $linha[2];
            }

            header('Location:Login_sistema.php');
        } else {
            $mensagem = '<div class="col-sm-12 p-2"><p>Usuário ou senha inválido</p></div>';
        }
    }
    ?>

    <main class="main_content container">
        <div class="container mt-4">
            <div class="row">
                <div class="col-10">

                    <div class="content">

                        <div class="box-artigo">

                            <form class="frmLogin" method="post" action="#">

                                <div class="login-box">

                                    <form>

                                        <div class="title icon icon-forward-1"> </div>

                                
                                        <div class="user-box">
                                            <input id="txtLogin" type="text" name="txtLogin" required="" oninput="loginValidacao">
                                            <label>Nome</label>
                                        </div>

                                        <div class="user-box">
                                            <input id="txtSenha" class="" type="password" name="txtSenha" required="">
                                            <label for="email" class="label icon icon-lock-1">SENHA</label>
                                        </div>
                                        <center>

                                            <?= $mensagem ?>

                                            <p>Sem Cadastro <a href="Cliente_cadastro.php" class="a2">CADASTRE-SE</a></p>

                                            <p>Gostaria de Cadastrar sua empresa ?</sub><a href="frm_Empresa.php" class="a2">CADASTRE-SE</a></p>


                                            <center> <a href="Login_sistema.php">ENVIAR<span></span> </a></center>

                                    </form>

                                </div>

                        </div>
                    </div>
                </div>
            </div>
    </main>

    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>







</form>
</div>

</body>

</html>
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

    include_once('Conexao.php');
    if ($_POST) {
        
        $loginUsuario = $_POST['txtLogin'];
        $senhaUsuario = $_POST['txtSenha'];

        $sql = $conn->query(
            "select * from Cliente where
                login_Cliente = '$loginUsuario' and
                senha_Cliente = '$senhaUsuario'
            "
        );

        if ($sql->rowCount() == 1) {
            session_start();
            foreach ($sql as $linha) {
                $_SESSION['idUsuario'] = $linha[0];
                $_SESSION['nomeUsuario'] = $linha[3];
                $_SESSION['loginUsuario'] = $linha[5];
            }

            header('Location:Cliente_sistema.php');
            
        } else {
            $sql = $conn->query(
                "select * from Parceiro where
                    login_Parceiro = '$loginUsuario' and
                    senha_Parceiro = '$senhaUsuario'
                "
            );

            if ($sql->rowCount() == 1) {
                session_start();
                foreach ($sql as $linha) {

                    $_SESSION['idUsuario'] = $linha[0];
                    $_SESSION['nomeUsuario'] = $linha[3];
                    $_SESSION['loginUsuario'] = $linha[9];
                }

                header('Location:Parceiro_sistema.php');

            } else {
                
                echo '<div class="col-sm-12 p-2"><p>Usuário ou senha inválido</p></div>';
            }
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
                                                <input type="text" name="txtLogin"  >
                                                <label>NOME</label>
                                            </div>
                                            <div class="user-box">
                                                <input type="password" name="txtSenha"  >
                                                <label>SENHA</label>
                                            </div>
                                            <button type="text" class="oxi3 mb-4" formaction="_Login.php">Entrar</button>

                                            
                                            <p style="color: white;">Sem Cadastro? <br><a class="oxi4 mb-2" href="Cliente_cadastro.php?Cliente=cadastro">Cadastre-se</a> </p>
                                            <div class="col-sm-10">

                                                <p style="color: white;">Gostaria de Cadastrar sua empresa?<br><a  class="oxi4 mb-2" href="frm_Parceiro.php?Parceiro=cadastro">Clique aqui</a></p>
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

    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
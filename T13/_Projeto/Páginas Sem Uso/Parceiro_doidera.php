<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="css/bootstrap.css">
 
 </head>

<body>
<?php

    $mensagem = "";

    if($_POST)
    {
        include_once('Conexao.php');

        $loginParceiro = $_POST['txtLogin'];
        $senhaParceiro = $_POST['txtSenha'];

        $sql = $conn->query(
            "select * from Parceiro where
                login_Parceiro = '$loginParceiro' and
                senha_Parceiro = '$senhaParceiro'
            ");

            if($sql->rowCount()==1)
            {
                session_start();
                foreach($sql as $linha)
                {
                    $_SESSION['idParceiro'] = $linha[0];
                    $_SESSION['nomeParceiro'] = $linha[3];
                    $_SESSION['loginParceiro'] = $linha[9];
                }

                header('Location:Parceiro_sistema.php');
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
                            <div class="card bg-blue">                               
                            </div>
                        </div>
                        <div class="col-sm-12 p-2">
                            <input type="text" name="txtLogin" id="txtLogin"placeholder="Informe seu Login" class="form-control" required>
                        </div>
                        <div class="col-sm-12 p-2">
                            <input type="password" name="txtSenha" id="txtSenha" placeholder="Informe sua Senha" class="form-control" required>
                        </div>
                        
                        <?=$mensagem?>
                        
                        <div class="col-sm-4 p-2"></div>
                        <div class="col-sm-4 p-2">
                            <button name="btoOK" id="btoOK" class="btn btn-primary form-control" formaction="Parceiro_index.php">Entrar</button>
                        </div>
                        <div class="col-sm-4 p-2"></div>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>       
    </div>
</body>
</html>
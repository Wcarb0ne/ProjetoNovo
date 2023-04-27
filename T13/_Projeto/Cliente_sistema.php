<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <script src="/Jquery/jquery-3.6.4.js"></script>

    <title>Login</title>

</head>
<body>
<?php include_once('Cliente_Autenticar.php');?>
<?php include_once('Conexao.php');?>
    <div class="container mt-4">
        <div class="row" id="Topo">
            <div class="col-sm-12">
                <?php include_once('_header.php');?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <?php include_once('_menu.php');?>
            </div>
            <div class="col-sm-10 ">
                <?php
                    if($_GET)
                    {

                        if(isset($_GET['Tela']))
                        {

                            $tela = $_GET['Tela'];

                            if($tela  == 'Cliente')
                            {
                                include_once('cadastro.php');
                            }

                            elseif($tela =='Cadastro Empresa')
                            {
                                include_once('frm_Empresa.php');
                            }

                            elseif($tela =='tela de Usuario')
                            {
                                include_once('Cliente_Usuario.php');
                            }

                            elseif($tela =='Sair')
                            {
                                include_once('Cliente_AutenticarSair.php');
                            }
                           
                        }
                        else{
                            echo '<h1> ERRO, Pagina não encontrada </h1>';
                        }


                    }
                    else{
                        include_once('_Home.php');
                    }
?>
            </div>
        </div>
    </div>
    <footer class="Rodape
    ">
        <div class="container">
                <?php include_once('_footer.php');?>
        </div>
    </footer>
    <script src="Script.js"></script>
</body>
</html>
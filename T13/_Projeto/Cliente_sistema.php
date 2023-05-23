<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/icon.css">
    <link rel="stylesheet" href="css/Footer_Header.css">
    <!-- <link rel="stylesheet" href="css/FUNCIONAAAA.css"> -->
    <link rel="stylesheet" href="css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500&display=swap"rel="stylesheet" />
    <!--RODAPE --><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>


    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>

    <script src="js/script.js"></script>

    <title>Login</title>
</head>


<body>
    <?php include_once('Conexao.php');  ?>
    <?php include_once('www_autenticar.php'); ?>
    <div class="container-fluid mt-5 dg-dark">


        <div class="row">
            <div class="col-sm-12 ">
                <?php
                if ($_GET) {

                    if (isset($_GET['Cliente'])) {

                        $cliente = $_GET['Cliente'];

                        if ($cliente  == 'cadastro') {
                            include_once('Cliente_cadastro.php');
                        }
                        // elseif ($cliente == 'Cadastro Empresa') {
                        //     include_once('frm_Empresa.php');
                        // } 
                        elseif ($cliente == 'Dados') {
                            include_once('Cliente_Dados.php');
                        } elseif ($cliente == 'Sair') {
                            include_once('www_AutenticarSair.php');
                        } elseif ($cliente == 'Home') {
                            include_once('_Home.php');
                        } elseif ($cliente == 'Inicio') {
                            include_once('lading_foife.php');
                        }
                    } else {
                        echo '<h1> ERRO, Pagina não encontrada </h1>';
                    }
                } else {
                    include_once('Cliente_Dados.php');
                }
                ?>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>


    <footer>
        <?php 
            include_once('_footer.php');?>
    </footer>

</body>

</html>
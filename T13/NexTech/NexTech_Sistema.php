<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png">
    
    <!-- Bootstrap 3.3.2 -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="./assets/js/rs-plugin/css/settings.css">

    <link rel="stylesheet" href="./assets/css/styles.css">

    <script src="./ScriptEmpresa.js"></script>

    <script type="text/javascript" src="./assets/js/modernizr.custom.32033.js"></script>
    
    <title>Next Tech</title>

</head>
<body>
<?php include_once('NexTech_Autenticar.php');?>
<?php include_once('System_home.php');?>
    <
    
            <div class="col-sm-12">
                <?php
                    if($_GET)
                    {
                        if(isset($_GET['Tela']))
                        {
                            $tela = $_GET['Tela'];

                            if($tela  == 'Departamento')
                            {
                                include_once('System_Departamento.php');
                            }
                            elseif($tela =='Funcionario')
                            {
                                include_once('System_Funcionario.php');
                            }
                            elseif($tela =='Graficos')
                            {
                                include_once('System_Graficos.php');
                            }
                            elseif($tela =='Perfil')
                            {
                                include_once('System_Perfil_Usuario.php');
                            }   
                            elseif($tela =='Sair')
                            {
                                include_once('NexTech_AutenticarSair.php');
                            }
                        }
                        else{
                            echo '<h1> ERRO, Pagina não encontrada </h1>';
                        }
                    }
                    
                ?>
            </div>
            
   

    <script src="./assets/js/jquery-1.11.1.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/placeholdem.min.js"></script>
    <script src="./assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="./assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            appMaster.preLoader();
        });
    </script>
</body>
</html>
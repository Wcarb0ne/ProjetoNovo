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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <title>Next Tech</title>

</head>
<body>
<?php include_once('NexTech_Autenticar.php');?>
<?php include_once('_header.php');?>
    <div class="container mt-5 dg-dark">
        <div class="row">

        </div>
    </div>
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-10">
                <?php
                    if($_GET)
                    {
                        if(isset($_GET['Tela']))
                        {
                            $tela = $_GET['Tela'];

                            if($tela  == 'Departamento')
                            {
                                include_once('Departamento.php');
                            }
                            elseif($tela =='Funcionario')
                            {
                                include_once('Funcionario.php');
                            }
                            elseif($tela =='Planos')
                            {
                                include_once('Planos.php');
                            }
                            elseif($tela =='Servicos')
                            {
                                include_once('Parceiro_ServicosFrm.php');
                            }
                                elseif($tela == "TabelaServicos")
                                {
                                include_once('Parceiro_ServicosTabela.php');
                                }

                            elseif($tela =='FaleConosco')
                            {
                                include_once('frm_FaleConosco.php');
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
                    else {
                        include_once('Parceiro_Home.php');
                    }
                ?>
            </div>
            
        </div>
    </div>
 </div>

    <footer>

        <?php 
            include_once('_footer.php');
        ?>
   
    </footer>

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
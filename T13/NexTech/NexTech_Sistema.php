<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="css/bootstrap.css">
   Cabeçalho e Rodapé <link rel="stylesheet" href="css/Footer_Header.css">
   Menu<link rel="stylesheet" href="css/MenuParceiro2/css/MenuParceiro2.css">
   Menu<link rel="stylesheet" href="css/MenuParceiro2/css/fonts-icones.css">
   Menu<link rel="stylesheet" href="css/MenuParceiro2/js/MenuParceiro2.js">

 
    RODAPE<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>
 

    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>



    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500&display=swap"rel="stylesheet" />
    <link rel="stylesheet" href="./Cadastro-Parceiro/styles.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

  <script src="js/bootstrap.js"></script>
  <script src="js/jquery-3.6.4.js"></script>

  <script src="script.js"></script>
    <script src="./Cadastro-Parceiro/ParceiroScript.js"></script> -->
    <link rel="shortcut icon" href="favicon.png">
    
    <!-- Bootstrap 3.3.2 -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="./assets/js/rs-plugin/css/settings.css">

    <link rel="stylesheet" href="./assets/css/styles.css">


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

            <!-- <div class="col-sm-12">
                 <php include_once('Parceiro_menu.php');?>
            </div> -->

        </div>
    <!-- </div> -->
    <!-- <div class="container "> -->
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10 ">
                <?php
                    if($_GET)
                    {
                        if(isset($_GET['Tela']))
                        {
                            $tela = $_GET['Tela'];

                            if($tela  == 'Parceiro')
                            {
                                include_once('frm_Parceiro.php');
                            }
                            elseif($tela =='EmpresaCliente')
                            {
                                include_once('frm_Empresa.php');
                            }
                            elseif($tela =='Categoria')
                            {
                                include_once('Parceiro_CategoriaFrm.php');
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
                                include_once('Parceiro_autenticarSair.php');
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
            <div class="col-sm-1">
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
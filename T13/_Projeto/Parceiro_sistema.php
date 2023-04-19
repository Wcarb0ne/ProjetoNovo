<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.css">
   <!--cabeçalho --> <link rel="stylesheet" href="css/headerdeuruim.css">
   <!--rodape--><link rel="stylesheet" href="css/footerAMEM.css">
   <!--Menu --><link rel="stylesheet" href="css/MenuParceiro/Parceiro_Menu.css">
   <!--Menu --><link rel="stylesheet" href="css/MenuParceiro/fonts-icones.css">
   <!--Menu --><link rel="stylesheet" href="css/MenuParceiro/reset.css">
   <!-- RedeSocial<link rel="stylesheet" href="css/redeSocial.css"> css ta bugando a estrutura--> 

   <!-- fle conosco <link rel="stylesheet" href="css/feleconosco.css"> -->

    <!--RODAPE --><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
    <!--RODAPE --><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>
    <!--RODAPE --><link rel="stylesheet" href="css/footerAMEM.css">
    <!--icones bootstrap-->   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <title>Login</title>

</head>
<body>

<?php include_once('Parceiro_autenticar.php');?>
<?php include_once('_header.php');?>
    <div class="container mt-1">
        <div class="row">
            <div class="col-sm-12">
                <!-- <header class="main_header container">        
                    <div class="content">

                    </div> -->
                </header>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 mb-1">
                <?php include_once('Parceiro_menu.php')?>
            </div>
        
            <div class="col-sm-6 ">
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
                            elseif($tela =='Categoria')
                            {
                                include_once('Parceiro_Categoria.php');
                            }
                            elseif($tela =='Servicos')
                            {
                                include_once('Parceiro_Servicos.php');
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
                ?>
            </div>

        </div>


    </div>

    <footer class="footer">
        <div class="container-fluid">
                <?php include_once('_footer.php');?>
        </div>
    </footer> 
    <script src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
   <!-- Cabeçalho e Rodapé --> <link rel="stylesheet" href="css/Footer_Header.css">

   
   <!--Menu --><link rel="stylesheet" href="css/MenuParceiro2/css/fonts-icones.css">
   <!--Menu --> <link rel="stylesheet" href="css/icon.css">
   

   <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500&display=swap"rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

 
    <!--RODAPE --><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>
 

    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>







  <script src="js/bootstrap.js"></script>
  <script src="js/jquery-3.6.4.js"></script>
  <script src="js/script.js"></script>


    <title>Next Tech</title>
</head>


<body>
<?php 
include_once('Conexao.php');?>
<?php include_once('www_autenticar.php');?>
    <div class="container mt-5 dg-dark">
        <div class="row">
            <div class="col-sm-12">
              
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 ">
                <?php
                    if($_GET)
                    {
                        if(isset($_GET['Parceiro']))
                        {
                            $parceiro = $_GET['Parceiro'];

                            if($parceiro  == 'cadastro')
                            {
                                include_once('frm_Parceiro.php');
                            }
                            elseif($parceiro =='dados')
                            {
                                include_once('Parceiro_Dados.php');
                            }
                            // elseif($parceiro =='Categoria')
                            // {
                            //     include_once('Parceiro_CategoriaFrm.php');
                            // }
                            elseif($parceiro =='Servicos')
                            {
                                include_once('Parceiro_ServicosFrm.php');
                            }
                                // elseif($parceiro == "TabelaServicos")
                                // {
                                // include_once('Parceiro_ServicosTabela.php');
                                // }

                            elseif($parceiro =='FaleConosco')
                            {
                                include_once('Parceiro_FaleConosco.php');
                            }

                            elseif($parceiro =='Sair')
                            {
                                include_once('www_autenticarSair.php');
                            }
                        }
                        else{
                            echo '<h1> ERRO, Pagina não encontrada </h1>';
                        }
                    }
                    else {
                        // include_once('Parceiro_Dados.php');
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
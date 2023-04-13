<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/headerdeuruim.css">
    <link rel="stylesheet" href="css/Busca.css">
     
     <!--RODAPE --><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
     <!--RODAPE --><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>
     <!--RODAPE --><link rel="stylesheet" href="css/footerAMEM.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="css/Login/js/jquery.js"></script>

    <title>Login</title>

</head>
<body>

<?php include_once('www_autenticar.php');?>
    <div class="container mt-4">
        <div class="row">
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

                            if($tela  == 'Parceiro')
                            {
                                include_once('frm_Parceiro.php');
                            }

                            elseif($tela =='Sair')
                            {
                                include_once('wwww_autenticarSair.php');
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
    <footer class="footer">
        <div class="container">
                <?php include_once('_footer.php');?>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
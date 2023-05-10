<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/landingPage.css">


    <script src="script.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">

    <!-- Cabeçalho e Rodapé -->
    <link rel="stylesheet" href="css/landingPage.css">
    
    

    <!--fle conosco-->
    <link rel="stylesheet" href="css/faleconosco.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

        <!--RODAPE --><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>



    <script src="css/Login/js/jquery.js"></script>








    <?php include_once('_header.php') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <img src="css/img/teste.jpg" class="imagem" alt="">
        </div>
        <div class="col-sm-3"></div>
    </div>
    <br>

    <h3>Aqui estão as melhores perto de você </h3>
    <hr>
    <div class="container-fluid">

        <div class="row">
            <!-- Começa aqui o modelo da impressão do PHP -->
            
            <?php


            include('Conexao.php');
            try {

                $sql = $conn->query("select * from Parceiro where status_Parceiro = 'ativo'");
               
                foreach ($sql as $linha) {
                    // echo "<pre>";
                    // print_r($linha);
                    // echo "</pre>";

                    $id = $linha[0];
                    $nome = $linha['nome_Parceiro'];
                    $logradouro_Parceiro = $linha['logradouro_Parceiro'];
                    $ramo_Parceiro = $linha['ramo_Parceiro'];

                    echo'

                    <div class="col-md-3 text-center mb-3 p-1">
                        <div class="card">
                            <img src="css/img/doguin-fino.png" class="card-img-top imagem1" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">'.$nome.'</h5>
                                <p class="card-text">Endereço: '.$logradouro_Parceiro.'</p>
                                <p class="card-text">Ramo: '.$ramo_Parceiro.'</p>
                                <a href="sistema_mapa.php?id='.$id.'" class="btn btn-primary" >Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    ';
                }
                
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
            ?>

            <!-- Termina aqui o modelo PHP -->
        </div>
    </div>


</div>

<?php include_once('_footer.php') ?>
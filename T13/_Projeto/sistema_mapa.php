<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexTech Mapa</title>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>




    <link rel="stylesheet" href="css/ito_mapa.css">




    <!--RODAPE -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/landingPage.css">

    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.4.js"></script>


</head>

<body>


    <div class=" z-index: -1; ">
        <?php include_once('_header.php');

        include_once('mapa_Pesquisa.php');

        ?>

    </div>


    <div class="container mb-4">
        <div class="row">
            <div class="col-sm-4">
                <div id="" class="">
                    <?php
                    try {


                        $id = $_GET['id'];

                        $teste = 'select * from Parceiro where Id_Parceiro=' . $id;
                        $sql = $conn->query($teste);


                        foreach ($sql as $linha) {
                            // echo "<pre>";
                            // print_r($linha);
                            // echo "</pre>";

                            $id = $linha[0];
                            $nome = $linha['nome_Parceiro'];
                            $logradouro_Parceiro = $linha['logradouro_Parceiro'];
                            $ramo_Parceiro = $linha['ramo_Parceiro'];
                            $obs_Parceiro = $linha['obs_Parceiro'];

                            echo '

            <div class="card">
                <img src="css/img/doguin-fino.png" class="card-img-top imagem1" alt="...">
                <div class="card-body">
                    <h5 class="card-title">' . $nome . '</h5>
                    <p class="card-text">Endereço: ' . $logradouro_Parceiro . '</p>
                    
                    <p class="card-text">Ramo: ' . $ramo_Parceiro . '</p>
                    <p class="card-text">Ramo: ' . $ramo_Parceiro . '</p>
                    <p class="card-text">Obs: ' . $obs_Parceiro . '</p>
                   
               
            </div>
        </div>
        ';
                        }
                    } catch (PDOException $ex) {
                        echo $ex->getMessage();
                    }



                    ?>

                </div>
            </div>
            <div class="col-sm-8">
                <div id="map" class="bg-dark"></div>
            </div>

        </div>


    </div>

    <input type="text" name="" id="txtID" value="<?= $id_Parceiro ?>" style="display: none;">
    <input type="text" name="" id="txtNumero" value="<?= $numero_Parceiro ?>" style="display: none;">
    <input type="text" name="" id="logradouro_Parceiro" value="<?= $logradouro_Parceiro ?>" style="display: none;">
    <input type="text" name="" id="cidade_Parceiro" value="<?= $cidade_Parceiro ?>" style="display: none;">
    <input type="text" name="" id="uf_Parceiro" value="<?= $uf_Parceiro ?>" style="display: none;">

    <?php include_once('_footer.php') ?>

    <script src="Script_Mapa.js"></script>

    <script src="js/script.js"></script>
</body>

</html>
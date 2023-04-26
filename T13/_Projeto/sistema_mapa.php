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


    <?php include_once('_header.php') ?>


    <div class="container mb-4">
        <div class="row">
            <div class="col-sm-4">
                <div id="" class="">



                    <div class="card" style="width:18rem;">

                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Assistente Rapido</h6>
                            <p class="card-text"></p>
                            Esta a 389 Metros do seu local
                        </div>
                    </div>
                    <br>


                    <div class="card" style="width:18rem;">

                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Tech Assistencia</h6>
                            <p class="card-text"></p>
                            Esta a 863 Metros do seu local
                        </div>
                    </div>
                    <br>






                    <div class="card" style="width:18rem;">

                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Concerte Agora</h6>
                            <p class="card-text"></p>
                            Esta a 863 Metros do seu local
                        </div>
                    </div>
                    <br>



                    <div class="card" style="width:18rem;">

                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Tudo Arruma</h6>
                            <p class="card-text"></p>
                            Esta a 863 Metros do seu local
                        </div>
                    </div>
                    <br>



                    <div class="card" style="width:18rem;">

                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Iruma</h6>
                            <p class="card-text"></p>
                            Esta a 863 Metros do seu local
                        </div>
                    </div>
                    <br>








                </div>
            </div>
            <div class="col-sm-8">
                <div id="map" class="bg-dark"></div>
            </div>

        </div>


    </div>



    <?php include_once('_footer.php') ?>

    <script src="Script_Mapa.js"></script>
</body>

</html>
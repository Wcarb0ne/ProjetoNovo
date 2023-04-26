<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexTech Mapa</title>
    <!-- Fonte -->0
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <!-- Cabeçalho e Rodapé -->
    <link rel="stylesheet" href="css/Footer_Header.css">

    <link rel="stylesheet" href="css/ito_mapa.css">

    <link rel="stylesheet" href="css/landingPage.css">

    <!--fle conosco-->
    <link rel="stylesheet" href="css/faleconosco.css">

    <!--RODAPE -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
    <!--RODAPE -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <script src="js/jquery-3.6.4.js"></script>
</head>

<body>


    <div class="container">
        <!-- Cabeçalho -->
        <header>
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    include_once('_header.php');
                    ?>
                </div>
            </div>
        </header> <br>
        <!--  -->

        <aside class="">


        </aside>

        <main>

            <?php include_once('menu_mapa.php') ?>


            <div style="height: 80px;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                    </div>

                </div>
            </div>



    </div>

    </main>


    <footer class="footer">
        <hr style="background-color:white;">
        <div class="container-fluid">
            <?php include_once('_footer.php'); ?>
        </div>
    </footer>

    <script src="Script_Mapa.js"></script>

</body>

</html>
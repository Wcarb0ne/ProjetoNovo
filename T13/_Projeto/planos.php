<!DOCTYPE html>
<html>

<head>
    <title>Planos</title>
    <link rel="stylesheet" type="text/css" href="css/SobreNos.css">


    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>



    <!--RODAPE -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/landingPage.css">
</head>

<body>
    <header>
        <?php include_once('_header.php') ?>
    </header>
    <div class="container">


        <main>
            <section>
                <h2>Conheça nossos planos</h2>
                <p>

                    temos Planos variados, onde começamos do mais basico ate o Avançado
                </p>
                <div class="row">
                
                    <div class="col-sm-3 ">
                        <div class="card" style="width:18rem;">
                            <img src="css/img/one4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Plano Bronze</h5>
                                <h6 class="card-subtitle mb-2 text-muted ">Básico</h6>
                                <p class="card-text"> No nosso plano Bronze você tera direito de receber um icone personalizado para ficar em destaque durante o periodo de 3 meses </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3">
                        <div class="card" style="width:18rem;">
                            <img src="css/img/ata.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Plano Prata</h5>
                                <h6 class="card-subtitle mb-2 text-muted ">Intermediario</h6>
                                <p class="card-text"> No nosso plano Prata você tera direito de receber um icone personalizado para ficar em destaque durante o periodo de 6 meses </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">

                    <div class="card" style="width:18rem;">
                            <img src="css/img/oro.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Plano ouro</h5>
                                <h6 class="card-subtitle mb-2 text-muted ">Avançado</h6>
                                <p class="card-text"> No nosso plano Ouro você tera direito de receber um icone personalizado para ficar em destaque durante o periodo de 9 meses mais bonus de 3 meses completos  </p>
                            </div>
                        </div>

                    </div>
            </section>

            <section>
    </div>
    </main>
    <footer>
        <?php include_once('_footer.php') ?>
    </footer>
</body>

</html>
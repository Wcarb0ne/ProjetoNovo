<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="script.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Fonte -->0
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">

    <!-- Cabeçalho e Rodapé -->
    <link rel="stylesheet" href="css/Footer_Header.css">

    <link rel="stylesheet" href="css/landingPage.css">

    <!--fle conosco-->
    <link rel="stylesheet" href="css/faleconosco.css">

    <!--RODAPE -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
    <!--RODAPE -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <script src="css/Login/js/jquery.js"></script>

    <title>Login</title>

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
        </header>
        <!--  -->
        
        <div style="height: 80px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <?php
    include_once('_Home.php');

                    ?>
                </div>

            </div>
        </div>


    </div>


    <footer class="footer">
        <hr style="background-color:white;">
        <div class="container-fluid">
            <?php include_once('_footer.php'); ?>
        </div>
    </footer>


</body>

</html>
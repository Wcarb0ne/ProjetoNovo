<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NexTech</title>
  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/landingPage.css">
<link rel="stylesheet" href="css/malsase.css">

  

      <!--Redes Sociais--><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'>

  <script src="js/bootstrap.js"></script>
  <script src="js/jquery-3.6.4.js"></script>
</head>



<body>
<?php 

include_once('Validar_index.php');
include_once('_header.php'); ?>

<!-- Carrossel -->

<style>
  h1{
    font-size: 40px;
  }
  p{
    font-size: 19px;
  }
</style>


  <div class="container">



    <header style="margin-bottom: 20;">
      <div class="container text-center">
        <div class="row align-items-Center mt-3">

          <div class="col-sm-6" style="text-align: justify;">
            <h1> Procurando uma Boa Assistência Técnica?</h1>
            <p> A busca por uma boa assistência técnica é extremamente importante para garantir o bom funcionamento e prolongar a vida útil de equipamentos eletrônicos, eletrodomésticos e outros dispositivos utilizados em nosso cotidiano. </p>
            <p> Com o passar do tempo, é natural que esses equipamentos apresentem problemas e necessitem de reparos. Nesse momento, contar com uma assistência técnica confiável pode ser decisivo para evitar transtornos maiores, prejuízos financeiros e garantir a segurança do usuário. </p>
            <p> Uma boa assistência técnica é responsável por realizar os reparos de forma adequada, seguindo as normas e padrões estabelecidos pelos fabricantes, assegurando a qualidade do serviço prestado e, consequentemente, a satisfação do cliente. </p>
            <p> Outra vantagem de procurar uma boa assistência técnica é a garantia de peças originais e de qualidade. Peças falsificadas ou de baixa qualidade podem prejudicar o funcionamento do equipamento e até mesmo colocar a segurança do usuário em risco. </p>


          </div>

          <div class="col-sm-6 pt-4">

            <img src="css/img/_318c9977-5c65-4fd8-a174-c1d3b5dd7d3e copiar.jpg" class="imagem" alt="">
          </div>
        </div>
      </div>
    </header>


    <p></p>
    <p></p>

    <div class="row">
      <h2 style="color:#043668;">Deseja anunciar? Confira nossos Planos:</h2>
      <hr style="color:#043668;">
      <div class=" card-group">
  
        <div class="col-md-4 text-center mb-3 p-2">
        <img src="css/img/one4.png" class="card-img-top" alt="...">
          <div class="card card-body">
            <h5 class="card-title" style="font-family: 'Open Sans', sans-serif;">Bronze</h5>
            <p class="card-text" style="font-family: 'Open Sans', sans-serif;"> No nosso plano Bronze você tera direito de receber um icone personalizado para ficar em destaque durante o periodo de 3 meses</p>
            <a href="planos.php" class="btn btn-primary">Saiba Mais</a>
          </div>
        </div>

        <div class="col-md-4 text-center mb-3 p-2">
        <img src="css/img/ata.png" class="card-img-top" alt="...">
          <div class="card card-body" style="font-family: 'Open Sans', sans-serif;">
            <h5 class="card-title" style="font-family: 'Open Sans', sans-serif;">Prata</h5>
            <p class="card-text" style="font-family: 'Open Sans', sans-serif;"> No nosso plano Prata você tera direito de receber um icone personalizado para ficar em destaque durante o periodo de 6 meses</p>
            <a href="planos.php" class="btn btn-primary">Saiba Mais</a>
          </div>
        </div>

        <div class="col-md-4 text-center mb-3 p-2">
        <img src="css/img/oro.png" class=" card-img-top  " alt="...">
          <div class="card card-body" style="font-family: 'Open Sans', sans-serif;">
            <h5 class="card-title" style="font-family: 'Open Sans', sans-serif;">Ouro</h5>
            <p class="card-text" style="font-family: 'Open Sans', sans-serif;">No nosso plano Ouro você tera direito de receber um icone personalizado para ficar em destaque durante o periodo de 9 meses mais bonus de 3 meses completos</p>
            <a href="planos.php" class="btn btn-primary">Saiba Mais</a>
          </div>
        </div>

      </div>
    </div>

  </div>

</body>
<footer class="text-white pt-5"  style="font-family: 'Open Sans', sans-serif; background-image: linear-gradient(to right,#043668,#0c6bc9b9);">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Endereço</h4>
        <p>Rua Nome da Rua, 1234</p>
        <p>Cidade - Estado</p>
        <p>CEP 12345-678</p>
      </div>
      <div class="col-md-4">
        <h4>Contato</h4>
        <p>Telefone: (12) 3456-7890</p>
        <p>E-mail: contato@assistenciatecnica.com.br</p>
      </div>
      <div class="col-md-4">
        <h4>Redes sociais</h4>
        <a href="#" class="text-white"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="#" class="text-white"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="https://www.instagram.com/tjbemici" class="text-white"><i class="fab fa-instagram fa-2x"></i></a>
      </div>
    </div>
    <hr>
    <div class="text-center">
      <p>© 2023 Assistência Técnica. Todos os direitos reservados.</p>
    </div>
  </div>
</footer>

</html>
<?php include_once('www_autenticar.php'); include_once('Conexao.php');?>
<link rel="stylesheet" href="css/icon.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<nav class="navbar navbar-expand-lg navbar-dark mb-0  " style="font-family: 'Open Sans', sans-serif; background-image: linear-gradient(to right,#043668,#0c6bc9b9);">
  <div class="container-fluid">
    <a class="navbar-brand" href="Index.php">
      <img src="css/img/logo1.png" class="logo" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Index.php">Ínicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="_Home.php">Serviços</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sobre nós</a>
        
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="">Felipe</a></li>

          <li><a class="dropdown-item" href="">Corno</a></li>
           
        </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
        <li>


    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet"
    />
 
        <li>
          <img src="css/img/user.png" class="profile" />
          <ul>
            <!-- <li class="sub-item">
              <span class="material-icons-outlined"><a href="Parceiro_sistema.php?"title="Home">grid_view</a> </span>
              <p>Home</p>
            </li> -->
            <li class="sub-item">
            <span class="material-icons-outlined"><a href="Cliente_sistema.php?Cliente=Dados" title="Dados"> format_list_bulleted </span>
              </span>
              <p>Dados</p>
            </li>
            </a> 

          
        
            <li class="sub-item">
              <span class="material-icons-outlined"><a href="#" title="Fale Conosco">manage_accounts</span>
              <p>Fale Conosco</p>

            </li>
            </a>



            <li class="sub-item">
            <span class="material-icons-outlined"><a href="Cliente_sistema.php?Cliente=Sair" title="Sair">logout </span>
              <p>Logout</p>
            </li>
            </a> 

          </ul>
        </li>
      </ul>
    </nav>
  </body>
</html>
      </ul>
    </div>
  </div>
</nav>












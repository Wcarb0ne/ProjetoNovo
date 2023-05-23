<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Nextech admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/System_vendors/feather/feather.css">
  <link rel="stylesheet" href="assets/System_vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/System_vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/System_css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/System_images/logo Nextech.png" />
  <script src="./assets/js/jquery-1.11.1.min.js"></script>
    <script src="ScriptEmpresa.js"></script>

    
</head>

<body>
<?php 

    include_once('Conexao.php');
    include_once('NexTech_autenticar.php');
    include_once('FuncionarioBtoPesquisa.php');
    
  ?>

  <div class="container-scroller">
    <!-- partial:assets/System_assets/System_partials/_navbar.php -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="System_Home.php"><img src="assets/System_images/logo outra.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="System_Home.php"><img src="assets/System_images/logo Nextech.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <!-- <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul> -->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notificações</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Erros</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Em construção
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Configurações</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Em construção
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Novos Funcionarios</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Em construção
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="assets/System_images/faces/felipe.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" href="/T13/NexTech/System_Home.php" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="System_Perfil_Usuario.php?=Perfil">
                <i class="ti-settings text-primary"></i>
                Perfil
              </a>
              <a class="dropdown-item"  href="NexTech_AutenticarSair.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:assets/System_assets/System_partials/_settings-panel.php -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">BARRA LATERAL</p><!-- SIDEBAR SKINS -->
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">Lista de Tarefas</a><!-- TO DO LIST -->
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Adicionar tarefa">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Validação pro sistema
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      autenticar sistema
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      adicionar perfil
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Eventos</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Maio 19 2023</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Sistema funcionando</p>
              <p class="text-gray mb-0">Integração de ponta a ponta.</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Maio 24 2023</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Final do curso</p>
              <p class="text-gray mb-0 ">Obrigado a todos!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="System_Home.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Painel de Controle</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Departamentos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="System_Departamento.php">Departamento</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Funcionários</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="System_Funcionarios.php">Funcionários</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Gráficos</span><!-- charts -->
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="System_Graficos.php">Gráficos basico</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Perfil</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="System_Perfil_Usuario.php">Perfil de Usuario</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Páginas de erro</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="error-404.php"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="error-500.php"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="error-500.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Pagina em Construção</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Perfil de Funcionario</h4>
                  <form method="POST" onsubmit="return false">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control" name="txtID" id="txtID" disabled=""placeholder="ID"value="<?=$idFuncionario ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                        <select class="form-control" name="txtStatus" id="txtStatus"value="<?=$status_Funcionario; ?>">
                                                <option value="" selected>Selecione o status</option>
                                                <option value="Ativo" <?= ($status_Funcionario == "Ativo" ? 'selected' : '') ?>>Ativo</option>
                                                <option value="Inativo" <?= ($status_Funcionario == "Inativo" ? 'selected' : '') ?>>Inativo</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control" name="txtData" id="txtData" disabled=""placeholder="Data cadastro"value="<?=$data_Funcionario ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtNome" id="txtNome"placeholder="Nome completo"value="<?=$nome_Funcionario ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtCpf" id="txtCpf"placeholder="Cpf" value="<?= $cpf_Funcionario ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtCep" id="txtCep"placeholder="Cep" value="<?= $cep_Funcionario ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtLogradouro" id="txtLogradouro"placeholder="Logradouro" value="<?= $logradouro_Funcionario ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtNumero" id="txtNumero"placeholder="Número" value="<?= $numero_Funcionario ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtComplemento" id="txtComplemento"placeholder="Complemento" value="<?= $complemento_Funcionario ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtBairro" id="txtBairro"placeholder="Bairro" value="<?= $bairro_Funcionario ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtCidade" id="txtCidade"placeholder="Cidade" value="<?= $cidade_Funcionario ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                          <select name="txtUF" id="txtUF" class="form-control" value="">
                                            <option value="" <?= ($uf_Funcionario == "" ? 'selected' : '') ?>>UF</option>
                                            <option value="Acre" <?= ($uf_Funcionario == "Acre" ? 'selected' : '') ?>>AC</option>
                                            <option value="Alagoas" <?= ($uf_Funcionario == "Alagoas" ? 'selected' : '') ?>>AL</option>
                                            <option value="Amapá" <?= ($uf_Funcionario == "Amapá" ? 'selected' : '') ?>>AP</option>
                                            <option value="Amazonas"><?= ($uf_Funcionario == "Amazonas" ? 'selected' : '') ?>AM</option>
                                            <option value="Bahia"><?= ($uf_Funcionario == "Bahia" ? 'selected' : '') ?>BA</option>
                                            <option value="Ceará" <?= ($uf_Funcionario == "Ceará" ? 'selected' : '') ?>>CE</option>
                                            <option value="Distrito Federal" <?= ($uf_Funcionario == "Distrito Federal" ? 'selected' : '') ?>>DF</option>
                                            <option value="Espírito Santo" <?= ($uf_Funcionario == "Espírito Santos" ? 'selected' : '') ?>>ES</option>
                                            <option value="Goiás" <?= ($uf_Funcionario == "Goiás" ? 'selected' : '') ?>>GO</option>
                                            <option value="Maranhão" <?= ($uf_Funcionario == "Maranhão" ? 'selected' : '') ?>>MA</option>
                                            <option value="Mato Grosso" <?= ($uf_Funcionario == "Mato Grosso" ? 'selected' : '') ?>>MT</option>
                                            <option value="Minas gerais" <?= ($uf_Funcionario == "Minas Gerais" ? 'selected' : '') ?>>MG</option>
                                            <option value="Pará" <?= ($uf_Funcionario == "Pará" ? 'selected' : '') ?>>PA</option>
                                            <option value="Paraíba" <?= ($uf_Funcionario == "Paraíba" ? 'selected' : '') ?>>PB</option>
                                            <option value="Paraná" <?= ($uf_Funcionario == "Paraná" ? 'selected' : '') ?>>PR</option>
                                            <option value="Pernambuco" <?= ($uf_Funcionario == "Pernambuco" ? 'selected' : '') ?>>PE</option>
                                            <option value="Piauí" <?= ($uf_Funcionario == "Piauí" ? 'selected' : '') ?>>PI</option>
                                            <option value="Rio de Janeiro" <?= ($uf_Funcionario == "Rio de Janeiro" ? 'selected' : '') ?>>RJ</option>
                                            <option value="Rio Grande do Norte" <?= ($uf_Funcionario == "Rio Grande do Norte" ? 'selected' : '') ?>>RN</option>
                                            <option value="Rio Grande do Sul" <?= ($uf_Funcionario == " Rio Grande do Sul" ? 'selected' : '') ?>>RS</option>
                                            <option value="Rondônia" <?= ($uf_Funcionario == "Rondônia" ? 'selected' : '') ?>>RO</option>
                                            <option value="Roraima" <?= ($uf_Funcionario == "Roraima" ? 'selected' : '') ?>>RR</option>
                                            <option value="Santa Catarina" <?= ($uf_Funcionario == "Santa Catarina" ? 'selected' : '') ?>>SC</option>
                                            <option value="São Paulo" <?= ($uf_Funcionario == "São Paulo" ? 'selected' : '') ?>>SP</option>
                                            <option value="Sergipe" <?= ($uf_Funcionario == "Sergipe" ? 'selected' : '') ?>>SE</option>
                                            <option value="Tocantins" <?= ($uf_Funcionario == "Tocantins" ? 'selected' : '') ?>>TO</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtEmail" id="txtEmail"placeholder="E-mail" value="<?= $email_Funcionario ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtTelefone1" id="txtTelefone1"placeholder="Telefone" value="<?= $telefone1_Funcionario ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating"></label>
                                            <input type="text" class="form-control"name="txtTelefone2" id="txtTelefone2"placeholder="Telefone (Opcional)" value="<?= $telefone2_Funcionario ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <select name="txtDepart"id="txtDepart" class="form-control">
                                                <?php 
                                                include_once('DepartamentoPuxar.php');
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtLogin" id="txtLogin"placeholder="Login" value="<?= $login_Funcionario ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtSenha" id="txtSenha"placeholder="Senha" value="<?= $senha_Funcionario ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control"name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Confirmar senha" value="<?= $confirmarSenha_Funcionario ?>">
                                        </div>
                                    </div>
                                </div>
                                                        
                                <button name="btoCadastrar" class="btn btn-warning"onclick="AlterarFuncionario()">Alterar</button>
                                <a type="reset" name="btoLimpar" class="btn btn-danger"href="_Login.php">Sair</a>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-sm-12" id="resultado">
                                </div>
                            </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">tabela dos func, talvez</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            First name
                          </th>
                          <th>
                            Progress
                          </th>
                          <th>
                            Amount
                          </th>
                          <th>
                            Deadline
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Messsy Adam
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $245.30
                          </td>
                          <td>
                            July 1, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            John Richards
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $138.00
                          </td>
                          <td>
                            Apr 12, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Peter Meggik
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Edward
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 160.25
                          </td>
                          <td>
                            May 03, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            John Doe
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 123.21
                          </td>
                          <td>
                            April 05, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            7
                          </td>
                          <td>
                            Henry Tom
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 150.00
                          </td>
                          <td>
                            June 16, 2015
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:assets/System_assets/System_partials/_footer.php -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.  Nextech technology. Todos os direitos reservados.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Centralizando soluções <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/System_vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/System_js/off-canvas.js"></script>
  <script src="assets/System_js/hoverable-collapse.js"></script>
  <script src="assets/System_js/template.js"></script>
  <script src="assets/System_js/settings.js"></script>
  <script src="assets/System_js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>

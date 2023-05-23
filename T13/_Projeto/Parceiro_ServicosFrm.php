<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/script.js"></script>
    <?php include_once('Parceiro_ServicosBtoPesquisa.php') ?>
    <style>
        body {
            font-family: "Archivo", Arial, Helvetica, sans-serif;
            line-height: 1.6;
            /*background-image: radial-gradient(circle, #ff5811, #fa6a23, #f67933, #f18744, #ec9355);*/
            background-image: linear-gradient(to right bottom, rgba(213, 200, 200, 1) 42%, rgba(72, 82, 215, 1) 100%);
            background-repeat: no-repeat;

            background-image: radial-gradient(circle, rgba(246, 243, 243, 1) 14%, rgba(70, 113, 252, 1) 100%);
        }

        label {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    <title>Serviços</title>
</head>

<body>



    <br>
    <form id="my-form" action="#" class="from-control" method="post" onsubmit="return false">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Listar Serviços</h1>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro" disabled>
                </div>
            </div>


            <br>
            <br>

            <div class="row">
                <div class="col-sm-3">

                    <input type="number" class="form-control" name="txtIDPar" value="<?= $idUsuario ?>" id="txtIDPar" placeholder="ID Parceiro" disabled hidden>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="ID">ID</label>


                    <select name="txtIDServico" id="txtIDServico">
                        <?php
                        try {
                            $teste = 'select * from ParceiroServicos where id_Parceiro_ParceiroServicos=' . $idUsuario;
                            $sql = $conn->query($teste);

                            if ($sql->rowCount() == 1) {
                                foreach ($sql as $linha) {
                                    echo "
                                        <option value='$linha[0]'>$linha[0]</option>
                                        
                                    ";
                                }
                            }
                        } catch (PDOException $ex) {
                            echo $ex->getMessage();
                        }

                        ?>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="Nome do Serviço">Nome do Serviço</label>
                    <input type="text" class="form-control" name="txtNomeServico" id="txtNomeServico" placeholder="Nome do Serviço">


                </div>

                <div class="col-sm-3">
                    <label for="Status">Status</label>
                    <select type="checkbox" name="txtStatus" id="txtStatus" class="form-control">
                        <option value="">Selecione</option>
                        <option value="Ativo">Pendente</option>
                        <option value="Inativo">Concluído</option>
                        <option value="Inativo">Cancelado</option>

                    </select>
                </div>
                <p></p>


            </div>
            <div class="row">
                <h5>Dados Cliente</h5>
                <hr>
                <div class="col-sm-3">
                    <label for="Nome do Cliente">Nome do Cliente</label>
                    <input type="text" class="form-control" name="txtNomeCliente" id="txtNomeCliente" placeholder="Insira o nome do Cliente">
                </div>

                <div class="col-sm-3">
                    <label for="CPF do Cliente">CPF do Cliente</label>
                    <input type="text" class="form-control" name="txtCPFCliente" id="txtCPFCliente" placeholder="Insira o CPF do Cliente">
                </div>

                <div class="col-sm-3">
                    <label for="Contato do Cliente">Contato do Cliente</label>
                    <input type="number" class="form-control" name="txtContatoCliente" id="txtContatoCliente" placeholder="Insira o Contato do Cliente">
                </div>

                <div class="col-sm-3">
                    <label for="Nome">E-mail do Cliente</label>
                    <input type="email" class="form-control" name="txtEmailCliente" id="txtEmailCliente" placeholder="Insira o E-mail do Cliente">
                </div>
            </div>
            <p></p>
            <div class="row">
                <h5>Dados do Dispositivo</h5>
                <hr>
                <div class="col-sm-4">
                    <label for="Nome">Nome do Produto</label>
                    <input type="text" class="form-control" name="txtNomeProd" id="txtNomeProd" placeholder="Insira o nome do Dispositivo">
                </div>
                <div class="col-sm-2">
                    <label for="Categoria">Categoria</label>
                    <select class="form-control" id="txtCate">
                        <option value="">Selecione</option>
                        <option value="Eletrônico">Eletrônico</option>
                        <option value="Eletroportátil">Eletroportátil</option>
                        <option value="Eletrodoméstico">Eletrodoméstico</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="Nome">Marca</label>
                    <input type="text" class="form-control" name="txtMarca" id="txtMarca" placeholder="Insira o nome do Cliente">
                </div>

                <div class="col-sm-3">
                    <label for="Nome">Nº de Série</label>
                    <input type="text" class="form-control" name="txtSerie" id="txtSerie" placeholder="Insira o Nº de Série">
                </div>
            </div>
            <P></P>

            <div class="row mt-1"><!-- descrição -->
                <div class="col-sm-12">
                    <label for="Nome"> Descrição do Problema</label>
                    <textarea name="txtDescricao" id="txtDescricao" class="form-control" rows="5" placeholder="Insira uma descrição do Serviço (obrigatório)" require></textarea>
                </div>
            </div>
            <p></p>
            <div class="row">

                <div class="col-sm-12">
                    <label for="Nome">Descrição da Solução</label>
                    <textarea name="txtDescricaoSolu" id="txtDescricaoSolu" class="form-control" rows="5" placeholder="Insira uma descrição do Serviço (obrigatório)" require></textarea>
                </div>
            </div>
            <p></p>
            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-3">
                    <label for="Nome"> Preço</label>
                    <input type="text" class="form-control" name="txtvalor" id="txtvalor" placeholder="Preço do Serviço">
                </div>
            </div>
            <div class="row mt-4 mb-4"><!--botoes-->
                <div class="col-sm-1">
                </div>
                <div class="col-sm-10">
                    <!-- <button name="btoTabela" class="btn btn-info" onclick="AbrirTabelaServicos()">Tabela</button> -->
                    <button name="btoTabela" class="btn btn-info" onclick="PesquisarSevicosParceiro()">Pesquisar</button>
                    <button name="btoCadastrar" class="btn btn-success" onclick="CadastrarSevicosParceiro()">Cadastrar</button>
                    <button name="btoAlterar" class="btn btn-warning" onclick="AlterarServicosParceiro()">Alterar</button>
                    <a type="reset" name="btoLimpar" class="btn btn-dark" href="Parceiro_sistema.php?Tela=Servicos">Limpar</a>
                    <!-- <button name="btoExcluir" class="btn btn-danger" onclick="ExcluirServicosParceiro()">Excluir</button> -->
                </div>
                <div class="col-sm-1">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" id="resultado">
                    <div class="col-sm-12" id="tabelaServicos">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
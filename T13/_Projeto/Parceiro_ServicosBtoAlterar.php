<?php
include_once('Conexao.php');
if ($_POST) {
    $data_ParceiroServicos = $_POST['txtData'];
    $status_ParceiroServicos = $_POST['txtStatus'];
    $nome_ParceiroServicos = $_POST['txtNomeCliente'];
    $cpfCliente_ParceiroServicos = $_POST['txtCPFCliente'];
    $contatoCliente_ParceiroServicos = $_POST['txtContatoCliente'];
    $emailCliente_ParceiroServicos = $_POST['txtEmailCliente'];
    $nomeProd_ParceiroServicos = $_POST['txtNomeProd'];
    $categoria_ParceiroServicos = $_POST['txtCate'];
    $marca_ParceiroServicos = $_POST['txtMarca'];
    $serie_ParceiroServicos = $_POST['txtSerie'];
    $descricao_ParceiroServicos = $_POST['txtDescricao'];
    $descricaoSolu_ParceiroServicos = $_POST['txtDescricaoSolu'];
    $valor_ParceiroServicos = $_POST['txtvalor'];

    try {

        $sql = $conn->prepare(
            'update ParceiroServicos set
            status_ParceiroServicos=:status_ParceiroServicos,
            nome_ParceiroServicos=:nomeCliente_ParceiroServicos,
            cpfCliente_ParceiroServicos=:cpfCliente_ParceiroServicos,
            contatoCliente_ParceiroServicos=:contatoCliente_ParceiroServicos,
            emailCliente_ParceiroServicos=:emailCliente_ParceiroServicos ,
            nomeProd_ParceiroServicos=:nomeProd_ParceiroServicos,
            categoria_ParceiroServicos=:categoria_ParceiroServicos,
            marca_ParceiroServicos=:marca_ParceiroServicos,
            serie_ParceiroServicos=:serie_ParceiroServicos,
            descricao_ParceiroServicos=:descricao_ParceiroServicos,
            descricaoSolu_ParceiroServicos=:descricaoSolu_ParceiroServicos,
            valor_ParceiroServicos=:valor_ParceiroServicos, 
        where id_ParceiroServicos=:id_ParceiroServicos'
        );

        $sql->execute(array(
            ':status_ParceiroServicos' => $status_ParceiroServicos,
            ':nomeCliente_ParceiroServicos' => $nome_ParceiroServicos,
            ':cpfCliente_ParceiroServicos' => $cpfCliente_ParceiroServicos,
            ':contatoCliente_ParceiroServicos' => $contatoCliente_ParceiroServicos,
            ':emailCliente_ParceiroServicos' => $emailCliente_ParceiroServicos,
            ':nomeProd_ParceiroServicos' => $nomeProd_ParceiroServicos,
            ':categoria_ParceiroServicos' => $categoria_ParceiroServicos,
            ':marca_ParceiroServicos' => $marca_ParceiroServicos,
            ':serie_ParceiroServicos' => $serie_ParceiroServicos,
            ':descricao_ParceiroServicos' => $descricao_ParceiroServicos,
            ':descricaoSolu_ParceiroServicos' => $descricaoSolu_ParceiroServicos,
            ':valor_ParceiroServicos' => $valor_ParceiroServicos,
        ));
        if ($sql->rowCount() == 1) {
            echo "<p>Dados alterados com sucesso</p>";
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}

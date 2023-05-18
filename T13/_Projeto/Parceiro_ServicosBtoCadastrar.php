<?php

// print_r($_POST);
// return;


include_once('Conexao.php');



if($_POST)
{
    
    $status_ParceiroServicos = $_POST['txtStatus'];
    $nome_ParceiroServicos = $_POST['txtNomeCliente'];
    $cpfCliente_ParceiroServicos = $_POST['txtCPFCliente'];
    $contatoCliente_ParceiroServicos = $_POST['txtContatoCliente'];
    $emailCliente_ParceiroServicos = $_POST['txtEmailCliente'];
    $nomeProd_ParceiroServicos = $_POST['txtNomeProd'];
    $categoria_ParceiroServicos= $_POST['txtCate'];
    $marca_ParceiroServicos = $_POST['txtMarca'];
    $serie_ParceiroServicos = $_POST['txtSerie'];
    $descricao_ParceiroServicos = $_POST['txtDescricao'];
    $descricaoSolu_ParceiroServicos = $_POST['txtDescricaoSolu'];
    $valor_ParceiroServicos = $_POST['txtvalor'];
    $id_Parceiro_ParceiroServicos = $_POST['txtIDPar'];
    $nomeServico_ParceiroServicos = $_POST['txtNomeServico'];

    
    
    try {
        $sql = $conn->prepare(
            "insert into ParceiroServicos
            (status_ParceiroServicos,nomeCliente_ParceiroServicos,cpfCliente_ParceiroServicos,contatoCliente_ParceiroServicos,
            emailCliente_ParceiroServicos ,nomeProd_ParceiroServicos,categoria_ParceiroServicos,marca_ParceiroServicos,serie_ParceiroServicos,descricao_ParceiroServicos,descricaoSolu_ParceiroServicos,valor_ParceiroServicos,id_Parceiro_ParceiroServicos,nomeServico_ParceiroServicos)
            values
            (:status_ParceiroServicos,:nomeCliente_ParceiroServicos,:cpfCliente_ParceiroServicos,:contatoCliente_ParceiroServicos,
            :emailCliente_ParceiroServicos ,:nomeProd_ParceiroServicos,:categoria_ParceiroServicos,:marca_ParceiroServicos,:serie_ParceiroServicos,:descricao_ParceiroServicos,:descricaoSolu_ParceiroServicos,:valor_ParceiroServicos,:id_Parceiro_ParceiroServicos,:nomeServico_ParceiroServicos)"
        );

        $sql->execute(array(

            
            ':status_ParceiroServicos'=>$status_ParceiroServicos,
            ':nomeCliente_ParceiroServicos'=>$nome_ParceiroServicos,
            ':cpfCliente_ParceiroServicos'=>$cpfCliente_ParceiroServicos,
            ':contatoCliente_ParceiroServicos'=>$contatoCliente_ParceiroServicos,
            ':emailCliente_ParceiroServicos'=>$emailCliente_ParceiroServicos ,
            ':nomeProd_ParceiroServicos'=>$nomeProd_ParceiroServicos,
            ':categoria_ParceiroServicos'=>$categoria_ParceiroServicos,
            ':marca_ParceiroServicos'=>$marca_ParceiroServicos,
            ':serie_ParceiroServicos'=>$serie_ParceiroServicos,
            ':descricao_ParceiroServicos'=>$descricao_ParceiroServicos,
            ':descricaoSolu_ParceiroServicos'=>$descricaoSolu_ParceiroServicos,
            ':valor_ParceiroServicos'=>$valor_ParceiroServicos,
            ':id_Parceiro_ParceiroServicos'=>$id_Parceiro_ParceiroServicos,
            ':nomeServico_ParceiroServicos'=>$nomeServico_ParceiroServicos
        ));

        if($sql->rowCount() > 0)
        {
            echo "<p>Dados cadastrados com sucesso</p>";
            echo "<p id='idGerado'>".$conn->lastInsertId()."</p>";
        }
    
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
else
{
    //header('Location:index.php');
}

?>
<?php

// print_r($_POST);
// return;


include_once('Conexao.php');

if($_POST)
{
    $nome_ParceiroServicos = $_POST['txtNome'];
    $id_PCategoria = $_POST['txtIDC'];
    $status_ParceiroServicos = $_POST['txtStatus'];
    $descricao_ParceiroServicos = $_POST['txtDescricao'];


    
    
    try {
        $sql = $conn->prepare(
            "insert into ParceiroServicos
            (status_ParceiroServicos,nome_ParceiroServicos,id_PCategoria_ParceiroServicos,descricao_ParceiroServicos)
            values
            (:status_ParceiroServicos,:nome_ParceiroServicos,:id_PCategoria_ParceiroServicos,:descricao_ParceiroServicos)"
        );

        $sql->execute(array(

            ':nome_ParceiroServicos'=>$nome_ParceiroServicos,
            ':id_PCategoria_ParceiroServicos'=>$id_PCategoria,
            ':status_ParceiroServicos'=>$status_ParceiroServicos,
            ':descricao_ParceiroServicos'=>$descricao_ParceiroServicos

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
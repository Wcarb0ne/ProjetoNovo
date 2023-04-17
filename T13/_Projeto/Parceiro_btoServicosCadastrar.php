<?php
include_once('Conexao.php');

if($_POST)
{
    $nome_ParceiroServiços = $_POST['txtNome'];
    $status_ParceiroServiços = $_POST['txtStatus'];
    $descricao_ParceiroServiços = $_POST['txtDescricao'];


    
    
    try {
        $sql = $conn->prepare(
            "insert into ParceiroServiços
            (status_ParceiroServiços,nome_ParceiroServiços,descricao_ParceiroServiços)
            values
            (:status_ParceiroServiços,:nome_ParceiroServiços,:descricao_ParceiroServiços)"
        );

        $sql->execute(array(

            ':nome_ParceiroServiços'=>$nome_ParceiroServiços,
            ':status_ParceiroServiços'=>$status_ParceiroServiços
            ':descricao_ParceiroServiços'=>$Descricao_ParceiroServiços

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
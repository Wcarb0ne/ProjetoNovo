<?php
include_once('Conexao.php');

// print_r($_POST);
// return;

if($_POST)
{
    $nome_Departamento = $_POST['txtNome'];
    $status_Departamento = $_POST['txtStatus'];
    $descricao_Departamento = $_POST['txtDescricao'];
 
    try {
        $sql = $conn->prepare(
            "insert into Departamento
            (nome_Departamento,status_Departamento,descricao_Departamento)
            values
            (:nome_Departamento,:status_Departamento,:descricao_Departamento)"
        );

        $sql->execute(array(

            ':nome_Departamento'=>$nome_Departamento,
            ':status_Departamento'=>$status_Departamento,
            ':descricao_Departamento'=>$descricao_Departamento

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
    //header('Location:index.html');
}

?>
<?php
include_once('Conexao.php');

if($_POST)
{
    $nome_PCategoria = $_POST['txtNome'];
    $status_PCategoria = $_POST['txtStatus'];

    
    
    try {
        $sql = $conn->prepare(
            "insert into PCategoria
            (nome_PCategoria,status_PCategoria)
            values
            (:nome_PCategoria,:status_PCategoria)"
        );

        $sql->execute(array(

            ':nome_PCategoria'=>$nome_PCategoria,
            ':status_PCategoria'=>$status_PCategoria

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
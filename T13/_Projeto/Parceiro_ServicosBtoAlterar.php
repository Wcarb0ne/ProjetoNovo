<?php
include_once('Conexao.php');
if($_POST)
{
    $id_ParceiroServicos = $_POST['txtID'];    
    $nome_ParceiroServicos = $_POST['txtNome'];

    $status_ParceiroServicos = $_POST['txtStatus'];
    $descricao_ParceiroServicos = $_POST['txtDescricao'];

    try 
    {
       
        $sql = $conn->prepare('update ParceiroServicos set
        $nome_ParceiroServicos=:nome_ParceiroServicos,
        $status_ParceiroServicos=:status_ParceiroServicos,

        $descricao_ParceiroServicos=:descricao_ParceiroServicos  
        where id_ParceiroServicos=:id_ParceiroServicos'
        );   

        $sql->execute(array(
            'id_ParceiroServicos'=>$id_ParceiroServicos,
            ':nome_ParceiroServicos'=>$nome_ParceiroServicos,
            ':status_ParceiroServicos'=>$status_ParceiroServicos,

            ':descricao_ParceiroServicos'=>$descricao_ParceiroServicos
        ));
        if($sql->rowCount()==1)
        {
            echo "<p>Dados alterados com sucesso</p>";
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>
    
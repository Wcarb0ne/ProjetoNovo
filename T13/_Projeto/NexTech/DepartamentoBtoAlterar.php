<?php
include_once('Conexao.php');
if($_POST)
{
    $id_Departamento = $_POST['txtID'];    
    $status_Departamento = $_POST['txtStatus'];
    $nome_Departamento = $_POST['txtNome'];
    $descricao_Departamento = $_POST['txtDescricao'];

  
    try 
    {
       
        $sql = $conn->prepare('update Departamento set

        nome_Departamento =:nome_Departamento, 
        status_Departamento=:status_Departamento,
        descricao_Departamento=:descricao_Departamento
        
        where id_Departamento=:id_Departamento'
        );   

        $sql->execute(array(
            'id_Departamento'=>$id_Departamento,
            ':status_Departamento'=>$status_Departamento,
            ':nome_Departamento'=>$nome_Departamento,
            ':descricao_Departamento'=>$descricao_Departamento
           
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
    
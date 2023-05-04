<?php
include_once('Conexao.php');

    if($_POST)
    {
            $id_Funcionario = $_POST['txtID'];
        
        try 
        {
        
            $sql = $conn->prepare (
                'delete from Funcionario where id_Funcionario = :id_Funcionario');
            
            $sql->execute(array(

                ':id_Funcionario'=>$id_Funcionario

            ));
            if($sql->rowCount()==1)
            {
                echo"<p>Dados excluidos com Sucesso</p>";
            }
            
        } 
        catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

?>
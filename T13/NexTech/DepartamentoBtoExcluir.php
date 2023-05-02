<?php
include_once('Conexao.php');

    if($_POST)
    {
            $id_Departamento = $_POST['txtID'];
        
        try 
        {
        
            $sql = $conn->prepare (
                'delete from Departamento where id_Departamento = :id_Departamento');
            
            $sql->execute(array(

                ':id_Departamento'=>$id_Departamento

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
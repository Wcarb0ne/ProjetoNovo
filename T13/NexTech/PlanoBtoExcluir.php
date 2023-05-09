<?php
include_once('Conexao.php');

    if($_POST)
    {
            $id_Plano = $_POST['txtID'];
        
        try 
        {
        
            $sql = $conn->prepare (
                'delete from Plano where id_Plano = :id_Plano');
            
            $sql->execute(array(

                ':id_Plano'=>$id_Plano

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
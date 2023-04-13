<?php
include_once('Conexao.php');

    if($_POST)
    {
            $id_Parceiro = $_POST['txtID'];
        
        try 
        {
        
            $sql = $conn->prepare (
                'DELETE FROM Parceiro WHERE id_Parceiro = :id_Parceiro');
            
            $sql->execute(array(

                ':id_Parceiro'=>$id_Parceiro

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
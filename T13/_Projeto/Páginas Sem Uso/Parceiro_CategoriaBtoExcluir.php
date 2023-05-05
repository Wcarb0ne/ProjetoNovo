<?php
include_once('Conexao.php');

    if($_POST)
    {
            $id_PCategoria = $_POST['txtID'];
        
        try 
        {
        
            $sql = $conn->prepare (
                'delete from PCategoria where id_PCategoria = :id_PCategoria');
            
            $sql->execute(array(

                ':id_PCategoria'=>$id_PCategoria

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
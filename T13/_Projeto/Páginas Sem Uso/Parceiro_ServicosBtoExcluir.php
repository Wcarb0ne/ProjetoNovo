<?php
include_once('Conexao.php');

    if($_POST)
    {
            $id_ParceiroServicos = $_POST['txtID'];
        
        try 
        {
        
            $sql = $conn->prepare (
                'delete from ParceiroServicos where id_ParceiroServicos = :id_ParceiroServicos');
            
            $sql->execute(array(

                ':id_ParceiroServicos'=>$id_ParceiroServicos

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
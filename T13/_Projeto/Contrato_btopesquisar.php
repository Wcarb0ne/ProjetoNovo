<?php
include_once('Conexao.php');



$_Contrato="";
$data_Contrato="";
$nome_Contrato="";

    
$id_Contrato = $idUsuario;
    try
    {   
        $teste = 'select * from Contrato where id_Contrato='.$id_Contrato;
        $sql = $conn->query($teste);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_Contrato=$linha[0];
                $data_Contrato=$linha[1];
                $status_Contrato=$linha[2];
                
            }

        } 
        else
        {
                echo "<p>Erro, dados não encontrado</p>";
        }

    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
?>
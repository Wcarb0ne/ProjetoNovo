<?php
include_once('Conexao.php');


$id_PCategoria="";
$data_PCategoria="";
$nome_PCategoria="";
$status_PCategoria="";

if($_POST)
{
    $id_PCategoria =$_POST['txtID'];
    try
    {   
        $teste = 'select * from PCategoria where id_PCategoria='.$id_PCategoria;
        $sql = $conn->query($teste);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_PCategoria=$linha[0];
                $data_PCategoria=$linha[1];
                $nome_PCategoria=$linha[2];
                $status_PCategoria=$linha[3];

                
            }
            echo"
            <p>id_PCategoria: <span id='idGerado'>$id_PCategoria</span></p>           
            <p>data_PCategoria: <span id='PesquisaData'>$data_PCategoria</span></p>
            <p>nome_PCategoria: <span id='PesquisaNome'>$nome_PCategoria</span></p>
            <p>status_PCategoria: <span id='PesquisaStatus'>$status_PCategoria</span></p>
            
             ";
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

}

?>
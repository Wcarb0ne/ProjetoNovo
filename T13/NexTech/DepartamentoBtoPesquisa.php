<?php
include_once('Conexao.php');

$id_Departamento="";
$data_Departamento="";
$nome_Departamento="";
$status_Departamento="";
$descricao_Departamento="";

if($_POST)
{
    $id_Departamento =$_POST['txtID'];
    try
    {   
        $teste = 'select * from Departamento where id_Departamento='.$id_Departamento;
        $sql = $conn->query($teste);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_Departamento=$linha[0];
                $data_Departamento=$linha[1];
                $nome_Departamento=$linha[2];
                $status_Departamento=$linha[3];
                $descricao_Departamento=$linha[4];

                
            }
            echo"
            <p>id_Departamento: <span id='idGerado'>$id_Departamento</span></p>           
            <p>data_Departamento: <span id='PesquisaData'>$data_Departamento</span></p>
            <p>nome_Departamento: <span id='PesquisaNome'>$nome_Departamento</span></p>
            <p>status_Departamento: <span id='PesquisaStatus'>$status_Departamento</span></p>
            <p>descricao_Departamento: <span id='PesquisaDescricao'>$descricao_Departamento</span></p>

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
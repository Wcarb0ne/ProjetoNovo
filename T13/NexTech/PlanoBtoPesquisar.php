<?php
include_once('Conexao.php');


$id_Plano="";
$status_Plano="";
$data_Plano="";
$nome_Plano="";
$preco_Plano="";
$duracao_Plano="";
$beneficios1_Plano="";
$beneficios2_Plano="";
$beneficios3_Plano="";
$beneficios4_Plano="";
$beneficios5_Plano="";
if($_POST)
{
    $id_Plano =$_POST['txtID'];
    try
    {   
        $teste = 'select * from Plano where id_Plano='.$id_Plano;
        $sql = $conn->query($teste);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_Plano=$linha[0];
                $status_Plano=$linha[1];
                $data_Plano=$linha[2];
                $nome_Plano=$linha[3];
                $preco_Plano=$linha[4];
                $duracao_Plano=$linha[5];
                $beneficios1_Plano=$linha[6];
                $beneficios2_Plano=$linha[7];
                $beneficios3_Plano=$linha[8];
                $beneficios4_Plano=$linha[9];
                $beneficios5_Plano=$linha[10];
                
            }
            echo"
                <p>id_Plano: <span id='idGerado'>$id_Plano</span></p>
                <p>status_Plano: <span id='PesquisaStatus'>$status_Plano</span></p>           
                <p>data_Plano: <span id='PesquisaData'>$data_Plano</span></p>
                <p>nome_Plano: <span id='PesquisaNome'>$nome_Plano</span></p>
                <p>preco_Plano: <span id='PesquisaPreco'>$preco_Plano</span></p>
                <p>duracao_Plano: <span id='PesquisaDuracao'>$duracao_Plano</span></p>
                <p>beneficios1_Plano: <span id='PesquisaBeneficios1'>$beneficios1_Plano</span></p>           
                <p>beneficios2_Plano: <span id='PesquisaBeneficios2'>$beneficios2_Plano</span></p>           
                <p>beneficios3_Plano: <span id='PesquisaBeneficios3'>$beneficios3_Plano</span></p>           
                <p>beneficios4_Plano: <span id='PesquisaBeneficios4'>$beneficios4_Plano</span></p>           
                <p>beneficios5_Plano: <span id='PesquisaBeneficios5'>$beneficios5_Plano</span></p>           
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
<?php
include_once('Conexao.php');


$id_ServicosParceiro="";
$data_ServicosParceiro="";
$nome_ServicosParceiro="";

$status_ServicosParceiro="";
$descricao_ServicosParceiro="";


if($_POST)
{
    $id_ServicosParceiro =$_POST['txtID'];
    try
    {   
        $teste = 'select * from ServicosParceiro where id_ServicosParceiro='.$id_ServicosParceiro;
        $sql = $conn->query($teste);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_ServicosParceiro=$linha[0];
                $data_ServicosParceiro=$linha[1];
                $nome_ServicosParceiro=$linha[2];
                
                $status_ServicosParceiro=$linha[3];
                $descricao_ServicosParceiro=$linha[4];


                
            }
            echo"
            <p>id_ServicosParceiro: <span id='idGerado'>$id_ServicosParceiro</span></p>           
            <p>data_ServicosParceiro: <span id='PesquisaData'>$data_ServicosParceiro</span></p>
            <p>nome_ServicosParceiro: <span id='PesquisaNome'>$nome_ServicosParceiro</span></p>

            <p>status_ServicosParceiro: <span id='PesquisaStatus'>$status_ServicosParceiro</span></p>
            <p>descricao_ServicosParceiro: <span id='PesquisaDescricao'>$descricao_ServicosParceiro</span></p>

            
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
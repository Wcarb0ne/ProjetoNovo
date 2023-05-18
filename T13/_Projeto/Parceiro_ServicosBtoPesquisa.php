<?php
include_once('Conexao.php');


    $id_ParceiroServicos="";
    $data_ParceiroServicos="";
    $status_ParceiroServicos ="" ;
    $nome_ParceiroServicos = "";
    $cpfCliente_ParceiroServicos ="" ;
    $contatoCliente_ParceiroServicos = "";
    $emailCliente_ParceiroServicos = "";
    $nomeProd_ParceiroServicos = "";
    $categoria_ParceiroServicos="" ;
    $marca_ParceiroServicos = "";
    $serie_ParceiroServicos ="";
    $descricao_ParceiroServicos = "";
    $descricaoSolu_ParceiroServicos = "";
    $valor_ParceiroServicos ="" ;
    
    


if($_POST)
{
    $id_ServicosParceiro =$_POST['txtID'];
    $id_Parceiro_ParceiroServicos = $_SESSION['idUsuario'];
    try
    {   
        $teste = 'select * from ParceiroServicos where id_Parceiro_ParceiroServicos='.$idUsuario;
        $sql = $conn->query($teste);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_ParceiroServicos=$linha[0];
                $data_ParceiroServicos=$linha[1];
                $status_ParceiroServicos =$linha[2] ;
                $nome_ParceiroServicos = $linha[3];
                $cpfCliente_ParceiroServicos = $linha[4] ;
                $contatoCliente_ParceiroServicos = $linha[5];
                $emailCliente_ParceiroServicos = $linha[6];
                $nomeProd_ParceiroServicos = $linha[7];
                $categoria_ParceiroServicos= $linha[8] ;
                $marca_ParceiroServicos = $linha[9];
                $serie_ParceiroServicos =$linha[10];
                $descricao_ParceiroServicos = $linha[11];
                $descricaoSolu_ParceiroServicos = $linha[12];
                $valor_ParceiroServicos =$linha[13] ;
                $id_Parceiro_ParceiroServicos= $linha[14];
                $nomeServico_ParceiroServicos = $linha[15];


                
            }
            // echo"
            // <p>id_ServicosParceiro: <span id='idGerado'>$id_ServicosParceiro</span></p>           
            // <p>data_ServicosParceiro: <span id='PesquisaData'>$data_ServicosParceiro</span></p>
            // <p>nome_ServicosParceiro: <span id='PesquisaNome'>$nome_ServicosParceiro</span></p>

            // <p>status_ServicosParceiro: <span id='PesquisaStatus'>$status_ServicosParceiro</span></p>
            // <p>descricao_ServicosParceiro: <span id='PesquisaDescricao'>$descricao_ServicosParceiro</span></p>

            
            //  ";
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

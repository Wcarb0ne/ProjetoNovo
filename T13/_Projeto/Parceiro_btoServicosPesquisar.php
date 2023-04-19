<?php
include_once('Conexao.php');


$id_ParceiroServicos="";
$data_ParceiroServicos="";
$nome_ParceiroServicos="";
$status_ParceiroServicos="";
$decricao_ParceiroServicos="";

if($_POST)
{
    $id_PCategoria =$_POST['txtID'];
    try
    {   
        $teste = 'select * from ParceiroServicos where id_ParceiroServicos='.$id_ParceiroServicos;
        $sql = $conn->query($teste);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_ParceiroServicos=$linha[0];
                $data_ParceiroServicos=$linha[1];
                $nome_ParceiroServicos=$linha[2];
                $status_ParceiroServicos=$linha[3];
                $descricao_ParceiroServicos=$linha[4];
                
            }
            // echo"
            // <p>id_Parceiro: <span id='idGerado'>$id_Parceiro</span></p>
            // <p>nome_Parceiro: <span id='PesquisaNome'>$nome_Parceiro</span></p>
            // <p>login_Parceiro: <span id='PesquisaLogin'>$login_Parceiro</span></p>
            // <p>senha_Parceiro: <span id='PesquisaSenha'>$senha_Parceiro</span></p>
            // <p>confirmarSenha_Parceiro: <span id='PesquisaConfirmarSenha'>$confirmarSenha_Parceiro</span></p>
            // <p>email_Parceiro: <span id='PesquisaEmail'>$email_Parceiro</span></p>
            // <p>dataNasc_Parceiro: <span id='PesquisaDataNasc'>$dataNasc_Parceiro</span></p>
            // <p>cpf_Parceiro: <span id='PesquisaCpf'>$cpf_Parceiro</span></p>
            // <p>genero_Parceiro: <span id='PesquisaGenero'>$genero_Parceiro</span></p>
            // <p>telefone1_Parceiro: <span id='PesquisaTelefone1'>$telefone1_Parceiro</span></p>
            // <p>telefone2_Parceiro: <span id='PesquisaTelefone2'>$telefone2_Parceiro</span></p>
            // <p>logradouro_Parceiro: <span id='PesquisaLogradouro'>$logradouro_Parceiro</span></p>
            // <p>cidade_Parceiro: <span id='PesquisaCidade'>$cidade_Parceiro</span></p>
            // <p>uf_Parceiro: <span id='PesquisaUF'>$uf_Parceiro</span></p>
            // <p>cep_Parceiro: <span id='PesquisaCep'>$cep_Parceiro</span></p>
            // <p>cadastro_Parceiro: <span id='PesquisaCadastro'>$cadastro_Parceiro</span></p>
            // <p>status_Parceiro: <span id='PesquisaStatus'>$status_Parceiro</span></p>
            // <p>obs_Parceiro: <span id='PesquisaObs'>$$obs_Parceiro</span></p>
            
            // ";
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
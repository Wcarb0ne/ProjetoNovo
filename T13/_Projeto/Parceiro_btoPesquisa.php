<?php
include_once('Conexao.php');



$status_Parceiro="";
$data_Parceiro="";
$nome_Parceiro="";
$cnpj_Parceiro="";
$ramo_Parceiro="";
$email_Parceiro="";
$telefone1_Parceiro="";
$telefone2_Parceiro="";
$login_Parceiro="";
$senha_Parceiro="";
$logradouro_Parceiro="";
$numero_Parceiro="";
$complemento_Parceiro="";
$bairro_Parceiro="";
$cidade_Parceiro=""; 
$uf_Parceiro="";
$cep_Parceiro="";
$obs_Parceiro="";

    $id_Parceiro = $idUsuario;
    try
    {   
        $teste = 'select * from Parceiro where id_Parceiro='.$id_Parceiro;
        $sql = $conn->query($teste);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_Parceiro=$linha[0];
                $status_Parceiro=$linha[1];
                $data_Parceiro=$linha[2];
                $nome_Parceiro=$linha[3];
                $cnpj_Parceiro=$linha[4];
                $ramo_Parceiro=$linha[5];
                $email_Parceiro=$linha[6];
                $telefone1_Parceiro=$linha[7];
                $telefone2_Parceiro=$linha[8];
                $login_Parceiro=$linha[9];
                $senha_Parceiro=$linha[10];
                $logradouro_Parceiro=$linha[11];
                $numero_Parceiro=$linha[12];
                $complemento_Parceiro=$linha[13];
                $bairro_Parceiro=$linha[14];
                $cidade_Parceiro=$linha[15];
                $uf_Parceiro=$linha[16]; 
                $cep_Parceiro=$linha[17];
                $obs_Parceiro=$linha[18];
                
            }
            // echo"
            // <p>id_Parceiro: <span id='idGerado'>$id_Parceiro</span></p>
            // <p>nome_Parceiro: <span id='PesquisaNome'>$nome_Parceiro</span></p>
            // <p>login_Parceiro: <span id='PesquisaLogin'>$login_Parceiro</span></p>
            // <p>senha_Parceiro: <span id='PesquisaSenha'>$senha_Parceiro</span></p>
            // <p>email_Parceiro: <span id='PesquisaEmail'>$email_Parceiro</span></p>
            // <p>cpf_Parceiro: <span id='PesquisaCpf'>$cnpj_Parceiro</span></p>
            // <p>telefone1_Parceiro: <span id='PesquisaTelefone1'>$telefone1_Parceiro</span></p>
            // <p>telefone2_Parceiro: <span id='PesquisaTelefone2'>$telefone2_Parceiro</span></p>
            // <p>logradouro_Parceiro: <span id='PesquisaLogradouro'>$logradouro_Parceiro</span></p>
            // <p>cidade_Parceiro: <span id='PesquisaCidade'>$cidade_Parceiro</span></p>
            // <p>uf_Parceiro: <span id='PesquisaUF'>$uf_Parceiro</span></p>
            // <p>cep_Parceiro: <span id='PesquisaCep'>$cep_Parceiro</span></p>
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


?>
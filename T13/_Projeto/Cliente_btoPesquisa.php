<?php
include_once('conexao.php');



$status_Cliente="";
$data_Cliente="";
$nome_Cliente="";
$cnpj_Cliente="";
$email_Cliente="";
$telefone1_Cliente="";
$telefone2_Cliente="";
$login_Cliente="";
$senha_Cliente="";
$confirmarSenha_Cliente="";
$logradouro_Cliente="";
$numero_Cliente="";
$complemento_Cliente="";
$bairro_Cliente="";
$cidade_Cliente=""; 
$uf_Cliente="";
$cep_Cliente="";
$obs_Cliente="";

    $idCliente = $idCliente;
    try
    {   
        $teste = 'select * from Cliente where id_Cliente='.$idCliente;
        $sql = $conn->query($teste);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $idCliente=$linha[0];
                $status_Cliente=$linha[1];
                $data_Cliente=$linha[2];
                $nome_Cliente=$linha[3];
                $cpf_Cliente=$linha[4];
                $email_Cliente=$linha[5];
                $telefone1_Cliente=$linha[6];
                $telefone2_Cliente=$linha[7];
                $login_Cliente=$linha[8];
                $senha_Cliente=$linha[9];
                $logradouro_Cliente=$linha[10];
                $numero_Cliente=$linha[11];
                $cep_Cliente=$linha[12];
                $cidade_Cliente=$linha[13];
                $uf_Cliente=$linha[14];
                $complemento_Cliente=$linha[15];
                $bairro_Cliente=$linha[16];
                $obs_Cliente=$linha[17];
            }
            
            $status_Cliente=('txtID');
            $data_Cliente=('txtID');
            $nome_Cliente=('txtNome');
            $cpf_Cliente=('txtCPF');
            $email_Cliente=('txtEmail');
            $telefone1_Cliente=('txtTelefone1');
            $telefone2_Cliente=('txtTelefone2');
            $login_Cliente=('txtLogin');
            $senha_Cliente=('txtSenha');
            $logradouro_Cliente=('txtLogradouro');
            $numero_Cliente=('txtNumero');
            $cep_Cliente=('txtCEP');
            $cidade_Cliente=('txtCidade');
            $uf_Cliente=('txtUF');
            $complemento_Cliente=('txtComplemento');
            $bairro_Cliente=('txtBairro');
            $obs_Cliente=('txtObs');

            // echo"
            // <p>id_Cliente: <span id='idGerado'>$idCliente</span></p>
            // <p>nome_Cliente: <span id='PesquisaNome'>$nome_Cliente</span></p>
            // <p>login_Cliente: <span id='PesquisaLogin'>$login_Cliente</span></p>
            // <p>senha_Cliente: <span id='PesquisaSenha'>$senha_Cliente</span></p>
            // <p>email_Cliente: <span id='PesquisaEmail'>$email_Cliente</span></p>
            // <p>cpf_Cliente: <span id='PesquisaCpf'>$cpf_Cliente</span></p>
            // <p>genero_Cliente: <span id='PesquisaGenero'>$bairro_Cliente</span></p>
            // <p>telefone1_Cliente: <span id='PesquisaTelefone1'>$telefone1_Cliente</span></p>
            // <p>telefone2_Cliente: <span id='PesquisaTelefone2'>$telefone2_Cliente</span></p>
            // <p>logradouro_Cliente: <span id='PesquisaLogradouro'>$logradouro_Cliente</span></p>
            // <p>cidade_Cliente: <span id='PesquisaCidade'>$cidade_Cliente</span></p>
            // <p>uf_Cliente: <span id='PesquisaUF'>$uf_Cliente</span></p>
            // <p>cep_Cliente: <span id='PesquisaCep'>$cep_Cliente</span></p>
            // <p>cadastro_Cliente: <span id='PesquisaCadastro'>$data_Cliente</span></p>
            // <p>status_Cliente: <span id='PesquisaStatus'>$status_Cliente</span></p>
            // <p>obs_Cliente: <span id='PesquisaObs'>$obs_Cliente</span></p>
            
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
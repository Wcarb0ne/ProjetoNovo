<?php
include_once('Conexao.php');

   
$status_Funcionario ="";
$data_Funcionario ="";

$nome_Funcionario ="";
$cpf_Funcionario ="";

$cep_Funcionario =""; 
$logradouro_Funcionario =""; 
$numero_Funcionario ="";
$complemento_Funcionario ="";
$bairro_Funcionario ="";
$cidade_Funcionario =""; 
$uf_Funcionario =""; 

$email_Funcionario ="";
$telefone1_Funcionario =""; 
$telefone2_Funcionario ="";

$id_Departamento_Funcionario ="";
$login_Funcionario ="";
$senha_Funcionario ="";
$confirmarSenha_Funcionario ="";



$id_Funcionario = $idFuncionario;
try
{   
    $teste = 'select * from Funcionario where id_Funcionario='.$id_Funcionario;
    $sql = $conn->query($teste);
    
    if($sql->rowCount()==1)
    {
        foreach($sql as $linha)
        {
            
            $id_Funcionario =$linha[0];
            $status_Funcionario =$linha[1];
            $data_Funcionario =$linha[2]; 
            $nome_Funcionario =$linha[3];
            $cpf_Funcionario =$linha[4];
            $cep_Funcionario =$linha[5]; 
            $logradouro_Funcionario =$linha[6]; 
            $numero_Funcionario =$linha[7];
            $complemento_Funcionario =$linha[8];
            $bairro_Funcionario =$linha[9];
            $cidade_Funcionario =$linha[10]; 
            $uf_Funcionario =$linha[11]; 
            $email_Funcionario =$linha[12];
            $telefone1_Funcionario =$linha[13]; 
            $telefone2_Funcionario =$linha[14];
            $id_Departamento_Funcionario =$linha[15];
            $login_Funcionario =$linha[16];
            $senha_Funcionario =$linha[17];
            $confirmarSenha_Funcionario =$linha[18];

            
        }
        // echo"
        //     <p>id_Funcionario: <span id='idGerado'>$id_Funcionario</span></p>           
        //     <p>status_Funcionario: <span id='PesquisaStatus'>$status_Funcionario</span></p>
        //     <p>data_Funcionario: <span id='PesquisaData'>$data_Funcionario</span></p>
        //     <p>nome_Funcionario: <span id='PesquisaNome'>$nome_Funcionario</span></p>
        //     <p>cpf_Funcionario: <span id='PesquisaCpf'>$cpf_Funcionario</span></p>
        //     <p>cep_Funcionario: <span id='PesquisaCep'>$cep_Funcionario</span></p>           
        //     <p>logradouro_Funcionario: <span id='PesquisaLogradouro'>$logradouro_Funcionario</span></p>
        //     <p>numero_Funcionario: <span id='PesquisaNumero'>$numero_Funcionario</span></p>
        //     <p>complemento_Funcionario: <span id='PesquisaComplemento'>$complemento_Funcionario</span></p>
        //     <p>bairro_Funcionario: <span id='PesquisaBairro'>$bairro_Funcionario</span></p>
        //     <p>cidade_Funcionario: <span id='PesquisaCidade'>$cidade_Funcionario</span></p>           
        //     <p>uf_Funcionario: <span id='PesquisaUF'>$uf_Funcionario</span></p>
        //     <p>email_Funcionario: <span id='PesquisaEmail'>$email_Funcionario</span></p>
        //     <p>telefone1_Funcionario: <span id='PesquisaTelefone1'>$telefone1_Funcionario</span></p>
        //     <p>telefone2_Funcionario: <span id='PesquisaTelefone2'>$telefone2_Funcionario</span></p>
        //     <p>id_Departamento_Funcionario: <span id='PesquisaDepart'>$id_Departamento_Funcionario</span></p>           
        //     <p>login_Funcionario: <span id='PesquisaLogin'>$login_Funcionario</span></p>
        //     <p>senha_Funcionario: <span id='PesquisaSenha'>$senha_Funcionario</span></p>
        //     <p>confirmarSenha_Funcionario: <span id='PesquisaComfirmarSenha'>$confirmarSenha_Funcionario</span></p>

        //     ";
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
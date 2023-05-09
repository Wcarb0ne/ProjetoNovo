<?php
include_once('Conexao.php');


if($_POST)
{
    $id_Parceiro = $_POST['txtID'];    
    $status_Parceiro = $_POST['txtStatus'];
    $nome_Parceiro = $_POST['txtNome'];
    $cnpj_Parceiro = $_POST['txtCnpj'];
    $ramo_Parceiro = $_POST['txtRamo'];
    $email_Parceiro = $_POST['txtEmail'];
    $telefone1_Parceiro = $_POST['txtTelefone1']; 
    $telefone2_Parceiro = $_POST['txtTelefone2'];
    $login_Parceiro = $_POST['txtLogin'];
    $senha_Parceiro = $_POST['txtSenha'];
    $logradouro_Parceiro = $_POST['txtLogradouro']; 
    $numero_Parceiro = $_POST['txtNumero'];
    $complemento_Parceiro = $_POST['txtComplemento'];
    $bairro_Parceiro = $_POST['txtBairro'];
    $cidade_Parceiro = $_POST['txtCidade']; 
    $uf_Parceiro = $_POST['txtUF']; 
    $cep_Parceiro = $_POST['txtCep']; 
    $obs_Parceiro = $_POST['txtObs'];

    try 
    {
       
        $sql = $conn->prepare('update Parceiro set
        
        nome_Parceiro =:nome_Parceiro, 
        status_Parceiro=:status_Parceiro,
        cnpj_Parceiro=:cnpj_Parceiro,
        ramo_Parceiro=:ramo_Parceiro,
        email_Parceiro=:email_Parceiro,
        telefone1_Parceiro=:telefone1_Parceiro,
        telefone2_Parceiro=:telefone2_Parceiro,
        login_Parceiro=:login_Parceiro,
        senha_Parceiro=:senha_Parceiro,
        logradouro_Parceiro=:logradouro_Parceiro,
        numero_Parceiro=:numero_Parceiro,
        complemento_Parceiro=:complemento_Parceiro,
        bairro_Parceiro=:bairro_Parceiro,
        cidade_Parceiro=:cidade_Parceiro,
        uf_Parceiro=:uf_Parceiro,
        cep_Parceiro=:cep_Parceiro,
        obs_Parceiro=:obs_Parceiro  

        where id_Parceiro=:id_Parceiro'
        );   

        $sql->execute(array(
            'id_Parceiro'=>$id_Parceiro,
            ':status_Parceiro'=>$status_Parceiro,
            ':nome_Parceiro'=>$nome_Parceiro,
            ':cnpj_Parceiro'=>$cnpj_Parceiro,
            ':ramo_Parceiro'=>$ramo_Parceiro,
            ':email_Parceiro'=>$email_Parceiro,
            ':telefone1_Parceiro'=>$telefone1_Parceiro,
            ':telefone2_Parceiro'=>$telefone2_Parceiro,
            ':login_Parceiro'=>$login_Parceiro,
            ':senha_Parceiro'=>$senha_Parceiro,
            ':logradouro_Parceiro'=>$logradouro_Parceiro,
            ':numero_Parceiro'=>$numero_Parceiro,
            ':complemento_Parceiro'=>$complemento_Parceiro,
            ':bairro_Parceiro'=>$bairro_Parceiro,
            ':cidade_Parceiro'=>$cidade_Parceiro,
            ':uf_Parceiro'=>$uf_Parceiro,
            ':cep_Parceiro'=>$cep_Parceiro,
            ':obs_Parceiro'=>$obs_Parceiro
        ));
        if($sql->rowCount()==1)
        {
            echo "<p>Dados alterados com sucesso</p>";
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>
    
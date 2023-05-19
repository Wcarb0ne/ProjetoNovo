<?php
include_once('Conexao.php');

if($_POST)
{
    $status_Funcionario = $_POST['txtStatus'];
    $nome_Funcionario = $_POST['txtNome'];
    $cpf_Funcionario = $_POST['txtCpf'];

    $cep_Funcionario = $_POST['txtCep']; 
    $logradouro_Funcionario = $_POST['txtLogradouro']; 
    $numero_Funcionario = $_POST['txtNumero'];
    $complemento_Funcionario = $_POST['txtComplemento'];
    $bairro_Funcionario = $_POST['txtBairro'];
    $cidade_Funcionario = $_POST['txtCidade']; 
    $uf_Funcionario = $_POST['txtUF']; 

    $email_Funcionario = $_POST['txtEmail'];
    $telefone1_Funcionario = $_POST['txtTelefone1']; 
    $telefone2_Funcionario = $_POST['txtTelefone2'];

    $id_Departamento_Funcionario = $_POST['txtDepart'];
    $login_Funcionario = $_POST['txtLogin'];
    $senha_Funcionario = $_POST['txtSenha'];
    $confirmarSenha_Funcionario = $_POST['txtConfirmarSenha'];

    /*17 campos acima*/ 
       
    try {
        $sql = $conn->prepare(
            "insert into Funcionario
            (
                status_Funcionario,
                nome_Funcionario,
                cpf_Funcionario,
            
                cep_Funcionario, 
                logradouro_Funcionario, 
                numero_Funcionario,
                complemento_Funcionario,
                bairro_Funcionario,
                cidade_Funcionario, 
                uf_Funcionario, 
            
                email_Funcionario,
                telefone1_Funcionario, 
                telefone2_Funcionario,
            
                id_Departamento_Funcionario,
                login_Funcionario,
                senha_Funcionario,
                confirmarSenha_Funcionario
            )
            values
            (
                :status_Funcionario,
                :nome_Funcionario,
                :cpf_Funcionario,

                :email_Funcionario,
                :telefone1_Funcionario,
                :telefone2_Funcionario,
                
                :cep_Funcionario,
                :logradouro_Funcionario,
                :numero_Funcionario,
                :complemento_Funcionario,
                :bairro_Funcionario,
                :cidade_Funcionario,
                :uf_Funcionario,
                
                :id_Departamento_Funcionario,
                :login_Funcionario,
                :senha_Funcionario,
                :confirmarSenha_Funcionario
                )"
        );

        $sql->execute(array(

            ':status_Funcionario'=>$status_Funcionario,
            ':nome_Funcionario'=>$nome_Funcionario,
            ':cpf_Funcionario'=>$cpf_Funcionario,
            
            ':cep_Funcionario'=>$cep_Funcionario,
            ':logradouro_Funcionario'=>$logradouro_Funcionario,
            ':numero_Funcionario'=>$numero_Funcionario,
            ':complemento_Funcionario'=>$complemento_Funcionario,
            ':bairro_Funcionario'=>$bairro_Funcionario,
            ':cidade_Funcionario'=>$cidade_Funcionario,
            ':uf_Funcionario'=>$uf_Funcionario,

            ':email_Funcionario'=>$email_Funcionario,
            ':telefone1_Funcionario'=>$telefone1_Funcionario,
            ':telefone2_Funcionario'=>$telefone2_Funcionario,
            
            ':id_Departamento_Funcionario'=>$id_Departamento_Funcionario,
            ':login_Funcionario'=>$login_Funcionario,
            ':senha_Funcionario'=>$senha_Funcionario,
            ':confirmarSenha_Funcionario'=>$confirmarSenha_Funcionario
        ));

        if($sql->rowCount() > 0)
        {
            echo "<p>Dados cadastrados com sucesso</p>";
            echo "<p id='idGerado'>".$conn->lastInsertId()."</p>";
        }
    
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
else
{
    //header('Location:index.php');
}

?>
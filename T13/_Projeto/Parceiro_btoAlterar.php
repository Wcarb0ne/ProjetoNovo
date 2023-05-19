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
    $foto_Parceiro = $_POST['fImage'];

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
        obs_Parceiro=:obs_Parceiro,
        foto_Parceiro=:foto_Parceiro  

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
            ':obs_Parceiro'=>$obs_Parceiro,
            ':foto_Parceiro'=>$foto_Parceiro
        ));
        if($sql->rowCount()==1)
        {
            echo '
            
            
            <div class="container mt-3" hidden>
            <h3>Modal Example</h3>
            <p>Click on the button to open the modal.</p>
            
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" id="joaquim">
              Open modal
            </button>
            </div>
            
            <!-- The Modal -->
            <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Alteração de Cadastro Realizada com Sucesso</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
            
                <!-- Modal body -->
                <div class="modal-body">
                <p>Parabéns <B>'.$nomeUsuario.'</B>!
                Seus dados foram Alterados com sucesso</p>
                    
            
                </div>
            
                <!-- Modal footer -->
                <div class="modal-footer">
                  <a class="btn btn-danger" href="Parceiro_sistema.php?Parceiro=dados">Fechar</a>
                </div>
            
              </div>
            </div>
            </div>
            
            <script>
                var botoes = document.getElementById("joaquim");
                botoes.click();
            </script>
            
                        ';
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}

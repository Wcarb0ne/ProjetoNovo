<?php
include_once('Conexao.php');
if($_POST)
{
    $id_Cliente = $_POST['txtID'];    
    $status_Cliente = $_POST['txtStatus'];
    $nome_Cliente = $_POST['txtNome'];
    $cpf_Cliente = $_POST['txtCPF'];
    $email_Cliente = $_POST['txtEmail'];
    $telefone1_Cliente = $_POST['txtTelefone1']; 
    $telefone2_Cliente = $_POST['txtTelefone2'];
    $login_Cliente = $_POST['txtLogin'];
    $senha_Cliente = $_POST['txtSenha'];
    $logradouro_Cliente = $_POST['txtLogradouro']; 
    $numero_Cliente = $_POST['txtNumero'];
    $complemento_Cliente = $_POST['txtComplemento'];
    $bairro_Cliente = $_POST['txtBairro'];
    $cidade_Cliente = $_POST['txtCidade']; 
    $uf_Cliente = $_POST['txtUF']; 
    $cep_Cliente = $_POST['txtCEP'];
    $obs_Cliente = $_POST['txtObs'];
    $foto_Cliente = $_POST['fImage'];

    try 
    {
       
        $sql = $conn->prepare('update Cliente set
        
        
        status_Cliente=:status_Cliente,
        nome_Cliente =:nome_Cliente,           
        cpf_Cliente=:cpf_Cliente,
        email_Cliente=:email_Cliente,
        telefone1_Cliente=:telefone1_Cliente,
        telefone2_Cliente=:telefone2_Cliente,
        login_Cliente=:login_Cliente,
        senha_Cliente=:senha_Cliente,
        logradouro_Cliente=:logradouro_Cliente,
        numero_Cliente=:numero_Cliente,
        complemento_Cliente=:complemento_Cliente,
        bairro_Cliente=:bairro_Cliente,
        cidade_Cliente=:cidade_Cliente,
        uf_Cliente=:uf_Cliente,
        cep_Cliente=:cep_Cliente,
        obs_Cliente=:obs_Cliente,
        foto_Cliente=:foto_Cliente

        where id_Cliente=:id_Cliente'
        );   

        $sql->execute(array(
            'id_Cliente'=>$id_Cliente,
            ':status_Cliente'=>$status_Cliente,
            ':nome_Cliente'=>$nome_Cliente,
            ':cpf_Cliente'=>$cpf_Cliente,
            ':email_Cliente'=>$email_Cliente,
            ':telefone1_Cliente'=>$telefone1_Cliente,
            ':telefone2_Cliente'=>$telefone2_Cliente,
            ':login_Cliente'=>$login_Cliente,
            ':senha_Cliente'=>$senha_Cliente,
            ':logradouro_Cliente'=>$logradouro_Cliente,
            ':numero_Cliente'=>$numero_Cliente,         
            ':complemento_Cliente'=>$complemento_Cliente,     
            ':bairro_Cliente'=>$bairro_Cliente,
            ':cidade_Cliente'=>$cidade_Cliente,
            ':uf_Cliente'=>$uf_Cliente,
            ':cep_Cliente'=>$cep_Cliente,
            ':obs_Cliente'=>$obs_Cliente,
            ':foto_Cliente'=>$foto_Cliente
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
                  <a class="btn btn-danger" href="Cliente_sistema.php?Cliente=Dados">Fechar</a>
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
?>
    
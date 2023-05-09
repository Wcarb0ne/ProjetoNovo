<?php
     

     if(isset($_POST['Url']) && strlen($_POST['Url']) == '0'){
        if(isset($_POST['Acao']) && $_POST['Acao'] =='Enviar'){

            $Nome = $_POST['Nome'];
            $Email = $_POST['Email'];
            $Assunto = $_POST['Assunto'];
            $Arquivo = $_POST['Arquivo'];
            $ArquivoNome = $_POST['Arquivo'];
            $Mensagem = $_POST['Mensagem'];
            $data = date('d/m/Y H:i');
            
            if($Nome == '' || $Email == '' || $Assunto == ''){

                echo'<script>alert("Por favor, Preencha todos os campos corretamente");location="frm_FaleConosco.php"</script>';
            }
            else{
                require_once("");//estrutura de servidor
            }
        }
     }

?>
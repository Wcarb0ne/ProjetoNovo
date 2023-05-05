<?php

        include_once('conexao.php');




        $id_Parceiro =$idParceiro;
        $status_Parceiro='';
        $numero_Parceiro = '';
        $logradouro_Parceiro = '';
        $bairro_Parceiro = '';
        $cidade_Parceiro = '';
        $uf_Parceiro = '';

   

        if($_POST)
        {
            $id_Parceiro = $idParceiro;
            try
            {   
                $teste = 'select * from teste0211 where Id='.$id_Parceiro;
                $sql = $conn->query($teste);
                
                if($sql->rowCount()==1)
                {
                    foreach($sql as $linha)
                    {
                        $id_Parceiro=$linha[0];
                        $status_Parceiro=$linha[1];
                        $numero_Parceiro=$linha[13];
                        $logradouro_Parceiro=$linha[12];
                        $bairro_Parceiro=$linha[15];
                        $cidade_Parceiro=$linha[16];
                        $uf_Parceiro =$linha[17];
                        
                    }
                    echo"
        <p>id_Cliente: <span id='idGerado'>$id_Parceiro</span></p>
        <p>id_Cliente: <span id='idGerado'>$status_Parceiro</span></p>
        <p>id_Cliente: <span id='idGerado'>$numero_Parceiro</span></p>
        <p>id_Cliente: <span id='idGerado'>$logradouro_Parceiro</span></p>
        <p>id_Cliente: <span id='idGerado'>$bairro_Parceiro</span></p>
        <p>id_Cliente: <span id='idGerado'>$cidade_Parceiro</span></p>
        <p>id_Cliente: <span id='idGerado'>$uf_Parceiro</span></p>

      


        ";

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
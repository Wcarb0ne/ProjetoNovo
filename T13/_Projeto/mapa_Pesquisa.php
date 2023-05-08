<?php

        include_once('conexao.php');



        $id = $_GET['id'];
        
            try
            {   
                $teste = 'select * from Parceiro where Id_Parceiro='.$id;
                $sql = $conn->query($teste);
                
                if($sql->rowCount()==1)
                {
                    foreach($sql as $linha)
                    {
                         $id_Parceiro=$linha[0];
                        // $status_Parceiro=$linha[1];
                        $numero_Parceiro=$linha[13];
                        $logradouro_Parceiro=$linha[12];
                        $bairro_Parceiro=$linha[15];
                        $cidade_Parceiro=$linha[16];
                        $uf_Parceiro =$linha[17];
                        
                    }
                 

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
<?php

sleep(3);

print_r($_POST);
return;
include_once('Conexao.php');

if($_POST)
{
    $cnpj_Contrato = $_POST['txtcnpj'];
    $nome_Contrato = $_POST['txtNome'];
    $valor_Contrato = $_POST['txtvalor'];
    $tipo_Contrato = $_POST['txttipo'];
    $dataEmissao_Contrato = $_POST['tfxtdataEmissao'];
    $dataTermino_Contrato = $_POST['txtTermino'];
  
        
    try {
            $sql = $conn->prepare(
                "insert into Contrato
                (
                cnpj_Contrato,
                nome_Contrato,
                valor_Contrato,
                tipo_Contrato,
                dataEmissao_Contrato,
                dataTermino_Contrato
                )

                values
                ( 
                :cnpj_Contrato,
                :nome_Contrato,
                :valor_Contrato,
                :tipo_Contrato,
                :dataEmissao_Contrato,
                :dataTermino_Contrato)"
            );

            $sql->execute(array(
                ':cnpj_Contrato'=>$cnpj_Contrato,
                ':nome_Contrato'=> $nome_Contrato,
                ':valor_Contrato'=> $valor_Contrato,
                ':tipo_Contrato'=>$tipo_Contrato,
                ':dataEmissao_Contrato'=>$dataEmissao_Contrato,
                ':dataTermino_Contrato'=>$dataTermino_Contrato
            ));

            if($sql->rowCount() > 0)
            {
                echo "<p>Dados cadastrados com sucesso</p>";
                echo "<p>Id Gerado: ".$conn->lastInsertId()."</p>";
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


<?php
include_once('Conexao.php');

// print_r($_POST);
// return;

if($_POST)
{
    
    $status_Plano = $_POST['txtStatus'];
    $nome_Plano = $_POST['txtNome'];
    $preco_Plano = $_POST['txtPreco'];
    $duracao_Plano = $_POST['txtDuracao'];
    $beneficios1_Plano = $_POST['txtBeneficios1'];
    $beneficios2_Plano = $_POST['txtBeneficios2'];
    $beneficios3_Plano = $_POST['txtBeneficios3'];
    $beneficios4_Plano = $_POST['txtBeneficios4'];
    $beneficios5_Plano = $_POST['txtBeneficios5'];
 
    try {
        $sql = $conn->prepare(
            "insert into Plano
            (status_Plano,nome_Plano,preco_Plano,duracao_Plano,beneficios1_Plano,beneficios2_Plano,beneficios3_Plano,beneficios4_Plano,beneficios5_Plano)
            values
            (:status_Plano,:nome_Plano,:preco_Plano,:duracao_Plano,:beneficios1_Plano,:beneficios2_Plano,:beneficios3_Plano,:beneficios4_Plano,:beneficios5_Plano)"
        );

        $sql->execute(array(
            
            ':status_Plano'=>$status_Plano,
            ':nome_Plano'=>$nome_Plano,
            ':preco_Plano'=>$preco_Plano,
            ':duracao_Plano'=>$duracao_Plano,
            ':beneficios1_Plano'=>$beneficios1_Plano,
            ':beneficios2_Plano'=>$beneficios2_Plano,
            ':beneficios3_Plano'=>$beneficios3_Plano,
            ':beneficios4_Plano'=>$beneficios4_Plano,
            ':beneficios5_Plano'=>$beneficios5_Plano
            

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
    //header('Location:index.html');
}

?>


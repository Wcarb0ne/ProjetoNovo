<?php
include_once('Conexao.php');
if($_POST)
{
    $id_Plano = $_POST['txtID'];    
    $status_Plano = $_POST['txtStatus'];
    $nome_Plano = $_POST['txtNome'];
    $preco_Plano = $_POST['txtPreco'];
    $duracao_Plano = $_POST['txtDuracao'];
    $beneficios1_Plano = $_POST['txtBeneficios1'];
    $beneficios2_Plano = $_POST['txtBeneficios2'];
    $beneficios3_Plano = $_POST['txtBeneficios3'];
    $beneficios4_Plano = $_POST['txtBeneficios4'];
    $beneficios5_Plano = $_POST['txtBeneficios5'];
  
    try 
    {
       
        $sql = $conn->prepare('update Plano set

        status_Plano=:status_Plano,
        nome_Plano=:nome_Plano, 
        preco_Plano=:preco_Plano,       
        duracao_Plano=:duracao_Plano,
        beneficios1_Plano=:beneficios1_Plano,
        beneficios2_Plano=:beneficios2_Plano,
        beneficios3_Plano=:beneficios3_Plano, 
        beneficios4_Plano=:beneficios4_Plano,
        beneficios5_Plano=:beneficios5_Plano

        where id_Plano=:id_Plano'
        );   

        $sql->execute(array(
            'id_Plano'=>$id_Plano,
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
    
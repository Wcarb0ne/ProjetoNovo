<?php

    include_once('Conexao.php');

    $id_PCategoria = '';
    $data_PCategoria = '';
    $nome_PCategoria = '';
    $status_PCategoria = '';

    $id_PCategoria = $_POST['txtID'];

    try

    {

        $sql = $conn->query('select * from PCategoria ');

        foreach($sql as $linha)
        {

            echo "
                <option value='$linha[0]'>$linha[1]</option>

            ";
        }

    }
    catch(PDOException $e)
    {

        echo $e->getMessage();

    }

?>
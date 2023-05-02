<option value=''>-> selecione Categoria <-</option>
<?php

    include_once('Conexao.php');
    try
    {
        $sql = $conn->query('select * from PCategoria ');

        foreach($sql as $linha)
        {
            echo "
                <option value='$linha[0]'>$linha[2]</option>
            ";
        }

    }
    catch(PDOException $e)
    {

        echo $e->getMessage();

    }
?>
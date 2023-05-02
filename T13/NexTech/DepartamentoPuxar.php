<option value=''>-> Departamento <-</option>
<?php

    include_once('Conexao.php');
    try
    {
        $sql = $conn->query('select * from Funcionario ');

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
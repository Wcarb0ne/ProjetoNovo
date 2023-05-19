<option value='' text-align: center;>  Selecione Departamento  </option><p text-align: center;></p>

<?php
    include_once('Conexao.php');
    try
    {
        $sql = $conn->query('select * from Departamento ');

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
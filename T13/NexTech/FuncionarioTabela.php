<form  id=""action="" class="form-control mb-2">
        <table id="tabelaDados" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Data</th>
                    <th>Nome</th>
                    <th>Departamento</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>

            <?php
            include_once ('Conexao.php');
            try
            {
                $sql = $conn->query('select * from Funcionario');
                foreach($sql as $row)
                {
                    echo "
                        <tr>
                            <td>$row[0]</td>
                            <td>$row[2]</td>
                            <td>$row[3]</td>
                            <td>$row[15]</td>
                            <td>$row[1]</td>
                        </tr>
                    ";
                }
            }
            catch(PDOException $ex)
            {
                echo $ex->getMessage();
            }
            ?>
            </tbody>
        </table>

        <script>
        $(document).ready(function () {
            $('#tabelaDados').DataTable();
        });
    </script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>

    </form>

   



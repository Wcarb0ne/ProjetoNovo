<?php
session_start();




if($_SESSION &&($_SESSION['idFuncionario'])&& isset($_SESSION['nomeFuncionario'])&& isset($_SESSION['loginFuncionario']) && isset($_SESSION['idDepartamentoFuncionario']))

{
    $idFuncionario=$_SESSION['idFuncionario'];
    $nomeFuncionario=$_SESSION['nomeFuncionario'];
    $loginFuncionario=$_SESSION['loginFuncionario'];
    $id_Departamento_Funcionario = $_SESSION['idDepartamentoFuncionario'];
    
}
else{
    //print_r($_SESSION);

    header('location:index.html');
}
?>

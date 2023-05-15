<?php
session_start();

if($_SESSION &&($_SESSION['idFuncionario'])&& isset($_SESSION['nomeFuncionario'])&& isset($_SESSION['loginFuncionario']) && isset($_SESSION['departamentoFuncionario']))

{
    $idFuncionario=$_SESSION['idFuncionario'];
    $nomeFuncionario=$_SESSION['nomeFuncionario'];
    $loginFuncionario=$_SESSION['loginFuncionario'];
    $id_Departamento_Funcionario = $_POST['departamentoFuncionario'];
    
}
else{
    header('location:index.html');
}
?>

<?php
session_start();

if($_SESSION &&($_SESSION['idFuncionario'])&& isset($_SESSION['nomeFuncionario'])&& isset($_SESSION['loginFuncionario']))

{
    $idFuncionario=$_SESSION['idFuncionario'];
    $nomeFuncionario=$_SESSION['nomeFuncionario'];
    $loginFuncionario=$_SESSION['loginFuncionario'];
}
else{
    header('location:index.php');
}
?>

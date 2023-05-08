<?php
session_start();

if($_SESSION && ($_SESSION['idCliente'])&& isset($_SESSION['nomeCliente'])&& isset($_SESSION['loginCliente']))

{
    $idUsuario=$_SESSION['idCliente'];
    $nomeUsuario=$_SESSION['nomeCliente'];
    $loginUsuario=$_SESSION['loginCliente'];
}
else{
    header('location:_Login.php');
}
?>


<?php
session_start();

if($_SESSION &&($_SESSION['idCliente'])&& isset($_SESSION['nomeCliente'])&& isset($_SESSION['loginCliente']))

{
    $idParceiro=$_SESSION['idCliente'];
    $nomeParceiro=$_SESSION['nomeCliente'];
    $loginParceiro=$_SESSION['loginCliente'];
}
else{
    header('location:Parceiro_Sistema.php');
}
?>

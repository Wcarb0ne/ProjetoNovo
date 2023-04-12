<?php
session_start();

if($_SESSION &&($_SESSION['idParceiro'])&& isset($_SESSION['nomeParceiro'])&& isset($_SESSION['loginParceiro']))

{
    $idParceiro=$_SESSION['idParceiro'];
    $nomeParceiro=$_SESSION['nomeParceiro'];
    $loginParceiro=$_SESSION['loginParceiro'];
}
else{
    header('location:index.php');
}
?>

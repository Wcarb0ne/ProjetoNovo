<?php
session_start();

if($_SESSION &&($_SESSION['idCliente'])&& isset($_SESSION['nomeCliente'])&& isset($_SESSION['loginCliente']))

{
<<<<<<< Updated upstream
    $idCliente=$_SESSION['idCliente'];
    $nomeCliente=$_SESSION['nomeCliente'];
    $loginCliente=$_SESSION['loginCliente'];
=======
    $idParceiro=$_SESSION['idCliente'];
    $nomeParceiro=$_SESSION['nomeCliente'];
    $loginParceiro=$_SESSION['loginCliente'];
>>>>>>> Stashed changes
}
else{
    header('location:Cliente_Usuario.php');
}
?>


<?php
session_start();

if($_SESSION && ($_SESSION['idUsuario'])&& isset($_SESSION['nomeUsuario'])&& isset($_SESSION['loginUsuario'])&& isset($_SESSION['TipoUsuario']))

{
    $idUsuario=$_SESSION['idUsuario'];
    $nomeUsuario=$_SESSION['nomeUsuario'];
    $loginUsuario=$_SESSION['loginUsuario'];
    $TipoUsuario=$_SESSION['TipoUsuario'];
    
    if($_SESSION['TipoUsuario'] = "Cliente"){
        include_once('Cliente_header.php');
    }
    else if ($_SESSION['TipoUsuario'] = "Parceiro"){
        include_once('Parceiro_header.php');
    }
    else{
        include_once('_header.php');
    }
}

else{
    header('location:_Login.php');
}
?>


<?php
include_once('www_autenticar.php');


if($_SESSION && ($_SESSION['idUsuario'])&& isset($_SESSION['nomeUsuario'])&& isset($_SESSION['loginUsuario'])&& isset($_SESSION['TipoUsuario']))

{
    $idUsuario=$_SESSION['idUsuario'];
    $nomeUsuario=$_SESSION['nomeUsuario'];
    $loginUsuario=$_SESSION['loginUsuario'];
   
    if($_SESSION['TipoUsuario'] = "Cliente"){
        include_once('Cliente_header.php');
    }
    else if ($_SESSION['TipoUsuario'] = "Parceiro"){
        include_once('Parceiro_header');
   
}
else{
    include_once('_header.php');
}
    }
?>

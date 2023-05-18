<?php

session_start();

if($_SESSION && ($_SESSION['idUsuario'])&& isset($_SESSION['nomeUsuario'])&& isset($_SESSION['loginUsuario'])&& isset($_SESSION['headerUsuario'])&& isset($_SESSION['ImgUsuario']))

{
    $idUsuario=$_SESSION['idUsuario'];
    $nomeUsuario=$_SESSION['nomeUsuario'];
    $loginUsuario=$_SESSION['loginUsuario'];
    $TipoUsuario=$_SESSION['headerUsuario'];
    $ImgUsuario= $_SESSION['ImgUsuario'];
    
    if($TipoUsuario == "Cliente"){
        include_once('Cliente_header.php');
    }
    else if ($TipoUsuario == "Parceiro"){
        include_once('Parceiro_header.php');
    }
   
}

else{
    header('location:_Login.php');
}
?>


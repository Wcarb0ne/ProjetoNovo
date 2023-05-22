<?php



session_start();

if($_SESSION && ($_SESSION['idUsuario'])&& isset($_SESSION['nomeUsuario'])&& isset($_SESSION['loginUsuario'])&& isset($_SESSION['TipoUsuario']))

{
    $idUsuario=$_SESSION['idUsuario'];
    $nomeUsuario=$_SESSION['nomeUsuario'];
    $loginUsuario=$_SESSION['loginUsuario'];
   
    if($_SESSION['TipoUsuario'] = "Cliente"){
        include_once('_Home.php');
    }
    else if ($_SESSION['TipoUsuario'] = "Parceiro"){
        include_once('_Home.php');
    }
}
else{
    include_once('_Home_deslogado.php');


}




?>
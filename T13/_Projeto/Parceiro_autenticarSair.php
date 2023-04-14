<?php
session_start();
session_unset();
session_destroy();
header('Location:Parceiro_index.php');
?>
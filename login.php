<?php

  if (!isset($_COOKIE['login'])) {
    include 'login.html';
  }

    function criarSessaoCliente(){
    session_start();
    $_SESSION["login"]=$_POST["login"];
    header(‘Location:areadocliente.php’);
exit;
  }


?>

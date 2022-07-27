<?php

  if  (isset($_POST['login'])) {
      setcookie('login', $_POST['login']);
  }


  if (!isset($_COOKIE['login'])) {
    include 'login.html';

    function criarSessaoCliente(){
    session_start();
    $_SESSION["login"]=$_POST["login"];
    header(‘Location:areacliente.php’);
exit;
  }


?>

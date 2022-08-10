<?php

    include 'login.html';


  if  (isset($_SESSION['login'])) {
      echo "Você está na área de cliente";
      setcookie('login', $_POST['login']);
  }


  if (!isset($_SESSION['login'])) {
  	echo "Você não está autorizado(a) a acessar esta página. Faça o login.";
}


?>

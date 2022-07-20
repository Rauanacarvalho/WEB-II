<?php

  if  (isset($_POST['melhor_dorama'])) {
      setcookie('melhor_dorama', $_POST['melhor_dorama']);
  }


  if (!isset($_COOKIE['melhor_dorama'])) {
    include 'enquete.html';
  }else{
    echo "Você já votou! Não é possível votar novamente... A menos que você apague o cookie do seu navegador rsrs";
  }

?>

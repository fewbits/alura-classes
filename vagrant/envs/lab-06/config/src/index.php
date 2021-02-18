<?php

  echo "Testando conexao... <br /> <br />";

  $servername = "192.168.33.11";
  $username = "phpuser";
  $password = "pass";

  $conn = new mysqli($servername, $username, $password);

  if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
  }

  echo "Conectado ao MySQL.";

?>
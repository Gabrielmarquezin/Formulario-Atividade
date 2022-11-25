<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];

//CONEXAO COM BANCO DE DADOS
$mysqli = new mysqli("localhost","root","","formulario");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
    echo 'conexao estabelicida';
}

//QUERYS


$sql = "SELECT nome, senha FROM formulario WHERE nome = '$nome' and senha = '$senha'";
$$result = $mysqli->query($sql);

if ($result->num_rows > 0){
      // output data of each row
     echo 'nao deu';
}else{
    echo "0 result"
}


$mysqli->close();
echo 'ola mundo';
?>
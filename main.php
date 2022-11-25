<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];

//CONEXAO COM BANCO DE DADOS
$mysqli = new mysqli("localhost","root","","formulario");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
    echo 'conexao estabelicida';
}

//QUERYS
$sql = "SELECT nome, senha FROM usuarios WHERE nome = '$nome' and senha = '$senha'";
$sqlValues = "INSERT INTO usuarios VALUES (0, '$nome', '$senha')";

$res = mysqli_query($mysqli, $sql);
$linhas = mysqli_affected_rows($mysqli);

if($linhas == 1){
    echo('<br> REGISTRO JA EXISTE');
}else{
   mysqli_query($mysqli, $sqlValues);
   echo '<br> USUARIO CADASTRADO COM SUCESSO';
}

$mysqli->close();

?>
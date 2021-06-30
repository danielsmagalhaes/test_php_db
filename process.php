<?php

include ("conection.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

// echo "Nome: $nome <br>";
// echo "E-mail: $email <br>";

$result_user = "INSERT INTO usuarios (nome, email, criacao) VALUES ('$nome', '$email', NOW())";

$user_db = mysqli_query($connection, $result_user) or die (mysqli_error($connection));
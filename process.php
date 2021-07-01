<?php
  session_start();
  include_once ("connection.php");

  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

  // echo "Nome: $nome <br>";
  // echo "E-mail: $email <br>";

  $result_user = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

  $user_db = mysqli_query($conn, $result_user) or die (mysqli_error($conn));

  if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:blue'>Usuário cadastrado com sucesso!</p>";
    header("Location: index.php");
  } else {
    $_SESSION['msg'] = "<p style='color:red'>Usuário não foi cadastrado.</p>";
    header("Location: index.php");
  };
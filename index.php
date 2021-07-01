<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>
<body>
  <h1>Cadastrar usuário</h1>
  <?php
    if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    };
  ?>
  <form method="post" action="process.php">
    <label for="">Nome: </label>
    <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
    <label for="">E-mail: </label>
    <input type="email" name="email" placeholder="Digite o seu e-mail"><br><br>

    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>
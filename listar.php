<?php
  session_start();
  include_once('connection.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar</title>
</head>
<body>
  <h1>Listar usuários</h1>
  <?php
    // if (isset($_SESSION['msg'])) {
    //   echo $_SESSION['msg'];
    //   unset($_SESSION['msg']);
    // };
    
    // Receber o número da página
    $page_current = filter_input (INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
    $page = (!empty($page_current)) ? $page_current : 1;

    // Setar a quantidade de itens por página
    $qtd_result_pg = 2;

    $result_users = "SELECT * FROM usuarios";
    $result_users_db = mysqli_query($conn, $result_users);
    while ($row_usuario = mysqli_fetch_assoc($result_users_db)) {
      echo "ID: " . $row_usuario ['id'] . "<br>";
      echo "Nome: " . $row_usuario ['nome'] . "<br>";
      echo "E-mail: " . $row_usuario ['email'] . "<br><hr>";
    }
  ?>
  
</body>
</html>
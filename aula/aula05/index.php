<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exemplo Prático em PHP</title>
</head>
<body>
  <?php
  require_once "ContaBanco.php";

  $c1 = new ContaBanco();

  var_dump($c1)
  ?>
</body>
</html>
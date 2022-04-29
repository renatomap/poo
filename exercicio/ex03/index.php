<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Ex 03 - Métodos Getters, Setters e Construct</title>
</head>
<body>
  <?php
  require_once "Caderno.php";

  /* Método Get e Set - */
  // $cad1 = new Caderno;
  // $cad1->setModelo("Universitário");
  // $cad1->setFolha(160);
  // $cad1->setTamanho(20.5, 30.8);
  // var_dump($cad1);
  // echo "O caderno é do modelo {$cad1->getModelo()}, com uma {$cad1->getFolha()} folha e com {$cad1->getTamanho()} de tamanho. "

  /* Método Construct */
  $cad1 = new Caderno("Universitário", 160, 20.5);
  $cad2 = new Caderno("Infantil", 100, 10.5);
  var_dump($cad1);
  var_dump($cad2);
  ?>
</body>
</html>
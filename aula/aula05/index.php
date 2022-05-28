<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exemplo Prático em PHP</title>
</head>
<body>
  <?php
  require_once "ContaBanco.php";

  $p1 = new ContaBanco();
  $p2 = new ContaBanco();

  $p1->abrirConta("CC");
  $p1->setnumConta(1111);
  $p1->setDono("Jubileu");
  $p2->abrirConta("CP");
  $p2->setnumConta(2222);
  $p2->SetDono("Creuza");

  echo "<hr>";
  echo "CONTA DO JUBILEU";
  $p1->depositar(300);
  // $p1->sacar(338);
  $p1->pagarMensal();

  echo "CONTA DA CREUZA";
  $p2->depositar(500);
  $p2->sacar(100);
  $p2->pagarMensal();

  var_dump($p1);
  var_dump($p2);
  ?>
</body>
</html>
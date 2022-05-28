<html>
  <head>
    <title>Estudando Herança - PHP</title>    
  </head>
  <pre><body>
    <?php
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome('João');
    print_r($p1);
    $p2->setNome('Maria');
    print_r($p2);
    $p3->setNome('Pedro');
    print_r($p3);
    $p4->setNome('Ana');
    print_r($p4);

    ?>
  <pre></body>
</html>
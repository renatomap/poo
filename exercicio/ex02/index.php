<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Ex aula02</title>
</head>
<body>
    <?php
    require_once "Controle.php";

    $control1 = new Controle;
    $control1->cor = "preto";
    $control1->tamanho = 10;
    $control1->botao = true;
    $control1->carga = 0;
    $control1->funcionar();
    print_r($control1);

    $control2 =new Controle;
    $control2->cor = "cinza";
    $control2->tamanho = 0.8;
    $control2->botao = false;
    $control2->carga = 100;
    $control2->funcionar();
    print_r($control2);

    ?>
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - Criando Classes e Objetos em PHP - POO</title>
    </head>
    <body>
        <?php
        require_once 'Caneta.php';

        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampar();
        var_dump($c1);

        $c2 = new Caneta;
        $c2->cor = "Verde";
        $c2->carga = 80;
        $c2->tampar();
        var_dump($c2);


        // print_r($c1);
        ?>
    </body>
</html>
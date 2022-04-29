<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 - Métodos Getters, Settres e Construtor- POO</title>
    </head>
    <body>
        <?php
        require_once 'Caneta.php';

        /* Métodos Construtor */
        $c1 = new Caneta("BIC", "Preto", 0.5);
        $c2 = new Caneta("Platec", "Azul", 1.5);
        
        /* Métodos Get e Set */
        // $c1 = new Caneta();
        // $c1->setModelo("BIC");
        // $c1->setPonta(0.4);
        // echo "Eu tenho uma caneta {$c1->getModelo()} com uma ponta {$c1->getPonta()}. ";
        echo "<br>";
        
        var_dump($c1);
        var_dump($c2);

        ?>
    </body>
</html>
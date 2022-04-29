<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03 - Visibilidade de Atributos e Métodos - POO</title>
    </head>
    <body>
        <?php
        require_once 'Caneta.php';

        $c1 = new Caneta;
        $c1->modelo = "BIC cristal";
        $c1->cor = "Azul";
        // atributo privado - $c1->ponta = 0.3; 
        // atributo protegido - $c1->carga = 80;
        
        $c1->rabiscar();
        $c1->tampar();
        var_dump($c1);
        
        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function raiz_cubica($numero){
            return pow($numero, 1/3); // Elevar número a la potencia 0.333333333
        }
        
        $raiz_quadrada = sqrt(92); 
        $numero = 92;
        $raiz = raiz_cubica($numero);
        echo "A raiz cubica de $numero é $raiz";
        echo "A raiz quadrada de $numero é $raiz_quadrada";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
    date_default_timezone_set("America/sao_Paulo");
    echo"Hoje é o dia " .date("d/m/y ");
    echo "E a hora é " .date("G:i:s T");
    
    ?>
</body>
</html>
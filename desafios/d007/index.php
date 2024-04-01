<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $min = 1_380.60;
        $salario = $_GET['num'] ?? 1380.60;

    ?>
    
    <main>

        <h1>Informe seu Salário!</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Sálario(R$)</label>
            <input type="number" name="num" id="num">
            <input type="submit" value="Calcular"> 
            <p>Considerando o salário minimo de <strong>$<?=number_format($min, 2, ",", ".")?></strong></p> 
 
        </form>
        
    </main>


    <section>
        <h2>Resultado Final!</h2>
        <?php 
        
            $v1 = intdiv($salario, $min); 
            $resto = $salario % $min;
            echo "Quem recebe um salário de <strong>R$".number_format($salario, 2, ",", ".")."</strong> ganha <strong>$v1</strong> salários minímos + <strong>R$".number_format($resto, 2, ",", ".")."</strong>";
        ?>
    </section>
    
</body>
</html>
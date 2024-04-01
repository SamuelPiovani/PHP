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
        $numero1 = $_GET["v1"]  ?? 0;
        $peso = $_GET["pes"] ?? 0;
        $numero2 = $_GET["v2"] ?? 0;
        $peso2 = $_GET["pes2"] ?? 0;
    ?>
    <main>
        <h1>Medidas Aritiméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num1"> 1°Valor:</label>
            <input type="number" name="v1" id="v1" min="1" required value="<?=$numero1?>">
            <label for="peso1"> 1°Peso</label>
            <input type="number" name="pes" id="pes" value="<?=$peso?>">
            <label for="num2">2°Valor</label>
            <input type="number" name="v2" id="v2" min="1" required value="<?=$numero2?>">
            <label for="peso2">2°Peso:</label>
            <input type="number" name="pes2" id="pes2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Calculo das Medidas</h2>
        <?php 
            $media_aritimetica = ($numero1 + $numero2) / 2;
            $media_ponderada = ($numero1 * $peso + $numero2 * $peso2) / ($peso + $peso2);
            //$md = $numero1 * $peso;
            //$md2 = $numero2 * $peso2;
            //$pes = $peso + $peso2;
            //$media_ponderada = ($md + $md2) / $pes;
            echo "<p>Analisando os valores <strong>$numero1 e $numero2</strong>:<p>";
            echo "<ul>";
            echo "<li>A <strong>Média Aritimética Simples</strong> é: <strong>".number_format($media_aritimetica, 2, ",",".")."</strong></li>";
            echo "<li>A <strong>média Ponderada</strong> com pesos <strong>$peso</strong> e <strong>$peso2</strong> é: <strong>".number_format($media_ponderada, 2, ",",".")."</strong></li>";
            echo"</ul>";

        ?>
    </section>
</body>
</html>
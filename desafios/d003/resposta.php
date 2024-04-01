<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
        $dolar = 4.96;
        $din = $_REQUEST["num"] ?? 0;
        $conv = $din / $dolar;
        echo "O seus ".numfmt_format_currency($padrao,$din,"BRL")." equivale a ".numfmt_format_currency($padrao, $conv, "USD");

        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Gerador de números aleatórios!</h1>
        <?php 
        $ale = mt_rand(0,100);
        echo"Gerando números aleatórios de 0 a 100";
        echo"<br>O valor gerado foi $ale";
        ?>
    </main>
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro Número aleatório</button>
</body>
</html>
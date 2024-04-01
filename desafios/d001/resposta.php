<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado Final!</h1>
    <main>
        <p>
            <?php 
                $n = $_REQUEST["num"];
                $a = $n - 1;
                $s = $n + 1;
                echo "O número escolhido foi <strong>$n</strong>";
                echo "<br>O <em>antecessor</em> é $a";
                echo"<br>O <em>sucessor</em> é $s";
            ?>

        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>    
</body>
</html>

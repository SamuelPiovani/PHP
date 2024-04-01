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
        <?php 
            $ano_atual = date('Y')-1;
            $ano = $_GET["idade"] ?? $ano_atual;
            $id = $_GET["ano"] ?? 2000;

            $idade = $ano - $id;
            
        ?>
        <main>
            <h1>Calculando sua Idade!</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="ano">Em que ano você nasceu?</label>
                <input type="number" name="ano" id="ano" value="<?=$id?>" min="1900" max="<?=($ano_atual -1)?>">
                <label for="idade">Quer saber sua idade em que ano?(Atualmente estamos em 2024)</label>
                <input type="number" name="idade" id="idade" value="<?=$ano?>" min="1900" >
                <input type="submit" value="Qual será minha idade?">
            </form>

        </main>

        <section>
            <h2>Resultado!</h2>
            <?php 
                echo"Quem nasceu em <strong>$id</strong> vai ter <strong>$idade</strong> anos em <strong>$ano</strong>";
            ?>

        </section>
    </main>
</body>
</html>
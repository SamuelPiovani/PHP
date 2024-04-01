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
        $preco = $_GET['num'] ?? 0;
        $porcen = $_GET['porcen'] ?? 0;
        $novo = ($preco * $porcen) / 100;
        $novo_preco = $preco + $novo
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <H1>REAJUSTADOR DE PREÇO!</H1>
            <label for="num">Preço do Produto (R$)</label>
            <input type="number" name="num" id="num" value="<?=$preco?>" step="0.01" min='0.10'>
            <label for="porcen">Qual será o <strong>porcentual do reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="porcen" id="porcen" value= "<?=$porcen?>" min='' step="1" oninput="mudaValor()" value=<?=$porcen?>>
            <input type="submit" value="Calcular">
        
    
        </form>

    </main>
    <section>
        <h2>Resultado do Reajuste!</h2>
        <?php 
            echo "O Produto qua custava <strong>R$".number_format($preco, 2, ",",".")."</strong>, com <strong>$porcen%</strong> de aumento passará a custar <strong>R$".number_format($novo_preco, 2, ",", ".")."</strong>";
        
        ?>
    </section>
    <script>
        mudaValor()
        function mudaValor() {
            p.innerText = porcen.value;
        }
    </script>
</body>
</html>
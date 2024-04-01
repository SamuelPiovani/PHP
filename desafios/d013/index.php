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
        $dinheiro = $_GET['din'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="$_GET">
            <label for="din">Qual valor deseja sacar? <strong>(R$)</strong></label>
            <input type="number" name="din" id="din"  step="5" required value="<?=$dinheiro?>"> 
            <p>Notas disponiveis R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">  

        
        </form>
        
    </main>

    <section>
        <h2>Saque de <strong>R$<?=number_format($dinheiro, 2, ",",".")?></strong> Realizado!</h2>
        <?php 
            $cem = intdiv($dinheiro, 100); 
            $resto_cem = $dinheiro % 100;
            $cinquenta = intdiv($resto_cem, 50);
            $resto_cinquenta = $resto_cem % 50;
            $dez = intdiv($resto_cinquenta, 10);
            $resto_dez = $resto_cinquenta % 10;
            $cinco = intdiv($resto_dez, 5);
            ?>


            <ul>
                <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$cem?></li>
                <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$cinquenta?> </li>
                <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$dez?></li>
                <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$cinco?></li>
            </ul>
        
    </section>
    
</body>
</html>
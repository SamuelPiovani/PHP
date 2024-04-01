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
        $segundos = $_GET['seg'] ?? 0;
    ?>

    <main>
    <h1>Calculadora do Tempo!</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual o total de segundos?</label>
            <input type="number" name="seg" id="seg" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>

    </main>

    <section>
        <h2>Totalizando Tudo!</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($segundos, 0, ",", ".")?></strong> segundos equivalem a um total de:</p>
        <?php 
            $semana = intdiv($segundos , 604800);
            $resto_semana = $segundos % 604800;
            $dia =  intdiv($resto_semana, 86400);
            $resto_dia = $resto_semana % 86400;
            $horas = intdiv($resto_dia, 3600);
            $resto_horas = $resto_dia % 3600;
            $min = intdiv($resto_horas, 60);
            $seg = $resto_horas % 60;
            echo "<ul>";
            echo "<li>Semanas: $semana </li>";
            echo "<li>Dias: $dia </li>";
            echo "<li>Horas: $horas </li>";
            echo "<li>Minutos: $min </li>";
            echo "<li>Segundos: $seg</li>";
            echo "</ul>";
        
        ?>
    </section>
    

    
</body>
</html>
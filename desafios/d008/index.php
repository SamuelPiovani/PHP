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
            
            $numero = $_GET["num"] ?? 0;

    ?>
    <main>
        <h1>Informe um número!</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>"method="get">
            <label for="num">Número:</label>
            <input type="number"name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
        
    <section>
        <h2>RESULTADOS!</h2>
        
        <?php 
            
            //essa função tmb serve
            //function raiz_cubica($numero){
                //return pow($numero, 1/3);

            //}
            //$cubica = raiz_cubica($numero);
            echo"<p>Analisando o número <strong>$numero</strong>, temos:</p>";
            $cubica = $numero **(1/3);
            $quadrada = sqrt($numero);
            echo "<ul>";
            echo "<li>Raiz quadrada é <strong>".number_format($quadrada, 3, ",", ".")."</li></strong>";
            echo "<li>Raiz cúbica é <strong>".number_format($cubica, 3, ",", ".")."</li></strong>";
            echo "</ul>";
        
        ?>
        
    </section>
</body>
</html>
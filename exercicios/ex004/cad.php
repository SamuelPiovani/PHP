<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
         <h1>Resultado do processamento!</h1>
    </header>
    <main>
        <?php 
        $n = $_GET["Nome"] ?? "sem nome";
        $s = $_GET["Sobrenome"] ?? "desconhecido";
        echo"<p>É UM PRAZER CONHECER VOCÊ <strong>$n $s</strong>!!!"
        ?>
        <p><a href="javascript:history.go(-1)"><-Voltar</a></p>
    </main>    
</body>
</html>
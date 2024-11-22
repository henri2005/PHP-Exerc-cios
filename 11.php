<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Posição de caracteres</title>
</head>
<body>
    <form action="./11.php" method="get">
        <p>Digite uma palavra: <input type="text" name="strings" id="strings"></p>
        <button type="submit">APERTE</button>
    </form>

    <?php 
        $palavra = $_GET['strings'];
        
        $NumLetraPalavra = strlen($palavra);
        echo 'String -> '. $palavra . '<br>';
        echo 'Total caracteres -> ' . $NumLetraPalavra . '<br>';
        for ($i= 1; $i <= $NumLetraPalavra; $i++) { 
            echo $i . ' ';
        }
    ?>
</body>
</html>
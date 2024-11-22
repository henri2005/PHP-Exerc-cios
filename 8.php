<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 - Valores Crescentes</title>
</head>
<body>
    <form action="./8.php" method="get">
        <p>Insira um valor: <input type="number" name="valor" id="valor"></p>
        <button type="submit">ORDENAR</button>
    </form>

    <?php 
        $valor = $_GET['valor'];

        for ($i=0; $i <= $valor; $i++) { 
            echo $i . ' ';
        }
    ?>
</body>
</html>
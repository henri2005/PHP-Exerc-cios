<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 - Fatoração</title>
</head>
<body>
    <form action="./9.php" method="get">
        <p>Insira um valor para ser fatorado: <input type="number" name="valor" id="valor"></p>
        <button type="submit">ORDENAR</button>
    </form>

    <?php 
        $valor = $_GET['valor'];
        $valorF = 1; // Inicializando o valorF como 1 para a multiplicação funcionar corretamente.
        for ($i = $valor; $i > 1; $i--) {
            $valorF *= $i; // Multiplicando o valor atual de valorF pelo valor de $i.
        }
        echo $valorF;
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Valores Crescentes</title>
</head>
<body>
    <form action="./2.php" method="get">
        Insira um valor: <input type="number" name="n1" id="n1">
        Insira outro valor: <input type="number" name="n2" id="n2">
        <button type="submit">LER VALORES</button>
    </form>

    <?php 
        $valorA = $_GET['n1'];
        $valorB = $_GET['n2'];

        if ($valorA > $valorB) {
            $maiornumero = $valorA;
            $menornumero = $valorB;
            echo $menornumero . ', ' . $maiornumero;
        } else if($valorB > $valorA){
            $maiornumero = $valorB;
            $menornumero = $valorA;
            echo $menornumero . ', ' . $maiornumero;
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Operações Matemáticas</title>
</head>
<body>
    <form action="./5.php" method="get">
        <p>Digite um número: <input type="number" name="n1" id="n1"></p>
        <p>Digite outro número: <input type="number" name="n2" id="n2"></p>
        <p><select name="operacoes" id="operations">
            <option value="+">ADIÇÃO</option>
            <option value="-">SUBTRAÇÃO</option>
            <option value="*">MULTIPLICAÇÃO</option>
            <option value="/">DIVISÃO</option>
        </select></p>
        <button type="submit">CALCULAR</button>
    </form>

    <?php 
        $numero1 = $_GET['n1'];
        $numero2 = $_GET['n2'];
        $operacao = $_GET['operacoes'];

        switch ($operacao) {
            case '+':
                $resultado = $numero1 + $numero2;
                echo $numero1 . " + " . $numero2 . " = " . $resultado;
                break;
            case '-':
                $resultado = $numero1 - $numero2;
                echo $numero1 . " - " . $numero2 . " = " . $resultado;
                break;
            case '*':
                $resultado = $numero1 * $numero2;
                echo $numero1 . " x " . $numero2 . " = " . $resultado;
                break;
            case '/':
                $resultado = $numero1 / $numero2;
                echo $numero1 . " / " . $numero2 . " = " . $resultado;
                break;
        }
    ?>
</body>
</html>
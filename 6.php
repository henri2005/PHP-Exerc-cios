<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 - Descontos de um Produto</title>
</head>
<body>
    <form action="./6.php" method="get">
        <p>Valor Total: <input type="number" name="valor" id="valor"></p>
        <p>Tipo de cliente: <select name="clientetipo" id="clientetipo">
            <option value="1">CLIENTE COMUM</option>
            <option value="2">FUNCIONÁRIO</option>
            <option value="3">VIPS</option>
        </select></p>
        <button type="submit">CALCULAR</button>
    </form>

    <?php 
        $valorproduto = $_GET['valor'];
        $cliente = $_GET['clientetipo'];

        switch ($cliente) {
            case '1':
                echo 'O valor final do produto é ' . $valorproduto;
                break;
            case '2':
                $valorproduto = $valorproduto - ($valorproduto*0.1);
                echo 'O valor final do produto é ' . $valorproduto;
                break;
            case '3':
                $valorproduto = $valorproduto - ($valorproduto*0.05);
                echo 'O valor final do produto é ' . $valorproduto;
                break;
        }
    ?>
</body>
</html>
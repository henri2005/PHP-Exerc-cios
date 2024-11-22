<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <h3>Exercício 1 - Lendo valores de números</h3>
    <form action="./1.php" method="get">
        <input type="number" name="número" id="numero">
        <button type="submit">LER</button>
    </form>

    <?php 
        $valor = $_GET['número'];
        
        if ($valor == 0) {
            echo '<p>Igual a Zero</p>';
        } else if ($valor > 0) {
            echo '<p>Valor positivo</p>';
        } else{
            echo '<p>Valor negativo</p>';
        }
    ?>
</body>
</html>
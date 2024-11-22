<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Valores Intermediários</title>
</head>
<body>
    <form action="./10.php" method="get">
        <p>Insira um valor: <input type="number" name="valor1" id="valor1"></p>
        <p>Insira outro valor: <input type="number" name="valor2" id="valor2"></p>
        <button type="submit">MOSTRAR VALORES INTERMEDIÁRIOS</button>
    </form>

    <?php 
        $primeiroValor = $_GET['valor1'];
        $segundovalor = $_GET['valor2'];
        
        $medianos = $primeiroValor + 1; // Já iniciando a variável $medianos como um valor acima do primeiro valor informado
        while($medianos < $segundovalor){
            echo $medianos . '<br>';
            $medianos++; // Incrementa $medianos para evitar loop infinito
        }
    ?>
</body>
</html>
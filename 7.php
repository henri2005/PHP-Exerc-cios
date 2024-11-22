<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Salário</title>
</head>
<body>
    <form action="./7.php" method="get">
        <p>Salário do Funcionário : <input type="number" name="salario" id="salario"></p>
        <button type="submit">CALCULAR</button>
    </form>

    <?php 
        $salarioFuncionario = $_GET['salario'];

        switch ($salarioFuncionario) {
            default:

                $salarioFuncionario = $salarioFuncionario + ($salarioFuncionario*0.5);
                echo 'Reajuste do salário gera um novo valor de ' . $salarioFuncionario;
                break;

            case $salarioFuncionario > 300:

                $salarioFuncionario = $salarioFuncionario + ($salarioFuncionario*0.3);
                echo 'Reajuste do salário gera um novo valor de ' . $salarioFuncionario;
                break;
                
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Calcular Média de Aluno</title>
</head>
<body>
    <form action="./3.php" method="get">
        <p>Primeira nota: <input type="number" name="n1" id="n1"></p>
        <p>Segunda nota: <input type="number" name="n2" id="n2"></p>
        <p>Terceira nota: <input type="number" name="n3" id="n3"></p>
        <button type="submit">CALCULAR MÉDIA</button>
    </form>

    <?php 
        $notas = [
            $nota1 = $_GET['n1'],
            $nota2 = $_GET['n2'],
            $nota3 = $_GET['n3'],
        ];

        $media = ($notas[0] + $notas[1] + $notas[2])/3;

        if ($media >= 6) {
            echo 'APROVADO <br>';
        } else {
            echo 'REPROVADO <br>';
        }

        echo 'N1: ' . $notas[0] . ' ||  N2: ' . $notas[1] . ' || N3: ' . $notas[2] . ' || MÉDIA: ' . $media;
    ?>
</body>
</html>